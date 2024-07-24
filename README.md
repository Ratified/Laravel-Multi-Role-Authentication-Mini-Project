# Laravel Multi-Role Authentication Project

This Laravel project demonstrates a basic setup for multi-role authentication, allowing users to log in as either a user or an admin. Depending on their role, they will be redirected to different dashboard views.

## Features

- User and Admin login
- Role-based dashboard views
- Authentication and email verification

## Prerequisites

- PHP >= 7.3
- Composer
- Laravel 8.x
- MySQL or any other database supported by Laravel

## Installation

1. **Clone the repository:**

    ```sh
    git clone https://github.com/Ratified/Laravel-Multi-Role-Authentication-Mini-Project.git
    cd laravel-multi-role-authentication
    ```

2. **Install dependencies:**

    ```sh
    composer install
    ```

3. **Copy the example environment file and configure it:**

    ```sh
    cp .env.example .env
    ```

4. **Generate an application key:**

    ```sh
    php artisan key:generate
    ```

5. **Configure your `.env` file with your database credentials and other settings:**

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

6. **Run the database migrations:**

    ```sh
    php artisan migrate
    ```

7. **Start the development server:**

    ```sh
    php artisan serve
    ```

## Usage

1. **Register a new user:**
    - Open your browser and navigate to `http://localhost:8000/register`.
    - Fill in the registration form and submit.

2. **Assign the admin role (optional):**
    - Open your database management tool (e.g., phpMyAdmin) and manually set the `role` field to `admin` for the user you want to be an admin.

3. **Login:**
    - Navigate to `http://localhost:8000/login` and log in with the registered user credentials.

4. **Access the dashboard:**
    - After logging in, you'll be redirected to the dashboard. If the user role is `admin`, you'll see the admin dashboard, otherwise, you'll see the regular user dashboard.

## Routes

- `GET /dashboard` - Redirects to the appropriate dashboard based on user role.

## Controllers

- **DashboardController**: Handles the logic for redirecting users to their respective dashboards based on their role.

## Middleware

- `auth` - Ensures that only authenticated users can access certain routes.
- `verified` - Ensures that only users who have verified their email address can access certain routes.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).