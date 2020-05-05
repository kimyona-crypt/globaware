<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

        <link rel="shortcut icon" type="image/x-icon" href="http://smartpower.technology/wp-content/uploads/2019/04/7927_SmartPowerTechnology_Logo_DA-Favicon-01.png">
        <style>
                p.sticky {
                 position: -webkit-sticky;
                 position: sticky;
                 top: 5vh;
                 width: 200px;
                 z-index:2000;
                 display: none;
                 }
                 .form{
                  background-image: linear-gradient(rgba(255,255,255,0.4),rgba(255,255,255,0.6)),url(https://as1.ftcdn.net/jpg/00/66/90/50/500_F_66905006_93t1zUK90XCKwHsdXrlT2xJKqa4vV2bV.jpg);
                  position: relative;
                  height:100vh;
                
                 }
                  .box{
                  width:30%;
                  height:40vh;
                  background-color: rgba(0,0,0,0.5);
                  margin-left: 30%;
                  position: absolute;
                  margin-top: 10%;

                  border-radius: 10%;
                 }
                 .form h3{
                  font-size:34px;
                  color:white;
                  margin-top: 1%;
                  padding-bottom: 0px;
                 }
                 .form h4{
                  font-size:24px;
                  color:white;
                 }
                 .form a{
                  color:blue;
                  font-size: 28px;
                 }
                 @media screen and (max-width:850px){
                   p.sticky{
                   display: block;
                 }
                  .box{
                    width:40%;
                    height:30vh;
                    margin-top: 30%;
                  }
                  .form h3{
                    font-size: 24px;
                    margin-bottom: 0%;
                  }
               }
                 </style>
    </head>
<body>
        <?php
        require('db.php');
        session_start();
        // If form submitted, insert values into the database.
        if (isset($_POST['username'])){
            
            $username = stripslashes($_REQUEST['username']); // removes backslashes
            $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con,$password);
            
        //Checking is user existing in the database or not
            $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
            $result = mysqli_query($con,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            if($rows==1){
                $_SESSION['username'] = $username;
                header("Location: supporter.php"); // Redirect user to index.php
                }else{
                    echo "<div class='form'>
                    <div class='box'><h3>Username/password is incorrect.</h3><br/><h4>Click here to <a href='login.php'>Login</a></h4></div></div>";
                    }
        }else{
    ?>
   <nav id="myTopnav">
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul class="nav-links">
                <li style="width:45%"><p style="color: #fff;font-size:24px;margin-left:2%;"><img src="http://smartpower.technology/wp-content/uploads/2019/04/7927_SmartPowerTechnology_Logo_DA-Favicon-01.png" style="width: 40px;height:34px">Globaware</p>
                </li>
                <li><a href="home.html"><span class="fa fa-fw fa-home"></span>Home</a></li>
                <li><a href="aboutus.html"><span class="fa fa-user-circle"></span>About</a></li>
                <li><a href="gallery1.html"><span class="fa fa-picture-o" aria-hidden="true"></span>Gallery</a></li>
                <li><a href="Learn.html"><span class="fa fa-lightbulb-o" aria-hidden="true"></span>Learn</a></li>
                <li><a href="donate.html"><span class="fa fa-smile-o" aria-hidden="true"></span>Donate</a></li>
                <li><a href="supporter.php"><span class="fa fa-handshake-o" aria-hidden="true"></span>Supporters</a></li>
                <li><a href="login.php"><span class="fa fa-fw fa-user"></span>Login</a></li>
            </ul>
        </nav>
      

    <div class="my-main">
            <p class="sticky" style="color: #fff;font-size:24px;margin-top:-10vh;margin-left:2%;margin-bottom:10vh;"><img src="http://smartpower.technology/wp-content/uploads/2019/04/7927_SmartPowerTechnology_Logo_DA-Favicon-01.png" style="width: 40px;height:34px">Globaware</p>

    
        <div class="bg-layer">
        
            <h1>Login Form</h1>

            <div class="header-main">
            <div class="main-icon">
                <span class="fa fa-eercast"></span>
            </div>
            <div class="header-left-bottom">
                <form action="login.php" method="POST" name="login">
                    <div class="icon1">
                        <span class="fa fa-user"></span>
                        <input type="text" id="name" name="username" placeholder="Username" required="">
                    </div>
                    <div class="icon1">
                        <span class="fa fa-lock"></span>
                        <input type="password" id="password" placeholder="password" name="password" required="">
                    </div>
                    <div class="login-check">
                        <label class="checkbox">
                            <input type="checkbox" name="checkbox" checked=""><i></i>
                        Keep me log in</label>
                    </div>
                    <div class="bottom">
                        
                        <button   class="btn" name="submit">Log In </button>
                        
                    </div>
                    <div class="links">
                        <p><a href="text.php">Forgot Password ?</a></p>
                        <p class="right"><a href="registration.php">New User Register</a></p>
                        <div class="clear"></div>
                    </div>

                </form>
            </div>
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
            <div class="social">
                <ul>
                    <li>Or Login Using</li>
                    <li>
                        <a href="https://www.facebook.com" class="facebook">    <span class="fa fa-facebook"></span></a>
                    </li>
                    
                    <li>
                        <a href="#" class="twitter">    <span class="fa fa-twitter"></span></a>
                    </li>
                    
                    <li>
                        <a href="#" class="google-plus">    <span class="fa fa-google-plus"></span></a>
                    </li>
                </ul>
            </div>
        </div>
          </div>
          <footer>
          <h1>Connect With Us</h1>
          <ul>
                    <li>
                        <a href="https://www.facebook.com" class="facebook">    <span class="fa fa-facebook"></span></a>
                    </li>
                    
                    <li>
                        <a href="#" class="twitter">    <span class="fa fa-twitter"></span></a>
                    </li>
                    
                    <li>
                        <a href="#" class="google-plus">    <span class="fa fa-google-plus"></span></a>
                    </li>
                </ul>
              <div class="row" >
                <div class="column">
                  <h2>Information</h2>
                  <p> To Know More About Us <br><span><a href="aboutus.html">About Us</a></span></p>
                  <p> Aware yourselves with <br>the upcoming issues<br><span><a href="learn.html">LEARN</a></span></p>
                </div>
                <div class="column">
                  <h2><i class="fa fa-fw fa-envelope" style="color:#ff4d4d"></i>Contact Us</h2>
                  <p><i class="fa fa-phone"></i>09982375275</p>
                  <a href="#"><i class="fa fa-envelope" style="color:#ff4d4d"></i> iiusgdg@gmail.com</a>

                </div>
                <div class="column">
                  <h2>Want to be appended in the list of <span style="color:pink">Supporters?</span><br><a href="registration.php">SIGNUP</a></h2>
                </div>
              </div>
              <br><br>
                <a href="term.php" style="letter-spacing: 3">Terms & Condition</a><span style="letter-spacing: 9;padding: 5px">     /    </span><a href="policy.html">Policy</a> <span style="padding: 5px">-</span> Copyright 2019 by Globaware.com<br><br>
                <h1 style="font-size: 35px">All Rights Reserved</h1>
           
        </footer>
    
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
   <?php } ?>    
</body>
</html>