<?php

$conn = new mysqli('localhost', 'root', '', 'user');
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}	

// sql to create table
$sql = "CREATE TABLE Resturant (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
resto VARCHAR(30) NOT NULL)";

$sql1 = "CREATE TABLE Item (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
item VARCHAR(30) NOT NULL,
restro VARCHAR(30) NOT NULL,
rid INT(6) UNSIGNED ,
foreign key(rid) references Resturant(id)
)";



if ($conn->query($sql1) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}





$conn->close();




?>