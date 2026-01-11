<?php
$conn = mysqli_connect("localhost", "root", "", "login_db");

if (!$conn) {
    die("Connection failed");
}

$username = $_POST['username'];
$password = $_POST['password'];

// check username exists
$sql1 = "SELECT * FROM users WHERE username='$username'";
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) == 1) {

    // username exists, now check password
    $sql2 = "SELECT * FROM users 
             WHERE username='$username' AND password='$password'";
    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) == 1) {
        // username and password match
        header("Location: success.php");
    } else {
        // username correct, password wrong
        echo "<h3>Incorrect Password</h3>";
    }

} else {
    // username not found
    echo "<h3>Incorrect Username</h3>";
}

mysqli_close($conn);
?>