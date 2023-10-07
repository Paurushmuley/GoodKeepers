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
          body{
            background-color:#BBBBBB;
          }
            #Owner{
                margin:30px;
            }
            h1{
                background-color:#393E46;
                color:#D89216;
                padding:20px;
                text-align:center;
                
            }
            h3{
                margin-top : 0px;
                margin-bottom : 0px;
                background-color:#393E46;
                color:#D89216;
            }
            #btn1 button{
                width:25%;
            }
            .imgGallery img {
                padding: 8px;
                max-width: 100px;
            }
            a:link {
                color: black;
            }
        </style>
    </head>
    <body>

        <!-- Navigation-->
       
      
 <!-- main body -->
 
<h1 >Transportation Registration</h1>
 <div id = "Owner">
 <br>
 <div id="content">
 <form class="row g-3" method="Post" enctype="multipart/form-data" action="login.php">

  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Transportation Agency Name</label>
    <input type="text" class="form-control" id="validationDefault01" name="firstName">
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Transporter's Name</label>
    <input type="text" class="form-control" id="validationDefault02"name="lastName">
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Username</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" name="userName">
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Set Password</label>
    <div class="input-group">
    <input type="Password" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" name="spass">
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Confirm Password</label>
    <div class="input-group">
      <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" name="cpass">
    </div>
  </div>
  <div class="mb-3">
    <label for="validationTextarea" class="form-label">Address</label>
    <textarea class="form-control" id="validationTextarea" placeholder="Required" name="address" ></textarea>
    <div class="invalid-feedback">
      Please enter your address.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationDefault03"name="city" >
  </div>
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">State</label>
    <select class="form-select" id="validationDefault04" name="State">
      <option selected disabled value="Maharashtra">Maharashtra</option>
      <option value="Andhra Pradesh">Andhra Pradesh</option>
      <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
      <option value="Assam">Assam</option>
      <option value="Bihar">Bihar</option>
      <option value="Chandigarh">Chandigarh</option>
      <option value="Chhattisgarh">Chhattisgarh</option>
      <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
      <option value="Daman and Diu">Daman and Diu</option>
      <option value="Delhi">Delhi</option>
      <option value="Lakshadweep">Lakshadweep</option>
      <option value="Puducherry">Puducherry</option>
      <option value="Goa">Goa</option>
      <option value="Gujarat">Gujarat</option>
      <option value="Haryana">Haryana</option>
      <option value="Himachal Pradesh">Himachal Pradesh</option>
      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
      <option value="Jharkhand">Jharkhand</option>
      <option value="Karnataka">Karnataka</option>
      <option value="Kerala">Kerala</option>
      <option value="Madhya Pradesh">Madhya Pradesh</option>
      <option value="Maharashtra">Maharashtra</option>
      <option value="Manipur">Manipur</option>
      <option value="Meghalaya">Meghalaya</option>
      <option value="Mizoram">Mizoram</option>
      <option value="Nagaland">Nagaland</option>
      <option value="Odisha">Odisha</option>
      <option value="Punjab">Punjab</option>
      <option value="Rajasthan">Rajasthan</option>
      <option value="Sikkim">Sikkim</option>
      <option value="Tamil Nadu">Tamil Nadu</option>
      <option value="Telangana">Telangana</option>
      <option value="Tripura">Tripura</option>
      <option value="Uttar Pradesh">Uttar Pradesh</option>
      <option value="Uttarakhand">Uttarakhand</option>
      <option value="West Bengal">West Bengal</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Pin code</label>
    <input type="text" class="form-control" id="validationDefault05" name="pinCode">
  </div>
  
  <div class="col-md-4">
    <label for="validationDefault05" class="form-label">No. of vehicles owned</label>
    <input type="text" class="form-control" id="validationDefault05" name="noveh">
  </div>
  <div class="col-md-4">
            <label for="validationDefault04" class="form-label">Vehicle number</label>
    <input type="text" class="form-control" id="validationDefault05" name="vehno">
          </div>
            <div class="col-md-4">
            <label for="validationDefault04" class="form-label">Vehicle type</label>      
    <input type="text" class="form-control" id="validationDefault05" name="vehtype">
          </div>

          <div class="col-md-6">
    <label for="validationDefault05" class="form-label">Driving License No.</label>
    <input type="text" class="form-control" id="validationDefault05" name="dlno">
  </div>
            <div class="form-group">
							<label for="uploadFile">Insurance policy photo:</label>
							<input type="file" class="form-control" id="uploadFile" name="uploadFile">
							<span style="color:#D89216;font-size:15px;"><b>Note:</b> Only  JPG, and PNG images are allowed. Maximum upload size is 5mb </span>
						</div>

            <div class="imgGallery">
            <!-- Image preview -->
            </div>
          <!--<div class="custom-file">
          <label for="uploadFile">Upload Interior Photos:</label>
            <input type="file" name="fileUpload[]" class="custom-file-input form-control" id="chooseFile" multiple>
							<span style="color:#f00;font-size:15px;"><b>Note:</b> Only  JPG, and PNG images are allowed. Maximum upload size is 5mb </span>
          </div>-->
          <div class="col-12" id = "btn1">
            <button class="btn btn-primary" id = "btnNext" name = "Submit" type="submit" >Register</button>
          </div>
        </form>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
      $(function() {
      // Multiple images preview with JavaScript
      var multiImgPreview = function(input, imgPreviewPlaceholder) {
          if (input.files) {
              var filesAmount = input.files.length;
              for (i = 0; i < filesAmount; i++) {
                  var reader = new FileReader();
                  reader.onload = function(event) {
                      $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                  }
                  reader.readAsDataURL(input.files[i]);
              }
          }
      };
        $('#chooseFile').on('change', function() {
          multiImgPreview(this, 'div.imgGallery');
        });
      });
    </script>


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
