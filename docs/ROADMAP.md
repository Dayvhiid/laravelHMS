# Roadmap: Idea to Release

## Phase 0 — Discover the current application
- [x] Inspect repository structure and read existing project instructions.
- [x] Record Laravel, PHP, Composer, Node, frontend build, and MySQL versions.
- [x] Inventory routes, auth/session behavior, roles/permissions, file storage, queues, scheduled jobs, mail, and external services.
- [x] Run current tests and record baseline failures.
- [x] Identify features that unexpectedly require internet.
- **Exit:** a short system inventory and baseline test report exist. → See `docs/SYSTEM_INVENTORY.md` (2026-10-23).

## Phase 1 — Architecture spike
- [ ] Compare desktop-shell-to-LAN-app vs NativePHP-client-to-central-API.
- [ ] Check current NativePHP Desktop docs and supported versions.
- [ ] Prototype launch, login/session, host URL configuration, file upload/download, and reconnect.
- [ ] Test on a second computer on the same Wi-Fi.
- [ ] Record the decision in `DECISIONS.md`.
- **Exit:** selected approach meets the proof-of-concept criteria in `ARCHITECTURE.md`.

## Phase 2 — Host deployment
- [ ] Choose host OS and production-appropriate local web server/runtime.
- [ ] Reserve a stable LAN address.
- [ ] Configure Laravel environment and least-privilege MySQL access.
- [ ] Configure firewall and bind services appropriately.
- [ ] Add startup/restart behavior and useful logs.
- [ ] Create and test backup/restore scripts.
- **Exit:** host serves Laravel on the LAN without public internet.

## Phase 3 — Client experience
- [ ] Add configurable host address.
- [ ] Add host connectivity check and clear failure/retry states.
- [ ] Confirm login/logout/session behavior.
- [ ] Confirm uploads, downloads, printing, external links, and file handling.
- [ ] Prevent false success on network errors.
- **Exit:** two clients can use the same data safely.

## Phase 4 — Data and security validation
- [ ] Test concurrent edits and duplicate submissions.
- [ ] Test authorization across user roles.
- [ ] Test host reboot, MySQL restart, and Wi-Fi loss.
- [ ] Test data backup and restore.
- [ ] Review logs for secrets and sensitive information.
- [ ] Verify no MySQL credentials or production secrets are shipped to clients.
- **Exit:** release-blocking security and data-integrity tests pass.

## Phase 5 — Packaging
- [ ] Build a Windows installer.
- [ ] Build a macOS installer on a suitable build environment.
- [ ] Configure app name, icon, version, and publisher metadata.
- [ ] Decide code signing/notarization based on distribution needs.
- [ ] Test clean install, upgrade, uninstall, and reinstall.
- [ ] Document host setup separately from client installation.
- **Exit:** non-developer users can install and launch on each supported OS.

## Phase 6 — Release and maintenance
- [ ] Write a quick-start guide and troubleshooting guide.
- [ ] Document supported OS versions and host requirements.
- [ ] Document how to update the host and client packages.
- [ ] Document rollback and restore procedures.
- [ ] Tag the release and record known limitations.
- **Exit:** release is reproducible and supportable.

## Current status
- Current phase: Phase 1 — Architecture spike.
- Phase 0 complete 2026-10-23; see `docs/SYSTEM_INVENTORY.md`.
- Do not skip Phase 1. The client delivery architecture must be proven before broad changes.
