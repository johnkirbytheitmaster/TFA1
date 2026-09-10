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
cd "C:\Users\cedri\OneDrive\Desktop\Kirby TFA1"
& "C:\xampp\php\php.exe" -d extension=intl -S 127.0.0.1:8080 -t public public/index.php
```

Open these routes in a browser:

- http://127.0.0.1:8080/
- http://127.0.0.1:8080/about
- http://127.0.0.1:8080/customers
- http://127.0.0.1:8080/users

If using a different PHP installation, run `composer install` first and use that PHP executable. The `intl` extension is required by CodeIgniter.

## Activity data

The customer records are Jan Kirby, Jhan Kharby, Jolya Kirby, Jhun Khirby, and Kirby John. Each uses `0912 345 6789` as the sample phone number. The user records use the same five names with staff usernames and roles. No database is required for this activity.

## GitHub publishing

This folder is the separate commission copy and has no personal `.git` history.

- GitHub repository: [github.com/johnkirbytheitmaster/TFA1](https://github.com/johnkirbytheitmaster/TFA1)
- Hosted application: [kirbypos.thsite.top](https://kirbypos.thsite.top/)

The current `.env` is configured for `https://kirbypos.thsite.top/`.

## Structure

- `app/Config/Routes.php` maps the four required URLs.
- `app/Controllers/Pages.php` serves the landing and about pages.
- `app/Controllers/Customers.php` and `app/Controllers/Users.php` provide temporary arrays.
- `app/Views/` contains the shared layout and page views.
- `TFA1-hosting-package-final.zip` contains the current project package.
