# Digital Access to Remarkable Treasures (DART) - E-commerce Project

This project is a fully functional e-commerce website that allows users to browse, sign up, sign in, add items to their cart, and complete purchases. The project is designed to provide a seamless user experience with a focus on simplicity and usability. It is built using PHP, MySQL for database management, and HTML/CSS for the front end.
## Project Goals

- **Customer-Centric Experience**: Create a seamless and personalized shopping experience for all users.
- **Market Expansion**: Continuously grow product offerings and expand into new markets.
- **Community Engagement**: Build a vibrant community around the DART brand.
- **Security & Performance**: Ensure high security, fast performance, and scalability of the platform.
- **Innovation**: Establish DART as a leading player in the e-commerce industry by adopting new technologies and practices.



## Features

- **User Authentication**: Sign up and login functionalities, allowing customers to register and authenticate themselves securely.
- **Cart Management**: Add, update, and remove items from the shopping cart.
- **Responsive Design**: Fully responsive layout to ensure compatibility with all devices, from desktops to mobile devices.
- **Error Handling**: Real-time error messages during sign-up and login to improve the user experience.
- **Password Validation**: Front-end and back-end validation for password strength and formatting.

## How It Works

1. **User Registration**:
   - The user registers by providing their name, email, phone number, and password.
   - The system checks for existing users based on email or phone number to prevent duplicates.
   - If no duplicates are found, the user’s details are stored in the database, and they are redirected to the main page.

2. **User Login**:
   - The user can log in using their email and password.
   - The credentials are validated against the database to ensure secure access to the platform.

3. **Shopping Cart**:
   - Once logged in, the user can add products to their cart.
   - The cart is saved in the session, allowing the user to add, view, or remove items as needed.
     
4. **Order Placement and Payment**:  
   After confirming the cart contents, users can place an order and make payments through multiple methods such as credit card or PayPal.

5. **Order Confirmation**:  
   A confirmation page is shown post-purchase, and an email is sent with order details and shipping information.

6. **Error Handling**:
   - The system provides real-time error messages if the user enters invalid data, such as incorrect passwords, missing fields, or duplicate emails/phone numbers.

7. **Database Interaction**:
   - The project interacts with the MySQL database for storing user information, products, and cart items.
---
## Database Structure

The project uses a relational database to manage various aspects of the application, including customer information, products, orders, and the shopping cart.

- **Users Table**: Stores user data, including account details and order history.
- **Products Table**: Contains product information like name, description, price, and stock.
- **Orders Table**: Tracks customer orders with shipping and payment details.
- **Cart Table**: Stores items users add to their cart.
- **Transactions Table**: Holds payment transaction data.
  
Database Schema Design Summary:
The schema design is based on relational integrity, linking customers to their orders and cart items through foreign keys. This ensures data consistency and enables efficient data retrieval for user interactions, order processing, and cart management. Each table plays a key role in maintaining a seamless shopping experience, from registration to purchase completion.

Let me know if you'd like further modifications or additional explanations for any part of this structure!







### Additional Files:
- **`dart.sql`**: Contains the database schema and SQL queries for creating the necessary tables in MySQL.
- **`DB_Tables_Diagram.pdf`**: A visual diagram of the database tables and their relationships.



## Project Workflow

1. **Database Setup**:
   - Create a MySQL database with tables for `customers`, `cart_items`, `products`, etc.
   - The system queries the database for user authentication, registration, and cart management.

2. **Backend Logic**:
   - The backend is built using PHP for handling business logic, such as user registration, login, and cart management.
   - SQL queries are used for interacting with the database, and prepared statements ensure secure data handling.

3. **Frontend Implementation**:
   - HTML and CSS are used for structuring and styling the website.
   - JavaScript is used for client-side validation, such as checking password length and phone number format.

4. **Session Management**:
   - PHP sessions are used to maintain user login status and manage the shopping cart.

## Key Advantages

- **Secure Authentication**: The system uses sessions to maintain user login states securely.
- **Responsive Design**: The application provides a user-friendly experience across all device sizes.
- **Real-time Validation**: Password strength and phone number format are validated both on the client side (via JavaScript) and server side (via PHP).
- **Error Handling**: The system ensures that the user is informed of any issues (duplicate emails, incorrect passwords, etc.) immediately.
- **Order Tracking**: Users can track orders and view past purchases.
- **Secure Payment**: Multiple payment options, all secured with encryption.
- **Easy Maintenance**: The project is modular, allowing easy maintenance and feature upgrades.
- **Scalability**: The system is designed to scale, allowing easy integration with additional features like product categories, order management, etc.

## Technologies Used

- **PHP**: Used for the server-side logic to handle user authentication, product retrieval, and order management.
- **MySQL**: For database management and storing user and cart data.
- **HTML/CSS**: For frontend development and responsive design.
- **JavaScript (with jQuery)**: JavaScript and jQuery were used to handle front-end interactions, such as form validation and dynamic content updates.
- **Bootstrap**: A front-end framework used for responsive design and layout. Components from Bootstrap, such as modals, buttons, forms, and navigation bars, were extensively used to ensure a sleek and modern user interface.



## **Getting Started**

To set up and run this project locally:
1. Clone the repository to your local machine.
2. Set up a MySQL database using the provided schema.
3. Update the database connection details in `connectToDB.php`.
4. Open the project in a local server environment (e.g., XAMPP, WAMP, MAMP).
5. Access the application via `localhost` in your browser.

## **Conclusion**

This project demonstrates how a simple yet powerful e-commerce platform can be created using PHP, MySQL, and Bootstrap. It provides a robust solution for managing users, products, and orders while offering a clean and responsive user interface. The project was completed as a team effort, with contributions from Mohammed, Yazan Bdair, and Sami Abu Touq.

---

This README provides a comprehensive overview of the project, database structure, and the technologies used. If you have any further questions or suggestions, feel free to open an issue or contact the project team.

