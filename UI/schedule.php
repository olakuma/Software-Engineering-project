<!DOCTYPE html>
<html lang="en">
<head>

     <title>Schedule</title>

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


<body data-spy="scroll" data-target="#navbarNav" data-offset="50"></body>
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

    <!-- Schedule Section-->
    <section class="schedule section" id="schedule">
        <div class="container">
             <div class="row">
                    <!-- Title with fade transition -->
                     <div class="col-lg-12 col-12 text-center">
                         <h6 data-aos="fade-up">Our Weekly Gym Schedule</h6>
                         <h2 class="text-white" data-aos="fade-up" data-aos-delay="200">Workout Days & Times</h2>
                         <!-- Link to register for classes -->
                         <a href="services.php#classes" data-aos="fade-up" data-aos-delay="200">Register for Classes<a>
                      </div>

                      <!-- Setting widths -->
                      <div class="col-lg-12 py-5 col-md-12 col-12">
                        <!-- Creating classes table -->
                          <table class="table table-bordered table-responsive schedule-table" data-aos="fade-up" data-aos-delay="300">

                          <!-- Table headers (Days of week) -->
                              <thead class="thead-light">
                                  <th><i class="fa fa-calendar"></i></th>
                                  <th>Mon</th>
                                  <th>Tue</th>
                                  <th>Wed</th>
                                  <th>Thu</th>
                                  <th>Fri</th>
                                  <th>Sat</th>
                                  <th>Sun</th>
                              </thead>

                              <!-- All class times/days -->
                              <tbody>
                                  <tr>
                                     <td><small>7:00 am</small></td>
                                     <td><!--Monday-->
                                         <strong>Yoga</strong>
                                         <span>7:00 am - 9:00 am</span>
                                     </td>
                                     <td><!--Tuesday-->
                                         <strong>Power Fitness</strong>
                                         <span>7:00 am - 9:00 am</span>
                                     </td>
                                     <td></td><!--Wednesday-->
                                     <td></td><!--Thursday-->
                                     <td><!--Friday-->
                                         <strong>Yoga</strong>
                                         <span>7:00 am - 9:00 am</span>
                                     </td>
                                     <td></td><!--Saturday-->
                                     <td></td><!--Sunday-->
                                  </tr>

                                  <!-- Style above ^ applies to the rest of the table -->
                                  <tr>
                                     <td><small>9:00 am</small></td>
                                     <td></td>
                                     <td></td>
                                     <td>
                                         <strong>Boxing</strong>
                                         <span>9:00 am - 10:30 am</span>
                                     </td>
                                     <td>
                                         <strong>Aerobics</strong>
                                         <span>9:00 am - 10:00 am</span>
                                     </td>
                                     <td></td>
                                     <td>
                                         <strong>Cardio</strong>
                                         <span>9:00 am - 10:15 am</span>
                                     </td>
                                     <td></td>
                                  </tr>

                                  <tr>
                                     <td><small>11:00 am</small></td>
                                     <td></td>
                                     <td>
                                         <strong>Boxing</strong>
                                         <span>11:00 am - 2:00 pm</span>
                                     </td>
                                     <td>
                                         <strong>Aerobics</strong>
                                         <span>11:30 am - 3:30 pm</span>
                                     </td>
                                     <td></td>
                                     <td>
                                         <strong>Body Work</strong>
                                         <span>11:00 am - 5:20 pm</span>
                                     </td>
                                     <td></td>
                                     <td>
                                        <strong>Zumba</strong>
                                        <span>11:00 am - 1:00 pm</span>
                                     </td>
                                  </tr>

                                  <tr>
                                     <td><small>2:00 pm</small></td>
                                     <td>
                                         <strong>Boxing</strong>
                                         <span>2:00 pm - 4:00 pm</span>
                                     </td>
                                     <td>
                                         <strong>Powerlifting</strong>
                                         <span>3:00 pm - 6:00 pm</span>
                                     </td>
                                     <td></td>
                                     <td>
                                         <strong>Cardio</strong>
                                         <span>2:00 pm - 3:30 pm</span>
                                     </td>
                                     <td></td>
                                     <td>
                                         <strong>Crossfit</strong>
                                         <span>2:00 pm - 4:00 pm</span>
                                     </td>
                                     <td></td>
                                  </tr>

                                  <tr>
                                    <td><small>4:00 pm</small></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <strong>Zumba</strong>
                                        <span>4:00 pm - 6:00 pm</span>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <strong>Body Work</strong>
                                         <span>4:00 pm - 5:20 pm</span>
                                    </td>
                                  </tr> 

                                  <tr>
                                    <td><small>5:30 pm</small></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <strong>Zumba</strong>
                                        <span>5:30 pm - 7:30 pm</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <strong>Hot Yoga (with Meditation)</strong>
                                        <span>5:30 pm - 8:00 pm</span>
                                    </td>
                                    <td></td>
                                  </tr> 



                              </tbody>
                          </table>
                      </div>

             </div>
        </div>
</section>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/aos.js"></script>
    <script src="./js/smoothscroll.js"></script>
    <script src="./js/custom.js"></script>  


</html>


