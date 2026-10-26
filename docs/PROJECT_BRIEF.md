# Project Brief

## Goal
Turn an existing Laravel 11 application with a Blade frontend into a desktop-friendly application for Windows and macOS, usable by multiple computers in the same location without public internet access.

## Known requirements
- Existing backend: Laravel 11.
- Frontend: Blade templates.
- Current database: MySQL.
- Target desktop platforms: Windows and macOS.
- Distribution: installable desktop application.
- Runtime preference: bundle as much as practical so end users do not have to install PHP or Node themselves.
- Network: client computers are on the same Wi-Fi/LAN.
- Host: one dedicated computer stays on and runs the authoritative application/database services.
- Shared data: all clients must see the same current records.
- Internet: not required for normal day-to-day use.

## Intended user experience
- Users launch an installed desktop app from their computer.
- The app connects to the host over the local network.
- Users authenticate and use the existing application.
- All shared reads/writes go through Laravel on the host.
- If the host or Wi-Fi is unavailable, the client shows a clear connection error and provides a retry path. It must not pretend a write succeeded.
- Data is backed up on the host.

## Non-goals unless later approved
- Offline edits on disconnected client computers with later synchronization.
- Cloud hosting or public internet dependency.
- Rewriting the whole UI in React/Vue.
- Replacing MySQL with SQLite by default.
- Direct client-to-MySQL connections.
- Automatic updates, licensing, or code signing beyond what is needed for a safe initial release.

## Key architecture caveat
Do not assume NativePHP Desktop automatically provides a thin-client architecture. NativePHP packages a Laravel application with a desktop runtime and commonly creates local application data (including SQLite). This project, however, needs a central Laravel + MySQL host and multiple clients. Before committing to NativePHP, build a small proof of concept and choose one of these approaches:

A. A desktop shell that displays the centrally hosted Laravel/Blade app over the LAN. This maximizes reuse of the existing server-rendered app, but confirm whether NativePHP is a good fit for loading a remote LAN URL; another Electron/Tauri wrapper may be more suitable.

B. A NativePHP app installed on each client, with a local desktop UI that communicates with a central Laravel API. This may require separating UI requests from the central backend and could mean adapting the existing Blade request flow.

The AI IDE must compare these options against the existing codebase and document the choice before major implementation.

## Success criteria
- The app installs and launches on supported Windows and macOS machines.
- Normal usage works without public internet when LAN and host are available.
- Multiple clients use one authoritative MySQL database through Laravel.
- No client contains production MySQL credentials.
- Host/client failures are handled visibly and safely.
- Existing business logic and permissions remain intact.
- Backup and restore are documented and tested.
