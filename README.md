# Hospital Management System - Frontend

A Laravel-based Hospital Management System with a modern, responsive frontend interface.

## Features

- **Dashboard**: Overview with key metrics and quick actions
- **Patients**: Patient records management with search functionality
- **Patient Registration**: Form to register new patients
- **Doctors**: Doctor profiles management
- **Doctor Registration**: Form to add new doctors
- **Appointments**: Appointment scheduling and management
- **Schedule Appointment**: Form to book new appointments

## Installation

1. Make sure you have PHP 8.1+ and Composer installed
2. Install dependencies:
   ```bash
   composer install
   ```

3. Copy the environment file:
   ```bash
   cp .env.example .env
   ```

4. Generate application key:
   ```bash
   php artisan key:generate
   ```

5. Start the development server:
   ```bash
   php artisan serve
   ```

6. Open your browser and navigate to:
   ```
   http://localhost:8000
   ```

## Routes

- `/` - Dashboard
- `/patients` - Patients list
- `/patients/create` - Patient registration form
- `/doctors` - Doctors list
- `/doctors/create` - Doctor registration form
- `/appointments` - Appointments list
- `/appointments/create` - Schedule appointment form

## Notes

- This is a frontend-focused implementation. Forms are set up but backend functionality (database operations) is not implemented.
- All forms will show an alert on submission as they are currently for UI demonstration only.
- The design matches the provided screenshots with a modern blue and white color scheme.

## Technologies Used

- Laravel 12
- PHP 8.1+
- HTML5/CSS3
- Font Awesome Icons
- Vanilla JavaScript
