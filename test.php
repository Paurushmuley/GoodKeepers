<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <title>Properties for Sale</title>
  </head>
  <body>

    <div class="container">
  <h1>Properties for Sale</h1>
  <div class="card-deck">
    <div class="card">
      <img
        src="https://via.placeholder.com/300x200"
        class="card-img-top"
        alt="Property Image"
      />
      <div class="card-body">
        <h5 class="card-title">Property 1</h5>
        <p class="card-text">
          This is a description of Property 1.
        </p>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Price: $500,000</li>
          <li class="list-group-item">Bedrooms: 3</li>
          <li class="list-group-item">Bathrooms: 2</li>
          <li class="list-group-item">Location: City, State</li>
        </ul>
        <a href="#" class="btn btn-primary">View Property</a>
      </div>
    </div>
    <div class="card">
      <img
        src="https://via.placeholder.com/300x200"
        class="card-img-top"
        alt="Property Image"
      />
      <div class="card-body">
        <h5 class="card-title">Property 2</h5>
        <p class="card-text">
          This is a description of Property 2.
        </p>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Price: $750,000</li>
          <li class="list-group-item">Bedrooms: 4</li>
          <li class="list-group-item">Bathrooms: 3</li>
          <li class="list-group-item">Location: City, State</li>
        </ul>
        <a href="#" class="btn btn-primary">View Property</a>
      </div>
    </div>
    <div class="card">
      <img
        src="https://via.placeholder.com/300x200"
        class="card-img-top"
        alt="Property Image"
      />
      <div class="card-body">
        <h5 class="card-title">Property 3</h5>
        <p class="card-text">
          This is a description of Property 3.
        </p>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Price: $1,000,000</li>
          <li class="list-group-item">Bedrooms: 5</li>
          <li class="list-group-item">Bathrooms: 4</li>
          <li class="list-group-item">Location: City, State</li>
        </ul>
        <a href="#" class="btn btn-primary">View Property</a>
      </div>
    </div>
  </div>
</div>

 


    <!-- Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
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
include '../database/conn.php';
if (isset($_POST["Submit"])) {

    $errors = array();
    if (isset($_FILES['uploadFileofGoods']) && $_FILES['uploadFileofGoods']['error'] == 0) {

        // $file_name = time() . '_' . $_FILES['uploadFileofGoods']['name'];
        // $file_size = $_FILES['uploadFileofGoods']['size'];
        // $file_tmp = $_FILES['uploadFileofGoods']['tmp_name'];
        // $file_type = $_FILES['uploadFileofGoods']['type'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $userName = $_POST['userName'];
        $city = $_POST['city'];
        $State = $_POST['State'];
        $pinCode = $_POST['pinCode'];
        $DateTime= date('Y-m-d H:i:s');
        $TypeOfGoods = $_POST['TypeOfGoods'];
        $Nogoods= $_POST['Nogoods'];
        $sizeOfGoods= $_POST['sizeOfGoods'];
        $pickUpDate= $_POST['pickUpDate'];
        $DropOffDate= $_POST['DropOffDate'];
        // $uploadFileOfGoods= $_POST['uploadFileOfGoods'];

        $extensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Extension not allowed, please choose a JPEG or PNG file.";
        }

        if ($file_size > 50000000) {
            $errors[] = 'File size must be excately 50KB';
        }

        if (empty($errors) == true) {
        //     move_uploaded_file($file_tmp, "../uploads/Exterior/" . $file_name);

            // $full_name = $db->real_escape_string($_POST["full_name"]);

            $sqlInsert = "INSERT INTO renterdateils(firstName, lastName, userName, city, State, pinCode, Date, TypeOfGoods, Nogoods, sizeOfGoods, pickUpDate, DropOffDate)
             VALUES ('".$firstName."', '".$lastName."', '".$userName."','".$city."', '".$State."' ,'".$pinCode."' ,'".$DateTime."' ,'".$TypeOfGoods."' ,'".$Nogoods."' ,'".$sizeOfGoods."' ,'".$pickUpDate."','" . $DropOffDate. "')";
            $result = $conn->query($sqlInsert);

            if ($result) {
                // echo "Success";
            } else {
                echo "Error in file uploading";
            }
        } else {
            print_r($errors);
        }
    } else {
        echo "Error in file uploading";
    }
}

//Close connection
// $conn->close();
?>
<?php 
    // Database 
    if(isset($_POST['Submit'])){ 
        
        $uploadsDir = "../uploads/goods/";
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
                    $insert = $conn->query("INSERT INTO goodsimages(userName, images, date_time) VALUES $sqlVal");
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








<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
  <div class="property-item rounded overflow-hidden">
    <div class="position-relative overflow-hidden">
      <a href=""><img class="img-fluid" src="assets/img/property/property-1.jpg" alt=""></a>
        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For A Week</div>
          <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Apartment</div>
            </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">3rd Floor</h5>
                <a class="d-block h5 mb-2" href="">Apartment For Rent</a>
                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Amrutdham ,Nashik</p>
              </div>
            <div class="d-flex border-top">
          <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
        <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Rooms</small>
      <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>10 x 5 Door size</small>
    </div>
  </div>
</div>