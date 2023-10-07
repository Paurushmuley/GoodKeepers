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
        <style>
      .sliderContainer{
        /* background-color : black; */
        display : flex;
        flex-direction : row;
      }
      .sliderContainer .my{
        width:50%;
        padding:10px

      }
      .sliderContainer .propertyInfo{
        width:50%;
        text-align:center;
        margin-top:5px;

      }
      /* .sliderContainer .my .btnc{
        color:black;
      } */
    </style>
    </head>
    <body >
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/logo1.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="#team">Team</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="signout.php">Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </nav><br /><br /><br /><br />
        <div class="sliderContainer">
    <div id="carouselExampleCaptions" class="carousel slide my" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpg" class="d-block w-100" alt="..." width="500" height="600">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <?php
    include 'database/conn.php';
    $address=$_GET['address'];
    $city=$_GET['city'];
    $State=$_GET['State'];
    $pinCode=$_GET['pinCode'];
    $userName= $_GET['userName'];
    // $sql="SELECT * FROM `propertyragistration` WHERE `city`='$city' AND `State`='$State' AND `pinCode`='$pinCode'AND `address`='$address'";
    // $result = mysqli_query($conn, $sql);
    $sql2 = "SELECT * FROM `interiorimg`WHERE `userName`='$userName' AND `city`='$city' AND `State`='$State' AND `pinCode`='$pinCode'AND `address`='$address'";
    $result = mysqli_query($conn, $sql2);
    // echo mysqli_fetch_assoc($result);

    // // echo mysqli_num_rows($result);
    // echo "<br>";
    while($row = mysqli_fetch_assoc($result)){
    echo "<div class='carousel-item'><img src='uploads/Interior/".$row['images']."' class='d-block w-100' alt='...' width='500' height='600' ><div class='carousel-caption d-none d-md-block'></div></div>";
    }
    ?>
  </div>
  <button class="carousel-control-prev btnc" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next btnc" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="propertyInfo">
    <h1>Property Details</h1>
    <h3>Have A Look</h3>
    <?php
    include 'database/conn.php';
    $address=$_GET['address'];
    $city=$_GET['city'];
    $State=$_GET['State'];
    $pinCode=$_GET['pinCode'];
    $propertyType=$_GET['propertyType'];
    $userName= $_GET['userName'];
    $Expected_Rent= $_GET['Expected_Rent'];
    $floors= $_GET['floors'];
    $sqFeet= $_GET['sqFeet'];
    $noRooms= $_GET['noRooms'];
    echo "<h3>".$address."</h3>";
    echo "<hr>";
    echo "<h3 style='color:red;'>Propertity Type : ".$propertyType."</h3>";
    echo "<h3>Area : ".$sqFeet." sq Feet</h3>";
    echo "<h3>State : ".$State."</h3>";
    echo "<h3>Pincode ".$pinCode." BHK</h3>";
    echo "<h3>noRooms ".$noRooms." BHK</h3>";
   echo" <h3>Rent : 12000 Rs</h3>";

    
    echo "<form class='row g-3' action='' method='POST'><div class='container col-lg-12'><a href ='payment.php?city=".$city."&State=".$State."&pinCode=".$pinCode."&address=".$address."'<button class='btn btn-success' name='send'>Make Peyment</button></div></form>";
    
              
  ?>
</div>

</div>

               
      <br /><br />  <br /><br /><br /><br />
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


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
