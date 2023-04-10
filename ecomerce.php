<?php
$servername = "localhost";
$username = "your_username";
$password = "";
$dbname = "ecomerce";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sqle = "CREATE DATABASE ecomerce";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

//////////////////////////// table 1 ///////////////////

$sql = "CREATE TABLE products (
    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   ` name` VARCHAR(50) NOT NULL,
    `description` TEXT,
    `price` FLOAT(8,2) NOT NULL,
    )";
if (mysqli_query($conn, $sql)) {
    echo "Table products created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "INSERT INTO products (`name`, `description`, `price`) VALUES ('mobile', ' Description', 194)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//////////////////////////// table 2 ///////////////////
$sql = "CREATE TABLE customers (
    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   ` name` VARCHAR(50) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    )";
if (mysqli_query($conn, $sql)) {
    echo "Table products created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "INSERT INTO customers (`name`, `email`, `password`) VALUES ('yasser', ' yasser@dgfgd', 1445445)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



//////////////////////////// table 3 ///////////////////

$sql = "CREATE TABLE categories   (
    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(50) NOT NULL,
    `description` TEXT,
    )";
if (mysqli_query($conn, $sql)) {
    echo "Table products created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "INSERT INTO `products` (`name`, `description`, ) VALUES ('cars', ' Description')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
