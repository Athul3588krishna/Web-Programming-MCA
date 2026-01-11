<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Handling</title>
</head>
<body>

<h3>Reg Form - Student</h3>

<form method="post">
    Roll No:
    <input type="number" name="num" required><br><br>

    Name:
    <input type="text" name="nme" required><br><br>

    Email:
    <input type="email" name="email" required><br><br>

    Address:
    <input type="text" name="addre" required><br><br>

    <input type="submit" value="Check">
</form>

<?php
if (isset($_POST['num'])) {

    $rollno = $_POST['num'];
    $name = $_POST['nme'];
    $email = $_POST['email'];
    $address = $_POST['addre'];

    echo "The roll no is : $rollno <br>";
    echo "The name is : $name <br>";
    echo "The email is : $email <br>";
    echo "The address is : $address <br>";
}
?>

</body>
</html>
