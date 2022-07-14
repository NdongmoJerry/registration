<?php 

include('connect.php');

if(isset($_POST['submit'])){ 

    $name = $_POST['name'] ;
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];

    $sql_insert_data = "INSERT INTO data( name, last_name, password )VALUES('$name','$last_name','$password')";

    mysqli_query($conn,$sql_insert_data) or die(mysqli_error($conn));
    
}
     


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
       
<h1>User Details </h1> 

<form method="POST" action="">

<input type="text" name="name" placeholder="username">

 <input type="text" name="last_name" placeholder="lastname">
 
<input type="password" name="password" placeholder="password">

    <button type="submit" name="submit">submit</button>
</form>
   </body>
</html>
