<?php 
    session_start();
    if(isset($_POST['add_result'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"result");
        $query = "insert into add_result (roll,u_name,semester,branch,p1,gpa1,p2,gpa2,p3,gpa3,p4,gpa4,
        p5,gpa5,p6,gpa6,p7,gpa7,p8,gpa8) values('$_POST[roll]','$_POST[name]','$_POST[semester]',
        '$_POST[branch]','$_POST[p1]','$_POST[gpa1]','$_POST[p2]','$_POST[gpa2]','$_POST[p3]','$_POST[gpa3]',
        '$_POST[p4]','$_POST[gpa4]','$_POST[p5]','$_POST[gpa5]','$_POST[p6]','$_POST[gpa6]',
        '$_POST[p7]','$_POST[gpa7]','$_POST[p8]','$_POST[gpa8]')";
        $query_run = mysqli_query($connection,$query);
        header("location:redirect.php");
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

            <div class="icons">
                <i class="fas fa-bars" id="menu-bars"></i>
                <i class="fas fa-search" id="search-icon"></i>
                <a href="#review" class="fas fa-heart"></a>
            </div>
        </header>

        <!-- header section ends-->

        <!-- search form  -->

        <form action="" id="search-form">
            <input type="search" placeholder="search here..." name="" id="search-box"/>
            <label for="search-box" class="fas fa-search"></label>
            <i class="fas fa-times" id="close"></i>
        </form>

        <!-- home section starts  -->

        <section class="homes" id="homes">
            <nav class="navbar">
                <a href="addresult.php" style="background:cornflowerblue; color:white">Add Result</a>
                <a href="admin_dashboard.php">Student Info</a>
                <a href="logout.php">Logout</a>
            </nav>

            <div class="col-md-12" style="padding-top: 5rem; font-size:small; text-transform: capitalize;">
                <form action="" method="post">
                    <fieldset>
                    <center>
                        <div style="padding-top:10px">    
                            <span style="padding-top:3rem; padding-right:10px; padding-left:10px; color:#007AFF"> ROLL NO :
                                <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                                type="text" required="required" name="roll" size="15" placeholder="ROLL*">
                            </span>
                            <span style="padding-top:3rem; padding-right:10px; padding-left:10px; color:#007AFF"> NAME :
                                <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                                type="text" required="required" name="name" size="15" placeholder="NAME*">
                            </span>
                            <span style="padding-top:3rem; padding-right:10px; padding-left:10px; color:#007AFF"> SEMESTER :
                                <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                                type="text" required="required" name="semester" size="15" placeholder="SEMESTER*">
                            </span>
                            <span style="padding-top:3rem; padding-right:10px; padding-left:10px; color:#007AFF"> BRANCH :
                                <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                                type="text" required="required" name="branch" size="15" placeholder="BRANCH*">
                            </span>
                        </div>
                        <div style="padding-top:10px">    
                            <span style="padding-top:3rem; padding-right:10px; padding-left:10px; color:#007AFF"> PAPER 1 :
                                <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                                type="text" required="required" name="p1" size="15" placeholder="Enter PAPER 1">
                            </span>
                            <span style="padding-top:3rem; padding-right:10px; padding-left:10px; color:#007AFF"> GPA :
                                <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                                type="text" required="required" name="gpa1" size="15" placeholder="Enter Roll No">
                            </span>
                            <span style="padding-top:3rem; padding-right:10px; padding-left:10px; color:#007AFF"> PAPER 2 :
                                <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                                type="text" required="required" name="p2" size="15" placeholder="Enter PAPER 2">
                            </span>
                            <span style="padding-top:3rem; padding-right:10px; padding-left:10px; color:#007AFF"> GPA :
                                <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                                type="text" required="required" name="gpa2" size="15" placeholder="Enter GPA">
                            </span>
                        </div>
                        <div style="padding-top:10px">    
                            <span style="padding-top:3rem; padding-right:10px; padding-left:10px; color:#007AFF"> PAPER 3 :
                                <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                                type="text" required="required" name="p3" size="15" placeholder="Enter PAPER 3">
                            </span>
                            <span style="padding-top:3rem; padding-right:10px; padding-left:10px; color:#007AFF"> GPA :
                                <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                                type="text" required="required" name="gpa3" size="15" placeholder="Enter GPA">
                            </span> 
                            <span style="padding-top:3rem; padding-right:10px; padding-left:10px; color:#007AFF"> PAPER 4 :
                                <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                                type="text" required="required" name="p4" size="15" placeholder="Enter PAPER 4">
                            </span>
                            <span style="padding-top:3rem; padding-right:10px; padding-left:10px; color:#007AFF"> GPA :
                                <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                                type="text" required="required" name="gpa4" size="15" placeholder="Enter GPA">
                            </span>
                        </div>
                        <div style="padding-top:10px">    
                            <span style="padding-top:3rem; padding-right:10px; padding-left:10px; color:#007AFF"> PAPER 5 :
                                <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                                type="text" required="required" name="p5" size="15" placeholder="Enter PAPER 5">
                            </span>
                            <span style="padding-top:3rem; padding-right:10px; padding-left:10px; color:#007AFF"> GPA :
                                <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                                type="text" required="required" name="gpa5" size="15" placeholder="Enter GPA">
                            </span>
                            <span style="padding-top:3rem; padding-right:10px; padding-left:10px; color:#007AFF"> PAPER 6 :
                                <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                                type="text" required="required" name="p6" size="15" placeholder="Enter PAPER 6">
                            </span>
                            <span style="padding-top:3rem; padding-right:10px; padding-left:10px; color:#007AFF"> GPA :
                                <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                                type="text" required="required" name="gpa6" size="15" placeholder="Enter GPA">
                            </span>
                        </div>
                        <div style="padding-top:10px">    
                            <span style="padding-top:3rem; padding-right:10px; padding-left:10px; color:#007AFF"> PAPER 7 :
                                <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                                type="text" required="required" name="p7" size="15" placeholder="Enter PAPER 7">
                            </span>
                            <span style="padding-top:3rem; padding-right:10px; padding-left:10px; color:#007AFF"> GPA :
                                <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                                type="text" required="required" name="gpa7" size="15" placeholder="Enter GPA">
                            </span>
                            <span style="padding-top:3rem; padding-right:10px; padding-left:10px; color:#007AFF"> PAPER 8 :
                                <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                                type="text" required="required" name="p8" size="15" placeholder="Enter PAPER 8">
                            </span>
                            <span style="padding-top:3rem; padding-right:10px; padding-left:10px; color:#007AFF"> GPA :
                                <input style="border: 2px solid black; background-color:bisque; text-align:center"  
                                type="text" required="required" name="gpa8" size="15" placeholder="Enter GPA">
                            </span>
                        </div>
                        <button style="margin-top:30px;" type="submit" name="add_result" class="btn btn-warning">ADD NOW </button>
                    </center>
                    </fieldset>
                </form>
            </div>









               
            <div class="col-md-12" style="padding-top: 5rem; font-size:small; text-transform: capitalize;">
                
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
