<?php
 include("conne.php");
if (isset($_POST['buy'])){
    $id = $_POST['idhas'] ?  $_POST['idhas'] : "" ;
    $query = "UPDATE `livre` SET buy=buy+1 where idL=$id";
    mysqli_query($con,$query);
    header('gallery.php');
}

?>
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <title>Book WebSite</title>

</head>

<body>



    <div class="page2">

    <header>

        <div class="topnav">

            <div class="logo"> 
                <a href="index.php"><img src="images/yf.png" alt="logo"></a> 
            </div>
            
            <div class="topnav-content">
                <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
                <a class="active" href="gallery.php"><i class="fa fa-film"></i> Gallerie</a> 
                <a href="Login.php"><i class=" fa fa-sign-in"></i> Sign-In</a>
            </div>

            <img src="images/nav-icon.png" class="iconenav" alt="barssolid" onclick="nav()">
            
        </div>

    </header>
    

    <div class="nav" id="nav">
        <div class="nav-cont">
            <a href="index.php">Home</a> 
        </div>
        <div class="nav-cont">
            <a class="active" href="gallery.php">Gallerie</a>
        </div>
        <div class="nav-cont">
            <a href="Login.php">Sign-In</a> 
        </div>                      
    </div>
        <!--========================================================================-->
        <!--========================================================================-->

        <div class="filtrage">
            
                <div class="authors">
                    <label for="select"></label>
                    <select name="authors" id="select" placeholder="Select Author" onChange="trieparauthor()" >
                        <?php
                        
                           
                            echo "<option value='all'> ALL</option>";
                            $query = mysqli_query($con,"SELECT * from auteur");
                            while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
                        
                                echo " <option value='".$row['nom']."'>".$row['nom']."</option>";
                        ?>
                    </select>
                    
                </div>
                <div class="price">
                    <input type="text" class="prix" id="min" placeholder="Prix Min">
                    <input type="text" class="prix" id="max" placeholder="Prix Max">
                    <input type="button" value="search" onClick="trieparprix()" id="btn-search">
                </div>

        </div>

        <!--========================================================================-->
        <!--========================================================================-->

        <?php 
include("conne.php");
$query="SELECT * FROM livre ,livreauteur , auteur WHERE livre.idL=livreauteur.idL AND auteur.id=livreauteur.idA";


echo"<div class='cont'>
<div class='book-g'>";

if(mysqli_multi_query($con,$query)){
    if($result=mysqli_store_result($con)){


        while($row=mysqli_fetch_array($result)) {
            echo "<figure name='book'>";
                echo "<form action='gallery.php' method='POST'>";

                    echo "<figcaption name='auteur' id='auteur'>".$row['nom']."</figcaption>" ;
                    echo "<a href=''><img class='scaled' src='images/".$row['src']."'alt='book_img' /></a>";
                    echo "<input type='hidden' name='idhas' value=".$row['idL']." />";
                    echo "<button type='submit' name='buy' class='buy-box'><i class='fa fa-shopping-cart'> Buy</i></button>"; 
                    echo "<figcaption name='prix' class='Prix'>".$row['prix']."$</figcaption>" ;
                echo "</form>";
            echo "</figure>";
        }
    }
}
echo"</div> </div>";

?>

        <!--========================================================================-->

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
