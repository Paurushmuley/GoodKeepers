<?php
// include 'database/conn.php';
// if (isset(($_POST["Submit"]))) {
//         $firstName = $_POST['firstName'];
//         $lastName = $_POST['lastName'];
//         $userName = $_POST['userName'];
//         $city = $_POST['city'];
//         $State = $_POST['State'];
//         $pinCode = $_POST['pinCode'];
//         $DateTime= date('Y-m-d H:i:s');
//         $propertyType = $_POST['propertyType'];
//         $Nogoods= $_POST['Nogoods'];
//         $sizeOfGoods= $_POST['sizeOfGoods'];
//         $pickUpDate= $_POST['pickUpDate'];
//         $DropOffDate= $_POST['DropOffDate'];
//         $uploadFileOfGoods= $_POST['uploadFileOfGoods'];

//         // $sqlInsert = "INSERT INTO signupdb(firstName, lastName, Phone,Date, email, Spass)
//         // VALUES ('".$firstName."', '".$lastName."', '".$Phone."', '".$email."','".$DateTime."', '".$Spass."')";
//         // $result = $conn->query($sqlInsert);   
    
 

?>
<?php
include 'database/conn.php';
if (isset($_POST["Submit"])) {
        // $file_name = time() . '_' . $_FILES['uploadFileofGoods']['name'];
        // $file_size = $_FILES['uploadFileofGoods']['size'];
        // $file_tmp = $_FILES['uploadFileofGoods']['tmp_name'];
        // $file_type = $_FILES['uploadFileofGoods']['type'];
        // $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $userName = $_POST['userName'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $State =$_POST['State'];
        $pinCode = $_POST['pinCode'];
        $DateTime= date('Y-m-d H:i:s');
        $TypeOfGoods = $_POST['TypeOfGoods'];
        $Nogoods= $_POST['Nogoods'];
        $sizeOfGoods= $_POST['sizeOfGoods'];
        $pickUpDate= $_POST['pickUpDate'];
        $DropOffDate= $_POST['DropOffDate'];
        $sqlInsert = "INSERT INTO renterdateils(firstName, lastName, userName, address, city, State, pinCode, Date, TypeOfGoods, Nogoods, sizeOfGoods, pickUpDate, DropOffDate)
        VALUES ('".$firstName."', '".$lastName."', '".$userName."','".$address."','".$city."', '".$State."' ,'".$pinCode."' ,'".$DateTime."' ,'".$TypeOfGoods."' ,'".$Nogoods."' ,'".$sizeOfGoods."' ,'".$pickUpDate."','" . $DropOffDate. "')";
        $result = $conn->query($sqlInsert);
}

//Close connection
// $conn->close();
?>
<?php 
    // Database 
    if(isset($_POST['Submit'])){ 
        
        $uploadsDir = "uploads/goods/";
        $allowedFileType = array('jpg','png','jpeg');
        
        // Velidate if files exist
        if (!empty(array_filter($_FILES['uploadFileOfGoods']['name']))) {
            
            // Loop through file items
            foreach($_FILES['uploadFileOfGoods']['name'] as $id=>$val){
                // Get files upload path
                $fileName        = $_FILES['uploadFileOfGoods']['name'][$id];
                $tempLocation    = $_FILES['uploadFileOfGoods']['tmp_name'][$id];
                $targetFilePath  = $uploadsDir . $fileName;
                $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                $uploadDate      = date('Y-m-d H:i:s');
                $uploadOk = 1;
                $userName = $_POST['userName'];
                if(in_array($fileType, $allowedFileType)){
                        if(move_uploaded_file($tempLocation, $targetFilePath)){
                            $sqlVal = "('".$userName."','".$fileName."', '".$uploadDate."')";
                        } else {
                            $response = array(
                                "status" => "alert-danger",
                                "message" => "File coud not be uploaded."
                            );
                        }
                    
                } else {
                    $response = array(
                        "status" => "alert-danger",
                        "message" => "Only .jpg, .jpeg and .png file formats allowed."
                    );
                }
                // Add into MySQL database
                if(!empty($sqlVal)) {
                    $insert = $conn->query("INSERT INTO goodsimages(userName, fileName, uploadDate) VALUES $sqlVal");
                    if($insert) {
                        $response = array(
                            "status" => "alert-success",
                            "message" => "Files successfully uploaded."
                        );
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Files coudn't be uploaded due to database error."
                        );
                    }
                }
            }
        } else {
            // Error
            $response = array(
                "status" => "alert-danger",
                "message" => "Please select a file to upload."
            );
        }
    } 
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
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="home.php"><img src="assets/img/logo1.png" alt="..." /></a>
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

        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Property Listing</h1>
                            <p>We have some properties for you.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                        <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">Featured</a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2"> For A week</a>
                            </li>
                            <li class="nav-item me-0">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">For A Month</a>
                            </li>
                            <li class="nav-item me-0">
                                <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">For More Than 1 Month </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            
                        <?php
include 'database/conn.php';
if (isset($_POST["Submit"])) {
        $firstName = $_POST['firstName'];
        $city = $_POST['city'];
        $State =$_POST['State'];
        $pinCode = $_POST['pinCode'];
        $TypeOfGoods = $_POST['TypeOfGoods'];
        $Nogoods= $_POST['Nogoods'];
        $sizeOfGoods= $_POST['sizeOfGoods'];
        $pickUpDate= $_POST['pickUpDate'];
        $DropOffDate= $_POST['DropOffDate'];
        $address=$_POST['address'];

}
$sql="SELECT * FROM `propertyragistration` WHERE `city`='$city' AND `State`='$State' AND `pinCode`='$pinCode'";
// $sql = "SELECT * FROM `propertyragistration`";
$result = mysqli_query($conn, $sql);

// echo mysqli_num_rows($result);
echo "<br>";
while($row = mysqli_fetch_assoc($result)){
        echo "<div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.1s'><div class='property-item rounded overflow-hidden'><div class='position-relative overflow-hidden'><a href='property_details.php?rcity=".$city."&rState=".$State."&rpincode=".$pinCode."&raddress=".$address."&rfirstName=".$firstName."&city=".$row['city']."&State=".$row['State']."&pinCode=".$row['pinCode']."&address=".$row['address']."&userName=".$row['userName']."&propertyType=".$row['propertyType']."&Expected_Rent=".$row['Expected_Rent']."&floors=".$row['floors']."&sqFeet=".$row['sqFeet']."&noRooms=".$row['noRooms']."'><img class='img-fluid' src='uploads/Exterior/".$row['file_name']."' alt='coming'></a><div class='bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3'>For A Week</div><div class='bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3'>".$row['propertyType']."</div></div><div class='p-4 pb-0'><h5 class='text-primary mb-3'>3rd Floor</h5><a class='d-block h5 mb-2' href=''>".$row['propertyType']." For Rent</a> <p><i class='fa fa-map-marker-alt text-primary me-2'></i>".$row['address']." ".$row['city']." ".$row['State']."</p></div><div class='d-flex border-top'><small class='flex-fill text-center border-end py-2'><i class='fa fa-ruler-combined text-primary me-2'></i>".$row['sqFeet']." sq feet"."</small><small class='flex-fill text-center border-end py-2'><i class='fa fa-bed text-primary me-2'></i>".$row['noRooms']." Room"."</small><small class='flex-fill text-center py-2'><i class='fa fa-bath text-primary me-2'></i>".$row['floors']." Floor"."</small></div></div></div>";
}
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->










      <br /><br />  <br /><br /><br /><br /><!-- Footer-->
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
