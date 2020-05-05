
<?php

include("auth.php");
?>
<DOCTYPE html>
    <html lang="en" >
    <head>
        <title>Failed Economics</title>
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
                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQNSdfjrauVmF_Afuyu6lWKHchW8I7Ks4fJwUD8s6IbXeUVdE0e" style="width: 100%;z-index:-3;height:100%;">
                            
                        </div>
                        <div class="info">
                          <h1>Failed Economics</h1>
                          <p>“The rich get richer, and the poor get poorer,” is an ancient maxim that dates back thousands of years. In our era, we must add: “And wild nature gets trampled.”</p>
                        </div>
                        <div class="act">
                     <p>At the end of 2018, Credit Suisse published its updated report on global wealth. Forty-two-million millionaires and billionaires comprise the richest 0.5% of the world’s population. That translates to 0.8% of adults in the report, possessing 44.8% of the world’s economic wealth. A decade ago, researchers commonly reported that the wealthy 15% of humanity owned 85% of the resources. Today, 6.2% (9.5% of adults) now claim 85% of the wealth. The rich got richer.
                        <br><br>
                        The super-elites, the 2,208 billionaires — those who attend Global Economic Summits, own banks, buy off governments, pollute with impunity, and hold political influence in virtually every nation in the world — comprise not the “1%” but only 28-millionths of a percent of the human population. According to Forbes magazine, the average billionaire makes about $635 million dollars every year, $12 million per week, even when they’re on holiday.
                        <br><br>
                        For these people, neo-classical economic theory works just fine, but only if one ignores the human and ecological costs: poverty, squalor, homelessness, migrations, biodiversity loss, global heating, disappearing forests, toxic land and water, and rising, acidic oceans. Capitalism is designed to benefit those who have capital, the wealthy. For most of humanity, modern neo-classical economics erodes well being. For the ecosystem at large, neo-classical economics serves as a rationalisation for plunder.</p>
                      <h2>A Prize for Ecological Ignorance</h2>
                       <p> Last year, international economists awarded their colleague, William Nordhaus, the “Nobel Memorial Prize in Economics.” This is not a genuine Nobel prize, but rather an award sponsored by Sveriges Riksbank “in Memory of Alfred Nobel.”
                        <br><br>
                        In the 1970s and 80s, Nordhaus played a key role in dismissing the now-confirmed, “Limits to Growth” study. In a 1991 paper, “To slow or not to slow,” Nordhaus argued that although economic growth increases carbon emissions, nations should not sacrifice growth to combat climate change. He discouraged carbon emissions reduction because, in his estimation, global heating just doesn’t hurt the world’s economy that much. “Don’t let anyone distract you from the work at hand,” Nordhaus told his students, upon winning the prize, “which is economic growth.”
                        <br><br>
                        Climate scientists and ecologists have blamed Nordhaus for rationalising the failure of governments to take urgent climate action. Some fellow economists — Nicholas Stern at the London School of Economics; Martin Weitzman, at the US National Bureau of Economic Research; and others — have disputed Nordhaus’ assumptions, calculations, and conclusions. In February, at the Scottish Economics Conference in Glasgow, Steve Keen, Head of the Economics, History and Politics School at Kingston University in London, explained errors and omissions in Nordhaus’ theories, which lead to what Keen calls his “absurd” conclusions about climate action.
                        <br><br>
                        Nordhaus and other economists choose, arbitrarily, to discount the future. If we valued future generations equally to ourselves, we would assume a discount rate of zero. Nordhaus prefers to discount the future at 6% annually, which presumes that communities twelve years from now have less than half the value of a community today. A community or individual 70 years from now has only 1% of our value. The high discount rate allows Nordhaus and colleagues to argue that the economic cost of reducing emissions today is too high compared to the “low” benefit of protecting people in the future. No wonder the youth are in rebellion.
                        <br><br>
                        Furthermore, neo-classical economic theory discounts the poor, since they don’t add much to economic growth. For example, Nordhaus dismisses the global heating threat to agriculture, forestry, and fishing because these enterprises contribute only about 4% of global GDP. Should food production decline, starvation in poor nations will hardly impact global GDP. Furthermore, these economists discount the entire biosphere — insects, birds, whales, forests, rivers, and dying coral reefs. The thousands of species that go extinct each year due to human activity don’t matter since they were not, allegedly, adding anything to human economics or well-being. This suite of discounts bolsters the Nordhaus argument that slowing carbon emissions is not important.
                        <br><br>
                        In a 1992 paper, Nordhaus feigned to take the 1972 Limits to Growth study seriously, while shrewdly mocking the study, referring to its acceptance by the “popular imagination” and by “the anti-growth school … of pessimism,” wherein people “fretted” over trivialities such as “climates overheated by greenhouse gases.”  Meanwhile, he implied that sophisticated economists, such as himself, understood that “an efficiently managed economy need not fear … resource exhaustion,” nuclear meltdowns, or global heating.
                        <br><br>
                        By insisting on linear, simplified economic models, dismissing biophysical limits as trivial, status quo economists ignore the way dynamic living systems actually function. Biological growth in living ecological system necessarily encounters complex interactions, resource depletion, population limits, waste recycling, feedbacks, and system-changing tipping points. All of this remains virtually absent in Nordhaus and most of modern economics.
                        <br><br>
                        Nordhaus admits that his analysis relies on “oversimplifications” of “climatic complexities,” but claims that “oversimplifications are necessary … allowing greater transparency.” What he means here by “transparency,” is that he can substitute easily understood mathematical formulae for genuine ecological complexity. This is convenient, but not necessarily accurate. The map is not the territory.
                    </p>
                    <h2>The Damage Function</h2>
                    <p>According to Keen, one of classic economists’ biggest blind-spots is that their theories “leave out energy.” Keen adds that this is “an enormous error … a huge hole in economic theory.” Energy transformation appears as a central, key process within every biophysical system. Since human society is a subsystem within Earth’s ecological system, Human economics must acknowledge the role of energy. Keen explains that neo-classical economics retains “a labour and capital theory of production. Production without energy?” asks Keen. “Absurd.”
                        <br><br>
This failure to correctly account for energy transformations leads to what systems-theory economists believe is Nordhaus’ central error regarding climate change: The so-called “Nordhaus Damage Function,” a mathematical construction that allegedly accounts for future damages from climate change.
                        <br><br>
In his 2017 paper, just prior to his “Nobel Memorial” prize, Nordhaus claimed — based on his Damage Function — that a 3°C change in average Earth temperature would only reduce global GDP by 2.1%, and that a soaring 6°C change would only slow GDP by 8.5%. Nordhaus considers these economic losses acceptable, concluding that climate action is unnecessary. For this, he won his profession’s highest honour.
<br><br>
According to Keen, this “takes the cake for stupid assumptions by economists.”  Keen claims that the Nordhaus quadratic function of temperature change is “nonsense” because it does not include any factors for sharp thresholds, tipping points, or non-monetary social or biological impacts. Nordhaus and his supporters, says Keen, are “playing with your future.”
<br><br>
To understand how absurd the Nordhaus Damage Function is, consider two scenarios. First, imagine that Earth got colder and froze. According the Nordhaus Damage Function, this would cause a 40% loss in economic activity. Really? Sixty percent of human economic activity could continue on a frozen Earth?
<br><br>
Secondly, assume Earth warmed up to the 6°C that Nordhaus assumes is acceptable with an 8.5% loss in global economy. The last time Earth heated up by that magnitude, during the Permian age, 235-million years ago, the warming took millions of years, and led to the largest extinction event of all time, during which 95% of Earth’s species went extinct. The last time Earth sustained an average temperature 6°C higher than today, no humans existed on Earth.
<br><br>
Real ecosystems remain complex and non-linear. Consider that a 1°C rise in average ocean temperature can produce a 4-6°C increase in shallow coastal zones, killing off seagrass, the food and shelter source for small fish, thus depriving larger fish of food and creating anoxic dead zones. None of this would be captured in Nordhaus’ prize-winning mathematical function.
<br><br>
We know that dangerous feedbacks from global heating have already appeared after a 1°C temperature increase, including methane releases, forest die-off, wildfires, and Earth’s reflective index due to melting ice. A 6°C increase would likely push us into a hothouse Earth scenario.
<br><br>
According to the Global CCS Institute, a research lab for carbon emissions abatement, “there is no economic or scientific basis,” for the Nordhaus Damage Function.  Peter Howard and Thomas Sterner, in a study for the Agricultural & Applied Economics Association, found that Nordhaus’ “damage function significantly under-estimates climate damages by a factor of two to three.” They are probably being conservative. In a 2014 paper in Nature, Richard Revesz and colleagues report that that some academics believe the uncertainties of climate tipping points “render the estimate useless.” They point out that “climate-economic models need to be extended to a wider range of social and economic impacts.”
<br><br>
“The risks from unmanaged climate change,” wrote Nicholas Stern in the  Journal of Economic Literature, are “potentially immense.” He noted that “the scientific models, because they omit key factors … substantially underestimate these risks [and] come close to excluding the possibility of catastrophic outcomes.”
<br><br>
By ignoring biological and physical patterns of nature, Keen believes economics has become “inconsistent, unscientific and empirically unsupported.” He claims that “neoclassical economics is a degenerative research program, not generating new knowledge but growing a belt of protective auxiliary hypotheses to shield its core beliefs from critique.”
<br><br>
“Neoliberal economics is ecologically and behaviorally ignorant,” laments Dr. William Rees, developer of ecological footprint analysis. “It is a social construction utterly devoid of useful reference to the structure, function, behaviour or time-relevant properties of the  biophysical and social systems with which the actual economy interacts in the real world.”
<br><br>
Modern neoliberal economics serves only billionaires and bankers. The rest of humanity and all of wild nature get crushed under its simplistic, rationalising theories.
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