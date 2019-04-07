<?php   
include('conn.php');

// if (isset($_POST['submit'])){

// 	$name = $_POST['name'];

// 	$password = $_POST['password'];

// 	$q="INSERT INTO `user`(`name`, `password`) VALUES ('$name','$password')";

// 	$query = mysqli_query($conn,$q);
// }


?>






<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<center> 
	<form method="POST" action="insert.php">
 
    <h1>Fill form</h1>
    <hr>
    <label for="name"><b>Username</b></label> : 
    <input type="text" placeholder="Enter username" name="name">
<br><br>
 <label for="password"><b>Password</b></label> : 
    <input type="text" placeholder="Enter password" name="password">
<br><br>
    <button type="submit" name="submit">Submit</button>

</form>
</center>
</body>
</html>
