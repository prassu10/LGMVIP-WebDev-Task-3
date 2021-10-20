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
                <a href="addresult.php">Add Result</a>
                <a href="result.php">Result</a>
                <a href="logout.php">Logout</a>
            </nav>

               
            <div class="col-md-12" style="padding-top: 5rem; font-size:small; text-transform: capitalize;">
                <table class="table">
                    <thead>
                        <tr>
                           <th><center>SNO</center></th>
                            <th><center>STUDENT NAME</center></th>
                            <th><center>ROLL</center></th>
                            <th><center>BRANCH</center></th>
                            <th><center>STUDENT MOBILE</center></th>
                            <th><center>SEMESTER</center></th>
                        </tr> 
                    </thead>
                    <?php 
                        $user_count = 0;
                        $connection = mysqli_connect("localhost","root","");
                        $db = mysqli_select_db($connection,"result");
                        $query = "select * from student";
                        $query_run = mysqli_query($connection,$query);
                        while($row = mysqli_fetch_assoc($query_run)){
                            $user_count = $user_count + 1;
                            ?>
                                <tr>
                                    <td><center><?php echo $user_count;?></center></td>
                                    <td><center><?php echo $row['u_name'];?></center></td>
                                    <td><center><?php echo $row['roll'];?></center></td>
                                    <td><center><?php echo $row['branch'];?></center></td>
                                    <td><center><?php echo $row['u_mobile'];?></center></td>
                                    <td><center><?php echo $row['semester'];?></center></td>
                                </tr>
                            <?php
                        }
                    ?>
                </table>
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
