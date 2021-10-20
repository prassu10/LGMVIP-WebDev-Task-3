<?php
    error_reporting(0);
    $al=mysqli_connect("localhost","root","","result");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>FRAPPÉ</title>
        
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"
        />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <!-- header section starts      -->

        <header>
            <a href="index.php" class="logo">
                <img src="images/logo.jpg" width="70" alt="" />
                <span style="padding-left: 10px">FRAPPÉ.</span>
            </a>

            <div class="icons">
                <i class="fas fa-bars" id="menu-bars"></i>
                <i class="fas fa-search" id="search-icon"></i>
                <a href="#review" class="fas fa-heart"></a>
            </div>
        </header>

        <!-- header section ends-->

        <!-- search form  -->

        <form action="" id="search-form">
            <input
                type="search"
                placeholder="search here..."
                name=""
                id="search-box"
            />
            <label for="search-box" class="fas fa-search"></label>
            <i class="fas fa-times" id="close"></i>
        </form>

        <!-- home section starts  -->

        <section class="homes" id="homes" style="padding-top:200px; height: 60vh;">
            <nav class="navbar">
                <a href="student_dashboard.php">My Courses</a>
                <a href="grade.php" style="background:cornflowerblue; color:white">View Result</a>
                <a href="logout.php">Logout</a>
            </nav>
            <center>
            <div style="padding-top: 1rem; font-size:medium;">
                <form action="viewresult.php" method="post">
                    <div colspan="2" align="center" class="roll"><?php echo $roll;?></div>
                    <div style="padding-top:3rem; color:#007AFF"> ROLL NO :
                        <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                        type="text" required="required" name="roll" size="15" placeholder="Enter Roll No">
                    </div>
                    <br>
                    <div style="margin-left:40px;"><center><button type="submit" name="add_result" class="btn btn-warning">VIEW RESULT</button></center>
                    </div>
                </form>
            </div>
            </center>
            


        </section>


        <!-- footer section starts  -->

        <section class="footer" style="background: black;">
            <div class="footer-basic">
                <footer>
                    <div class="social" style="color: black">
                        <a href="#"><i class="icon ion-social-instagram"></i></a>
                        <a href="#"><i class="icon ion-social-linkedin"></i></a>
                        <a href="#"><i class="icon ion-social-twitter"></i></a>
                        <a href="#"><i class="icon ion-social-facebook"></i></a>
                    </div>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#home">Home</a>
                        </li>
                    </ul>
                    <p class="copyright">FRAPPÉ © 2021</p>
                </footer>
            </div>
        </section>

        <!-- footer section ends -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
