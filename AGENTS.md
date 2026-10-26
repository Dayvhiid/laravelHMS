# AI IDE Project Instructions

## Mission
Help migrate an existing Laravel 11 + Blade application into a Windows/macOS desktop experience for a small local network. One dedicated host computer stays on and runs the authoritative Laravel backend and MySQL database. Client computers connect over the same Wi-Fi. The system must not require internet access for normal operation.

## Work rules
1. **Inspect before changing.** Read the relevant files, `composer.json`, `package.json`, routes, middleware, auth setup, database config, migrations, storage usage, and tests before proposing edits.
2. **Do not assume the desktop architecture is settled.** First complete the architecture spike described in `docs/ARCHITECTURE.md`. NativePHP Desktop normally bundles and runs a Laravel app on the user's machine; that may not be the same as a thin client connecting to a central Laravel host. Verify the intended client-host model before implementing broad changes.
3. **Plan before coding.** For each task, write a short plan, identify files likely to change, state risks, and define acceptance criteria. Wait for approval if the task changes architecture, schema, authentication, data migration, security, or deployment.
4. **Keep changes small.** Implement one coherent task at a time. Do not refactor unrelated code.
5. **Preserve existing behavior.** Avoid changing current business rules, routes, permissions, validations, and UI flows unless the task explicitly requires it.
6. **Protect data.** Never drop, truncate, overwrite, or migrate real data without a verified backup and explicit approval. Never expose database credentials in a desktop client.
7. **Security first.** Client computers must not connect directly to MySQL. They should communicate with the host's Laravel application over the local network. Do not bind services to all interfaces without an access-control plan. Do not disable CSRF, authentication, authorization, TLS/security controls, or firewall protections to make a test pass.
8. **Offline means LAN-only is sufficient.** The app should work without public internet once installed, provided the host and local Wi-Fi are available. Document any feature that genuinely needs internet.
9. **Test evidence is required.** Run relevant tests and report exact commands and results. If a test cannot be run, say why; do not claim it passed.
10. **No fake completion.** Do not leave TODOs, placeholder success paths, fake data, or swallowed exceptions in completed work unless explicitly requested and clearly documented.

## Preferred workflow
- Understand -> clarify -> plan -> implement -> test -> review -> document.
- Use `docs/IDE_TASK_TEMPLATE.md` for substantial tasks.
- Keep `docs/DECISIONS.md` updated when a meaningful architecture choice is made.
- Keep `docs/ROADMAP.md` and `docs/STATUS.md` updated as work progresses.
- Before finishing, review the diff for accidental changes, secrets, debug code, and unrelated formatting.

## Response format after each task
1. Summary of behavior changed.
2. Important files changed.
3. Tests/commands run and results.
4. Risks, limitations, or follow-up work.
5. Any decisions that require the user's approval.
