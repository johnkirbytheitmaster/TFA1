# KIRBY POS

A four-page CodeIgniter 4 POS foundation for the TFA1 routing, controller, and view activity. The commission version uses a simple `KIRBY POS` header, a soft slate and peach palette, and a clear MVC-first layout.

## Pages

- `/` landing page
- `/about` MVC explanation
- `/customers` customer accounts from a static PHP array
- `/users` staff accounts from a static PHP array

## Run locally

From the project folder:

```powershell
cd path\to\TFA1
php -d extension=intl -S 127.0.0.1:8080 -t public public/index.php
```

Open these routes in a browser:

- http://127.0.0.1:8080/
- http://127.0.0.1:8080/about
- http://127.0.0.1:8080/customers
- http://127.0.0.1:8080/users

If using XAMPP on Windows, replace `php` with your XAMPP PHP executable. Run `composer install` first when `vendor/` is not already present. The `intl` extension is required by CodeIgniter.

## Activity data

The customer records are Jan Kirby, Jhan Kharby, Jolya Kirby, Jhun Khirby, and Kirby John. Each uses `0912 345 6789` as the sample phone number. The user records use the same five names with staff usernames and roles. No database is required for this activity.

## GitHub publishing

This folder is the separate commission copy and has no personal `.git` history.

- GitHub repository: [github.com/johnkirbytheitmaster/TFA1](https://github.com/johnkirbytheitmaster/TFA1)
- Hosted application: [kirbypos.thsite.top](https://kirbypos.thsite.top/)

The current `.env` is configured for `https://kirbypos.thsite.top/`.

## TinkerHost upload

1. Open the account's **Manage Files** page and enter the `htdocs` folder.
2. Upload `TFA1-hosting-package-final.zip`.
3. Use the file manager's **Extract** or **Unzip** action.
4. Make sure the extracted contents are directly inside `htdocs`, not inside a second nested folder.
5. Keep the hidden `.htaccess` files and `.env` file.

The root `.htaccess` sends requests to CodeIgniter's `public` folder. The ZIP already contains `vendor/`, so Composer is not needed on the host for this activity.

## Structure

- `app/Config/Routes.php` maps the four required URLs.
- `app/Controllers/Pages.php` serves the landing and about pages.
- `app/Controllers/Customers.php` and `app/Controllers/Users.php` provide temporary arrays.
- `app/Views/` contains the shared layout and page views.
- `TFA1-hosting-package-final.zip` contains the current project package.
