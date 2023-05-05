# FleetManagement
# Authors: Hanif Miyanji and Siriku Ademola

Fleet Management System
The Fleet Management System is a web application that allows users to sign up, book trucks for their transportation needs, make payments, and enables the admin to manage vehicles, view bookings, and handle billing.

Features
User Registration: Users can sign up and create an account on the platform.
Vehicle Booking: Users can search and book available trucks for their transportation requirements.
Payment Integration: Users can make secure online payments for their bookings.
Admin Dashboard: Admin users have access to a dedicated dashboard to manage vehicles, bookings, and billing.
Vehicle Management: Admin users can add new vehicles to the system and update existing vehicle information.
Booking Management: Admin users can view and manage user bookings, including approving or canceling bookings.
Billing and Invoicing: Admin users can generate bills and invoices for completed bookings.
Prerequisites
To run this project locally, you need the following:

XAMPP installed on your machine. You can download XAMPP from the official website: https://www.apachefriends.org
Installation
Clone the repository:

shell
Copy code
git clone https://github.com/your-username/fleet-management-system.git
Move the project folder to the XAMPP htdocs directory:

For Windows: C:\xampp\htdocs\
For macOS: /Applications/XAMPP/htdocs/
For Linux: /opt/lampp/htdocs/
Start XAMPP: Open the XAMPP Control Panel and start the Apache and MySQL services.

Create the database:

Open your web browser and visit http://localhost/phpmyadmin.
Create a new database named vehicle_management.
Import the database:

In the vehicle_management database, click on the "Import" tab.
Choose the file database/vehicle_management.sql from the project folder.
Click "Go" to import the database structure and data.
Access the Fleet Management System in your web browser:

perl
Copy code
http://localhost/fleet-management-system
Technologies Used
PHP (Laravel Framework)
MySQL
HTML/CSS
JavaScript
Bootstrap
Contributing
Contributions to the Fleet Management System are welcome! If you find any bugs or have suggestions for improvement, please open an issue or submit a pull request.

License
This project is licensed under the MIT License.

Authors
Hanif Miyanji hanifanwar3802gmail.com
Siriku Ademola
