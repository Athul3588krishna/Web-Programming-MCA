<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Details</title>
</head>
<body>

<h2>Enter Employee Details</h2>

<form method="post">
    Emp ID:
    <input type="number" name="emp_id" required><br><br>

    Name:
    <input type="text" name="name" required><br><br>

    Designation:
    <input type="text" name="designation" required><br><br>

    Salary:
    <input type="number" name="salary" required><br><br>

    <input type="submit" name="submit" value="Add Employee">
</form>

<hr>

<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "company");

if (!$conn) {
    die("Connection failed");
}

// Insert data
if (isset($_POST['submit'])) {

    $emp_id      = $_POST['emp_id'];
    $name        = $_POST['name'];
    $designation = $_POST['designation'];
    $salary      = $_POST['salary'];

    $sql = "INSERT INTO employee_details 
            VALUES ('$emp_id', '$name', '$designation', '$salary')";

    if (mysqli_query($conn, $sql)) {
        echo "<b>Employee inserted successfully</b><br><br>";
    } else {
        echo "Error: Employee ID already exists<br><br>";
    }
}

// Display data
$result = mysqli_query($conn, "SELECT * FROM employee_details");

echo "<h2>Employee Details</h2>";
echo "<table border='1' cellpadding='8'>
        <tr>
            <th>Emp ID</th>
            <th>Name</th>
            
            <th>Designation</th>
            <th>Salary</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['emp_id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['designation']}</td>
            <td>{$row['salary']}</td>
          </tr>";
}

echo "</table>";

mysqli_close($conn);
?>

</body>
</html>
