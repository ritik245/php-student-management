# PHP Student Management System

A simple **Student Management System** built using **PHP and MySQL**.  
This project allows users to **register, login, and manage student records** (add, view, delete).  
It is designed for **beginners**, **college practicals**, and **mini projects**.

---

## 🚀 Features

- User Registration & Login
- Session-based Authentication
- Add Student Details
- View Student Records
- Delete Student Records
- Simple and Clean UI using CSS
- MySQL Database Integration

---

## 🛠️ Technologies Used

- PHP
- MySQL
- HTML
- CSS
- XAMPP (Apache + MySQL)
- Git & GitHub

---

## 📂 Project Structure

php_login/
│
├── db.php
├── login.php
├── register.php
├── dashboard.php
├── logout.php
├── style.css
│
├── add_student.php
├── view_students.php
├── delete_student.php
└── README.md
## 🗄️ Database Setup

1. Start **Apache** and **MySQL** from XAMPP.
2. Open phpMyAdmin:
http://localhost/phpmyadmin

css
Copy code
3. Create a database named:
login_db

sql
Copy code
4. Run the following SQL queries:

sql
CREATE TABLE users (
 id INT AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(50),
 password VARCHAR(50)
);

CREATE TABLE students (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(50),
 roll_no VARCHAR(20),
 course VARCHAR(50)
);
▶️ How to Run the Project
Copy the project folder into:

makefile
Copy code
C:\xampp\htdocs\
Start Apache and MySQL in XAMPP.

Open browser and go to:

arduino
Copy code
http://localhost/php_login/register.php
Register a new user.

Login and manage student records from the dashboard.

🔐 Authentication
PHP Sessions are used to secure pages.

Only logged-in users can access the dashboard and student pages.

🎓 Learning Outcomes
PHP form handling

MySQL database connectivity

CRUD operations

Session management

Basic project structure

Version control using Git & GitHub

📌 Future Improvements
Update Student Details

Search Students

Password Hashing

Role-based Access (Admin/User)

Deployment on live hosting

👤 Author
Ritik Raj

GitHub: https://github.com/ritik245

---

## ✅ NEXT STEPS (OPTIONAL BUT PRO)

You can now:
1️⃣ Add **screenshots** to README  
2️⃣ Deploy project online  
3️⃣ Add **password hashing**  
4️⃣ Prepare **college project report**

Just tell me what you want next 😊
