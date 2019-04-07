<?php
include_once('conn.php');

$id = $_GET['id'];
$data="select * from user where id='$id'";
$run= mysqli_query($conn,$data);
$data1=mysqli_fetch_assoc($run);
?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Student Detail</h2>

<table>
  <tr>
  	<th>registration no.</th>
    <th>Name</th>
    <th>password</th>
   
  </tr>
  <tr>
    <td><?php echo $data1['userid'] ?></td>
    <td><?php echo $data1['name'] ?></td>
    <td><?php echo $data1['password'] ?></td>
  </tr>
 
 
</table>

</body>
</html>




