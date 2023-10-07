<?php 

session_start(); 

include "database/conn.php";

if (isset($_POST['username']) && isset($_POST['pass'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['username']);

    $pass = validate($_POST['pass']);

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }
	else if($uname="trans1"&& $pass="12345"){
		header("Location: tertranspor.php");
	}
	else{
		// $sql = "SELECT `Spass` FROM `signupdb` WHERE `username`=`$uname`";
        // $sql = "SELECT Spass FROM signupdb WHERE username='$uname'";
        // $enpass = mysqli_query($conn, $sql);

		$enpass=base64_encode($pass);
		$sql = "SELECT * FROM signupdb WHERE username='$uname' AND Spass='$enpass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $uname && $row['Spass'] === $enpass) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['FirstName'] = $row['FirstName'];

                $_SESSION['id'] = $row['id'];

                header("Location: home.php");
				

                exit();
				echo '<script><h1>hello</h1></script>';
            
			}else{
				echo '<script>alert("Incorect User name or password")</script>';
                // header("Location: index.php?error=Incorect User name or password");
                exit();

            }

        }else{
			echo '<script>alert("Incorect User name or password")</script>';
            // header("Location: index.php?error=Incorect User name or password");

            exit();

        }

    
}	
}
?>
<?php
include 'database/conn.php';
if (isset($_POST["Submit"])) {

    $errors = array();
    if (isset($_FILES['uploadFile']) && $_FILES['uploadFile']['error'] == 0) {

        $file_name = time() . '_' . $_FILES['uploadFile']['name'];
        $file_size = $_FILES['uploadFile']['size'];
        $file_tmp = $_FILES['uploadFile']['tmp_name'];
        $file_type = $_FILES['uploadFile']['type'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $userName = $_POST['userName'];
		$spass = $_POST['spass'];
        $cpass = $_POST['cpass'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $State = $_POST['State'];
        $pinCode = $_POST['pinCode'];
        $noveh = $_POST['noveh'];
        $vehno = $_POST['vehno'];
        $vehtype = $_POST['vehtype'];
        $dlno	 = $_POST['dlno'];
        $extensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Extension not allowed, please choose a JPEG or PNG file.";
        }

        if ($file_size > 50000000) {
            $errors[] = 'File size must be excately 50KB';
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "uploads/transdoc/" . $file_name);

            // $full_name = $db->real_escape_string($_POST["full_name"]);

			$sqlInsert = "INSERT INTO transporter(firstName, lastName, userName, spass, cpass, address, city, State, pinCode, noveh, vehno, vehtype, dlno, file_name)
			VALUES ('".$firstName."', '".$lastName."', '".$userName."', '".$spass."','".$cpass."', '".$address."', '".$city."', '".$State."' ,'".$pinCode."' ,'".$noveh."', '".$vehno."' ,'".$vehtype."' ,'".$dlno."','". $file_name . "')";
			
            $result = $conn->query($sqlInsert);

            if ($result) {
                // echo "Success";
            } else {
                echo "Error in file uploading.....";
				
            }
        } else {
            print_r($errors);
        }
    } else {
        echo "Error in file uploading";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Goodkeeper - signIn and signOut</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<style>
	body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: #474E68
}
.main{
	width: 350px;
	height: 500px;
	background: red;
	overflow: hidden;
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}
#chk{
	display: none;
}
.signup{
	position: relative;
	width:100%;
	height: 100%;
}
label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 60px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #D89216;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #6d44b8;
}
a{
	text-decoration: none;
}
.login{
	height: 460px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}
.login label{
	color: #573b8a;
	transform: scale(.6);
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
}
#chk:checked ~ .signup label{
	transform: scale(.6);
}

</style>
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="POST" action="">
					<label for="chk" aria-hidden="true">Sign In</label>
					<input type="text" name="username" value="" placeholder="Your UserName " >
					<input type="password" name="pass" value="" placeholder="Password" >
					<button name="Submit">Sign In</button>
					</form>
                    <a href="signup.php"><button>Sign Up</button></a>
                    <a href="transport_register.php"><button>Transporter Ragistration</button></a>
			</div>			
	</div>
	
</body>
</html>