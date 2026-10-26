# Architecture and Technical Guardrails

## Target topology

```text
Windows desktop client ─┐
                        ├── Local Wi-Fi/LAN ──> Dedicated host
macOS desktop client ───┘                         ├── Laravel 11
                                                  ├── PHP runtime + web server
                                                  └── MySQL
```

The host is the single source of truth. Clients must never write directly to MySQL.

## Required request path
1. Desktop app opens the configured host address, such as `http://192.168.1.50`.
2. Requests reach Laravel on the host.
3. Laravel performs authentication, authorization, validation, and business logic.
4. Laravel reads/writes MySQL.
5. The result returns to the client.

The example IP is illustrative only. Do not hard-code it. The host address must be configurable and documented.

## Architecture decision gate: choose the client delivery method

### Option A — Desktop shell around the existing LAN-hosted Blade app
- The host serves the existing Laravel/Blade application.
- The desktop app opens the host URL.
- Advantages: highest reuse of Blade, routes, sessions, and server-rendered flows; minimal application rewrite.
- Risks: desktop shell compatibility, cookie/session behavior, file downloads/uploads, external links, and host discovery need testing.
- Validate whether NativePHP Desktop supports this pattern cleanly. If not, compare a minimal Electron or Tauri shell rather than forcing NativePHP into an unsuitable role.

### Option B — NativePHP client plus central Laravel API
- Each client runs a packaged NativePHP application.
- Client UI communicates with a central Laravel API.
- Advantages: client can provide native integrations and a bundled PHP runtime.
- Risks: likely requires API endpoints and a client/server boundary; current Blade routes may not work as a thin client unchanged; authentication and session model may need adaptation.
- Do not implement this without mapping existing routes and determining which are page routes versus data/API routes.

## Host requirements
- Dedicated host has a stable DHCP reservation or static LAN address.
- Laravel is served by a production-appropriate local web server/runtime, not an exposed development server.
- MySQL listens only where needed; preferably bound to loopback if only Laravel on the same host connects to it.
- Firewall allows inbound application traffic only from the trusted local network.
- MySQL credentials stay on the host.
- Use a least-privilege database account for the application.
- Host startup, service restart, logs, backups, and restore procedure are documented.
- The host should not require public DNS or external services for core functionality.

## Client requirements
- Host URL is configurable without rebuilding the installer.
- Client checks reachability and displays useful offline/host-unavailable feedback.
- Do not report success for a request that did not reach Laravel or whose result is unknown.
- Never embed `.env`, app keys, database passwords, or privileged API secrets in the client package.
- Handle authentication expiry and session cleanup safely.
- File uploads/downloads must use the host's Laravel routes and authorized storage paths.

## Data and migrations
- Keep MySQL as the shared database unless a documented decision changes it.
- Do not migrate to SQLite merely because NativePHP supports it; local SQLite per client would create separate databases and does not automatically synchronize.
- Back up the host database before schema changes or data conversion.
- Use Laravel migrations and test both a clean install and an upgrade from the current schema.
- Preserve existing production data.

## Security checklist
- Authentication required for protected pages and operations.
- Authorization enforced server-side for every protected operation.
- CSRF protection retained for cookie/session-based web flows.
- Validate and authorize file uploads/downloads.
- No broad CORS rules unless an API architecture specifically requires them.
- No direct MySQL access from client machines.
- Restrict host firewall rules to the LAN and needed port.
- Set production `APP_DEBUG=false`.
- Use secure session configuration appropriate to the chosen client delivery method.
- Consider HTTPS on the LAN if the data is sensitive; if using plain HTTP on a trusted LAN, document the risk and compensating controls.

## Architecture proof-of-concept exit criteria
Before broad migration work begins, demonstrate:
1. A Windows client can open the app and authenticate against the host.
2. A second client can do the same.
3. Both clients see a record created by the other.
4. A client cannot access MySQL directly.
5. The app works without public internet.
6. Host-unavailable and reconnect behavior is understandable.
7. File uploads/downloads and session behavior work.
8. The selected packaging method works on each target OS, or the platform-specific build plan is documented.
