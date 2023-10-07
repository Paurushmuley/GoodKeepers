<?php
include 'database/conn.php';
if (isset($_POST["pick"])) {

    $errors = array();
    if (isset($_FILES['uploadFile']) && $_FILES['uploadFile']['error'] == 0) {

        $file_name = time() . '_' . $_FILES['uploadFile']['name'];
        $file_size = $_FILES['uploadFile']['size'];
        $file_tmp = $_FILES['uploadFile']['tmp_name'];
        $file_type = $_FILES['uploadFile']['type'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $userName = "demo11";
        $extensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Extension not allowed, please choose a JPEG or PNG file.";
        }

        if ($file_size > 50000000) {
            $errors[] = 'File size must be exactly 50KB';
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, "uploads/pick/" . $file_name);

            $sqlInsert = "UPDATE imgmatching SET fileNamepick='$file_name' WHERE userName='demo11'";
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
?>

<?php
include 'database/conn.php';
if (isset($_POST["drop"])) {

    $errors = array();
    if (isset($_FILES['uploadFile']) && $_FILES['uploadFile']['error'] == 0) {

        $file_name = time() . '_' . $_FILES['uploadFile']['name'];
        $file_size = $_FILES['uploadFile']['size'];
        $file_tmp = $_FILES['uploadFile']['tmp_name'];
        $file_type = $_FILES['uploadFile']['type'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $userName = "demo11";
        $extensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Extension not allowed, please choose a JPEG or PNG file.";
        }

        if ($file_size > 50000000) {
            $errors[] = 'File size must be exactly 50KB.';
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, "uploads/Timg/" . $file_name);

            $sqlInsert = "UPDATE imgmatching SET fileNamedrop='$file_name' WHERE userName='demo11'";
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In Details</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
<div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="assets/img/property/property-1.jpg" alt=""></a>
                                        
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Pick</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Click Photo</h5>
                                        <a class="d-block h5 mb-2" href="TransDetails.php">At Pickup</a>
                                        <form action="" enctype="multipart/form-data" method="Post">
                                        <div class="form-group">
							<label for="uploadFile">Upload Goods Photo At Pickup:</label>
							<input type="file" class="form-control" id="uploadFile" name="uploadFile">
							<span style="color:#f00;font-size:15px;"><b>Note:</b> Only  JPG, and PNG images are allowed</span>
						</div>
                                <div class="col-12" id = "btn1">
                                <button class="btn btn-primary" id = "btnNext" name = "pick" type="Submit" >Submit</button>
                                </div>
                                </form>       
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="assets/img/property/property-1.jpg" alt=""></a>
                                        
                                        <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">Drop</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">Click Photo</h5>
                                        <a class="d-block h5 mb-2" href="TransDetails.php">At Drop</a>
                                        <form action="" enctype="multipart/form-data" method="Post">
                                        <div class="form-group">
							<label for="uploadFile">Upload Goods Photo At Drop:</label>
							<input type="file" class="form-control" id="uploadFile" name="uploadFile">
							<span style="color:#f00;font-size:15px;"><b>Note:</b> Only  JPG, and PNG images are allowed</span>
						</div>
                        <div class="col-12" id = "btn1">
                            <button class="btn btn-primary" id = "btnNext" name = "drop" type="submit" >Submit</button>
                        </div></form> 
                                    </div>
                                    
                                </div></div>
                                <?php
                                include 'database/conn.php';
                                if (isset($_POST["drop"])) {
                                    $command = 'python C:\xampp\htdocs\pro\goodKeepers\sample.py';
                                    $output = shell_exec($command);                           
                                    // $str="<pre>".$output."</pre>";
                                        
                                    
                                    // if($str=="Damaged"){
                                    //     echo "<div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.1s'><div class='property-item rounded overflow-hidden'> <div class='position-relative overflow-hidden'><a href=''><img class='img-fluid' src='assets/img/dmage.jpg' alt=''></a><div class='bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3'>Drop</div></div></div></div>";
                                        
                                    // }
                                    // else{
                                    //     echo "<div class='col-lg-4 col-md-6 wow fadeInUp' data-wow-delay='0.1s'><div class='property-item rounded overflow-hidden'> <div class='position-relative overflow-hidden'><a href=''><img class='img-fluid' src='assets/img/notdamage.png' alt=''></a><div class='bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3'>Drop</div></div></div></div>";
                                    // }
                                    echo "<pre><h1 align='center'>Your Goods Are ".$output. "</h1></pre>" ;

                                }?>

                            
                        </div>
                    </div>                                

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