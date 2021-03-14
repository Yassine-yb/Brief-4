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
        include("conne.php");
    ?>

    <div class="page1">

    <header>

        <div class="topnav">

            
            
            <div class="logo"> 
                <a href="indexAdmin.php"><img src="images/yf.png" alt="logo"></a> 
            </div>
            
            <div class="topnav-content">
                <a class="active" href="indexAdmin.php"><i class="fa fa-fw fa-home"></i> Home</a> 
                <a href="Our-BookAdmin.php"><i class="fa fa-book"></i> Nos Livres</a> 
                <a href="our-authorAdmin.php"><i class="fa fa-user-plus"></i> Nos Auteurs</a>          
                <a href="logout.php" name="logout" action="" method="POST"><i class=" fa fa-sign-in"></i>LogOut</a>
            </div>    

            <img src="images/nav-icon.png" class="iconenav" alt="barssolid" onclick="nav()">
            
        </div>


        </header>

        <div class="nav" id="nav">
            <div class="nav-cont">
                <a class="active" href="indexAdmin.php">Home</a> 
            </div>
            <div class="nav-cont">
                <a href="Our-BookAdmin.php">Nos Livres</a>
            </div>
            <div class="nav-cont">
                <a href="our-authorAdmin.php">Nos Auteurs</a> 
            </div>  
            <div class="nav-cont">
            <a href="logout.php" name="logout" action="" method="POST">LogOut</a> 
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

        <div class="container" style="margin-bottom:-2vh">

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
                        <a class="fa fa-ravelry"></a>            
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
