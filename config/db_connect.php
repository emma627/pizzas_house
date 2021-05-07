<?php 
//connect to the database
$conn = mysqli_connect('localhost:8889','Emma','test1234','didi-pizza');

echo "test";
//check connection
if(!$conn){
	echo 'database connection error:' . mysqli_connect_error();
}


 ?>