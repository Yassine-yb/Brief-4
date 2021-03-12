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

include("securite.php");

include('conne.php');
if(isset($_POST['ajouter'])){
    if(!empty($_POST['nomA'])&& !empty($_POST['prenomA'])&&!empty($_POST['dateN'])){
    
        $nomA=$_POST['nomA'];
        $prenomA=$_POST['prenomA'];
        $dateN=$_POST['dateN'];
        $srcA=$_FILES['srcA']['name'];

        move_uploaded_file($_FILES['srcA']['tmp_name'],"images/".$srcA);

        $query="INSERT INTO auteur (nom,prenom,dateN,srcA)value('$nomA','$prenomA','$dateN','$srcA')";
        mysqli_query($con,$query);
        header("Location:our-authorAdmin.php");
    }else {
        echo("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Tous les champs obligatoir');
        </SCRIPT>");
            
    }

}


?>


    <div class="page6">

    <header>

        <div class="topnav">

            <div class="logo"> 
                <a href="indexAdmin.php"><img src="images/yf.png" alt="logo"></a> 
            </div>
            
            <div class="topnav-content">
                <a href="indexAdmin.php"><i class="fa fa-fw fa-home"></i> Home</a> 
                <a  href="Our-BookAdmin.php"><i class="fa fa-book"></i> Nos Livres</a> 
                <a  class="active" href="our-authorAdmin.php"><i class="fa fa-user-plus"></i> Nos Auteurs</a>
                <a href="logout.php" name="logout" action="" method="POST"><i class=" fa fa-sign-in"></i>LogOut</a>
            </div>

            <img src="images/nav-icon.png" class="iconenav" alt="barssolid" onclick="nav()"> 
            
        </div>


    </header>

        <!--========================================================================-->


        <div class="form-bg1">
            

                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">


                    <div class="form-content">

                        <div class="d3">
                            <img src="images/addpic.png" alt="addpic" id="addpic">
                            <input type="file" alt="picture" class="fileup" accept=".png, .jpg, .jpeg" name="srcA" data-id='addpic'  style="opacity:0;">
                        </div>

                        <div class="content">
                            <div class="d1">
                                <label for="fname">First Name</label>
                                <input type="text" id="fname" name="nomA" placeholder="First name..">
                            </div>
                            <div class="d1">
                                <label for="lname">Last Name</label>
                                <input type="text" id="lname" name="prenomA" placeholder="Last name..">
                            </div>
                            <div class="d1">
                                <label for="sexe">Author</label>
                                <select id="sexe" name="sexe">
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select>
                            </div>
                            <div class="d1">
                                <label for="Date Naissance">Date de Naissance:</label>
                                <input type="date" id="dateN" name="dateN">
                            </div>
           
                        </div>
                    </div>  

                    <input type="submit" value="Submit" name="ajouter">
                </form>


        </div>    

    </div>

        <!--========================================================================-->

        <script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
    
    <!--JavaScript-->
    <script type="text/javascript" src="all.js"></script>


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
