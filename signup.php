<?php
    $showAlert = false; 
    $showError = false; 
    $exists=false;
    include 'database/conn.php';    
    if(isset(($_POST['Submit']))){
          
        // Include file which makes the
        // Database Connection.
        $firstName = $_POST['Firstname'];
        $lastName = $_POST['Lastname'];
        $username = $_POST['username'];
        $Phone = $_POST['Phone'];
        $email = $_POST['email'];
        $Spass= $_POST['Spass']; 
        $Cpass = $_POST["Cpass"];
                
        
        $sql = "Select * from signupdb where username='$username'";
        
        $result = mysqli_query($conn, $sql);
        
        $num = mysqli_num_rows($result); 
        
        // This sql query is use to check if
        // the username is already present 
        // or not in our Database
        if($num == 0) {
            if(($Spass == $Cpass) && $exists==false) {
        
                $enpass = base64_encode($Spass);
                    
                // Password Hashing is used here. 
                $sql = "INSERT INTO `signupdb` ( `firstName`,`lastName`,`username`,`Phone`,`date`,`email`,`Spass`) VALUES ('$firstName','$lastName','$username','$Phone',current_timestamp(),'$email','$enpass')";
        
                $result = mysqli_query($conn, $sql);
        
                if ($result) {
                    $showAlert = true; 
                }
            } 
            else { 
                $showError = "Passwords do not match"; 
            }      
        }// end if 
        
       if($num>0) 
       {
          $exists="Username not available"; 
       } 
        
    }//end if   
     
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    
    <body id="page-top">
    <?php 
    if($showAlert) {
        header( 'Location: signin.php' );
    }
    
    if($showError) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '. $showError.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> '; 
   }
        
    if($exists) {
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert">
    
        <strong>Error!</strong> '. $exists.'
        <button type="button" class="close" 
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button>
       </div> '; 
     }
   
?>
     <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Registration</h2>
                    <h3 class="section-subheading text-muted">Enter your Details.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" method="POST" action="signup.php">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- First Name input-->
                                <input class="form-control" id="Firstname" name="Firstname" type="text" placeholder="Your First Name*" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A First name is required.</div>
                            </div>
                            <div class="form-group">
                                <!--Last Name input-->
                                <input class="form-control" id="Lastname" name="Lastname" type="text" placeholder="Your Last Name*" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A Last name is required.</div>
                            </div>
                            <div class="form-group">
                                <!--userName input-->
                                <input class="form-control" id="Lastname" name="username" type="text" placeholder="Your userName*" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A username is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Phone no. input-->
                                <input class="form-control" id="Phone"  name="Phone" type="Tel" placeholder="Phone No.*" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="Password:required">Enter Your phone No.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group">
                                <!-- Set Password input-->
                                <input class="form-control" id="Spass" name="Spass" type="Password" placeholder="Set Password*" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="Password:required">Set Your Password.</div>
                            </div>
                            <div class="form-group">
                                <!-- Confirm Password input-->
                                <input class="form-control" id="Cpass" name="Cpass" type="Text" placeholder="Confirm Password*" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="Password:required">Confirm Your Password.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button-->
                    <div class="col-12" id = "btn1">
                        <button class="btn btn-primary" id = "btnRagistor" name = "Submit" type="submit" >Ragistrator</button>
                    </div>
                </form>
            </div>
        </section>


        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
