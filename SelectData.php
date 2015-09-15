<?php

$conn = new mysqli('localhost', 'root', '', 'user');
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}	

//Select data from Resturant table

$sql = "select * from resturant";
$result = mysqli_query($conn, $sql);

echo "<h1> Total Resturant : </h1>";


	//Output data
	while($row=mysqli_fetch_assoc($result))
		{
			$restro_name = $row['resto'];
			 //echo $row['id'];
			echo "<a href='Restro_details.php?id=".$row['id']." '>$restro_name</a>";
			echo "<br>";
	
		}


mysqli_close($conn);





?>