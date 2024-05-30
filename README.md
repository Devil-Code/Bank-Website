# Bank Website

This repository contains files for a simple bank website implemented in PHP and HTML. It includes registration, login, and account management functionalities.

## Registration and Login System

### `login.php`

This file contains the HTML and PHP code for the login page. Users can enter their credentials to log in to their accounts.

### `register.php`

This file contains the HTML and PHP code for the registration page. Users can create a new account by providing their username and password.

### `address.php`

This file is part of the registration process and contains the form for users to provide their address information.

## Account Management

### `welcome.php`

After logging in successfully, users are redirected to this page. It displays a welcome message along with the user's username and account balance.

### `reset-password.php`

This page allows users to reset their passwords if they forget them. It includes a form for users to enter their new password.

### `logout.php`

Users can log out of their accounts by visiting this page. It ends their current session and redirects them to the login page.

## File Structure

- `css/`: Contains CSS files for styling the website.
- `img/`: Contains image files used in the website.
- `config.php`: Configuration file containing database connection details and session management code.
- `error.html`: Error page displayed when there is an issue with registration or login.
- `README.md`: Documentation file providing an overview of the project.

## Usage

To use this bank website:

1. Clone this repository to your local machine.
2. Set up a PHP development environment with a MySQL database.
3. Import the provided SQL schema into your MySQL database.
4. Update the database connection details in `config.php`.
5. Access the website through a web browser to register, log in, and manage your account.

## Credits

This project is created by Pritesh Gandhi and is provided under the GNU GPL v3.0 license.
