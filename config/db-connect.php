<?php 
//connect to the database
$conn = mysqli_connect('localhost','Emma','test1234','didi_pizza');


//check connection
if(!$conn){
	echo 'database connection error:' . mysqli_connect_error();
}


 ?>