# Bank Website

This repository contains files for a simple bank website implemented in PHP and HTML. It includes registration, login, and account management functionalities.

## Features

### User Registration and Login
- **`register.php`**: Allows new users to register by providing their basic information such as name, email, mobile number, and password. It validates the user input and stores the information in the database.
- **`login.php`**: Provides existing users with a secure login interface. Users can log in using their username and password credentials. Invalid login attempts are handled gracefully.

### Account Management
- **`welcome.php`**: Upon successful login, users are greeted with a personalized welcome message and can view their account balance. This page also provides options to reset the password and securely log out of the account.
- **`reset-password.php`**: Enables users to reset their passwords if they forget them. Users need to provide their email address associated with the account, and a password reset link is sent to their email for security verification.
- **`logout.php`**: Allows users to securely log out of their accounts, terminating their session and preventing unauthorized access.

### Profile Management
- **`profile.php`**: Allows users to view and update their profile information, including their name, email address, and mobile number. Users can modify their details as needed to keep their account information up to date.

### Transaction History
- **`transactions.php`**: Displays a record of the user's transaction history, including details such as transaction type, date, and amount. Users can track their financial activities and monitor their account balance over time.

### Security Measures
- **Password Encryption**: User passwords are securely encrypted using the PHP `password_hash()` function before being stored in the database, ensuring protection against unauthorized access.
- **Session Management**: Sessions are managed securely to authenticate users and prevent session hijacking. Users are required to log in again after a period of inactivity for added security.

### Error Handling
- **`error.html`**: An error page displayed when there is an issue with the registration or login process. It provides users with clear feedback and instructions on how to proceed in case of errors.

### Responsive Design
- The website is designed to be responsive, ensuring optimal viewing and interaction across a wide range of devices and screen sizes. Users can access the site seamlessly from desktops, laptops, tablets, and smartphones.

### Accessibility
- The website follows accessibility guidelines to ensure that users with disabilities can navigate and interact with the site effectively. Features such as alternative text for images and keyboard navigation are implemented to enhance accessibility.

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

## Screenshots

![Homepage](https://github.com/Devil-Code/Bank-Website/screenshots/Home.png)
![Contact](https://github.com/Devil-Code/Bank-Website/screenshots/Contact.png)

## Credits

This project is created by Pritesh Gandhi and is provided under the GNU GPL v3.0 license.
