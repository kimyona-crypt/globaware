<?php

include("auth.php");
?>
<DOCTYPE html>
    <html lang="en" >
    <head>
        <title>Ten ways to survive on a hot planet</title>
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
                          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRDfGR6dRcqeC5VL8IMfbLxgXgBcdtTu6yvkGVMKjFzsdC60sT3" style="width: 100%;z-index:-3;height:100%;">
                            
                        </div>
                        <div class="info">
                          <h1>Ten ways to survive on a hot planet</h1>
                        </div>
                        <div class="act">
                            <p>Our planet is heating in unprecedented ways. From Western and Northern Europe, to parts of America, to India and South Korea and even the Arctic, many countries are experiencing record-high temperatures, consistent with the predictions of a climate-changed world.  Escalating climate disasters have been increasing since the 1970s. Extreme weather is affecting more and more of us.

                                Our ever heating, changing, planet is becoming an increasingly risky and sometimes deadly place for us to live. Those who have done least to fuel the crisis are the worst affected, compounding inequality and injustice. What we’re living in is a climate emergency.</p>
                                <p><b>Here’s what you can do to survive extreme heat</b></p>         
                      <h2>1.  If you’re lucky enough to have it, drink plenty of water </h2>
                      <p>Even when you don’t feel thirsty, drink plenty of water. Your body needs water to keep cool. Alcohol, tea, coffee, and sugary drinks or sodas can make dehydration worse so try to limit consumption. Eat small snacks, rather than large meals. If you can choose fruit, salad, and non-meat and dairy options, do it (of course, because industrial animal agriculture is one of the main driving forces behind the climate crisis that we’re facing right now). If you have pets (particularly those in fur), ensure they have easy access to cool water and have plenty of shade if outside.</p>
                      <h2>2.Slow down </h2>
                      <p>Avoid strenuous activity (unless it’s peacefully protesting the climate breakdown). When the body heats too quickly to cool itself safely, or when you lose too much fluid or salt by sweating, your body temperature rises and heat-related illness may develop. Slow down in the way humanity needs to slow down consumption in order to get out of this mess.</p>
                      <h2>3.  Stay cool </h2>
                      <p>Stay indoors if you can. Close your blinds or curtains in the morning to keep the house cool. Use a fan, ideally running on green energy. Take cold showers, or use a damp cloth to cool off. If you need to go outside, stay in the shade. Find a tree. If you can’t find one, plant one. If you can’t plant one, join the fight to protect the forests we have. Trees make cities cooler and capture and store the carbon that is likely exacerbating the heatwave you’re in.</p>
                      <h2>4.  Dress for the heat </h2>
                      <p>Wear light airy clothing made from natural fibres, and stay away from fast fashion disposable clothes that pollute waterways. Put on a hat or use an umbrella, wear sunscreen, and take water with you to avoid single-use plastic.
                    </p>
                      <h2>5.  Get connected and stay connected </h2>
                      <p>Check on people who are especially vulnerable. If you’re one of them, make sure there’s someone who can help you if you need assistance or feel unwell. Your support network could be family, friends, workmates, and neighbours. Follow weather forecasts and listen to public radio for warnings, to avoid the worst. Write down your important numbers. In every corner of the planet, we’re all in this together. Join in the global fight against climate change.</p>
                      <h2> 6.  Get organised to survive</h2>
                      <p>Talk to your doctor if you feel concerned about heat impacts. Look at the things you can do to make your home cooler such as installing awnings or shade cloths. Stock up on supplies you might need. Share them, if you can. Join an organisation that’s working on stopping the climate crisis. Organise a local group. Rally outside your local halls of power. We need everyone to organise if we’re going to stop this. This isn’t just about protecting yourself, it’s about protecting everyone.
                    </p>
                      <h2>7.  Reconsider the need to drive </h2>
                      <p>
                        Not only are cars dependent on air-polluting fossil fuels, they can become dangerous hot boxes. The temperature inside a parked vehicle can rapidly rise to a dangerous level for children, pets and even adults. Never leave a child or an animal in a hot car, because they could die. If possible, we recommend that you ditch your car altogether and use public transport instead.</p>
                      <h2>8.  Promote solutions </h2>
                      <p>Plant trees to cool your streets, and plant flowers to save bees. The only way we can really survive is if we keep shifting our communities towards more sustainable futures. Whether it be eating more local plant-based foods, avoiding plastic and recycling, or organising a local action group to advocate for renewable energy, there are so many things you can do to help cool the planet.</p>
                      <h2>9.  Stay calm and be hopeful </h2>
                      <p>The climate breakdown is scary for everyone, but there’s still hope! There are plenty of examples of how people created disruptive change within a short amount of time. If you’re able to make changes you’re one of the lucky ones, and what you do is a powerful act for millions of people suffering drought or food insecurity, who have limited options. Remember, whatever you’re feeling, you’re not alone. Positive change is happening, and together we have the power to make things change faster.
                    </p>
                      <h2>10.  Protest, protest, protest </h2>
                      <p>Fridays for Future - Global Student Strike in Prague. © Petr Zewlakk Vrabec / GreenpeaceSchool strike for climate. Fridays for Future. © Petr Zewlakk Vrabec / Greenpeace
                        Challenge the fossil fuel companies who are fuelling this crisis. Challenge the industries cutting down forests and destroying our chance at turning this catastrophe around. Demand climate justice. Stand up with young people striking from school. Has your country declared a climate emergency yet? Lobby them until they do. Has your city, bank, or insurance company divested yet? Let them know that you need them to, or change to services that have. We need to start acting like our house is on fire, because it is.</p>
                      
                      
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