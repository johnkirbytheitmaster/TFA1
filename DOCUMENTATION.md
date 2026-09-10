# KIRBY POS Documentation

## Current visual direction

The commission version uses a simple `KIRBY POS` wordmark, a soft slate navy base, warm off-white text, and a muted peach accent. The original four-page information architecture remains unchanged.

## MVC flow

1. `app/Config/Routes.php` maps `/`, `/about`, `/customers`, and `/users`.
2. `Pages`, `Customers`, and `Users` controllers prepare the page data.
3. The shared layout renders the navigation, page content, and footer.
4. Customer and user views use `foreach` to render the static arrays supplied by their controllers.

## Verification

- PHP syntax checks pass for the edited controllers and views.
- `spark routes` lists all four required GET routes.
- Local HTTP checks return status 200 for `/`, `/about`, `/customers`, and `/users`.
- The customer and user pages render all five requested Kirby records.
- The current project package was rebuilt after the visual and documentation updates.

## Publishing note

This is the separate commission copy. It does not contain the personal project's `.git` directory or personal Git history.

GitHub repository: https://github.com/johnkirbytheitmaster/TFA1

Hosted application: https://kirbypos.thsite.top/
