<?php

include("auth.php");
?>
<DOCTYPE html>
    <html lang="en" >
    <head>
        <title>Plastic</title>
        <meta charset="UTF-8"> 
             <link rel="stylesheet" type="text/css" href="css/learninfo.css">
             <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
             <link rel="shortcut icon" type="image/x-icon" href="http://smartpower.technology/wp-content/uploads/2019/04/7927_SmartPowerTechnology_Logo_DA-Favicon-01.png">
   
             <style>
                .info{
                 background-color: rgba(255, 255,255 ,0.8);
                 align-self: center;
                 width:60%;
                }
                .info p{
                 color: black;
                 font-size:24px;
                }
                .act{
                 width: 75%;
                 margin-top:5%;
                 margin-bottom: 10%;
                }
                .act h1{
                 margin-top: 5%;
                 font-size:46px;
                }
                .act p{
                 font-size: 24px;
                }
                .act a{
                  font-size: 24px;
                }
                .act li{
                  font-size: 24px;
                }
                
@media(max-width:992px){
 .problem h1{
   font-size: 20px;
}
.info h1{
 font-size: 30px;
}
.info p1{
font-size: 25px;
}
.info p3{
font-size: 17px;
}
.info p{
 font-size: 20px;
 
}
.info{
 margin-top: 25%;
 width:80%;
}
.act{
 margin-left: 10%;
 width: 85%;
}
.problem .column{
 width:85%;
}
.act p{
 font-size: 19px;
}
.act li{
 font-size: 19px;
}
.act h1{
 font-size: 23px;
}
.act h2{
 font-size: 26px;  
}
.act .column{
 width:85%;
 float: left;
 margin-left: 10%;
}
}
            .dropbtn {
              background-color: black;
              color: white;
              padding: 16px;
              font-size: 16px;
              border: none;
              cursor: pointer;
            }
            
            .dropdown {
              position: relative;
              display: inline-block;
            }
            
            .dropdown-content {
              display: none;
              position: absolute;
              background-color: #f9f9f9;
              min-width: 160px;
              box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
              z-index: 1;
            }
            
            .dropdown-content a {
              color: black;
              padding: 12px 16px;
              text-decoration: none;
              display: block;
            }
            
            .dropdown-content a:hover {background-color: #f1f1f1}
            
            .dropdown:hover .dropdown-content {
              display: block;
            }
            
            .dropdown:hover .dropbtn {
              color: red; 
            }

                </style>
   </head>
    <body>
            <nav id="myTopnav">
                    <div class="hamburger">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <ul class="nav-links">
                        <li><div class="dropdown">
                            <button class="dropbtn"><span class="fa fa-user-circle" ></span> login </button>
                           <div class="dropdown-content">
                                <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
                                  <p>This is secure area.</p>
                                  
                                  <a href="logout.php" style="color:black;text-decoration: none">Logout</a>
                                </div>
                              </div>
                              </li>
                        <li><a href="home.html"><span class="fa fa-fw fa-home"></span>Home</a></li>
                        <li><a href="aboutus.html"><span class="fa fa-user-circle"></span>About</a></li>
                        <li><a href="gallery1.html"><span class="fa fa-picture-o" aria-hidden="true"></span>Gallery</a></li>
                        <li><a href="Learn.html"><span class="fa fa-lightbulb-o" aria-hidden="true"></span>Learn</a></li>
                        <li><a href="donate.html"><span class="fa fa-smile-o" aria-hidden="true"></span>Donate</a></li>
                        <li><a href="supporter.php"><span class="fa fa-handshake-o" aria-hidden="true"></span>Supporters</a></li>
                       
                    </ul>
                </nav>
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
               
                      <div class="img">
                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS-Ioo15WgqFo9tXw15dX4OaA99CBiW-aqDbK7ZEx7gN-UAYBpl" style="width: 100%;z-index:-3;height:100%;">
                            
                        </div>
                        <div class="info">
                          <h1>Earth Day Network Campaign: End Plastic Pollution</h1>
                          <p>Together we can work together to end plastic pollution!</p>
                        </div>
                        <div class="act">
                      <h2>What You Need to Know About Plastic Pollution</h2>
                      <p>From poisoning and injuring marine life to disrupting human hormones, from littering our beaches and landscapes to clogging our waste streams and landfills, the exponential growth of plastics is now threatening the survival of our planet.</p>
                      <h2>What Earth Day is Doing About Plastic Pollution</h2>
                      <p>Earth Day Network is focusing on fundamentally changing human attitude and behavior about plastics and catalyzing a significant reduction in plastic pollution. The focus of Earth Day 2018 was to End Plastic Pollution and the work continues. Our strategy to end plastic pollution includes: </p>
                      <list>
                          <li>Supporting the adoption of a global framework to regulate plastic pollution</li>
                          <li>Educating and mobilizing citizens across the globe to demand action from governments and corporations to control and diminish plastic pollution</li>
                          <li>Informing and activating citizens to take personal responsibility for the plastic pollution that each one of us generates by choosing to reduce, refuse, reuse, recycle and remove plastics</li>
                          <li>Working with universities, school teachers and students to End Plastic Pollution</li>
                          <li>Working with other organizations and networks to build an effective platform End Plastic Pollution by developing resources that others can use and build partnerships.</li>
                          <li>Promoting the work that cities and local governments are doing to tackle plastic pollution</li>
                          <li>Empowering journalists across the globe to report on the problem and its emerging solutions.</li>
                        </list>
                        <p>Earth Day Network is leveraging the platform of our 50th anniversary in 2020 and is working with key constituencies and influencers in building a world of educated consumers of all ages who understand the environmental, climate and health consequences of using plastics. We are engaging and activating our global network of NGO’s and grassroots organizations, campus youth, mayors and other local elected leaders, faith leaders, artists and athletes, and primary and secondary students and teachers. We are also supporting events in all continents of the world, building a global following and activating citizens to join our End Plastic Pollution advocacy campaigns. In sum, we are using the power of Earth Day to elevate the issue of plastic pollution in the global agenda and inspiring and demanding effective action to reducing and controlling it.</p>
                        <h2 style="font-size:36px;">What You Can Do About Plastic Pollution</h2>
                        <list>
                            <li>Use our plastic calculator to track how much plastic you use.</li>
                            <li>Download our End Plastic Pollution Toolkits.</li>
                            <li>Find ways to reduce your plastic waste.</li>
                            <li>Make a pledge to reduce your use of plastic.</li>
                            <li>Stay updated on news about progress in the fight to end plastic pollution.</li>
                         </list>
                         <p>For more information refer :  
                         <a href="https://www.earthday.org/yourjourney2018/"> EarthDay</a></p>
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
                                            <p> To Know More About Us <br><span><a href="aboutus.html" style="text-decoration: none;">About Us</a></span></p>
                                            <p> Aware yourselves with <br>the upcoming issues<br><span><a href="learn.html" style="text-decoration: none;">LEARN</a></span></p>
                                          </div>
                                          <div class="column">
                                            <h2 style="text-decoration: none;"><i class="fa fa-fw fa-envelope" style="color:#ff4d4d;text-decoration: none;"></i>Contact Us</h2>
                                            <p><i class="fa fa-phone"></i>09982375275</p>
                                             <a href="#" style="text-decoration: none;"><i class="fa fa-envelope" style="color:#ff4d4d"></i> iiusgdg@gmail.com</a>
                          
                                          </div>
                                          <div class="column">
                                            <h2>Want to be appended in the list of <span style="color:pink">Supporters?</span><br><a href="registration.php" style="text-decoration: none;">SIGNUP</a></h2>
                                          </div>
                                        </div>
                                        <br><br>
                                          <a href="term.html" style="letter-spacing: 3;text-decoration: none;">Terms & Condition</a><span style="letter-spacing: 9;padding: 5px;">     /    </span><a href="policy.html" style="text-decoration: none;">Policy</a> <span style="padding: 5px">-</span> Copyright 2019 by Globaware.com<br><br>
                                          <h1 style="font-size: 40px">All Rights Reserved</h1>
                                     
                                  </footer>
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
                            </body>
                        </html>