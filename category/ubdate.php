<?php
// Include database connection file
include 'db.php';

// Get category data from form
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];

// Update category in database
$sql = "UPDATE categories SET name = '$name', description = '$description' WHERE id = $id";
mysqli_query($conn, $sql);

// Redirect back to index page
header("Location: index.php");
