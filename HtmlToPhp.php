<?php
include('databaseconn.php');


$id=$_POST['id'];
$title=$_POST['title'];
$dept=$_POST['department'];
$ins="INSERT INTO course (course_id,course_title,dept_no) values('$id','$title','$dept')";

$run=mysqli_query($conn,$ins);

if($run){
	echo "new data has been succesfully inserted";
}else
{
	echo "new data has NOT been succesfully inserted";
}

?>
