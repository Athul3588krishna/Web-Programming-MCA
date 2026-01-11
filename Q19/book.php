<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Details</title>
</head>
<body>

<h2>Enter Book Details</h2>

<form method="post">
    Book No:
    <input type="number" name="book_no" required><br><br>

    Title:
    <input type="text" name="title" required><br><br>

    Edition:
    <input type="text" name="edition" required><br><br>

    Publisher:
    <input type="text" name="publisher" required><br><br>

    <input type="submit" name="submit" value="Add Book">
</form>

<hr>

<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "library1");



if (!$conn) {
    die("Connection failed");
}

// Insert data
if (isset($_POST['submit'])) {
    $book_no   = $_POST['book_no'];
    $title     = $_POST['title'];
    $edition   = $_POST['edition'];
    $publisher = $_POST['publisher'];

    $sql = "INSERT INTO book_details 
            VALUES ('$book_no', '$title', '$edition', '$publisher')";

    if (mysqli_query($conn, $sql)) {
        echo "<b>Book inserted successfully</b><br><br>";
    } else {
        echo "Error: Book No already exists<br><br>";
    }
}

// Display data
$result = mysqli_query($conn, "SELECT * FROM book_details");

echo "<h2>Book Details</h2>";
echo "<table border='1' cellpadding='8'>
        <tr>
            <th>Book No</th>
            <th>Title</th>
            <th>Edition</th>
            <th>Publisher</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['book_no']}</td>
            <td>{$row['title']}</td>
            <td>{$row['edition']}</td>
            <td>{$row['publisher']}</td>
          </tr>";
}

echo "</table>";

mysqli_close($conn);
?>

</body>
</html>
