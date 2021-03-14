<!DOCTYPE html>


<html>

<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Put your description here.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- style css -->
    <link rel="stylesheet" href="style.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=Unna:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One&family=Parisienne&family=Unna:wght@700&display=swap" rel="stylesheet">


    <!--JavaScript-->
    <script type="text/javascript" src="all.js"></script> 

    <title>Book WebSite</title> 

</head>

<body>
        <?php
            include("conne.php");
            session_start();
            if(isset($_POST['seconnecter'])){
                $username=$_POST['username'];
                $password=$_POST['password'];

                $query="SELECT * FROM admin where username='$username' && password='$password'";
                if($row=mysqli_num_rows(mysqli_query($con,$query))>0){
                    $_SESSION['login']=$username;
                    header('Location:indexAdmin.php');
                }else{
                    echo("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Invalid Login or Password');
                    </SCRIPT>");
                }
            }
                
        ?>


    <div class="page5">

    <header>

        <div class="topnav" style="margin-top:1.4vh;">

        <div class="logo"> 
                <a href="index.php"><img src="images/yf.png" alt="logo"></a> 
            </div>
            
            <div class="topnav-content">
                <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
                <a href="gallery.php"><i class="fa fa-film"></i> Gallerie</a> 
                <a class="active" href="Login.php"><i class=" fa fa-sign-in"></i> Sign-In</a>
               
            </div>


            <img src="images/nav-icon.png" class="iconenav" alt="barssolid" onclick="nav()">
            
        </div>
    </header>

    <div class="nav" id="nav">
        <div class="nav-cont">
            <a href="index.php">Home</a> 
        </div>
        <div class="nav-cont">
            <a href="gallery.php">Gallerie</a>
        </div>
        <div class="nav-cont">
            <a class="active" href="Login.php">Sign-In</a> 
        </div>                      
    </div>

        <!--========================================================================-->


        <div class="lg-bg">
            <form  class='form' action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="imgcontainer">
                    <img src="images/avatar.jpg" alt="Avatar" class="avatar">
                </div>

                <h2>Welcome Admin</h2>
            
                <div class="container1">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required>
                
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                        
                    <button type="submit" name="seconnecter">Login</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>
                    
                </div>
            </form>
        </div>    

    </div>

        <!--========================================================================-->



</body>


<footer>

    <div class="footer-box">
        <div class="footer-content">

            <div class="follow">
                <p>Follow Us</p>
            </div>

            <div class="media-icon">
                <a href="#"><img src="images/facebook.png" alt="footer"></a>
                <a href="#"><img src="images/instagram.png" alt="footer"></a>
                <a href="#"><img src="images/linkedin.png" alt="footer"></a>
                <a href="#"><img src="images/Twitter.png" alt="footer"></a>
             </div>

        </div>
        
        
     </div>
</footer>
</html>
