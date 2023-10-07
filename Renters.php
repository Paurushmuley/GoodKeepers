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
 
<h1 >Renters Registration</h1>
 <div id = "Owner">
 <h5>Renters Address</h5>
 <br>
 <div id="content">
 <form class="row g-3" method="Post" enctype="multipart/form-data" action="displayproperty.php">

  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">Renter's First Name</label>
    <input type="text" class="form-control" id="validationDefault01" name="firstName">
  </div> 
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Renter's Last Name</label>
    <input type="text" class="form-control" id="validationDefault02"name="lastName">
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Username</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" name="userName">
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
      <option selected disabled value="Maharashtra">Selection</option>
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
  <h5>Goods Details</h5>
  <div class="mb-3">
  <label for="validationDefault04" class="form-label">Goods Type</label>
    <select class="form-select" id = "Property_type" aria-label="select example" name="TypeOfGoods">
      <option value="">Select goods Type</option>
      <option value="Large Furniture">Large Furniture</option>
      <option value="Medium Furniture">Medium Furniture</option>
      <option value="Small Furniture">Small Furniture</option>
      <option value="Large Appliances">Large Appliances</option>
      <option value="Medium Appliances">Medium Appliances</option>
      <option value="Small Appliances">Small Appliances</option>
      <option value="Business Storage">Business Storage</option>

    </select><span style="color:#D89216;font-size:15px;"> To Understand more about type of your goods <a href="click here.php" style="color: red">click here</a></span>

      <div class="invalid-feedback">Example invalid select feedback</div>
    </div>
  <div class="col-md-3">
            <label for="validationDefault04" class="form-label">Goods</label>
            <select class="form-select" id="validationDefault04" name="Nogoods" >
              <option selected disabled value="">Number of Goods</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="17">17</option>
              <option value="16">16</option>
              <option value="Above">Above</option>
            </select>
          </div>
            <div class="col-md-3">
            <label for="validationDefault04" class="form-label">Size</label>
            <select class="form-select" id="validationDefault04" name="sizeOfGoods">
              <option selected disabled value="">Average size of goods</option>
              <option value="1x1x1">1ft x 1ft x 1ft</option>
              <option value="2x2x2">2ft x 2ft x 2ft</option>
              <option value="3x3x3">3ft x 3ft x 3ft</option>
              <option value="4x4x4">4ft x 4ft x 4ft</option>
              <option value="5x5x5">5ft x 5ft x 5ft</option>
              <option value="6x6x6">6ft x 6ft x 6ft</option>
              <option value="7x7x7">7ft x 7ft x 7ft</option>
              <option value="8x8x8">8ft x 8ft x 8ft</option>
              <option value="9x9x9">9ftx 9ft x 9ft</option>
              <option value="10x10x10">10ft x 10ft x 10ft</option>
              <option value="11x11x11">11ft x 11ft x 11ft</option>
              <option value="12x12x12">12ft x 12ft x 12ft</option>
              <option value="13x13x13">13ft x 13ft x 13ft</option>
              <option value="Above">Above</option>
            </select>
          </div>
          <div class="col-md-3">
            <label for="validationDefault05" class="form-label">PickupDate </label>
            <input type="date" class="form-control" id="validationDefault05" name="pickUpDate">
          </div>

          <div class="col-md-3">
            <label for="validationDefault05" class="form-label">DropOffDate </label>
            <input type="date" class="form-control" id="validationDefault05" name="DropOffDate">
          </div>
          
						<div class="form-group">
							<label for="uploadFile">Upload picture of goods:</label>
							<input type="file" class="form-control" id="chooseFile" name="uploadFileOfGoods[]" multiple>
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
