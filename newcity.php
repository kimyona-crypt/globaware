<?php

include("auth.php");
?>
<DOCTYPE html>
    <html lang="en" >
    <head>
        <title>Cities</title>
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
                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRv1pvDWDorVvf6wCXnYU1D7kHzv63x-17AfRP3_xCeiYj9Bb17" style="width: 100%;z-index:-3;height:100%;">
                            
                        </div>
                        <div class="info">
                          <h1>EARTH DAY 2020 CITIES</h1>
                          <h2>OUR CITIES CAN SAVE THE PLANET</h2>
                          <p>Through science, activism, volunteerism and education</p>
                        </div>
                        <div class="act">
                         <p>The 50th anniversary of Earth Day is a unique opportunity to once again create a catalytic moment that will advance real solutions to save our planet and protect it for future generations. City leaders around the world taking action on Earth Day 2020 will cement their legacy by joining the largest mobilization for the environment since 1970 and taking bold steps to raise the bar on sustainability.
                            <br><br>
                            Historically, mayors have played a prominent role on Earth Day. In 1970, on the first Earth Day, New York City Mayor John V. Lindsay took a stand for the environment. He closed 5th Avenue to traffic and joined tens of thousands of people out in the streets. That day, Mayor Lindsay put New York City on the map as an environmental leader and driver of change.
                            <br><br>
                            Across the country, millions of Americans came together across social and political lines to demand a sustainable environment and give voice to an emerging consciousness about the health of the planet and its people. Since 1970, cities that were once viewed as centers of pollution and unhealthy places to live embraced the movement and many are currently hailed as leaders in sustainability and quality of living.
                            <br><br>
                            On Earth Day 1990, cities transformed recycling efforts by introducing curbside recycling initiatives. Cities like Seattle and San Jose, some of the pioneers of curbside recycling, used the opportunity to share their knowledge with other cities and Earth Day 1990 became the spark for a major recycling push nationally and globally.
                            <br><br>
                            Now we have the opportunity to change the world again. Earth Day 2020 will be about elevating Science, promoting Action and Volunteerism on behalf of the environment, and expanding environmental Education.
                            <br><br>
                            The Earth Day 2020 S.A.V.E campaign aims to facilitate engagement at every level of society, appealing to people from all walks of life, regardless of their race, creed, culture, social status, or economic standing. Broadening the movement through education and action will infuse people with a sense of purpose and enhance their ability to create meaningful change.
                            <br><br>
                            Mayors and other local elected leaders play a central role in engaging their communities and pushing the boundaries for a sustainable future. Earth Day Network will feature and highlight the actions of cities leading up to, on, and after Earth Day 2020.</p>
                         <h2>Earth Day Network is working with mayors around the world to use the platform of Earth Day and the S.A.V.E. framework to amplify city actions and initiatives or to launch new ones, such as:</h2>
                            <list>
                                <li>Banning or taxing any or all the ten most common single-use plastics.</li>
                                <li>Creating a Zero Waste or Circular Economy plan.</li>
                                <li>Developing a biodiversity protection strategy and establishing green corridors for wildlife in your city.</li>
                                <li>Committing to plant hundreds of thousands of trees.</li>
                                <li>Expanding or creating significant stretches of new green spaces, especially in marginalized and low-income areas.</li>
                                <li>Mandating green roofs for all buildings.Developing and implementing a plan for all public transportation to run on renewable energy.</li>
                                <li>Significantly expanding or creating pedestrian and bicycle-only zones in the city.</li>
                                <li>Launching a Clean Energy or Zero Carbon plan.</li>
                                <li>Establishing a carbon pricing or taxing scheme.</li>
                                <li>Launching a major clean energy or green infrastructure project, taking climate justice into account.</li>
                                <li>Passing stricter clean water and clean air ordinances.</li>
                                <li>Revitalizing waterfronts.</li>
                                <li>Setting high building efficiency standards for development projects and building upgrades.</li>
                            </list>
                            <p><b>Other major actions can be taken in the following areas:</b></p>
                            <list>
                                <li>Clean Air and Clean Water</li>
                                <li>Clean Energy and Transportation</li>
                                <li>Climate Action</li>
                                <li>Ending Plastic Pollution and Zero Waste initiatives</li>
                                <li>Environmental Education and Literacy</li>
                                <li>Reforestation and Green Space Creation</li>
                                <li>Species and Biodiversity Protection</li>
                                <li>Water Conservation</li>
                            </list>
                            <h2>On Earth Day itself (April 22nd, 2020), mayors can go above and beyond in making the day a citywide affair by:</h2>
                            <list>
                                <li>Closing the downtown off to cars and creating an Earth Day street festival, event or march.</li>
                                <li>Issuing major commitments aligned with one of Earth Day 2020’s signature initiatives under S.A.V.E.:</li>
                                
                                <li>Earth Challenge 2020: Citizen science involves members of the public in scientific research to meet real-world Earth Day Network (EDN), The U.S. Department of State, and The Wilson Center are launching Earth Challenge as the world’s biggest ever coordinated citizen science campaign. EC2020 will collaborate with existing citizen science projects as well as build capacity for new ones as part of a larger effort to grow citizen science worldwide. EC2020 will become a nexus for collecting billions of observations in areas including air quality, water quality, biodiversity, and human health to strengthen the links between science, the environment, and public citizens.</li>
                                <li>Marches and rallies: Earth Day Network will organize its signature rally on the Mall in Washington, D.C. with sister marches held in cities around the world.</li>
                                <li>The Great Global Cleanup™: the largest ever volunteer effort will clean up communities, beaches, and waterways and highlight the need to end plastic pollution.</li>
                                <li>The Global Teach-In: Around the world, in classrooms and venues, both virtual and physical, Teach-Ins will be hosted to empower people who will learn about environmental and climate issues, and more importantly about the actions they can take to help. EDN will develop downloadable, customizable resources to be used by partners that will host the events.</li>
                                
                                <li>Instructing all city departments to actively participate in Earth Day events (including public education and outreach campaigns beforehand) and provide opportunities for city employees to volunteer at or participate in events.</li>
                                <li>Commissioning public exhibits and art installations highlighting local environmental issues and the impacts of climate change.</li>
                                <li>Providing opportunities, including transportation, for students, low-income, and minority communities to participate in Earth Day events.</li>
                                <li>Setting up a sustainability competition for neighborhoods, community organizations, and businesses to develop solutions to local environmental issues and committing to funding the winning proposal.</li>
                                <li>Engaging local businesses to support Earth Day 2020.</li>
                                <li>Host forums and town halls, both in person and online, to engage with constituents on collectively identifying and finding solutions to local environmental issues.</li>
                                </list>
                                <p1>City officials interested in getting involved or sharing their Earth Day 2020 plan can contact us here: 
                                   <br> <a href="https://www.earthday.org/earth-day-2020-city-sign-up/">Register your city here</a></p1>
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
                                                            <h2>Want to be appended in the list of <span style="color:pink">Supporters?</span><br><a href="registration.html" style="text-decoration: none;">SIGNUP</a></h2>
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