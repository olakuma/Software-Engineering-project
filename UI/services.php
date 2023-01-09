<?php
    include_once("../include/global_inc.php");
    Roles::minAccess(1, '../UI/loginUI.php');
    $s = new Session();
    
    //all class data
    try{
        $res = $dbconn->query("SELECT * FROM classes");
    } catch (Exception $e) {
        $r = new Redirect($e->getMessage(),"../UI/index.php","ERROR","Return to Home"); 
        header("Location: ../forms/redirectPage.php");
        die();
    }
    
    //intialize uid, State array, and Form index
    $uid = $s->read('user_id');
    $state = array([]); 
    $formID = 1;  

    //Attendance 
    $userClassList = array();

    try{
        $class_id_req = $dbconn -> query("SELECT CLASS_ID FROM class_attendance WHERE `USER_ID`=$uid");
    } catch(Exception $e){
        $r = new Redirect($e->getMessage(),"../UI/services.php","ERROR","Return to Services"); 
        header("Location: ../forms/redirectPage.php");
        die();
    }

    while($class = $class_id_req->fetch_assoc()){
        //print_r($class);
        array_push($userClassList, $class);
    }

    //custom in_array() for multi-dimensional arrays 
    function in_array_r($needle, $haystack, $strict = false) {
        foreach ($haystack as $item) {
            if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
                return true;
            }
        }
        return false;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Services</title>

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

<!----------------------------------------- MEMBERSHIP --------------------------------------->

<!-- Membership Section -->
    <section class="class section" id="membership">
        <!-- Member container -->
        <div class="container">
             <div class="row"> 
                <!-- Section title with transitions -->
                    <div class="col-lg-12 col-12 text-center mb-5">
                        <h6 data-aos="fade-up">Become a member today</h6>

                        <h2 data-aos="fade-up" data-aos-delay="200">Our Membership Plans</h2>
                    </div>

                    <!-- Membership picture with transition and set size -->
                     <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                         <div class="class-thumb">
                             <img src="images/class/yoga-class.jpg" class="img-fluid" alt="Class">

                             <!-- Membership description with set size -->
                             <div class="class-info">
                                 <h3 class="mb-1">Basic</h3>

                                 <span><strong>Daily Fee</strong></span>

                                 <span class="class-price">$15</span>

                                 <p class="mt-3">If you already have a PHP User account, no need to sign up! You may use the gym, rent equipment, and particpate in classes for a fee when you use PHP utilities</p>
                                 <br>
                             </div>
                         </div>
                     </div>

                      <!-- Membership picture with transition and set size -->
                     <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                         <div class="class-thumb">
                             <img src="images/class/crossfit-class.jpg" class="img-fluid" alt="Class">

                             <!-- Membership description with set size -->
                             <div class="class-info">
                                 <h3 class="mb-1">Premium</h3>

                                 <span><strong>Monthly Payment</strong></span>

                                 <span class="class-price">$25</span>

                                 <p class="mt-3">Receive access to the gym, equipment rental, and classes with no other fees <br> </p>
                                 <p class="mt-3"> Note: Membership fee will be due on the 1st of every month </p>
                             </div>
                         </div>
                     </div>

                     <!-- Membership picture with transition and set size -->
                     <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                         <div class="class-thumb">
                             <img src="images/class/cardio-class.jpg" class="img-fluid" alt="Class">

                             <!-- Membership description with set size -->
                             <div class="class-info">
                                 <h3 class="mb-1">Premium</h3>

                                 <span><strong>Annual Payment</strong></span>
                                 <br>
                                 <span><strong>($22.50 per month)</strong></span>


                                 <span class="class-price">$270</span>

                                 <p class="mt-3">Receive access to the gym, equipment rental, and classes with no other fees</p>
                                 <br>
                                 <br>
                             </div>
                         </div>
                     </div>

             </div>

             <!-- Membership button with transition and set size -->
             <div class="button-container">
                    <a href="#" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#membershipForm">Become a member today</a>
             </div>

        </div>
    </section>

    <!----------------------------------------- CLASSES --------------------------------------->

    <!-- HEADER --> 
    <section class="class section" id="classes">
        <div class="col-lg-12 col-12 text-center mb-5">
            <!-- Section title with set size and transition-->
            <h6 data-aos="fade-up">Schedule a class with us</h6>
            <h2 data-aos="fade-up" data-aos-delay="200">Our Available Classes</h2>

            <!-- Schedule Link -->
            <a href="schedule.php" data-aos="fade-up" data-aos-delay="200">View Our Schedule</a>
            
        </div>

        <div class="container">
            <div class="row">
                <?php  
                    $uID = $s->read('user_id');

                    while($classRow = $res->fetch_assoc()): 
                    
                        $cID = $classRow['CLASS_ID'];

                        // Save State
                        array_push($state,[
                            'class_name'=> $classRow['class_name'],
                            'current_capacity' => $classRow['current_capacity'],
                            'max_capacity' => $classRow['class_max_capacity'],
                            'CLASS_ID' => $classRow['CLASS_ID']
                        ]);
                        
                        //DEBUG 
                        // echo "<br> uID: ".$uid;
                        // echo "<br> User Class List: "; 
                        // print_r($userClassList)."<br>";
                        // echo "<br> cID: ".$cID;


                        //Set submit button status
                        $submit; 
                        if(in_array_r($cID, $userClassList)){
                            $submit = 'cancel'; 
                        }
                        elseif($classRow['current_capacity'] < $classRow['class_max_capacity']){
                            $submit = 'signUp';
                        }
                        elseif($classRow['current_capacity'] == $classRow['class_max_capacity']){
                            $submit = 'full';
                        } 
                        
                        
                        //WHILE LOOP CONTINUES BELOW 
                    
                ?>

                <!-- Class image, transition, set size, and container layout -->
                <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="500" style="margin-top: 30px!important">
                    <!-- Image thumb -->
                    <div class="class-thumb">

                        <img src=<?php echo "images/class/".$classRow['class_image'];?> class="img-fluid" alt="Class Image">

                        <!-- Class info -->
                        <div class="class-info">
                            <h3 class="mb-1"><?php echo $classRow['class_name'];?></h3>
                            <span><strong>Free with Premium</strong></span>
                            <span class="class-price"> <?php echo $classRow['current_capacity'];?>/<?php echo $classRow['class_max_capacity'];?> </span>
                            <p class="mt-3"><?php echo $classRow['class_description'];?></p> 

                            <!-- Sign In Button -->
                            <form action='../forms/classSignUp.php' method='POST'>

                                <!-- Submit Button  -->
                                <div style="text-align: center">
                                    <input 
                                        type="submit" 
                                        class="btn class-btn bordered mt-3" 
                                        name=<?php 
                                            if($submit == 'signUp'){ echo "signUp_".$formID; }
                                            if($submit == 'cancel'){ echo "cancel_".$formID; }
                                            if($submit == 'full'){ echo "full_".$formID; } 
                                        ?> 
                                        value=<?php 
                                            if($submit == 'signUp'){ echo "sign-up"; } 
                                            if($submit == 'cancel'){ echo "cancel"; }
                                            if($submit == 'full'){ echo "full"; }
                                        ?> 
                                        <?php if ($submit == 'full'){ ?> disabled <?php } ?>

                                        <?php $formID += 1  ?>
                                    >
                                </div>
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
                <!-- WHILE LOOP ENDS  -->
                <?php  endwhile; 
                    //save state to session 
                    $s->write('state', $state);
                ?>

            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">

      <!-- Setting containers to hold title and form content -->
        <div class="modal-content">
          <div class="modal-header">

          <!-- Title -->
            <h2 class="modal-title" id="membershipFormLabel">Membership Form</h2>

            <!-- Close Bitton -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <!-- Link to form and first name, last name, and email inputs -->
          <div class="modal-body">
            <form class="membership-form webform" action="../forms/membership.php" method="POST" role="form">
                <input type="text" class="form-control" name="cf-fname" placeholder="First Name" required>
                <input type="text" class="form-control" name="cf-lname" placeholder="Last Name" required>
                <input type="email" class="form-control" name="cf-email" placeholder="Email">

                <!-- Payment info title -->
                <h3> Payment Information </h3>
                <!-- Inputs for payment info -->
                <input type="text" class="form-control" id="cname" name="cf-cardname" placeholder="Cardholder Name">
                <input type="text" class="form-control" id="cnum" name="cf-cardnunmber" placeholder="1111-2222-3333-4444">
                <input type="text" class="form-control" id="expdate" name="cf-expdate" placeholder="MM/YY">
                <input type="text" class="form-control" id="cvv" name="cf-cvv" placeholder="CVV">

                <!-- Membership selection -->
                <p class="mt-3">Select one:</p>
                <!-- Monthly Premium checkbox -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="cBox1" id="monthly">
                    <label class="custom-control-label text-small text-muted" for="monthly"> Premium (Monthly)</label>
                </div>
                
                <!-- Annual Premium checkbox -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="cBox2" id="annual">
                    <label class="custom-control-label text-small text-muted" for="annual"> Premium (Annual)</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="form-control" id="submit-button" name="submit">Submit</button>

                
            </form>
          </div>

          <div class="modal-footer"></div>

        </div>

      </div>
    </div>


    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/aos.js"></script>
    <script src="./js/smoothscroll.js"></script>
    <script src="./js/custom.js"></script>  

</html>   
