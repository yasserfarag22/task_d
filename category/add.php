<?php
// Include database connection file
include 'db.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = $_POST['name'];
    $description = $_POST['description'];



    // Insert new category into database
    $sql = "INSERT INTO categories (name, description) VALUES ('$name', '$description')";
    mysqli_query($conn, $sql);

    // Redirect to index page
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Category</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Add Category</h1>
        <form method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Category</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>

</html>