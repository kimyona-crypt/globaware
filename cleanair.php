<?php

include("auth.php");
?>
<DOCTYPE html>
    <html lang="en" >
    <head>
        <title>Clean Air</title>
        <meta charset="UTF-8"> 
             <link rel="stylesheet" type="text/css" href="css/learninfo.css">
             <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
             <link rel="shortcut icon" type="image/x-icon" href="http://smartpower.technology/wp-content/uploads/2019/04/7927_SmartPowerTechnology_Logo_DA-Favicon-01.png">
   
             <style>
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
                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR5frWSlMzaKwxHtNn-ocw4no6mNPqTg4LqBNgNC2ppuK3aDv5l" style="width: 100%;z-index:-3;height:100%;">
                            
                        </div>
                        <div class="info">
                          <h1>‘Clean air isn’t a luxury, it’s a basic human right’ – Greenpeace</h1>
                         
                        </div>
                        <div class="act">
                      <p>Hong Kong – This World Environment Day we face the reality that more than 9 out of 10 people globally are breathing unsafe air.
                        <br><br>
                        “Clean air isn’t a luxury, it’s a basic human right. It’s not acceptable that so many people around the world are being forced to breathe polluted, toxic air. More and more people are having to deal with the terrible health impacts and they’ve had enough – they’re rising up and demanding solutions,” said Greenpeace International Executive Director Jennifer Morgan.
                        <br><br>
                        “This is a public health crisis we can fix by transitioning away from polluting fossil fuels to renewable energy and investing in clean transport. This transformation is already underway in some countries – it’s not a technological challenge but a political one.”
                        <br><br>
                        Coal burning is the number one source of air pollution worldwide. In China alone, approximately 670,000 people die each year due to air pollution from coal combustion, and in India the figure is estimated as between 80,000 and 115,000. In Europe and the United States air pollution from coal burning kills 23,300 and 13,200 people per year, respectively.
                        <br><br>
                        The transport sector is growing faster than any other climate emissions source, with the world’s car fleet predicted to triple by 2050. The transport sector is responsible for up to 70% of particulate emissions in some areas, and for up to 30% of particulate emissions in Europe. In Korea, vehicles are the biggest source of air pollution in the Seoul metropolitan area, accounting for 27% of total particulate emissions.
                        <br><br>
                        In China, the host of this year’s UN World Environment Day event, air pollution shortens lives by an average of three years. But while China records dangerously high air pollution levels, it has also seen some of the most dramatic progress. Levels of hazardous PM2.5 fell by 35% between 2013 and 2017 as a result of strict air pollution policies and a flatlining of coal consumption.
                        <br><br>
                        “While its war on pollution is far from over, China’s progress on reducing pollution shows the scale of action that is possible if there is genuine will at leadership level. Air pollution creeps across borders and knows no national boundaries. There is an urgent need for governments and industry to collaborate in order to address this silent killer and make the leap towards a cleaner, fairer and more sustainable future for all of us, before it’s too late,” said Morgan.
                        <br><br>
                        Greenpeace calls on governments around the world to phase out existing coal-fired power plants and to transition away from petrol, diesel and conventional hybrid cars as quickly as possible.
                                       
                        </p>
                  
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
                                      <h2>Want to be appended in the list of <span style="color:pink">Supporters?</span><br><a href="registrtion.php" style="text-decoration: none;">SIGNUP</a></h2>
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