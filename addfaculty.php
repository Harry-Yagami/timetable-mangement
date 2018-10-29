<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
  	        <meta name="viewport" content="width=device-width">
		<meta name="description" content="Amrita University Timetable management">
                <meta name="keywords" content="timetable, management, generation">
  	        <meta name="author" content="Amrit Gupta">

		<title>Add Faculty</title>
		<link rel="stylesheet" href="./css/style.css">

</head>
<body>
	<header>
		<div class ="container">
			<div id="title_name">
				<h1>Amrita Timetable Management and Generation</h1>
			</div>
	</header>
		<section id="newsletter">
      			<div class="container">
	        <h1>Add Faculty Details</h1>
	        <form action="HtmltoPhpFaculty.php" method="POST">
	          <input type="text" name="fname" placeholder="Enter Faculty Name" required="">

		<select name="dept" required="">
		  <option value="" disabled selected>Select Department</option>
		  <option value="1">CSE</option>
		  <option value="2">ECE</option>
		  <option value="3">MECH</option>
		  <option value="4">EEE</option>
		  <option value="5">MATHS</option>
		  <option value="6">CIR</option>
		  <option value="7">CHY</option>
		</select>
		<select name="course" required="">
		  <option value="" disabled selected>Select Course</option>
		 
		 <?php
		 	include("databaseconn.php");

			$query="SELECT * FROM course";

			$runsql=mysqli_query($conn,$query);

		 
		while($result=mysqli_fetch_assoc($runsql))
		{

			?>
		  <option value="course_id"><?php echo $result['course_id'] ?></option>
		  
		  <?php } ?>

		</select>
        	  <button type="submit" class="button_1">Submit</button>
	        </form>
	      </div>
    	</section>
	<footer>
      <p>Amrita CSE Dept, Copyright &copy; 2018</p>
    </footer>
</body>
</html>
