<?php
//include('conn.php');
// errorr_reporting(0);


  // $name = $_POST['name'];

  // $password = $_POST['password'];

  // $q="select * from crud";

  // $run = mysqli_query($conn,$q);


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

<h2>LIST</h2>

<table>
  <tr>
    <th>S.No.</th>
    <th>Registration no.</th>
    <th>Action</th>
   
  </tr>

<?php
     include('conn.php');
     $q="select * from user";
     $run = mysqli_query($conn,$q);
     $sr_no=0;
while($res = mysqli_fetch_array($run)){

?>
  <tr>
  
    <td><?php echo ++$sr_no; ?></td>
    <td><?php echo $res['userid'] ?></td>
    <td><button><a href="view.php?id=<?php echo $res['id'];?> ">view</a> </button></td>
    
  </tr>

  <?php

}

?>
  
</table>

</body>
</html>
