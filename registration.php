<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="css/signup.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" type="image/x-icon" href="http://smartpower.technology/wp-content/uploads/2019/04/7927_SmartPowerTechnology_Logo_DA-Favicon-01.png">
	<style>
			.form{
				color:black;
				font-size:30px;
			}
			.form h3{
				margin-top:20%;
			}
			.form a{
				text-decoration: none;
			}
		</style>
	
	
</head>
<body>
		<?php
		require('db.php');
		// If form submitted, insert values into the database.
		if (isset($_REQUEST['username'])){
			$username = stripslashes($_REQUEST['username']); // removes backslashes
			$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
			$email = stripslashes($_REQUEST['email']);
			$email = mysqli_real_escape_string($con,$email);
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($con,$password);
			$pass = stripslashes($_REQUEST['pass']);
			$pass =  mysqli_real_escape_string($con,$password);
			$trn_date = date("Y-m-d H:i:s");
			$sql = "SELECT * FROM users WHERE email='$email'" ;

    $result = mysqli_query( $con,$sql ) ;

    if( mysqli_num_rows( $result ) > 0 )
    {
      echo "<script type='text/javascript'>";
      echo "var r = confirm('Email already exists');";
      echo "if(true){location.href='registration.php'}</script>";
    }
    else{


	$query = "INSERT into `users` (username, password, email, trn_date,pass) VALUES ('$username', '".md5($password)."', '$email', '$trn_date', '$pass')";
	$result   = mysqli_query($con,$query);
	if($result){
				echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
			}
}}else{
	?>
	<nav id="myTopnav">
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul class="nav-links">
                <li><a href="home.html"><span class="fa fa-fw fa-home"></span>Home</a></li>
                <li><a href="aboutus.html"><span class="fa fa-user-circle"></span>About</a></li>
                <li><a href="gallery1.html"><span class="fa fa-picture-o" aria-hidden="true"></span>Gallery</a></li>
                <li><a href="Learn.html"><span class="fa fa-lightbulb-o" aria-hidden="true"></span>Learn</a></li>
                <li><a href="donate.html"><span class="fa fa-smile-o" aria-hidden="true"></span>Donate</a></li>
                <li><a href="supporter.php"><span class="fa fa-handshake-o" aria-hidden="true"></span>Supporters</a></li>
                <li><a href="login.php"><span class="fa fa-fw fa-user"></span>Login</a></li>
            </ul>
        </nav>
        <script src="js/ad.js"></script>
        <script>
    window.onscroll = function() {stick()};

var myTopnav = document.getElementById("myTopnav");
var sticky = myTopnav.offsetTop;

function stick() {
  if (window.pageYOffset >= sticky) {
    myTopnav.classList.add("sticky")
  } else {
    myTopnav.classList.remove("sticky");
  }
}
</script>      
   <div class="mymain">
		<p class="sticky" style="color: #fff;font-size:24px;margin-top:-10vh;margin-left:2%;margin-bottom:5vh;"><img src="http://smartpower.technology/wp-content/uploads/2019/04/7927_SmartPowerTechnology_Logo_DA-Favicon-01.png" style="width: 40px;height:34px">Globaware</p>
  
	<div class="login-box">
		<div class="left-box">
			
			<form name="registration" action="" method="post" onsubmit="return validateForm()" >
			<h1>Sign Up</h1>
				<div class="input-box">
			<input type="text" name="username" class="x" placeholder="username" required /><div class="error" id="nameErr"></div>
		</div>
			<div class="input-box">
			<input type="email"  class="x"  placeholder="Email" name="email" required><div class="error" id="emailErr"></div>
		</div>
		<div class="input-box">
			<input type="password" name="password" class="x" placeholder="Password" required />
					</div>
		<div class="input-box">
			<input type="password"  class="x"  placeholder="Password Confirmation" name="pass"><div class="error" id="passErr"></div>
		</div>
			<div class="input-box">
			<input type="submit" name="submit" class="submit-btn" value="Register" />
		</div>
		</form>
	</div>
	<script>
			const hamburger=document.querySelector(".hamburger");
  const navLinks=document.querySelector(".nav-links");
  const links=document.querySelector(".nav-links li");
  
  
  hamburger.addEventListener("click", () =>{
	navLinks.classList.toggle("open");
	links.forEach(link =>{
	  link.classList.toggle("fade");
	});
  });
  </script>
	<script>
// Defining a function to display error message
	function printError(elemId, hintMsg) {
	    document.getElementById(elemId).innerHTML = hintMsg;
	}

	// Defining a function to validate form 
	function validateForm() {
	    // Retrieving the values of form elements 
	    var name = document.registration.name.value;
	    var email = document.registration.email.value;
	    var pass = document.registration.pass.value;
	    var password = document.registration.password.value;
	    
		// Defining error variables with a default value
	    var nameErr = emailErr = passErr= true;
	    
	    // Validate name
	    if(name == "") {
	        printError("nameErr", "Please enter your name");
	    } else {
	        var regex = /^[a-zA-Z\s]+$/;                
	        if(regex.test(name) === false) {
	            printError("nameErr", "Please enter a valid name");
	        } else {
	            printError("nameErr", "");
	            nameErr = false;
	        }
	    }
	    
	    // Validate email address
	    if(email == "") {
	        printError("emailErr", "Please enter your email address");
	    } else {
	        // Regular expression for basic email validation
	        var regex = /^\S+@\S+\.\S+$/;
	        if(regex.test(email) === false) {
	            printError("emailErr", "Please enter a valid email address");
	        } else{
	            printError("emailErr", "");
	            emailErr = false;
	        }
	    }
	    
	    // Validate mobile number
	    if(password == "") {
	        printError("passErr", "Please enter your password");
	    } else {
	        var regex = /^[0-9]\d{9}$/;
	        if(regex.test(password) === false) {
	            printError("passErr", "Please enter the password");
	        } else{
	            printError("passErr", "");
	            passErr = false;
	        }
	    
	    if(pass!=password){
	    	printError("passErr","the two passwords do not match");
	    }
	    else{
	    	printError ("passErr" , "");
	    	passErr = false;
	    }
	    }
	    
	    // Prevent the form from being submitted if there are any errors
	    if((nameErr || emailErr || passErr) == true) {
	       return false;
	    } else {
	        // Creating a string from input data for preview
	        var dataPreview="Welcome to the Globaware Team";
	                // Display input data in a dialog box before submitting the form
	        alert(dataPreview);
	    }
	    };
	</script>
	<div class="right-box">
		<span class="right-title">Sign Up with<br>Social Network</span>
		<button class="social facebook">Log in with Facebook</button>
		<button class="social twitter">Log in with Twitter</button>
		<button class="social google">Log in wiht Google+</button>
	</div>
	<div class="or">
		OR
	</div>
</div>
<?php } ?>
</body>
</html>