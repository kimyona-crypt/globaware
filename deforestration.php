<?php

include("auth.php");
?>
<DOCTYPE html>
    <html lang="en" >
    <head>
        <title>Deforestration</title>
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
                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcToRsIEjQTXF5OFMuo6mxE0UxpKnFTdOW8nG6zvfcz8n7X_Q1C7" style="width: 100%;z-index:-3;height:100%;">
                            
                        </div>
                        <div class="info">
                          <h1>Deforestation, meat production driving climate crisis </h1>
                          
                        </div>
                        <div class="act">
                   
                      <p>Our climate is in crisis. In the past few weeks alone, searing global heat has led to wildfires in the Arctic and across Siberia at unprecedented scales and record levels of ice melt across Greenland as climate change contributed 1.5 to 3°C to the European heatwave. Indian cities are facing a water crisis and water scarcity fears are escalating globally with warming of ‘just’ 1°C above pre-industrial levels. 
                        <br><br>
                        To examine the impacts of climate change on land and the forces driving it, the Intergovernmental Panel on Climate Change (IPCC) has now finalised its special report Climate Change and Land. Two years in the making, the report is the most comprehensive scientific assessment of climate change and land to date and delivers a strong message to governments. 
                        <br><br>
                        It reinforces findings of its sister body, the Intergovernmental Panel on Biodiversity and Ecosystems (IPBES) in its reports on Land Degradation (2018) and the Global Assessment of Biodiversity (2019). In the following we highlight some of our key takeaways from this landmark report. </p>
                      <h2>Key takeaways </h2>
                      <list>
                          <li>Land is both a source and sink of CO2 emissions, playing a crucial role in combating climate change. However, better land-use alone will not stop climate change. Delaying decarbonisation and shifting mitigation to the land sector will increase the risk of climate impacts and food insecurity.</li>
                          <li>Climate change, including the increased frequency and intensity of extremes, has adversely impacted food security and land ecosystems while also contributing to desertification and land degradation. </li>
                          <li>Our food system, fresh-water systems and biodiversity are being pushed to the brink and we need to change course now through the strict protection of intact carbon-rich ecosystems such as primary forests and peatlands. </li>
                          <li>Ecological restoration of used forests, lost forests and other managed carbon- rich lands should be given clear preference over large-scale afforestation with tree plantations or other monoculture crops for bioenergy generation given their massive benefits to biodiversity, the permanence of CO2 sequestration, water, soils and local livelihoods. </li>
                          <li>Meat and dairy production and consumption are driving an increase in human greenhouse gas emissions, land degradation and deforestation and there is an urgent need for dietary change, particularly in high-income societies. </li>
                          <li>There is a limited amount of land available to mitigate and adapt to climate change to ensure food security and must make a choice. We cannot use land twice. This report points policy makers towards ‘no regrets’ solutions that free up pressure on land and do not need more land for mitigation (e.g. forest protection and restoration, reduce meat and dairy demand, reduce food waste and loss). </li>
                          <li>Multiple response options exist that to address the five land challenges of mitigation, adaptation, desertification, degradation and food security. While there 
                        </li>
                      </list>
                      <p>are trade-offs, many response options have co-benefits of both mitigation and adaptation responses, while also supporting sustainable development goals. </p>
                     <h2>Key facts </h2>
                      <list>
                      <li>Human use directly affects more than 70% of the global, ice-free land surface and about a quarter of land is subject to human-induced degradation. </li>
                      <li>The temperature over land has risen considerably more than the global average, rising 1.53°C since pre-industrial times compared with 0.87°C globally (over land and oceans.) </li>
                      <li>23% of human greenhouse gas emissions stem from agriculture and land use. The food system as a whole is responsible for up to 37% (21-37%) of total human greenhouse gas emissions. Higher meat and vegetable oils consumption and food waste and loss, are associated with increasing food GHG emissions. </li>
                      <li>Since 1961, the consumption of meat has more than doubled, while emissions of methane from cattle and manure (a gas with 28 times more global warming potential than CO2) have increased by 1.7 times in the same period. </li>
                      <li>Since 1975, the prevalence of the population who are overweight has nearly doubled, to about 2 billion adults now being overweight or obese. Conversely, 821 million people are still undernourished.</li>
                      <li>Currently, 25-30% of total food produced is lost or wasted. </li>
                      </list>
                      <h2>The role of forests  </h2>
                      <p>What this report shows is the paramount importance of land for the climate and for biodiversity, emphasising that land is under enormous pressures. The report stresses that response options with immediate impacts include the protection of high carbon ecosystems such as peatlands, wetlands, rangelands, mangroves and forests. 
                        <br><br>
                        We must urgently undertake the ecological restoration of used forests, lost forests and other managed carbon-rich lands through natural forest management (limit logging to half of annual regrowth, extended rotation, natural regeneration), reforestation with native trees and the rewetting of drained peatlands. 
                        <br><br>
                        The CO2 emissions from deforestation, human-induced fires and logging remain high. The report estimates that gross emissions from land use and land-use change (mostly from deforestation and logging) during 2007-16 were almost 20 GtCO2 annually. 
                        <br><br>
                        These gross emissions are higher than the global annual emissions from burning coal. These emissions trigger subsequent CO2 uptake from the atmosphere estimated to be about 14 Gt annually, largely due to forest growth following deforestation and logging. This means that an estimated net amount of 5.2 GtCO2 annually has been released to the atmosphere during 2007-16 period. 
                        <br><br>
                        It should be noted that the mitigation potential in the forest sector can be well above the net amount of CO2 emission as reductions in gross forest emissions do not trigger a reduction of the subsequent CO2 removals of the same magnitude. 
                        <br><br>
                        The implications of this is that while forests and natural ecosystems act as a sink to take up carbon out of the atmosphere, nature could sink much more carbon if we left it intact. 
                        <br><br>
                        Less than 2% of this 5.2 Gt annual net CO2 release (0.1 GtCO2) appears in country inventories as annual net CO2 releases indicating a large gap in national reporting on forest and land-use CO2 emissions. 
                      </p>
                      <h2>The role of agriculture </h2>
                      <p>The amount of natural land brought into agricultural use in the last 60 years is unprecedented in human history. This has led to a large increase in climate emissions, land degradation and desertification. 
                        <br><br>
                        According to the future climate change scenarios from the IPCC, achieving higher adaptive capacity and the lowest possible risks of climate change on food insecurity, land degradation and water scarcity in drylands, would require societal transformations in lifestyle and consumption patterns, including reduced inequalities, effective land-use regulation, low-meat diets and reducing food waste. 
                        <br><br>
                        Agriculture uses about 70% of global fresh-water and future food production is vulnerable to increasing droughts and heatwaves, plus floods and other extreme events. 
                        <br><br>
                        The frequency and intensity of droughts has increased in some regions (including the Mediterranean, the Middle East, parts of South America, much of Africa, and north- eastern Asia). The frequency and intensity of droughts are projected to increase particularly in the Mediterranean region and southern Africa. 
                        <br><br>
                        The challenge is great, but the solutions are many. Total climate emissions from the food system are estimated at 14.8 Gt CO2e per year, which represents up to 37% (21-37%) of all human-induced climate emissions. 
                        <br><br>
                        This IPCC report offers a maximum potential for mitigation in 2050 that is higher than the total emissions from the whole food system, when including a full set of measures both on food supply and demand (e.g. agroecological practices to increase carbon in crop soils, agroforestry or dietary changes towards less-meat diets). Total maximum potential for mitigation within the food system can be as high as 17.6 Gt CO2e per year in 2050. 
                        <br><br>
                        The global potential of dietary changes towards low-meat diet was found, with high confidence, to have additional benefits beyond its large mitigation of greenhouse gas emission, particularly in avoiding or reversing land degradation (potentially benefiting more than 3 million km2) and in food security (potentially benefiting more than 100 million people in 2050). </p>
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