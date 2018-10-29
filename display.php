<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="Amrita University Timetable management">
                <meta name="keywords" content="timetable, management, generation">
                <meta author="akhilprophp coder,next generation coder kamal,just noob front end dev amrit,review credits Gotipie">
  		

		<title>Timetable Management and Generation System</title>
		<link rel="stylesheet" href="./css/style.css">
 
			<nav>
			<ul>
				<li><a href="display.php">Home</a></li>
				<li><a href="addfaculty.php">Add Faculty</a></li>
				<li><a href="addcourse.html">Add Course</a></li>
			</ul>
			</nav>
		</div>
	</header>
	

	<section id="showcase">
		<div class="container">
			<h1>TimeTable Management & Generation System</h1>
			<p>Amrtia Bangalore TimeTable Management & Generation System</p>
		</div>
	</section>
	
	<form action="HTmltophpdisplay.php" method= "POST">
	        <select name="classid">
		  <option value="" disabled selected>Class id</option>
		  <?php

			include("databaseconn.php");

			$query="SELECT * FROM class";

	$runsql=mysqli_query($conn,$query);

		 if (mysqli_num_rows($runsql) > 0) {
		while($result=mysqli_fetch_assoc($runsql))
		{

			?>
		  
		  <option value="<?php echo $result['class_id'] ?>"><?php echo $result['class_id'] ?></option>
		  
		  <?php }} ?>

		</select>

		<select name="day">
		  <option value="" disabled selected>DAY</option>
		  <option value="Monday">Monday</option>
		  <option value="Tuesday">Tuesday</option>
		  <option value="Wednesday">Wednesday</option>
		  <option value="Thursday">Thursday</option>
		  <option value="Friday">Friday</option>
		</select>

		<select name="period">
		  <option value="" disabled selected>Period</option>
		  <option value=1>I</option>
		  <option value=2>II</option>
		  <option value=3>III</option>
		  <option value=4>IV</option>
		  <option value=5>V</option>
		  <option value=6>VI</option>
		</select>

		<select name="course">
		  <option value="" disabled selected>Select Course</option>
		
		<?php

		//include_once 'databaseconn.php';
		
		$query="SELECT * FROM course";

		$runsql=mysqli_query($conn,$query);

		while($result=mysqli_fetch_assoc($runsql))
		{
			?>
		
		  <option value="<?php echo $result['course_id'] ?>"><?php echo $result['course_id'] ?></option>
		
		<?php  }  ?>
		
		</select>
		<button type="submit" class="button_1" required>Submit</button>
	        </form>

<footer>
      <p>Amrita CSE Dept, Copyright &copy; 2018</p>
    </footer>
</body>
</html>
