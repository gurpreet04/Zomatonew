<?php
$id= $_GET['id'];


$conn = new mysqli('localhost', 'root', '', 'user');
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}	

//Select data from Resturant table

$sql = "select * from item where item.rid =".$id;
$result = mysqli_query($conn, $sql);

echo "<h1>Resturant Details: </h1>";


	//Output data
	while($row=mysqli_fetch_assoc($result))
		{
			$restro_item = $row['item'];
			
			 //echo $row['id'];
			echo "$restro_item";
			echo "<br>";
	
		}


mysqli_close($conn);





?>