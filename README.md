# Task Manager Web App

## 🌐 Live Demo

https://taskmanagerapp.free.nf/login.php

---

## 📌 Overview

This is a full-stack Task Manager web application that allows users to create an account, log in securely, and manage their personal tasks.

The application demonstrates end-to-end development including frontend UI, backend logic, database integration, authentication, and live deployment.

---

## 🚀 Features

### 🔐 Authentication

* User Signup & Login system
* Passwords securely hashed using PHP `password_hash()`
* Session-based authentication

### 📋 Task Management (CRUD)

* Add new tasks
* Edit existing tasks
* Delete tasks
* View user-specific tasks

### 🎨 UI/UX

* Clean and responsive layout
* Card-based dashboard design
* Simple and user-friendly interface

---

## 🛠️ Tech Stack

* **Frontend:** HTML, CSS, JavaScript
* **Backend:** PHP
* **Database:** MySQL
* **Deployment:** InfinityFree

---

## 🗄️ Database Schema

### Users Table (`u`)

* `id` (Primary Key)
* `n` (Name)
* `e` (Email - Unique)
* `p` (Password - Hashed)

### Tasks Table (`t`)

* `id` (Primary Key)
* `uid` (User ID - Foreign reference)
* `title` (Task content)
* `created_at` (Timestamp)

---

## ⚙️ Setup Instructions (Local)

1. Install XAMPP

2. Start Apache & MySQL

3. Place project in:

   ```
   C:\xampp\htdocs\app
   ```

4. Create database `app` in phpMyAdmin

5. Run SQL:

   ```sql
   CREATE TABLE u (
       id INT AUTO_INCREMENT PRIMARY KEY,
       n VARCHAR(100),
       e VARCHAR(100) UNIQUE,
       p VARCHAR(255)
   );

   CREATE TABLE t (
       id INT AUTO_INCREMENT PRIMARY KEY,
       uid INT,
       title VARCHAR(255),
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

6. Open in browser:

   ```
   http://localhost/app/login.php
   ```

---

## 🌍 Deployment

The application is deployed on InfinityFree hosting.

Database credentials are configured separately for local and production environments using conditional configuration.

---

## 🔒 Security Practices

* Password hashing using `password_hash()`
* Prepared statements to prevent SQL injection
* Session-based authentication

---

## 📂 Project Structure

```
app/
  login.php
  signup.php
  dashboard.php
  edit.php
  at.php
  dt.php
  o.php
  index.php

  includes/
    db.php
    a.php

  assets/
    s.css
    s.js
```

---

## 🎯 Key Highlights

* Fully functional full-stack application
* Live deployment with database integration
* Clean and structured codebase
* Demonstrates real-world development workflow

---

## 👨‍💻 Author

Developed as part of a Full Stack Developer Internship assignment.
