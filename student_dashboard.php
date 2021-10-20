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
        <style>
            .swiper-container {
            width: 100%;
            height: 50%;
            }
            .swiper-slide {
            text-align: center;
            background: #fff;

            /* Center slide text vertically */
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            }
            /* custmm bullets style */
            .swiper-pagination-bullet {
            width: 20px;
            height: 20px;
            text-align: center;
            line-height: 20px;
            font-size: 12px;
            color:#000;
            opacity: 1;
            background: rgba(0,0,0,0.2);
            }
            .swiper-pagination-bullet-active {
            color:#fff;
            background: #007aff;
            }
        </style>
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

        <section class="homes" id="homes" style="padding-top:70px;">
            <nav class="navbar">
                <a href="student_dashboard.php" style="background:cornflowerblue; color:white">My Courses</a>
                <a href="grade.php">View Result</a>
                <a href="logout.php">Logout</a>
            </nav>
            <div class="col-md-12" style="padding-top: 1rem; font-size:small; text-transform: capitalize;">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><center>SNO</center></th>
                                        <th><center>SEMESTER</center></th>
                                        <th><center>BRANCH</center></th>
                                        <th><center>SUBJECT</center></th>
                                        <th><center>CREDIT</center></th>
                                    </tr> 
                                </thead>
                                <?php 
                                    $user_count = 0;
                                    $connection = mysqli_connect("localhost","root","");
                                    $db = mysqli_select_db($connection,"result");
                                    $query = "select * from sem1";
                                    $query_run = mysqli_query($connection,$query);
                                    while($row = mysqli_fetch_assoc($query_run)){
                                        $user_count = $user_count + 1;
                                        ?>
                                            <tr>
                                                <td><center><?php echo $user_count;?></center></td>
                                                <td><center><?php echo $row['semester'];?></center></td>
                                                <td><center><?php echo $row['branch'];?></center></td>
                                                <td><center><?php echo $row['subject'];?></center></td>
                                                <td><center><?php echo $row['credits'];?></center></td>
                                            </tr>
                                        <?php
                                    }
                                ?>
                            </table>
                        </div>
                        <div class="swiper-slide">
                        <table class="table">
                                <thead>
                                    <tr>
                                    <th><center>SNO</center></th>
                                        <th><center>SEMESTER</center></th>
                                        <th><center>BRANCH</center></th>
                                        <th><center>SUBJECT</center></th>
                                        <th><center>CREDIT</center></th>
                                    </tr> 
                                </thead>
                                <?php 
                                    $user_count = 0;
                                    $connection = mysqli_connect("localhost","root","");
                                    $db = mysqli_select_db($connection,"result");
                                    $query = "select * from sem2";
                                    $query_run = mysqli_query($connection,$query);
                                    while($row = mysqli_fetch_assoc($query_run)){
                                        $user_count = $user_count + 1;
                                        ?>
                                            <tr>
                                                <td><center><?php echo $user_count;?></center></td>
                                                <td><center><?php echo $row['semester'];?></center></td>
                                                <td><center><?php echo $row['branch'];?></center></td>
                                                <td><center><?php echo $row['subject'];?></center></td>
                                                <td><center><?php echo $row['credits'];?></center></td>
                                            </tr>
                                        <?php
                                    }
                                ?>
                            </table>
                        </div>
                        <div class="swiper-slide">
                        <table class="table">
                                <thead>
                                    <tr>
                                    <th><center>SNO</center></th>
                                        <th><center>SEMESTER</center></th>
                                        <th><center>BRANCH</center></th>
                                        <th><center>SUBJECT</center></th>
                                        <th><center>CREDIT</center></th>
                                    </tr> 
                                </thead>
                                <?php 
                                    $user_count = 0;
                                    $connection = mysqli_connect("localhost","root","");
                                    $db = mysqli_select_db($connection,"result");
                                    $query = "select * from sem3";
                                    $query_run = mysqli_query($connection,$query);
                                    while($row = mysqli_fetch_assoc($query_run)){
                                        $user_count = $user_count + 1;
                                        ?>
                                            <tr>
                                                <td><center><?php echo $user_count;?></center></td>
                                                <td><center><?php echo $row['semester'];?></center></td>
                                                <td><center><?php echo $row['branch'];?></center></td>
                                                <td><center><?php echo $row['subject'];?></center></td>
                                                <td><center><?php echo $row['credits'];?></center></td>
                                            </tr>
                                        <?php
                                    }
                                ?>
                            </table>
                        </div>
                        <div class="swiper-slide">
                        <table class="table">
                                <thead>
                                    <tr>
                                    <th><center>SNO</center></th>
                                        <th><center>SEMESTER</center></th>
                                        <th><center>BRANCH</center></th>
                                        <th><center>SUBJECT</center></th>
                                        <th><center>CREDIT</center></th>
                                    </tr> 
                                </thead>
                                <?php 
                                    $user_count = 0;
                                    $connection = mysqli_connect("localhost","root","");
                                    $db = mysqli_select_db($connection,"result");
                                    $query = "select * from sem4";
                                    $query_run = mysqli_query($connection,$query);
                                    while($row = mysqli_fetch_assoc($query_run)){
                                        $user_count = $user_count + 1;
                                        ?>
                                            <tr>
                                                <td><center><?php echo $user_count;?></center></td>
                                                <td><center><?php echo $row['semester'];?></center></td>
                                                <td><center><?php echo $row['branch'];?></center></td>
                                                <td><center><?php echo $row['subject'];?></center></td>
                                                <td><center><?php echo $row['credits'];?></center></td>
                                            </tr>
                                        <?php
                                    }
                                ?>
                            </table>
                        </div>
                        <div class="swiper-slide">
                        <table class="table">
                                <thead>
                                    <tr>
                                    <th><center>SNO</center></th>
                                        <th><center>SEMESTER</center></th>
                                        <th><center>BRANCH</center></th>
                                        <th><center>SUBJECT</center></th>
                                        <th><center>CREDIT</center></th>
                                    </tr> 
                                </thead>
                                <?php 
                                    $user_count = 0;
                                    $connection = mysqli_connect("localhost","root","");
                                    $db = mysqli_select_db($connection,"result");
                                    $query = "select * from sem5";
                                    $query_run = mysqli_query($connection,$query);
                                    while($row = mysqli_fetch_assoc($query_run)){
                                        $user_count = $user_count + 1;
                                        ?>
                                            <tr>
                                                <td><center><?php echo $user_count;?></center></td>
                                                <td><center><?php echo $row['semester'];?></center></td>
                                                <td><center><?php echo $row['branch'];?></center></td>
                                                <td><center><?php echo $row['subject'];?></center></td>
                                                <td><center><?php echo $row['credits'];?></center></td>
                                            </tr>
                                        <?php
                                    }
                                ?>
                            </table>
                        </div>
                        <div class="swiper-slide">
                        <table class="table">
                                <thead>
                                    <tr>
                                    <th><center>SNO</center></th>
                                        <th><center>SEMESTER</center></th>
                                        <th><center>BRANCH</center></th>
                                        <th><center>SUBJECT</center></th>
                                        <th><center>CREDIT</center></th>
                                    </tr> 
                                </thead>
                                <?php 
                                    $user_count = 0;
                                    $connection = mysqli_connect("localhost","root","");
                                    $db = mysqli_select_db($connection,"result");
                                    $query = "select * from sem6";
                                    $query_run = mysqli_query($connection,$query);
                                    while($row = mysqli_fetch_assoc($query_run)){
                                        $user_count = $user_count + 1;
                                        ?>
                                            <tr>
                                                <td><center><?php echo $user_count;?></center></td>
                                                <td><center><?php echo $row['semester'];?></center></td>
                                                <td><center><?php echo $row['branch'];?></center></td>
                                                <td><center><?php echo $row['subject'];?></center></td>
                                                <td><center><?php echo $row['credits'];?></center></td>
                                            </tr>
                                        <?php
                                    }
                                ?>
                            </table>
                        </div>
                        <div class="swiper-slide">
                        <table class="table">
                                <thead>
                                    <tr>
                                    <th><center>SNO</center></th>
                                        <th><center>SEMESTER</center></th>
                                        <th><center>BRANCH</center></th>
                                        <th><center>SUBJECT</center></th>
                                        <th><center>CREDIT</center></th>
                                    </tr> 
                                </thead>
                                <?php 
                                    $user_count = 0;
                                    $connection = mysqli_connect("localhost","root","");
                                    $db = mysqli_select_db($connection,"result");
                                    $query = "select * from sem7";
                                    $query_run = mysqli_query($connection,$query);
                                    while($row = mysqli_fetch_assoc($query_run)){
                                        $user_count = $user_count + 1;
                                        ?>
                                            <tr>
                                                <td><center><?php echo $user_count;?></center></td>
                                                <td><center><?php echo $row['semester'];?></center></td>
                                                <td><center><?php echo $row['branch'];?></center></td>
                                                <td><center><?php echo $row['subject'];?></center></td>
                                                <td><center><?php echo $row['credits'];?></center></td>
                                            </tr>
                                        <?php
                                    }
                                ?>
                            </table>
                        </div>
                        <div class="swiper-slide">
                        <table class="table">
                                <thead>
                                    <tr>
                                    <th><center>SNO</center></th>
                                        <th><center>SEMESTER</center></th>
                                        <th><center>BRANCH</center></th>
                                        <th><center>SUBJECT</center></th>
                                        <th><center>CREDIT</center></th>
                                    </tr> 
                                </thead>
                                <?php 
                                    $user_count = 0;
                                    $connection = mysqli_connect("localhost","root","");
                                    $db = mysqli_select_db($connection,"result");
                                    $query = "select * from sem8";
                                    $query_run = mysqli_query($connection,$query);
                                    while($row = mysqli_fetch_assoc($query_run)){
                                        $user_count = $user_count + 1;
                                        ?>
                                            <tr>
                                                <td><center><?php echo $user_count;?></center></td>
                                                <td><center><?php echo $row['semester'];?></center></td>
                                                <td><center><?php echo $row['branch'];?></center></td>
                                                <td><center><?php echo $row['subject'];?></center></td>
                                                <td><center><?php echo $row['credits'];?></center></td>
                                            </tr>
                                        <?php
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top:0rem; padding-left:33rem; font-size:large; color:#007AFF">SEM:<span class="swiper-pagination"></span></div>



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
        <script>
            var swiper = new Swiper('.swiper', {
                pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '">' + (index + 1) + '</span>';
                },
                },
            });
        </script>
        <!-- custom js file link  -->
        <script src="js/script.js"></script>
    </body>
</html>
