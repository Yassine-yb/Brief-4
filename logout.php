 <?php 
 include("securite.php");
include("conne.php");

    unset($_SESSION['login']);
    header("Location:login.php");

?>