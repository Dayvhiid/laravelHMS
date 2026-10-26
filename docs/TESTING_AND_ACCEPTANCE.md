# Testing and Acceptance Plan

## Baseline checks
Record the existing state before changing architecture:
- `php artisan about`
- `php artisan route:list`
- `php artisan migrate:status`
- `php artisan test`
- frontend build/test commands defined by the repository
- current login, role permissions, file upload/download, and core workflows

Do not assume a command passed; save the actual output in the task notes.

## Functional acceptance
- [ ] Existing login/logout works.
- [ ] Existing roles and permissions behave the same as before.
- [ ] Core create/read/update/delete workflows still work.
- [ ] Validation errors display correctly.
- [ ] File uploads/downloads work through the host.
- [ ] Two clients see the same committed data.
- [ ] A failed request is not displayed as a successful save.
- [ ] Reconnecting after a short network interruption works.
- [ ] Host restart does not lose committed data.

## LAN and offline acceptance
- [ ] App works with public internet disconnected while local Wi-Fi and host are available.
- [ ] Clients can reach the host using its configured LAN address.
- [ ] A client receives a clear message when the host is unavailable.
- [ ] No external API, CDN, font, analytics, or license check is required for core workflows unless documented.
- [ ] Host firewall blocks unwanted access from outside the trusted network.
- [ ] Client computers do not require direct MySQL connectivity.

## Data integrity
- [ ] Backups are created on the host.
- [ ] A backup can be restored to a test environment.
- [ ] Schema migrations are tested on a copy of the current database.
- [ ] Concurrent changes and duplicate form submissions are tested.
- [ ] Any destructive migration has a reviewed rollback/backup plan.

## Desktop packaging
- [ ] Clean Windows install and launch.
- [ ] Clean macOS install and launch.
- [ ] Correct host address can be configured.
- [ ] App icon/name/version are correct.
- [ ] Upgrade behavior is tested.
- [ ] Uninstall does not accidentally delete host data.
- [ ] Signing/notarization warnings and requirements are documented.
- [ ] Installation does not require developers' local paths or tools.

## Security review
- [ ] No `.env`, APP_KEY, MySQL password, or privileged API key is packaged in client artifacts.
- [ ] Authorization is checked server-side.
- [ ] Production debug mode is disabled.
- [ ] Session, CSRF, and upload protections remain enabled as appropriate.
- [ ] Logs do not leak passwords, tokens, or sensitive record contents.
- [ ] MySQL is not exposed to client machines unnecessarily.
