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

        <section class="homes" id="homes">
            <nav class="navbar">
                <a href="student_dashboard.php">My Courses</a>
                <a href="result.php" style="background:cornflowerblue; color:white">View Result</a>
                <a href="logout.php">Logout</a>
            </nav>

            <?php
                error_reporting(0);
                $al=mysqli_connect("localhost","root","","result");
                $roll=$_POST['roll'];
                $x=mysqli_query($al,"SELECT * FROM add_result WHERE roll='$roll'");
                $y=mysqli_fetch_array($x);
            ?>

            <div class="col-md-12" style="padding-top: 3rem; font-size:small; text-transform: capitalize;">
                <center><span class="labels" style="color:#C9F; padding-right:20px"><?php echo $roll;?></span>

                <?php $m=mysqli_query($al,"SELECT * FROM add_result WHERE roll='$roll'");
                    $n=mysqli_fetch_array($m);
                ?>
                <span class="labels" style="color:#C9F; padding-right:20px;"><?php echo $n['u_name'];?></span>
                <span class="labels" style="color:#C9F; padding-right:20px;"><?php echo $n['semester'];?></span>
                <span class="labels" style="color:#C9F; padding-right:20px;"><?php echo $n['branch'];?></span>
                </center>

                <div style="overflow=scroll; padding-top:1rem;">

                    <table class="table">
                        <thead>
                            <tr>
                                <th><center>SEMESTER</center></th>
                                <th><center>BRANCH</center></th>
                                <th><center>SUBJECT</center></th>
                                <th><center>GPA</center></th>
                            </tr> 
                        </thead>
                        <tr>
                            <td><center><?php echo $n['semester'];?></center></td>
                            <td><center><?php echo $n['branch'];?></td>
                            <td><center><?php echo $n['p1'];?></center></td>
                            <td><center><?php echo $n['gpa1'];?></center></td>
                        </tr>
                        <tr>
                            <td><center><?php echo $n['semester'];?></center></td>
                            <td><center><?php echo $n['branch'];?></td>
                            <td><center><?php echo $n['p2'];?></center></td>
                            <td><center><?php echo $n['gpa2'];?></center></td>
                        </tr>
                        <tr>
                            <td><center><?php echo $n['semester'];?></center></td>
                            <td><center><?php echo $n['branch'];?></td>
                            <td><center><?php echo $n['p3'];?></center></td>
                            <td><center><?php echo $n['gpa3'];?></center></td>
                        </tr>
                        <tr>
                            <td><center><?php echo $n['semester'];?></center></td>
                            <td><center><?php echo $n['branch'];?></td>
                            <td><center><?php echo $n['p4'];?></center></td>
                            <td><center><?php echo $n['gpa4'];?></center></td>
                        </tr>
                        <tr>
                            <td><center><?php echo $n['semester'];?></center></td>
                            <td><center><?php echo $n['branch'];?></td>
                            <td><center><?php echo $n['p5'];?></center></td>
                            <td><center><?php echo $n['gpa5'];?></center></td>
                        </tr>
                        <tr>
                            <td><center><?php echo $n['semester'];?></center></td>
                            <td><center><?php echo $n['branch'];?></td>
                            <td><center><?php echo $n['p6'];?></center></td>
                            <td><center><?php echo $n['gpa6'];?></center></td>
                        </tr>
                        <tr>
                            <td><center><?php echo $n['semester'];?></center></td>
                            <td><center><?php echo $n['branch'];?></td>
                            <td><center><?php echo $n['p7'];?></center></td>
                            <td><center><?php echo $n['gpa7'];?></center></td>
                        </tr>
                        <tr>
                            <td><center><?php echo $n['semester'];?></center></td>
                            <td><center><?php echo $n['branch'];?></td>
                            <td><center><?php echo $n['p8'];?></center></td>
                            <td><center><?php echo $n['gpa8'];?></center></td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>


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
