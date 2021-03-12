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
    <script type="text/javascript" src=""></script>  
    <title>Book WebSite</title>

</head>

<body>
    <?php 
        include("securite.php");
        include("conne.php");
        
        if (isset($_POST['modifier'])) {
            if(!empty($_POST['titre'])&& !empty($_POST['dateCreation'])&&!empty($_POST['Prix'])) {
                $id =(isset($_GET['id']) ? $_GET['id'] : '');
                $titre=$_POST['titre'];
                $dateCreation=$_POST['dateCreation'];
                $Prix=$_POST['Prix'];
                $src=$_FILES['src']['name'];

                move_uploaded_file($_FILES['src']['tmp_name'],"images/".$src);

                $edit="UPDATE livre SET titre='$_POST[titre]', dateCreation='$_POST[dateCreation]',prix='$_POST[Prix]', src='$src' where idL=$id";
                $query=mysqli_query($con,$edit) or die(mysqli_error($con));

                header("Location:Our-BookAdmin.php");
            }else {
                echo("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Tous les champs obligatoir');
                </SCRIPT>");
            }


            if($query==1){

                $idautour= $_POST["auteur"];
                $in="UPDATE livreauteur SET idA=$idautour where idL=$id";
                $que=mysqli_query($con,$in) or die(mysqli_error($con));

                if($que==1){
                    echo "Payement done";
                }
                
            }


        }
    
    ?>


    <div class="page7">

    <header>

        <div class="topnav">

            <div class="logo"> 
                <a href="index.php"><img src="images/yf.jpg" alt="#"></a> 
            </div>
            
            <div class="topnav-content">
                <a href="indexAdmin.php"><i class="fa fa-fw fa-home"></i> Home</a> 
                <a class="active" href="Our-BookAdmin.php"><i class="fa fa-book"></i> Nos Livres</a> 
                <a href="our-authorAdmin.php"><i class="fa fa-user-plus"></i> Nos Auteurs</a>
                <a href="logout.php" name="logout" action="" method="POST"><i class=" fa fa-sign-in"></i>LogOut</a>
            
            </div>

            <img src="images/nav-icon.png" class="iconenav" alt="barssolid" onclick="nav()"> 
            
        </div>


    </header>

        <!--========================================================================-->

        <div class="form-bg2">
            

                <form action="<?php $_SERVER['PHP_SELF']?>"  method="POST" enctype="multipart/form-data">

                    <div class="form-content">

                        <div class="d2">
                            <img src="images/addpic.png" alt="" id="addpic">
                            <input type="file" alt="picture" class="fileup" accept=".png, .jpg, .jpeg" name="src" data-id='addpic'  style="opacity:0;">
                        </div>

                        <div class="content">
                            <div class="d1">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="titre" placeholder="Title">
                            </div>
                            <div class="d1">
                                <label for="price">Price</label>
                                <input type="text" id="price" name="Prix" placeholder="Price">
                            </div>
                            <div class="d1">
                                <label for="auteur">Auteur</label>
                                <select name="auteur">
                                    <?php
                                        $query = mysqli_query($con,"SELECT * from auteur");
                                        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
                                            echo "<option value='".$row['id']."'>".$row['nom']."</option>";
                                    ?>
                                </select>
                            </div>
                            <div class="d1">
                                <label for="Date Naissance">Date de Création:</label>
                                <input type="date" id="dateC" name="dateCreation">
                            </div>
                        </div>

    
                    </div>
                    <input type="submit" value="Modifier" name="modifier">
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
                <a href="#"><img src="images/facebook.png"></a>
                <a href="#"><img src="images/instagram.png"></a>
                <a href="#"><img src="images/linkedin.png"></a>
                <a href="#"><img src="images/Twitter.png"></a>
             </div>

        </div>
        
        
     </div>
</footer>
</html>
