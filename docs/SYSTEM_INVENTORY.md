# Phase 0 — System Inventory & Baseline Report

Date: 2026-10-23. All commands were run on the dev machine (Windows, XAMPP MariaDB 10.4.32).

## What this application actually is

Despite the folder name `laravelHMS`, this is an **eye clinic management system**
("Ola-Oluwa Eye Clinic"), not a hotel system. Domains: patient registration, eye-exam
vitals (OD/OS refraction), treatments/prescriptions, frames/lenses/drugs/services
inventory, invoicing, optician dispatch, appointments/calendar, SMS notifications,
case-file images, and WebRTC telemedicine.

## Stack versions (recorded)

| Item | Value |
|---|---|
| Laravel | 11.45.0 |
| PHP (cli) | 8.2.12 |
| Node / npm | v24.14.1 / 11.11.0 |
| Composer | not on PATH (vendor/ present; version unrecorded) |
| MySQL | XAMPP MariaDB 10.4.32 on `127.0.0.1:3306`, database `hospital` |
| Session/cache/queue | all `database` driver |
| Mail | `log` driver |
| Test DB | in-memory SQLite via `phpunit.xml` (see below) |
| Frontend build | Vite bundle committed in `public/build` |
| UI | ~180 standalone Blade views (Bootstrap 5.3 CDN / Tailwind Play CDN); Inertia/Vue/Jetstream installed but unused for domain pages |
| Auth | Fortify + Breeze routes + dead laravel/ui controllers (3 overlapping stacks); roles = `users.role` string (`admin`/`user`) |
| DB integrity | zero foreign keys; patient records linked by string `patient_id`/`pid`/`patient_code` |

## Baseline commands and actual results

### Before fixes
| Command | Result |
|---|---|
| `php artisan about` | PASS |
| `php artisan route:list` | FAIL — `ReflectionException: Class "EnxRtc\RoomController" does not exist` |
| `php artisan migrate:status` | FAIL — MySQL not running; later PASS with 44 Ran / 1 Pending |
| `php artisan test` | FAIL — all Feature tests died on DB connection or schema errors |

### Fixes applied during Phase 0
1. `app/Http/Controllers/RoomController.php` moved to
   `app/Http/Controllers/EnxRtc/RoomController.php` (PSR-4 path matched its
   `App\Http\Controllers\EnxRtc` namespace) and the route in `routes/web.php:276`
   changed from the string `"EnxRtc\RoomController@confo"` (never auto-prefixed in
   Laravel 8+) to `[App\Http\Controllers\EnxRtc\RoomController::class, 'confo']`.
2. `phpunit.xml`: enabled the intended `DB_CONNECTION=sqlite` / `DB_DATABASE=:memory:`
   env lines (they were commented out, which meant `RefreshDatabase` would have run
   `migrate:fresh` against the **real** `hospital` database).
3. `database/migrations/2025_01_08_072309_add_date_to_patient_infos.php`: guarded
   with `Schema::hasColumn` — the migration was unrunnable (the `date` column has
   existed since the original 2024 `patient_infos` migration) and blocked all tests.
4. New migration `2026_10_23_000001_add_two_factor_columns_to_users_table.php`:
   adds nullable `two_factor_secret`, `two_factor_recovery_codes`,
   `two_factor_confirmed_at` to `users`. Fortify 2FA is enabled in config and the
   `UserFactory` writes these attributes, but no migration ever created the columns.

### After fixes (recorded baseline)
| Command | Result |
|---|---|
| `php artisan route:list` | PASS — 167 routes (109 GET, 36 POST, 11 DELETE, 10 PUT, 1 PATCH) |
| `php artisan migrate:status` | 44 Ran, 1 Pending (the now-guarded `add_date_to_patient_infos`) |
| `php artisan test` | **PASS — 47 passed, 7 skipped, 0 failed (96 assertions), ~6s** |

The 7 skips are stock Jetstream tests that self-skip on feature flags / enabled config.

## Known findings to carry into later phases

1. **Public-internet dependency (biggest Phase 3 item):** ~159 CDN references across
   ~56 Blade views (Bootstrap, Tailwind Play CDN, Chart.js, Google Fonts, socket.io,
   PeerJS, FontAwesome, FullCalendar, jQuery). Must be self-hosted for the
   offline-LAN requirement.
2. **`public/storage` symlink missing** — image case-file uploads/serving will break.
3. **Case-sensitivity hazard:** several controllers use lowercase filenames
   (`vitalsController`, `frameController`, `lensController`, `messagingController`,
   `registerController`) that autoload only on case-insensitive filesystems.
   A macOS/Linux host would break; a Windows host is indicated unless renamed.
4. **No business-logic tests** — the suite is 100% stock auth scaffolding.
5. **Security:** `APP_DEBUG=true` on this machine; hardcoded SMS credentials in
   `SmsController`/`SendSMSController` and payment test keys in
   `resources/views/payment/index.blade.php`; 3 legacy plaintext credential tables
   (`doctors`, `adminpasswords`/`adpasswords`, `registers`) bypass Laravel auth;
   public mutating routes with no auth (`/import-users`, `/lenses/import`,
   `/inventory/{item}/delete`).
6. **Scheduler hazard:** `routes/console.php` schedules `twilioSmsController->test()`
   every minute; the method ends in `dd()` and Twilio SDK is not installed.
7. **Duplicate/broken routes:** duplicate URIs and route names in `routes/web.php`
   (image routes ×3, `/doctors/{drugs}/edit` ×2, `/doctors/{drugs}/destroy` ×2);
   `telemed/join-room` points at an empty controller.
8. **Missing provider (cosmetic):** `bootstrap/providers.php` references a
   non-existent `App\Providers\SchedulerServiceProvider`; Laravel 11 silently drops
   non-existent providers (`RegisterProviders.php:52-54`), so it is not fatal.
9. **Uncommitted work** was present in the tree at discovery time (patient
   registration/case-file changes, 12 files) — preserved, not committed.
10. **Real database contents at baseline:** `patient_infos` 2, `users` 4,
    `invoices` 8, `invos` 8, `drugs` 4, `vitals` 8, `appointments` 8.

## Desktop-migration relevance

- The app is 100% server-rendered Blade with database sessions — no API layer exists.
  This strongly favors **Option A** (desktop shell around the LAN-hosted Blade app)
  for the Phase 1 spike, but the spike must still prove it per `ARCHITECTURE.md`.
- The new `two_factor_*` columns have been created only on the test (SQLite) schema
  so far. Running `php artisan migrate` on the real `hospital` database is pending
  user approval (see `STATUS.md`).
