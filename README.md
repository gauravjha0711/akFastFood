# AK Fast Food Website

This project is a fast food website created using **Laravel** as the backend framework and **MySQL** as the database management system. The website provides an easy and interactive platform for users to browse the menu, place orders, and manage their account. Admins can manage orders, update the menu, and view analytics. This README provides a detailed overview of the project, installation instructions, and features.

## Table of Contents

1. [Project Overview](#project-overview)
2. [Technologies Used](#technologies-used)
3. [Features](#features)
4. [Installation](#installation)
5. [Configuration](#configuration)
6. [Usage](#usage)
7. [Contributing](#contributing)
8. [License](#license)

## Project Overview

The AK Fast Food Website is designed for both customers and administrators. Customers can:

- Browse the menu with detailed information about each dish.
- Add food items to the cart and place orders.
- Track their order status.
- Manage their user account and view past orders.

Administrators can:

- Manage food items (CRUD operations).
- View and manage customer orders.
- Update order statuses (e.g., pending, in progress, completed).
- View order analytics (e.g., total sales, popular items).

This project is built using **Laravel** for backend development, **MySQL** for database management, and follows the MVC (Model-View-Controller) architecture to ensure separation of concerns and maintainability.

## Technologies Used

- **Backend**: Laravel (PHP Framework)
- **Database**: MySQL
- **Frontend**: Blade templates (Laravel's templating engine), HTML, CSS, and JavaScript
- **Authentication**: Laravel Breeze (for user authentication)
- **Routing**: Laravel Routing
- **Migration**: MySQL database migrations (using Laravel Artisan)
- **Others**: Laravel Eloquent ORM for database operations

## Features

### For Customers:
- **User Registration/Login**: Secure registration and login functionality.
- **Menu Browsing**: Users can browse food items categorized by type (e.g., burgers, pizzas, drinks).
- **Order Management**: Users can add items to their cart, modify the cart, and place an order.
- **Order Tracking**: Users can check the status of their orders.
- **Profile Management**: Users can update their profile information and view order history.

### For Administrators:
- **Menu Management**: Admins can add, update, and delete food items from the menu.
- **Order Management**: Admins can view all customer orders and update their statuses (e.g., pending, preparing, completed).
- **Analytics**: Admins can view order statistics such as total orders, sales, and popular food items.
- **User Management**: Admins can manage customer accounts, including updating user roles (admin or customer).

## Installation

To run this project locally, follow these steps:

### Prerequisites:
- PHP (7.4 or higher)
- Composer (PHP dependency manager)
- MySQL (or any compatible database)
- Node.js (for frontend development and asset compilation)

### Steps:
1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/ak-fast-food.git
   cd ak-fast-food
   ```

2. **Install dependencies:**
   - Install Laravel dependencies using Composer:
     ```bash
     composer install
     ```

   - Install frontend dependencies using npm or yarn:
     ```bash
     npm install
     ```

3. **Configure the environment:**
   - Copy the `.env.example` file to `.env`:
     ```bash
     cp .env.example .env
     ```

   - Set up the database connection in the `.env` file:
     ```plaintext
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=ak_fast_food
     DB_USERNAME=root
     DB_PASSWORD=
     ```

4. **Generate the application key:**
   ```bash
   php artisan key:generate
   ```

5. **Run database migrations:**
   - Create the necessary database tables:
     ```bash
     php artisan migrate
     ```

6. **Seed the database (optional):**
   - If you want to seed the database with initial data (e.g., sample menu items), run:
     ```bash
     php artisan db:seed
     ```

7. **Start the development server:**
   ```bash
   php artisan serve
   ```

   The application should now be accessible at `http://127.0.0.1:8000`.

## Configuration

### Database Configuration:
The default database configuration is provided in the `.env` file. Ensure that MySQL is running and the database is correctly set up.

### Authentication:
The app uses Laravel's built-in authentication system, so users can register, log in, and manage their accounts.

### Admin Panel:
- The admin panel can be accessed by users with the `admin` role. To create an admin user, you can either manually set the role in the database or create a user through the registration form and modify their role using an admin dashboard (if implemented).

## Usage

1. **As a Customer:**
   - Register an account to place orders.
   - Browse the menu, add items to your cart, and place an order.
   - Track the status of your orders.

2. **As an Administrator:**
   - Log in using admin credentials to access the admin dashboard.
   - Add or update menu items and manage orders.
   - View statistics about orders and food items.

## Contributing

We welcome contributions to improve the AK Fast Food website. Here’s how you can help:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature-name`).
3. Make your changes and commit them (`git commit -am 'Add new feature'`).
4. Push to your branch (`git push origin feature/your-feature-name`).
5. Submit a pull request.

Please ensure your code adheres to the Laravel coding standards and includes tests for new features.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

This README provides an overview of how the AK Fast Food website is structured, how to install and configure it, and how to use the various features provided.
