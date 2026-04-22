# 🚀 Project Management Dashboard (Laravel)

A modern **Project Management Web App** built with Laravel, featuring role-based access, project tracking, and interactive dashboard analytics.

---

## ✨ Features

* 🔐 Authentication (Login & Logout)
* 👥 Role-Based Access (Admin, Manager, Employee, etc.)
* 📁 Project Management (CRUD)
* 📊 Dashboard Analytics (Chart.js)
* 📈 Monthly Project Progress
* 📤 Export Data to Excel
* 🧩 Relational Database (Employee, Role, Department, Project)

---

## 🛠️ Tech Stack

* ⚙️ Laravel (Backend)
* 🗄️ MySQL (Database)
* 🎨 Bootstrap 5 (UI)
* 📊 Chart.js (Charts & Analytics)
* 📦 Maatwebsite Excel (Export Feature)

---

## ⚙️ Installation

```bash
# Clone repository
git clone https://github.com/yourusername/project-name.git

# Masuk ke folder project
cd project-name

# Install dependency
composer install

# Copy file environment
cp .env.example .env

# Generate key
php artisan key:generate

# Setup database di .env lalu jalankan
php artisan migrate

# Jalankan server
php artisan serve
```

---

## 📊 Dashboard Overview

The dashboard provides:

* Total Projects
* Completed Tasks (Action Done)
* Ongoing Tasks (Action OG)
* Monthly Analytics Chart

---

## 📁 Database Structure

Relational structure:

* Users → Employees
* Employees → Roles
* Employees → Departments
* Projects → Employees / Teams

---

## 📤 Export Feature

Export project data to Excel with customizable columns.

---

## 📌 Example Chart Data (API)

```json
{
  "labels": ["January", "February", "March"],
  "done": [5, 8, 3],
  "ongoing": [2, 4, 6]
}
```

---

## 👤 Author

**Paulus Abraham Monny**

* GitHub: https://github.com/MonnyPA

---

## ⭐ Support

If you like this project:

* ⭐ Star this repository
* 🍴 Fork it
* 🛠️ Use it for your own project

---

## 📄 License

This project is open-source and available under the MIT License.
