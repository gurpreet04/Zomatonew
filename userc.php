<?php
	function isUserValid ($User, $Password) { 
	
	$md5 = md5( $Password );
	//echo $md5;
	
		
	$conn = new mysqli('localhost', 'root', '', 'user');
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}	
	$sql = "SELECT * FROM userdata WHERE Username = 'gurpreet' ";
	
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
         $Name = $row["Username"]. "<br>";
		 $Password= $row["Password"]. "<br>";
    }
}
	else 
	{
		echo "0 results";
	}
	echo $Name;
	echo $Password;
	echo $md5;

	if(strcmp($md5,$Password))
	{
		$match="true";
	}
	else{
		$match="flase";
	}
	
	
		
    return $match;
$conn->close();
} 

$match=isUserValid("gurpreet","gurpreet");
echo $match;
?>


