<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Factorial of a Number</title>
</head>
<body>

<h3>Find Factorial of a Number</h3>

<form method="post">
    Enter a number :
    <input type="number" name="num" required>
    <input type="submit" value="Check">
</form>

<?php
if (isset($_POST['num'])) {

    $num = $_POST['num'];
    $fact = 1;

    for ($i = 1; $i <= $num; $i++) {
        $fact = $fact * $i;
    }

    echo "The factorial of $num is : $fact";
}
?>

</body>
</html>
