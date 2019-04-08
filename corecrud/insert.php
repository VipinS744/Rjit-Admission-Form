<?php
include('conn.php');
// errorr_reporting(0);

if (isset($_POST['submit'])){

	$name = $_POST['name'];

	$password = $_POST['password'];

	$q="INSERT INTO `user`(`name`, `password`) VALUES ('$name','$password')";

	$run = mysqli_query($conn,$q);

	$last_id=mysqli_insert_id($conn);
	if ($last_id) {
		$userid="0902IT".$last_id."RJIT";
		//echo $userid;
		
		$updateid="UPDATE `user` SET `userid`='$userid' WHERE id='$last_id'";
		$update=$res=mysqli_query($conn,$updateid);
		if ($update) {
			//echo "updated";
			header('location: show.php');
		}
		else{
			echo "not updated";
		}
	}

}
?>









