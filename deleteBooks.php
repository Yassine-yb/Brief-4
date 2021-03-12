<?php
//including the database connection file
include("conne.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($con, "DELETE FROM livre WHERE idL=$id");

//redirecting to the display page (index.php in our case)
header("Location:Our-BookAdmin.php");
?>