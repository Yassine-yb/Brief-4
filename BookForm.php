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

      
    <title>Book WebSite</title>

</head>

<body>
    
    <?php
    
        include("securite.php");
        include('conne.php');

        if(isset($_POST['ajouter'])){
            if(!empty($_POST['titre'])&& !empty($_POST['dateCreation'])&&!empty($_POST['Prix'])) {

                $titre=$_POST['titre'];
                $dateCreation=$_POST['dateCreation'];
                $Prix=$_POST['Prix'];
                $src=$_FILES['src']['name'];

                move_uploaded_file($_FILES['src']['tmp_name'],"images/".$src);

                $insert="INSERT INTO livre (titre,dateCreation,prix,src)value('$titre','$dateCreation','$Prix','$src')";
                $query=mysqli_query($con,$insert) or die(mysqli_error($con));
                header("Location:Our-BookAdmin.php");    

            
            }else{
                echo("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Tous les champs obligatoir');
                </SCRIPT>");            
            }

            $id="SELECT LAST_INSERT_ID() FROM `livre`";
            $result=$con->query($id);
            $row = $result -> fetch_assoc();
            $idlivre=$row["LAST_INSERT_ID()"];


            

            if(!empty($_POST['auteur'])){
                $idauteur= $_POST["auteur"];
                
                $in="INSERT INTO `livreauteur`(idA,idL)value($idauteur,$idlivre)";
            }
            mysqli_query($con,$in) or die(mysqli_error($con));


            if(!empty($_POST['autre'])){
                $idautre= $_POST["autre"];
            
                    $intt="INSERT INTO `livreauteur` (idA,idL)value($idautre,$idlivre)";
                }
            mysqli_query($con,$intt) or die(mysqli_error($con));

                
        }
    ?>



    <div class="page7">

    <header>

        <div class="topnav">
            <div class="logo"> 
                <a href="indexAdmin.php"><img src="images/yf.png" alt="logo"></a> 
            </div>
            
            <div class="topnav-content">
                <a href="indexAdmin.php"><i class="fa fa-fw fa-home"></i> Home</a> 
                <a class="active" href="Our-BookAdmin.php"><i class="fa fa-book"></i> Nos Livres</a> 
                <a  href="our-authorAdmin.php"><i class="fa fa-user-plus"></i> Nos Auteurs</a>
                <a href="logout.php" name="logout" action="" method="POST"><i class=" fa fa-sign-in"></i>LogOut</a>
            </div>

            <img src="images/nav-icon.png" class="iconenav" alt="barssolid" onclick="nav()">   
        </div>

    </header>

    <div class="nav" id="nav">
            <div class="nav-cont">
                <a href="indexAdmin.php">Home</a> 
            </div>
            <div class="nav-cont">
                <a class="active" href="Our-BookAdmin.php">Nos Livres</a>
            </div>
            <div class="nav-cont">
                <a href="our-authorAdmin.php">Nos Auteurs</a> 
            </div>  
            <div class="nav-cont">
            <a href="logout.php" name="logout" action="" method="POST">LogOut</a> 
            </div>                      
    </div>
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
                                <select  name="auteur">
                                    <?php
                                    echo "<option></option>";
                                    $query = mysqli_query($con,"SELECT * from auteur");
                                    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
                                        echo "<option value='".$row['id']."'>".$row['nom']."</option>";
                                    ?>
                                </select>
                            </div>
                            <div class="d1">
                                <label for="auteur">Autre Auteur</label>
                                <select  name="autre">
                                    <?php
                                    echo "<option></option>";
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
