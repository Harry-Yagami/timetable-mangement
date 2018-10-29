<?php


include("databaseconn.php");

$nam=$_POST['fname'];
$dept=$_POST["dept"];
$cour=$_POST["course"];


$ins="INSERT INTO Faculty (facultyname,course_id,dept_no) values('$nam','$cour','$dept')";

$run=mysqli_query($conn,$ins);

if($run){
	echo "new data has been succesfully inserted";
}else
{
	echo "new data has NOT been succesfully inserted";
}


?>