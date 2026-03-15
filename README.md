# 🛒 Inventory Control System

This project is a simple **Inventory Management System** built using **PHP, MySQL, HTML, and CSS**.  
It helps manage products, track purchases and sales, and monitor stock levels.

---

## 📊 Features

- Add new products
- Edit product details
- Delete products
- View stock inventory
- Record purchases
- Record sales
- Login system for users
- Dashboard for inventory overview

---

## 🛠 Tools Used

- PHP
- MySQL
- HTML
- CSS
- XAMPP (Apache & MySQL)
- phpMyAdmin

---

## 📂 Project Files

- `index.php` – Main page
- `login.php` – User login
- `dashboard.php` – Dashboard
- `add_product.php` – Add new product
- `edit_product.php` – Edit product
- `delete_product.php` – Delete product
- `view_stock.php` – View stock
- `purchase.php` – Purchase entry
- `sale.php` – Sales entry
- `db.php` – Database connection
- `style.css` – Styling

---

🚀 How to Run the Project

1. Install XAMPP on your computer.

2. Open XAMPP Control Panel and start:
   
   - Apache
   - MySQL

3. Copy the project folder into the XAMPP directory:

C:\xampp\htdocs\inventory_project

4. Open your browser and go to:

http://localhost/phpmyadmin

5. Create a new database named:

inventory_db

6. Import the project database file ("inventory_db.sql") into the database.

7. Make sure the database connection in db.php is correct:

$conn = mysqli_connect("localhost","root","","inventory_db");

8. Open your browser and run the project:

http://localhost/inventory_project

9. The Inventory Control System will open in your browser.

10. ---

## 👨‍💻 Author

**Sai Tharun**

GitHub: https://github.com/sai14375
