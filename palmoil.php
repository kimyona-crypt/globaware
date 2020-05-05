<?php

include("auth.php");
?>
<DOCTYPE html>
    <html lang="en" >
    <head>
        <title>Palm Oil</title>
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
                          <img src="https://assets.nst.com.my/images/articles/INDONESIA-ENVIRONMENT_FI344rfqfeqeqrert35y5yuRES_1565080398.jpg" style="width: 100%;z-index:-3;height:100%;">
                            
                        </div>
                        <div class="info" style="background-color: rgba(255, 255,255 ,0.8);align-self: center;width:60%;">
                          <h1>Palm oil and pulp companies with most burned land go unpunished as Indonesian forest fires rage</h1>
                      
                        </div>
                        <div class="act">
                      <p>Jakarta, Indonesia – Despite the ongoing Indonesian forest fire crisis, no serious civil or administrative sanctions have been given to the ten palm oil companies with the largest areas of burned land from 2015 to 2018, new Greenpeace Indonesia mapping analysis revealed. Furthermore, the Indonesian government has not revoked a single palm oil licence due to forest fires. 
                        <br><br>
                        During the same period, the pulp sector also largely escaped serious government sanctions despite repeated fires across massive areas of land.[1] This year, fire hot spots have been recorded in many of these same palm oil and pulp concessions. 
                        <br><br>
                        “Stopping this recurring fire crisis should have been at the top of the government’s agenda since 2015. But our findings show the reality: empty words and weak and inconsistent law enforcement against companies. President Jokowi and his ministers must immediately remove licenses from companies with fires on their land,” said Kiki Taufik, Global Head of Greenpeace Indonesia’s forests campaign.
                        <br><br>
                        Greenpeace Indonesia analysis used official government ‘burn scar’ data, which showed that more than 3.4 million hectares of land burned between 2015 and 2018.[2] This data was then compared to the best available concession data[3] on palm oil and pulp companies as well as administrative and civil law sanctions against companies, which were compiled through Freedom of Information requests and official government reports. 
                        <br><br>
                        The findings from the analysis contrast sharply with the Indonesian government’s claims of being tough on fires and law enforcement[4] at a time when fires are impacting millions of Indonesians. The haze from the forest and land fires have also reached neighbouring countries in the last two weeks.
                        <br><br>
                        Findings for palm oil plantations from 2015 to 2018:</p>
                      <list>
                          <li>None of the ten palm oil concessions in Indonesia with the largest total burned areas received serious civil or administrative sanctions. Seven of those companies had high numbers of fire hot spots in their concessions this year.</li>
                          <li>The government did not revoke any palm oil companies’ licences for forest fires. </li>
                          <li>Numerous palm oil concessions burned repeatedly but received no serious civil or administrative sanctions. </li>
                      </list>
                      <p style="font-size: 24px">Findings for pulp plantations:</p>
                      <list>
                        <li>An area larger than Singapore burned in a concession linked to Sinar Mas/Asia Pulp & Paper (APP) between 2015 and 2018. This concession, which had the largest total burned area out of all concessions across Indonesia, was only sanctioned for replanting in previously burned areas.</li>
                        <li>A Sinar Mas/APP–related company had fires on its land every year between 2015 and 2018 but received no serious civil or administrative sanctions. It had more than 200 fire hot spots this year. </li>
                        <li>An APRIL/Royal Golden Eagle (RGE) –related company has seen its concession land burn every year since 2015. It has received serious civil/administrative sanctions just twice. A criminal investigation against numerous companies, including this one, was stopped by police in 2016 due to insufficient evidence. The company had nearly 500 fire hot spots this year. </li>
                    </list>
                    <p>“Why is it that none of the ten palm oil companies with the most land burned across Indonesia has faced serious punishment from President Jokowi’s government? Why has the concession that had the largest burned area across the whole of Indonesia not been sanctioned for forest fires? Unfortunately, it is because this government is not serious about law enforcement, and this is a key reason why the fires have returned,” said Kiki Taufik.
                        <br><br>
                        A Greenpeace Indonesia investigation earlier this year showed that none of the companies taken to civil court by the government for their roles in forest fires and illegal logging have paid compensation. The total amount of money owed is more than USD 1.2 billion.
                        <br><br>
                        The World Bank estimates that the 2015 fire crisis cost Indonesia USD 16 billion, resulting in losses in forestry, agriculture, tourism and other industries. Additionally, the haze from the fires caused respiratory and other illnesses in hundreds of thousands of people across the region and, according to one study, likely led to over 100,000 premature deaths.Along with the haze 11.3 million tonnes of carbon per day were estimated to have been released into the atmosphere, higher than the emissions rate of the whole European Union.</p>
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