## User Authentication System
### Framework used: Laravel Breeze
### RDBMS: MySQL
### Frontend: Blade and Tailwind CSS

## Requirements:
- **Secure login**
- **Secure Registration**
- **Protected routes**: Middleware used to check for authenticated user as well as the type of authentication, whether it was a regular user or an admin.
- **User-role based access control**: 2 types of users, regular user and admin. Both have separate registration. In addition, admin registration also requires an active admin key (admin key is seeded in the database for testing purposes).
- **Password hashing**: Using built in Bcrypt function in Laravel.
- **Session management**: Using built in functionality in Laravel Breeze.