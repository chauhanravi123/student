<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<div class="container">
			<form action="" method="POST">
				<label for="name" >ENTER YOUR NAME:</label>
					<input type="text" name="name" class="container mt-3" required>
				<label for="name" >ENTER YOUR DEPARTMENT:</label>
					<input type="text" name="department" class="container mt-3" required>
		   <div class="col">
        <label for="date">Date</label>
        <input type="date" class="form-control" id="date" 
          name="date">
      </div>
				<label for="name" >ENTER YOUR MOBILE NO:</label>
					<input type="text" name="mobileno" pattern="[0-9]{1}[0-9]{9}" 
       title="Phone number with 0-9 and remaing 9 digit with 0-9" class="container mt-3" required>
				<label for="name" >ENTER YOUR SALARY	:</label>
					<input type="number" name="salary" class="container mt-3" required>
				<input type="submit" value="save" class="btn btn-primary w-100 mt-3" required>
				<input type="submit" value="clear" class="btn btn-danger w-100 mt-3" required>
			</form>
		</div>
	<?php
	   $con=mysqli_connect("localhost","root","","ravi");
	   if(isset($_POST['name']))
	   {
		   $nm=$_POST['name'];
		   $dep=$_POST['department'];
		   $date=$_POST['date'];
		   $mno=$_POST['mobileno'];
		   $salary=$_POST['salary'];
		   $sql="INSERT INTO `student` (`name`,`department`,`date`,`mobileno`,`salary`) VALUES('$nm','$dep','$date','$mno','$salary')";
		   $result=mysqli_query($con,$sql);
		   if($result!=1)
		   {
			   echo "invalid";
		   }
	   }
	?>
	<?php
	  include 'table1.php';
	?> 

