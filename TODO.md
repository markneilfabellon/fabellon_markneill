# UI Dark Theme Update Plan

## Overview
Unify all UI views into a consistent ultra-dark theme (#000 bg, #0f0f0f panels, #00bfff accents) with enhanced dark hovers (subtle glows, scale) and modern animations for an "awesome" look. Replace mixed TF2/neon styles without affecting functionality.

## Steps
- [x] Edit app/views/home.php: Update container to dark panel, buttons with dark hover (bg #1a1a1a to #2a2a2a, subtle glow). Add fade-in animation.
- [x] Edit app/views/auth/login.php: Darken main bg to #0a0a0a, container to #151515, inputs bg #1a1a1a border #333, focus glow #00bfff. Button hover: bg #00bfff to #1e40af. Remove TF2 injection, integrate dark styles. Keep password toggle/JS.
- [x] Edit app/views/auth/register.php: Similar to login, darken bg/container/inputs, update button/select hovers, remove TF2, keep JS.
- [x] Edit app/views/auth/dashboard.php: Add dark container around content, style logout link as button with hover.
- [x] Edit app/views/students/create.php: Replace neon green (#00ff99) with #00bfff accents, darken inputs/bg, update hovers (button bg transparent to accent, shadow glow). Keep form structure.
- [x] Edit app/views/students/show.php: Update table to dark (thead #1a1a1a, tbody hover #151515), accents #00bfff, search input dark, pagination buttons dark hover. Keep role-based logic.
- [x] Edit app/views/students/update.php: Similar to create, replace neon with #00bfff, darken, enhance hovers.
- [x] Edit app/views/create.php: Remove TF2 injection, update to dark theme (#000 bg, #0f0f0f panels, #00bfff accents, dark hovers/glows, fade-in animation).
- [x] Edit app/views/update.php: Similar to create.php.
- [x] Edit app/views/user_auth/login.php: Similar to auth/login.php, keep JS for password toggle.
- [x] Edit app/views/user_auth/register.php: Similar to auth/register.php, keep JS.

## Followup
- [ ] Open browser to localhost for visual testing (e.g., http://localhost/fabellon_markneill).
- [ ] Verify consistency across pages, check hovers on buttons/inputs/links.
- [ ] If issues (e.g., broken JS), revert specific changes.
