# Inventory-Management-System

Requirements:

1. PHP version-^7.3|^8.0, Laravel version-^8.75
2. composer
3. phpMyAdmin

To Run The Project:

1. Start Apache and MySQL in XAMPP.
2. Create a DB named 'ims' in phpMyAdmin.
3. Clone the project.
4. Go inside the project folder (Inventory-Management-System) and run the following commands one by one in git bash / cmd:
   1. composer install
   2. cp .env.example .env /rename (.env.example) to (.env) if you face any error with the command.
   3. Go inside the .env file and change the DB name to 'ims'.
   4. php artisan migrate
   5. php artisan db:seed
   6. php artisan key:generate
   7. php artisan serve

Login credential:

Username: user1
password: user@123

Project Pictures:

![1-login](https://github.com/talha-51/Inventory-Management-System/assets/77994433/f58c7542-0d1e-4a01-9b46-a9f2c1040182)

![2-home](https://github.com/talha-51/Inventory-Management-System/assets/77994433/9feb7eb5-c35d-4b86-88ee-c2a4ea68c2d6)

![3-userList](https://github.com/talha-51/Inventory-Management-System/assets/77994433/e07b7af9-3c81-4173-9860-53270ecbf500)

![4-addNewUser](https://github.com/talha-51/Inventory-Management-System/assets/77994433/c0b32972-0baf-4730-92ff-aba5ecba0ec3)

![5-productList](https://github.com/talha-51/Inventory-Management-System/assets/77994433/6f8cfe4c-c125-41d4-821f-9722ee251f80)

![6-addProduct](https://github.com/talha-51/Inventory-Management-System/assets/77994433/25c956a8-bc5e-433b-afa4-add2d9d42df8)

![7-editProduct](https://github.com/talha-51/Inventory-Management-System/assets/77994433/5761c79b-b91d-4ce8-8e8e-5ecaf87e3975)
