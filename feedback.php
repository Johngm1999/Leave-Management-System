<?php
//include_once 'database.php';
$sql='';	
require('top.inc.php');

if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $image = $_SESSION['IMAGE'];
	 $feedback = $_POST['feedback'];
	$department_id= $_SESSION['DEPARTMENT_ID'];
	

		 $sql = "insert into poll(name,email,image,feedback,department_id)VALUES ('$name','$email','$image','$feedback','$department_id')";
 if (mysqli_query($con, $sql)) {
		if($_SESSION['ROLE']==2){
		header('location:add_leave3.php');
		}elseif($_SESSION['ROLE']==3){
		header('location:add_leave2.php');
		}else{
		header('location:add_leave.php');}	
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}
?>