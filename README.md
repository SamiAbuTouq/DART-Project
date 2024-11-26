# 🌟 **Digital Access to Remarkable Treasures (DART)** 🌟

This project is a **fully functional e-commerce website** that allows users to browse, sign up, sign in, add items to their cart, and complete purchases. It is designed to provide a seamless user experience with a focus on simplicity and usability. Built with **PHP**, **MySQL** for database management, and **HTML/CSS** for the front end.

---

## 🎯 **Project Goals**

- **Customer-Centric Experience**: Create a seamless and personalized shopping experience for all users. 🛍️
- **Market Expansion**: Continuously grow product offerings and expand into new markets. 🌍
- **Community Engagement**: Build a vibrant community around the DART brand. 🤝
- **Security & Performance**: Ensure high security, fast performance, and scalability of the platform. 🔒⚡

---

## 🛠️ **Features**

- **User Authentication**: Sign up and login functionalities for customers to securely register and authenticate themselves. 🔐
- **Cart Management**: Add, update, and remove items from the shopping cart. 🛒
- **Responsive Design**: Fully responsive layout to ensure compatibility with all devices, from desktops to mobile devices. 📱💻
- **Password Validation**: Front-end and back-end validation for password strength and formatting. 🔑

---

## 💡 **How It Works**

1. **User Registration**:  
   - Users provide their **name**, **email**, **phone number**, and **password** to register.  
   - The system checks for existing users to prevent duplicates and stores the details in the database. 📂
   
2. **User Login**:  
   - Users log in using their **email** and **password**.  
   - Credentials are validated against the database for secure access. ✅

3. **Shopping Cart**:  
   - Logged-in users can **add products** to their cart.  
   - The cart is saved in the session, enabling users to manage their items easily. 🛍️

4. **Order Placement & Payment**:  
   - After confirming the cart contents, users place orders and make payments via **credit card** or **PayPal**. 💳💰

5. **Order Confirmation**:  
   - A confirmation page appears after purchase, and an email with order details and shipping information is sent. 📧

6. **Error Handling**:  
   - Real-time error messages notify users of issues, such as **incorrect passwords**, **missing fields**, or **duplicate entries**. ⚠️

7. **Database Interaction**:  
   - MySQL handles the database for storing **user information**, **products**, **orders**, and **cart items**. 🔄

---

## 🗄️ **Database Structure**

The project uses a relational database to manage the various aspects of the application, including customer information, products, orders, and shopping carts.

- **Users Table**: Stores user data, including account details and order history. 👤
- **Products Table**: Contains product information such as name, description, price, and stock. 🏷️
- **Orders Table**: Tracks customer orders with shipping and payment details. 📦
- **Cart Table**: Stores items users add to their cart. 🛒
- **Transactions Table**: Holds payment transaction data. 💳

**Database Schema Design Summary**:  
The relational integrity ensures consistency and efficient data retrieval for smooth user interactions, order processing, and cart management. Tables are linked using foreign keys to maintain relationships between users, orders, and cart items.

---

### 📂 **Additional Files:**
- **`dart.sql`**: Contains the database schema and SQL queries for creating the necessary tables in MySQL. 💻
- **`DB tables diagram.pdf`**: A visual diagram of the database tables and their relationships. 📊

---

## 🔄 **Project Workflow**

1. **Database Setup**:  
   - Create a MySQL database with tables for `customers`, `cart_items`, `products`, etc.  
   - The system interacts with the database for **user authentication**, **registration**, and **cart management**. 🗄️

2. **Backend Logic**:  
   - **PHP** handles business logic, such as user registration, login, and cart management.  
   - SQL queries and **prepared statements** ensure secure data handling. 🔒

3. **Frontend Implementation**:  
   - **HTML** and **CSS** for structuring and styling the website.  
   - **JavaScript** and **jQuery** for front-end interactions like **form validation** and **dynamic content updates**. 💻

4. **Session Management**:  
   - **PHP sessions** manage user login states and shopping carts. 👤🛒

---

## 🔑 **Key Advantages**

- **Secure Authentication**: Sessions are used to maintain user login states securely. 🔐
- **Responsive Design**: User-friendly experience across all devices. 📱💻
- **Real-time Validation**: Password strength and phone number format validated both on the client and server sides. ⚡
- **Error Handling**: Immediate notifications for issues like duplicate emails or incorrect passwords. ❌
- **Order Tracking**: Users can track their orders and view past purchases. 📦
- **Secure Payment**: Multiple payment options, all secured with encryption. 💳🔒
- **Easy Maintenance**: Modular design for easy updates and maintenance. 🛠️
- **Scalability**: Easily scalable for integrating new features like product categories or order management. 📈

---

## 🛠️ **Technologies Used**

- **PHP**: Handles server-side logic for user authentication, product retrieval, and order management. 💻
- **MySQL**: Database management for storing user and cart data. 🗄️
- **HTML/CSS**: For frontend development and responsive design. 🌐
- **JavaScript (with jQuery)**: Manages front-end interactions like form validation and dynamic content updates. 📜
- **Bootstrap**: Front-end framework for responsive design and layout. 💡

---

## ⚙️ **Getting Started**

To set up and run this project locally:

1. Clone the repository to your local machine. 🖥️
2. Set up a MySQL database using the provided schema. 🗄️
3. Update the database connection details in `connectToDB.php`. 🔧
4. Open the project in a local server environment (e.g., XAMPP, WAMP, MAMP). 🌐
5. Access the application via `localhost` in your browser. 🌟

---

## 🏁 **Conclusion**

This project demonstrates how a **simple yet powerful e-commerce platform** can be created using **PHP**, **MySQL**, and **Bootstrap**. It offers a robust solution for managing users, products, and orders while providing a clean and responsive user interface.  

The project was completed as a **team effort**, with contributions from **Mohammed**, **Yazan Bdair**, and **Sami Abu Touq**. 🙌

---

This README offers a comprehensive overview of the project, database structure, and technologies used. For further questions or suggestions, feel free to open an issue or contact the project team. 👩‍💻👨‍💻
