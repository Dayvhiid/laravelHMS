# Task: <short title>

## Status
Proposed

## Problem
Describe the user-visible problem in plain language.

## Goal
Describe the outcome, not a specific implementation.

## Current behavior
What happens now? Include a reproducible example if possible.

## Expected behavior
What should happen after the change?

## Scope
### In scope
- 

### Out of scope
- 

## Constraints
- Preserve existing Laravel 11 and Blade behavior unless explicitly required.
- Keep shared data on the host's MySQL database.
- Clients must access data through Laravel, never directly through MySQL.
- Normal operation must not require public internet.
- Do not expose credentials or secrets in desktop packages.
- Follow `AGENTS.md`, `docs/PROJECT_BRIEF.md`, and `docs/ARCHITECTURE.md`.

## Acceptance criteria
- [ ] Given ..., when ..., then ...
- [ ] Failure cases are handled clearly.
- [ ] Authorization and validation are preserved.
- [ ] Relevant automated tests are added or updated.
- [ ] Manual LAN test steps are documented if needed.

## Investigation requested
Before coding, inspect the relevant implementation and report:
1. likely files and request/data flow;
2. proposed minimal change;
3. risks and unknowns;
4. tests required.

## Implementation plan
(To be completed after investigation.)

## Verification
- [ ] Targeted tests:
- [ ] Full relevant test suite:
- [ ] Frontend build/lint:
- [ ] Manual host/client test:
- [ ] Diff reviewed:

## Completion report
- Summary:
- Files changed:
- Tests run and results:
- Known limitations:
- Follow-up work:
