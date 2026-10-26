# Official References

Use these as the primary source of truth. Re-check them before implementation because package versions and build requirements can change.

- NativePHP Desktop 2 installation: https://nativephp.com/docs/desktop/2/getting-started/installation
- NativePHP Desktop 2 introduction: https://nativephp.com/docs/desktop/2/getting-started/introduction
- NativePHP Desktop 2 build/publishing: https://nativephp.com/docs/desktop/2/publishing/building
- NativePHP Desktop 2 support policy: https://nativephp.com/docs/desktop/2/getting-started/support-policy
- Laravel 11 deployment: https://laravel.com/docs/11.x/deployment

## Notes
- Current NativePHP Desktop 2 docs list PHP 8.3+, Laravel 11+, and Node 22+ as requirements.
- NativePHP Desktop supports SQLite as a local app database. This project has a different requirement: MySQL is the authoritative database on a shared LAN host.
- Do not infer that NativePHP's standard local-app model automatically provides a thin client for a central Laravel server. Validate the desired desktop-shell model with a small proof of concept.
