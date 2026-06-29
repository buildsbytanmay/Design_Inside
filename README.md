# Design Inside

> A Modern Interior Design Website | MCA First-Year Mini Project

Design Inside is a full-stack interior design business website built with HTML, CSS, JavaScript, and PHP. It allows potential clients to explore services, view past projects, and submit quotation requests — while providing an admin panel to manage incoming leads.

---

## 🌐 Pages

| Page | File |
|------|------|
| Home | `index.html` |
| Services | `service.html` |
| Projects | `project.html` |
| About Us | `about_us.html` |
| Get a Quote | `quotation_form.php` |

---

## 🛠️ Tech Stack

- **Frontend** — HTML5, CSS3, Vanilla JavaScript
- **Backend** — PHP
- **Database** — MySQL (via XAMPP)
- **Server** — Apache (XAMPP)

---

## ✨ Features

- Hero section with background video autoplay
- Animated image gallery with prev/next slider
- Services section — Kitchen Remodeling, Bathroom Remodeling, Home Additions
- Stats counter — Current Projects, Homes Renovated, Valued Partners
- Quotation / lead capture form
- Responsive navigation with hamburger menu
- Admin panel with login, dashboard, customer management, and completed projects

---

## 🗄️ Database Schema

Three tables are used:

- **Admins** — Admin login credentials with security Q&A
- **Customer** — Quotation requests submitted by clients
- **Compro** — Completed projects with profit tracking

> SQL setup script located at `full_admin/database.txt`

---

## ⚙️ Setup & Installation

### Prerequisites
- [XAMPP](https://www.apachefriends.org/) (Apache + MySQL + PHP)

### Steps

1. Clone or copy the project folder into your XAMPP `htdocs` directory:
   ```
   C:\xampp\htdocs\Design_inside\
   ```

2. Start **Apache** and **MySQL** from the XAMPP Control Panel.

3. Open [phpMyAdmin](http://localhost/phpmyadmin) and run the SQL from:
   ```
   full_admin/database.txt
   ```

4. Open the site in your browser:
   ```
   http://localhost/Design_inside/
   ```

5. Access the admin panel at:
   ```
   http://localhost/Design_inside/full_admin/
   ```

---

## 📁 Project Structure

```
Design_inside/
├── Assets/
│   ├── Images/          # Gallery & UI images
│   └── Videos/          # Hero background video
├── full_admin/          # Admin panel (PHP)
│   ├── admin/           # Dashboard, customers, completed projects
│   └── database.txt     # SQL schema & seed data
├── index.html           # Home page
├── service.html         # Services page
├── project.html         # Projects / gallery page
├── about_us.html        # About Us page
├── quotation_form.php   # Client inquiry form
├── script.js            # Shared JS (gallery slider, hamburger menu)
└── *.css                # Page-specific stylesheets
```

---

## 👥 Developers

Developed by **Tanmay Bhogekar** & **Kabir Bundele** — MCA First Year Mini Project, 2025.

---