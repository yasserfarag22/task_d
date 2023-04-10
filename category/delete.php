<?php
// Include database connection file
include 'db.php';

// Get category ID from URL
$id = $_GET['id'];

// Delete category from database
$sql = "DELETE FROM categories WHERE id = $id";
mysqli_query($conn, $sql);

// Redirect back to index page
header("Location: index.php");
