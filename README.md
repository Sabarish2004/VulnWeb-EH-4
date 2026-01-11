# 🔐 VulnWeb-EH -- Vulnerable Web Application for Ethical Hacking

VulnWeb-EH is a deliberately vulnerable web application built to
demonstrate and test common **OWASP Top-10** web attacks.\
It is designed for **cybersecurity students, penetration testers, and
ethical hackers** to practice exploitation and remediation techniques in
a controlled environment.

## 📌 Project Objectives

-   Build a real vulnerable web application
-   Perform multiple real-world web attacks
-   Capture proof of exploitation
-   Document findings for academic & cybersecurity evaluation

## 🛠️ Technologies Used

-   Frontend: HTML, CSS
-   Backend: PHP
-   Database: MySQL (MariaDB)
-   Server: Apache (XAMPP)
-   Tools: sqlmap, Hydra

## ⚙️ Setup Instructions

1.  Install XAMPP and start Apache & MySQL.
2.  Copy VulnWeb-EH into C:`\xampp`{=tex}`\htdocs`{=tex}\
3.  Create database 'vulnweb' in phpMyAdmin.
4.  Configure db.php with MySQL credentials.
5.  Open http://localhost/VulnWeb-EH/login.php

## 💣 Attacks Implemented

-   SQL Mapping
-   Cross-Site Scripting (XSS)
-   Hydra brute-force
-   Blind Command Injection
-   Password Recovery SQL Injection

## 📸 Proof

Screenshots stored in /screenshots

## ⚠️ Legal Warning

For educational purposes only.
