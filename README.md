# Task Manager

A simple task management application built with the **TALL Stack** (Tailwind CSS, Alpine.js, Laravel, Livewire).

## Features

- Create, update, and delete tasks.
- Mark tasks as completed or pending.
- Responsive UI built with Tailwind CSS.
- Interactive and dynamic behavior using Livewire.
- Basic Alpine.js functionality for lightweight interactivity.

## Stack

This application uses the **TALL Stack**:

- **Tailwind CSS**: For styling the frontend.
- **Alpine.js**: For small frontend interactions.
- **Laravel**: As the backend framework.
- **Livewire**: For reactive components and dynamic interfaces.

## Prerequisites

Before you begin, make sure you have the following installed:

- Docker (for Laravel Sail)
- Composer
- npm

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/vitormeloa/task-manager.git
    cd task-manager
    ```

2. Install the PHP dependencies:

    ```bash
    ./vendor/bin/sail composer install
    ```

3. Install the frontend dependencies:

    ```bash
    ./vendor/bin/sail npm install
    ```

4. Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

5. Generate the application key:

    ```bash
    ./vendor/bin/sail artisan key:generate
    ```

6. Configure the `.env` file to suit your environment, especially the database configuration.

7. Run the database migrations:

    ```bash
    ./vendor/bin/sail artisan migrate
    ```

8. Compile the assets:

    ```bash
    ./vendor/bin/sail npm run dev
    ```

9. Start the development server:

    ```bash
    ./vendor/bin/sail up
    ```

10. Visit `http://localhost` to see the application running.

## Usage

- Add tasks by filling out the form.
- Edit tasks by clicking the "Edit" button.
- Delete tasks by clicking the "Delete" button.
- Mark tasks as completed or pending.

## Testing

To run the tests, use:

```bash
./vendor/bin/sail artisan test
