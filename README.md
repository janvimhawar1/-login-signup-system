# 🔐 PHP Login & Signup System

This is a simple login and signup system built using **PHP**, **MySQL**, and **HTML/CSS**.  
It allows users to register, log in, log out, and access a protected welcome page after login.

---

## 🚀 Features

- 📝 User Registration (Sign Up)
- 🔐 Secure Login and Logout
- 💾 MySQL Database Integration
- 🌐 Simple User Interface with CSS
- 🧠 Session Management

---

## 📁 Project Structure


📦 login-signup-system
├── connect.php # Database connection
├── index.php # Home page
├── login.php # Login form & logic
├── logout.php # Logout and session destroy
├── signup.php # Signup form & logic
├── welcome.php # Protected user page
├── main.css # Basic CSS styling
└── users.sql # Database file to import


---

## 🛠️ How to Run This Project

### 📦 Step 1: Setup PHP and MySQL (e.g., XAMPP or WAMP)
- Make sure your server is running.
- Place all project files inside `htdocs` folder (if using XAMPP).

### 💾 Step 2: Import the Database
1. Open `http://localhost/phpmyadmin/`
2. Create a new database (e.g., `login_system`)
3. Import `users.sql` file from this project.

### 🛠️ Step 3: Configure Database
- Open `connect.php`
- Update the following with your local MySQL details:
```php
$host = "localhost";
$user = "root";
$password = "";
$db = "login_system";

▶️ Step 4: Run the Project
Open your browser and visit:
👉 http://localhost/login-signup-system/index.php


🙋‍♀️ Created By
Janvi Mahawar
