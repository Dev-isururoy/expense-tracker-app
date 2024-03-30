# ExpenseTrackerApp

ExpenseTrackerApp is a web application designed to help users track their expenses easily.

## Features

- **Expense Management**: Allows users to add, edit, and delete expenses.
- **User Authentication**: Provides user authentication and authorization functionalities.
- **Responsive Design**: Ensures a seamless experience across different devices.

## Technologies Used

- **Laravel**: Backend framework for building the application.
- **HTML/CSS/JavaScript**: Frontend technologies for the user interface.
- **MySQL**: Database management system for storing expense data.
- **Composer**: Dependency manager for PHP.
- **npm/yarn**: Package managers for JavaScript.

## Getting Started

1. Clone the repository:

    ```bash
    git clone https://github.com/Dev-isururoy/expense-tracker-app.git
    ```

2. Install dependencies:

    ```bash
    composer install
    npm install
    ```

3. Set up environment variables:

    - Create a `.env` file based on the provided `.env.example`.
    - Update the database and other configuration settings as needed.

4. Generate an application key:

    ```bash
    php artisan key:generate
    ```

5. Migrate the database:

    ```bash
    php artisan migrate
    ```

6. Serve the application:

    ```bash
    php artisan serve
    ```

7. Access the application in your web browser at `http://localhost:8000`.

## License

This project is licensed under the MIT License.
