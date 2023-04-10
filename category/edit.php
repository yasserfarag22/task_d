<?php
// Include database connection file
include 'db.php';

// Get category ID from URL
$id = $_GET['id'];

// Fetch category from database
$sql = "SELECT * FROM categories WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Category</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Edit Category</h1>
        <form method="POST">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="form-group">
                <label>Description:</label>
                <textarea name="description" class="form-control"><?php echo $row['description']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>

</html>

<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get category data from form
    $name = $_POST['name'];
    $description = $_POST['description'];

    // Update category in database
    $sql = "UPDATE categories SET name = '$name', description = '$description' WHERE id = $id";
    mysqli_query($conn, $sql);

    // Redirect back to index page
    header("Location: index.php");
}
?>