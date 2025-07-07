<?php

$name=$_GET['name'];
 $phone= $_GET['phone'];
 $email= $_GET['email'];
 $address= $_GET['address'];
 $services= $_GET['services'];

 $name_h=$_GET['name'];
 $phone_h= $_GET['phone'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit.php" method="post">
        <b>name</b><input type="text" name="name" id="" value="<?php echo $_GET['name'] ?>"><br><br>
        <b>phone</b><input type="text" name="phone" id="" value="<?php echo $_GET['phone'] ?>"><br><br>
        <b>email</b><input type="text" name="email" id="" value="<?php echo $_GET['email'] ?>"><br><br>
        <b>address</b><input type="text" name="address" id="" value="<?php echo $_GET['address'] ?>"><br><br>
        <b>services</b><input type="text" name="services" id="" value="<?php echo $_GET['services'] ?>"><br><br>
        <input type="hidden" value="<?php echo $name_h?>" name="name_h"><br><br>
        <input type="hidden" value="<?php echo $phone_h?>" name="phone_h"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>