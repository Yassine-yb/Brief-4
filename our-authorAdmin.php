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


    <div class="page2">

    <header>

        <div class="topnav">

            <div class="logo"> 
                <a href="indexAdmin.php"><img src="images/yf.png" alt="logo"></a> 
            </div>
            
            <div class="topnav-content">
                <a href="indexAdmin.php"><i class="fa fa-fw fa-home"></i> Home</a> 
                <a href="Our-BookAdmin.php"><i class="fa fa-book"></i> Nos Livres</a> 
                <a class="active" href="our-authorAdmin.php"><i class="fa fa-user-plus"></i> Nos Auteurs</a>
                <a href="logout.php" name="logout" action="" method="POST"><i class=" fa fa-sign-in"></i>LogOut</a>
            </div>

            <img src="../images/nav-icon.png" class="iconenav" alt="barssolid" onclick="nav()">
            
        </div>


    </header>

        <!--========================================================================-->
        
        <!-- <div class="title-a">

            <p>Gestion des Auteurs</p>
            
        </div> -->


        <?php 
            include("securite.php");
            include("conne.php");
            if(isset($_POST['ajouter'])){

            header("Location:formulaire.php");  
            }



            $query="SELECT * FROM auteur";
            $result=mysqli_query($con,$query);

            echo"<div class='table'>
            <table>
            <tr>
            <th>Id</th>
            <th>Nom</th>
            <th >Prenom</th>
            <th>date Naissance</th>
            <th style='width: 120px;'>Photo</th>
            <th>option</th>
            </tr>";
            while($row=mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td class='tab1'>".$row['id']."</td>";
                echo "<td class='tab1'>".$row['prenom']."</td>";
                echo "<td class='tab1'>".$row['nom']."</td>";
                echo "<td class='tab1'>".$row['dateN']."</td>";
                echo "<td class='tab1'> <img src='images/".$row['srcA']."' width = 60px></td>";

                echo "<td class='tab1'><a href=\"EditAuthor.php?id=$row[id]\"><i class='fa fa-pencil-square-o'></i></a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete it?')\"><i class='fa fa-trash-o'></i></a></td>";
                echo" </tr>";
                
            }
            echo"</table>";
        ?>

       
        <form action="" method="POST">
            
            <input class="ajt" type="submit" value="Ajouter Auteur" name="ajouter">

        </form>
   
    
    </div>


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
