<!DOCTYPE html>
<html lang="en">
<head>

     <title>About</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="./css/bootstrap.min.css">
     <link rel="stylesheet" href="./css/font-awesome.min.css">
     <link rel="stylesheet" href="./css/aos.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="./css/tooplate-php-style.css">
<!--
Tooplate 2119 Gymso Fitness
https://www.tooplate.com/view/2119-gymso-fitness
--> </head>
<!-- Implementing scroll -->
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- NAV BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <!-- PHP Logo -->
            <a class="navbar-brand" href="../forms/adminDirectory.php"><span style="color: var(--primary-color)">P</span>ower <span style="color: var(--primary-color)">H</span>ouse <span style="color: var(--primary-color)">P</span>hitness</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Create list of links/buttons for different pages -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <!-- Add and link Index page -->
                    <li class="nav-item">
                        <a href="index.php" class="nav-link smoothScroll">Home</a>
                    </li>

                    <!-- Add and link About page -->
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">About Us</a>
                    </li>

                    <!-- Create dropdown menu -->
                    <li class="dropdown">
                        <button class="dropbtn" id="dropdownMenuButton" data-toggle="dropdown"> Services
                            <i class="fa fa-caret-down"></i>
                        </button>

                        <div class="dropdown-content">
                            <a href="services.php#classes">Classes </a>
                            <a href="services.php#membership">Memberships </a>
                            <a href="..\forms\equip-rental-member.php">Equipment </a>
                        </div> 
                    </li>

                    <!-- Add and link Schedule page -->
                    <li class="nav-item">
                        <a href="schedule.php" class="nav-link">Schedule</a>
                    </li>

                    <!-- Add and link contact section -->
                    <li class="nav-item">
                        <a href="index.php#contact" class="nav-link smoothScroll">Contact</a>
                    </li>
                </ul>

                <!-- Add User icon with link -->
                <ul class="social-icon ml-lg-3">
                        <li><a href="../forms/account_tab.php" class="fa fa-user"></a></li>
                </ul>

                <!-- Add shopping cart icon with link -->
                <ul class="social-icon ml-lg-3">
                        <li><a href="../forms/shoppingcart.php" class="fa fa-shopping-cart"></a></li>
                </ul>
            </div>

        </div>
    </nav>


    <!-- ABOUT INFO-->
    <section class="about section" id="about">
        <div class="my-container">
            <div class="row" >
                <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                    <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">
                        <span style="color: var(--primary-color)">Hello, we are PHP!</span>
                    </h2>
                       
                    <p data-aos="fade-up" data-aos-delay="400">The team at Power House Phitness offers many years of dedication and knowledge in Software Engineering, as well as proficiency in many technical skills such as HTML, CSS, JavaScript, PHP, and SQL. All of them ensure that your experience with Power House Phitness is impeccable as they come to the company with precision, poise, and pizazz</p>
                </div>
            </div>      
        </div>  
          
                
        <!-- ABOUT BEESANNE -->
        <div class="full-container">
            <div class="about-container">
                <div class="row">
                    <!-- Team Member Photo -->
                    <div class="about-info">
                        <img src="images/team/beesanne.jpg" alt="Beesanne Kurzum">
                    </div>   
                    <!-- Team Member Name -->
                    <div class="about-title">
                        <h3 class="mb-1"> 
                            <span style="color: var(--primary-color)">Beesanne Kurzum</span>
                        </h3>
                        <!-- Team Member Roles -->
                        <h4 class="mb-1">
                            <span style="color: var(--white-color)">Inventory</span>
                            <br>
                            <span style="color: var(--white-color)">Data Management</span>
                            <br>
                            <span style="color: var(--white-color)">Shopping Cart</span>
                        </h4>
                    </div>
                </div>
            </div>  

            <!-- ABOUT CHARLIE -->
            <div class="about-container">
                <div class="row">
                    <!-- Team Member Photo -->
                    <div class="about-info">
                        <img src="images/team/charles.jpg" alt="Charles Olinsky">
                    </div>   
                    <!-- Team Member Name -->
                    <div class="about-title">
                        <h3 class="mb-1"> 
                            <span style="color: var(--primary-color)">Charles Olinsky</span>
                        </h3>
                        <!-- Team Member Roles -->
                        <h4 class="mb-1">
                            <strong style="color: var(--white-color)">Group Leader</strong>
                            <br>
                            <span style="color: var(--white-color)">Security</span>
                            <br>
                            <span style="color: var(--white-color)">Sessions</span>
                            <br>
                            <span style="color: var(--white-color)">Services</span>
                        </h4>
                    </div>
                </div>
            </div>        

            <!-- ABOUT ERICA -->
            <div class="about-container">
                <div class="row">
                    <!-- Team Member Photo -->
                    <div class="about-info">
                        <img src="images/team/erica.jpg" alt="Erica Dubie">
                    </div>   
                    <!-- Team Member Name -->
                    <div class="about-title">
                        <h3 class="mb-1"> 
                            <span style="color: var(--primary-color)">Erica Dubie</span>
                        </h3>
                        <!-- Team Member Roles -->
                        <h4 class="mb-1">
                            <span style="color: var(--white-color)">User Interface</span>
                            <br>
                            <span style="color: var(--white-color)">Services</span>
                        </h4>
                    </div>
                 </div>
            </div> 

            <!-- ABOUT OLAMIDE -->
            <div class="about-container">
                <div class="row">
                    <!-- Team Member Photo -->
                    <div class="about-info">
                        <img src="images/team/olamide.jpg" alt="Olamide Kumapayi">
                    </div>   
                    <!-- Team Member Name -->
                    <div class="about-title">
                        <h3 class="mb-1"> 
                            <span style="color: var(--primary-color)">Olamide Kumapayi</span>
                        </h3>
                        <!-- Team Member Roles -->
                        <h4 class="mb-1">
                            <span style="color: var(--white-color)">Shopping Cart</span>
                            <br>
                            <span style="color: var(--white-color)">Checkout</span>
                        </h4>
                    </div>
                </div>
            </div> 

            <!-- ABOUT CHRISTINA -->
            <div class="about-container">
                <div class="row">
                    <!-- Team Member Photo -->
                    <div class="about-info">
                        <img src="images/team/christina.jpg" alt="Christina Rodriguez">
                    </div>   
                    <!-- Team Member Name -->
                    <div class="about-title">
                        <h3 class="mb-1"> 
                            <span style="color: var(--primary-color)">Christina Rodriguez</span>
                        </h3>
                        <!-- Team Member Roles -->
                        <h4 class="mb-1">
                            <span style="color: var(--white-color)">Users</span>
                            <br>
                            <span style="color: var(--white-color)">Financial Reports</span>
                        </h4>
                    </div>
                </div>
            </div> 

        </div>

        <!-- Credits to template owner & creator -->
        <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
            <h2 class="mb-4">
                <span style="color: var(--primary-color)">Works Cited</span>
            </h2>
            
            <p>"You are NOT allowed to redistribute this HTML template downloadable ZIP file on any template collection site. You are allowed to use this template for your personal or business websites."</p>

            <p>If you have any question regarding <a rel="nofollow" href="https://www.tooplate.com/view/2119-gymso-fitness" target="_parent">Gymso Fitness HTML template</a>, you can <a rel="nofollow" href="https://www.tooplate.com/contact" target="_parent">contact Tooplate</a> immediately. Thank you.</p>
        </div>
            
    </section> 



    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/aos.js"></script>
    <script src="./js/smoothscroll.js"></script>
    <script src="./js/custom.js"></script>


</html>