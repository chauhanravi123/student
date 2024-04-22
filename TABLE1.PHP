<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
	<!--The above meta characteristics make a website 
		compatible with different devices. -->
		
	<title>EMPLOYEE DETAILS</title>
	</head>
<body >
  <div class="fluid-container my-3 ">
     <button class="btn btn-primary w-100 MY-3">
	 <a href="student.php" class="text-light"> Add user</a>
	 </button>
	 </div>
	 <center>EMPLOYEE INFORMATION</h1>
	 </center>
	 <table class="table my-5 " >
	    <thead >
		   <tr>
		    <th scope="col" >sr no</th>
		    <th scope="col" >EMPLOYEE NAME</th>
		    <th scope="col" >DEPARTMENT NAME</th>
		    <th scope="col" >DATE</th>
		    <th scope="col" >MOBILE NO</th>
		    <th scope="col" >SALARY</th>
			<th scope="col" >OPERATION</th>
		  </tr>
		 </thead>
		  <tbody >
		     <?php
			
			 $con=mysqli_connect("localhost","root","","ravi");
					$sql="select *from `student` where `id`='$id'";
					$result=mysqli_query($con,$sql);
					if($result)
						{
							while($row=mysqli_fetch_assoc($result))
								{
									$id=$row['id'];
									$nm=$row['name'];
									$dep=$row['department'];
									$date=$row['date'];
									$mno=$row['mobileno'];
									$salary=$row['salary'];
									
							echo '<tr>
									<th scope="row">'.$id.'</th>
									<td>'.$nm.'</td>
									<td>'.$dep.'</td>
									<td>'.$date.'</td>
									<td>'.$mno.'</td>
							      <td>'.$salary.'</td>		
			<td>	
				<button class="btn btn-primary">
			      <a href="up.php?id='.$id.'" class="text-light">update</a>
			  </button>			
	             <button class="btn btn-danger">
			      <a href="dl.php?id='.$id.'" class="text-light">delete</a>
			  </button>						
	
			</td>
				</tr>';
		                        }
		                   }
?>
			</tbody>
       </table>	
  </body>
</html>