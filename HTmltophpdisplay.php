<?php


include("databaseconn.php");

$id=$_POST["classid"];
$day=$_POST["day"];
$cour=$_POST["course"];
$p=$_POST["period"];


$ins="INSERT INTO classtt (class_id,day,period,course) values('$id','$day','$p','$cour')";

$run=mysqli_query($conn,$ins);

if($run){
	echo "new data has been succesfully inserted";
}else
{
	echo "new data has NOT been succesfully inserted as there is a period already alloted";
}


?>