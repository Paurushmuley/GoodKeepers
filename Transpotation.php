<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap 4.3.1 CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!-- FontAwesome 4.7.0 CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
      integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style1.css" />
    <title>Document</title>
    
  </head>
  
  
  <style>
    body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #8c9eff;
    background-repeat: no-repeat;
}

.card {
    z-index: 0;
    background-color: #eceff1;
    padding-bottom: 20px;
    margin-top: 90px;
    margin-bottom: 90px;
    border-radius: 10px;
}

.top {
    padding-top: 40px;
    padding-left: 13% !important;
    padding-right: 13% !important;
}

/* Icon progressbar */

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: #455a64;
    padding-left: 0;
    margin-top: 30px;
}

#progressbar li {
    list-style-type: none;
    font-size: 13px;
    width: 16%;
    float: left;
    position: relative;
    font-weight: 400;
}

#progressbar .step0::before {
    font-family: FontAwesome;
    content: '\f10c';
    color: #fff;
}

#progressbar li::before {
    width: 40px;
    height: 40px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    background: #c5cae9;
    border-radius: 50%;
    margin: auto;
    padding: 0;
}

/* Progressbar connector */
#progressbar li::after {
    content: '';
    width: 100%;
    height: 12px;
    background-color: #c5cae9;
    position: absolute;
    top: 16px;
    left: 0;
    z-index: -1;
}

#progressbar li:last-child::after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    position: absolute;
    left: -50%;
}

#progressbar li:nth-child(2)::after,
#progressbar li:nth-child(3)::after,
#progressbar li:nth-child(4)::after,
#progressbar li:nth-child(5)::after {
    left: -50%;
}

#progressbar li:first-child::after {
    border-top-left-radius: 10px;
    border-bottom-right-radius: 10px;
    position: absolute;
    left: 50%;
}

/* Color number of the step and the connect tor before it */

#progressbar li.active::before,
#progressbar li.active::after {
    background-color: #651fff;
}

#progressbar li.active::before {
    font-family: FontAwesome;
    content: '\f00c';
}

.icon {
    width: 50px;
    height: 50px;
    margin-right:15px;
}

.icon-content {
    /* padding-right: 20px; */
    padding-bottom: 120px;
}

@media screen and (max-width: 992px) {
    .icon-content {
        width: 50%;
    }
}
    </style>
  
  
  <body>
     <!-- Navigation-->
     <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/logo1.png" alt="..." /></a>
                <?php
                if(isset($_POST['Submit'])){
                    $username=$_POST["username"];
                    }
                
                ?>
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
        </nav>
    <div class="container px-1 px-md-4 py-5 mx-auto">
      <div class="card">
        <div class="row d-flex justify-content-between px-3 top">
          <div class="d-flex">
            <h5>
              ORDER
              <span class="text-primary font-weight-bold">#YWSNWDAAW</span>
            </h5>
          </div>
          <div class="d-flex flex-column text-sm-right">
            <p class="mb-0">
              Expected Arrival <span class="font-weight-bold">23 May 2023</span>
            </p>
            <p>
              USPS <span class="font-weight-bold">2374723467163473124234</span>
            </p>
          </div>
        </div>
        <!-- Add class "active" to progress -->
        <div class="row d-flex justify-content-center">
          <div class="col-12">
            <ul id="progressbar" class="text-center">
              <li class="active step0"></li>
              <li class="active step0"></li>
              <li class="active step0"></li>
              <li class="active step0"></li>
              <li class="active step0"></li>
              <li class="step0"></li>
            </ul>
          </div>
        </div>
        <div class="row justify-content-between top">
          <div class="row d-flex icon-content">
            <img src="assets/img/images_trans/CheckList.png" alt="" class="icon" />
            <div class="d-flex flex-column">
              <p class="font-weight-bold">Order <br />Packaged</p>
            </div>
          </div>
          <div class="row d-flex icon-content">
            <img src="assets/img/images_trans/Delivery.png" alt="" class="icon" />
            <div class="d-flex flex-column">
              <p class="font-weight-bold">Order <br />Transport</p>
            </div>
          </div>
          <div class="row d-flex icon-content">
            <img src="assets/img/images_trans/Shipping.png" alt="" class="icon" />
            <div class="d-flex flex-column">
              <p class="font-weight-bold">Order <br />Arrived</p>
            </div>
          </div>
          <div class="row d-flex icon-content">
            <img src="assets/img/images_trans/Home.png" alt="" class="icon" />
            <div class="d-flex flex-column">
              <p class="font-weight-bold">Order <br />Stored</p>
            </div>
          </div>
          <div class="row d-flex icon-content">
            <img src="assets/img/images_trans/Shipping.png" alt="" class="icon" />
            <div class="d-flex flex-column">
              <p class="font-weight-bold">Order <br />Dispatched</p>
            </div>
          </div>
          <div class="row d-flex icon-content">
            <img src="assets/img/images_trans/Home.png" alt="" class="icon" />
            <div class="d-flex flex-column">
              <p class="font-weight-bold">Order <br />Reached</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>