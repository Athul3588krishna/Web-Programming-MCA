<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Odd Even checker</h3>

    <form method="get">

Enter a number: <input type="number" name="num"><br><br>
<input type="submit" value="check">
</form>

<?php

$_num=$_GET['num'];

if ($_num%2 == 0){
    echo "The number is even ";
}else{
    echo "The number is odd";
}
?>



</body>
</html>