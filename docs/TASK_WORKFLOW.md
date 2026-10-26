# AI IDE Task Workflow

Use this workflow for every meaningful feature or migration task.

## 1. Capture the idea
Write a plain-language problem statement:
- Who needs this?
- What are they trying to do?
- What happens today?
- What should happen instead?
- What must not change?

Do not jump straight to code.

## 2. Inspect
Ask the AI IDE to inspect the relevant code and report:
- relevant files/classes/routes/migrations;
- current behavior and request/data flow;
- related tests;
- assumptions and unknowns;
- security, data, and compatibility risks.

It should not edit files during this step unless explicitly asked.

## 3. Clarify
Ask only questions that could change the implementation or acceptance criteria. Do not ask questions whose answers are already in the repository or project documents.

## 4. Plan
Create a plan with:
- smallest safe implementation;
- files likely to change;
- schema/API/UI changes;
- failure cases;
- tests to add or update;
- rollback considerations.

For architecture, authentication, data migration, or security changes, wait for approval before implementation.

## 5. Implement in small slices
- Work in one coherent slice at a time.
- Follow existing patterns unless there is a documented reason not to.
- Avoid unrelated refactors and dependency upgrades.
- Add tests alongside the change.
- Do not suppress exceptions just to make tests pass.

## 6. Verify
Run the narrowest relevant tests first, then broader checks. Depending on the project, use:
- targeted PHPUnit/Pest tests;
- `php artisan test`;
- `php artisan route:list`;
- `php artisan migrate:status`;
- frontend build/lint commands from `package.json`;
- manual LAN tests with two client computers.

Report commands and actual outcomes. Never claim a test was run if it was not.

## 7. Review the diff
Check for:
- unrelated edits;
- accidental secrets or `.env` changes;
- debug output and temporary code;
- missing authorization/validation;
- regressions in routes or existing behavior;
- unsafe database changes;
- unhandled network failure states.

## 8. Finish
Update relevant docs and `STATUS.md`. Summarize what changed, tests run, known limitations, and any follow-up task.

## Definition of done
A task is done only when:
- behavior matches the acceptance criteria;
- tests cover the important behavior;
- relevant checks pass or remaining failures are clearly explained;
- security/data risks are considered;
- docs are updated where necessary;
- no unrelated changes remain.
