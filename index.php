<?php
    session_start();
    if(isset($_POST['alogin'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"result");
        $query = "select * from admin where ad_username = '$_POST[aemail]'";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            if($row['ad_username'] == $_POST['aemail']){
                if($row['ad_password'] == $_POST['apass']){
                    $_SESSION['name'] = $row['ad_username'];
                    $_SESSION['email'] = $row['ad_password'];
                    header("Location:admin_dashboard.php");
                }
                else{
                    echo "<script>alert('Wrong Password...');</script>";
                }
            }
        }
    }
    if(isset($_POST['slogin'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"result");
        $query = "select * from users where u_roll = '$_POST[semail]'";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            if($row['u_roll'] == $_POST['semail']){
                if($row['u_password'] == $_POST['spass']){
                    $_SESSION['name'] = $row['u_username'];
                    $_SESSION['email'] = $row['u_password'];
                    header("Location:student_dashboard.php");
                }
                else{
                    echo "<script>alert('Wrong Password...');</script>";
                }
            }
        }
    }
    
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
            href="https://unpkg.com/swiper/swiper-bundle.min.css"
        />
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

            <nav class="navbar">
                <a class="active" href="#home">Home</a>
                <a href="#student">Student Login</a>
                <a href="#admin">Admin Login</a>
            </nav>

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

        <section class="home" id="home">
            <h1 class="cname">
                INTERNATIONAL INSTITUTE OF INFORMATION TECHNOLOGY<br />BHUBANESHWAR
            </h1>
            <center><a href="#student" class="btn">View Grades</a></center>
        </section>

        <!-- home section ends -->

        <!-- dishes section starts  -->

        <section class="student" id="student" method="POST" action="#">
            <div class="container">
                <form action="#" method="post">
                    <center><div class="title">Student Login</div></center>
                    <div class="input-box underline">
                        <input type="text" placeholder="Enter Your Username" name="semail" required=""/>
                        <div class="underline"></div>
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Enter Your Password" name="spass" required=""/>
                        <div class="underline"></div>
                    </div>
                    <div class="input-box button">
                        <input type="submit" name="slogin" value="Continue" />
                    </div>
                </form>
                <div class="option">or Connect With Social Media</div>
                <div class="google">
                    <center><a href="#"><i class="fab fa-google"></i>Sign in With google</a></center>
                </div>
            </div>
        </section>

        <!-- dishes section ends -->

        <!-- about section starts  -->

        <section class="admin" id="admin" method="POST" action="#">
            <div class="container">
                <form action="#" method="post">
                    <center><div class="title">Admin Login</div></center>
                    <div class="input-box underline">
                        <input type="text" placeholder="Enter Your Email" name="aemail" required=""/>
                        <div class="underline"></div>
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Enter Your Password" name="apass" required/>
                        <div class="underline"></div>
                    </div>
                    <div class="input-box button">
                        <input type="submit" name="alogin" value="Continue" />
                    </div>
                </form>
                <div class="option">or Connect With Social Media</div>
                <div class="google">
                    <center><a href="#"><i class="fab fa-google"></i>Sign in With google</a></center>
                </div>
            </div>
        </section>

        <!-- about section ends -->


        <!-- footer section starts  -->

        <section class="footer" style="background: black;">
            <div class="footer-basic">
                <footer>
                    <div class="social" style="color: black">
                        <a href="#"
                            ><i class="icon ion-social-instagram"></i
                        ></a>
                        <a href="#"><i class="icon ion-social-linkedin"></i></a>
                        <a href="#"><i class="icon ion-social-twitter"></i></a>
                        <a href="#"><i class="icon ion-social-facebook"></i></a>
                    </div>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#home">Home</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#student">Student Login</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#admin">Admin Login</a>
                        </li>
                    </ul>
                    <p class="copyright">FRAPPÉ © 2021</p>
                </footer>
            </div>
        </section>

        <!-- footer section ends -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <!-- custom js file link  -->
        <script src="js/script.js"></script>
    </body>
</html>
