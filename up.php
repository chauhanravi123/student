<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php
    $con=mysqli_connect("localhost","root","","ravi");
    if(isset($_POST['update']))
        {
            $id=$_POST['id'];
            $nm=$_POST['name'];
		    $dep=$_POST['department'];
		    $date=$_POST['date'];
		    $mno=$_POST['mobileno'];
		    $salary=$_POST['salary'];
            $sql="UPDATE `student` SET `name`='$nm',`department`='$dep',`date`='$date',`mobileno`='$mno',`salary`='$salary' WHERE `id`='$id'";
            $result=mysqli_query($con,$sql);
            if($result==1)
              {
                echo "Record updated successfully.";
                header('Location:table1.php');
              }
              else
                {
                    echo "Error:" . $sql . "<br>" . $conn->error;
                }
        }
        if(isset($_GET['id']))
			{
				$id=$_GET['id'];
				$sql="SELECT  * FROM student WHERE id='$id'";
				$result=mysqli_query($con,$sql);
				if($result==TRUE)
				{
					while($row=mysqli_fetch_assoc($result))
					{
						   $id=$row['id'];
						   $nm=$row['name'];
						   $dep=$row['department'];
						   $date=$row['date'];
						   $mno=$row['mobileno'];
						   $salary=$row['salary'];
					}
?>
		<center>
		<h2>EMPLOYEE UPDATE FORM</h2>
		</center>
		<div class="container">
			<form action="" method="POST">
				<fieldset>
					<legend>employee information:</legend>
					NAME:<br>
					<input type="name" name="name" class="container mt-3 w-100" value="<?php echo $nm;?>">
					<br>
					DEPARTMENT:<br>
					<input type="text" name="department" class="container mt-3 w-100" value="<?php echo $dep;?>"> 	                 			
					<br>
					DATE:<br>
					<input type="date" name="date"  class="container mt-3 w-100" value="<?php echo $date; ?>">
					<br>
					MOBILE NUMBER:<br>
				 <input type="text" name="mobileno" pattern="[0-9]{1}[0-9]{9}" 
					title="Phone number with 0-9 and remaing 9 digit with 0-9" class="container mt-3" value="<?php echo $mno; ?>" >
  				   SALARY:<br>
					<input type="number" name="salary"  class="container mt-3 w-100"  value="<?php echo $salary;               ?>" >  <br><br>
					     <input type="submit" value="Update" class="container my-2 w-100 btn btn-primary" name="update">
				</fieldset>
			</form>
		</div>
		  </body>
        </html>
	 <?php
	}
	else{
        header('Location:table1.php');
    }
}
?>
