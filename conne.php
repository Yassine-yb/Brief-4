<?php
$con= new mysqli("localhost","root","");
if($con->connect_error){
	echo "alert('database error')";
}
mysqli_select_db($con,"gestion-biblio");
?>