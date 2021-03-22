<?php
 include("conne.php");
if (isset($_POST['buy'])){
    $id = $_POST['idhas'] ?  $_POST['idhas'] : "" ;
    $query = "UPDATE `livre` SET buy=buy+1 where idL=$id";
    mysqli_query($con,$query);
   
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

    <!-- Link Swiper's CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Work+Sans:400,600" rel="stylesheet">


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

    

    <header>

        <div class="topnav">

            <div class="logo"> 
                <a href="index.php"><img src="images/yf.png" alt="logo"></a> 
            </div>
            
            <div class="topnav-content">
                <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
                <a href="gallery.php"><i class="fa fa-film"></i> Gallerie</a> 
                <a href="Login.php"><i class=" fa fa-sign-in"></i> Sign-In</a>
               
            </div>

            <img src="images/nav-icon.png" class="iconenav" alt="barssolid" onclick="nav()">
            
        </div>
    </header>

    <div class="nav" id="nav">
        <div class="nav-cont">
            <a class="active" href="index.php">Home</a> 
        </div>
        <div class="nav-cont">
            <a href="gallery.php">Gallerie</a>
        </div>
        <div class="nav-cont">
            <a href="Login.php">Sign-In</a> 
        </div>                      
    </div>



    <div class="page1">

        <!--========================================================================-->

        <div class="background">

            <video autoplay loop class="video">
            <source src="images/bgvid.mp4" type="video/mp4">
            </video>
            <p>Book is Life</p>
            
        </div>

        <!--========================================================================-->

        <div class="container">

            <h1>Why You should Read</h1>

            <div class="center-content">

                <div class="avantage">
                    <div class="av1">
                        <a class="fa fa-book"></a>            
                    </div>
                    <p>Knowledge</p>
                    
                    <div class="parag">
                        <p>Everything you read fills your head with new bits of information, and you never know when it might come in handy. The more knowledge you have, the better-equipped you are to tackle any challenge you’ll ever face.</p>
                    </div>
                </div>

                <div class="avantage">
                    <div class="av1">
                        <a class="fa fa-ravelry" style="transform: rotate(-90deg)"></a>            
                    </div>
                    <p>Mental Stimulation</p>
                    
                    <div class="parag">
                        <p>Studies have shown that staying mentally stimulated can slow the progress of (or possibly even prevent) Alzheimer’s and Dementia, since keeping your brain active and engaged prevents it from losing power.</p>
                    </div>
                </div>

                <div class="avantage">
                    <div class="av1">
                        <a class="fa fa-heartbeat"></a>            
                    </div>
                    <p>Stress Reduction</p>
                    
                    <div class="parag">
                        <p>No matter how much stress you have at work, in your personal relationships, or countless other issues faced in daily life, it all just slips away when you lose yourself in a great story.</p>
                    </div>
                </div>

                <div class="avantage">
                    <div class="av1">
                        <a class="fa fa-line-chart"></a>            
                    </div>
                    <p>Memory Improvement</p>
                    
                    <div class="parag">
                        <p>When you read a book, you have to remember an assortment of characters, their backgrounds, ambitions, history, and nuances, as well as the various arcs and sub-plots that weave their way through every story.</p>
                    </div>
                </div>
                

            </div>
        </div>
            
        <!--========================================================================-->

        <div class="rec">

            <h1>Highly Recommended</h1>

            <!-- <div class="recommended"> -->

               
                    <!-- <figure class="figure1">
                        <img src="images/b1.png"></img>
                        <button type='button' class='buy-box'><i class='fa fa-shopping-cart'> Buy</i></button>
                    </figure>

                    <figure class="figure1">
                        <img src="images/b2.jpg"></img>
                        <button type='button' class='buy-box'><i class='fa fa-shopping-cart'> Buy</i></button>
                    </figure>
                    
                    <figure class="figure1">
                        <img src="images/b6.jpg"></img>
                        <button type='button' class='buy-box'><i class='fa fa-shopping-cart'> Buy</i></button>
                    </figure>
                    
                    <figure class="figure1">
                        <img src="images/b4.jpg"></img>
                        <button type='button' class='buy-box'><i class='fa fa-shopping-cart'> Buy</i></button>
                    </figure> -->
                


                <?php 
                    include("conne.php");
                    $query="SELECT * FROM `livre` ORDER BY buy DESC LIMIT 3";


                    echo"<div class='recommended'>";


                        if(mysqli_multi_query($con,$query)){
                            if($result=mysqli_store_result($con)){


                                while($row=mysqli_fetch_array($result)) {


                                    echo "<figure class='figure1'>";
                                        echo "<form action='index.php' method='POST'>";

                                            echo "<input type='hidden' name='idhas' value=".$row['idL']." />";
                                            echo "<a href=''><img class='scaled' src='images/".$row['src']."'alt='book_img' /></a>";
                                            echo "<button type='submit' name='buy' class='buy-box'><i class='fa fa-shopping-cart'> Buy</i></button>"; 
                                            // echo "<figcaption name='prix' class='Prix'>".$row['prix']."</figcaption>" ;
                                        echo "</form>";
                                    echo "</figure>";

                
                                }
                            }
                         
                        }
                    echo"</div>";
                   

                ?>
            <!-- </div> -->
        </div>



        
<!--JavaScript-->
<script type="text/javascript" src="all.js"></script> 
    
<!-- Swiper JS -->
<script src="../package/swiper-bundle.min.js"></script>

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
