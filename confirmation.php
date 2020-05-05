 
 
 <!DOCTYPE html>
 <html>
 <head>
 <link rel="shortcut icon" type="image/x-icon" href="http://smartpower.technology/wp-content/uploads/2019/04/7927_SmartPowerTechnology_Logo_DA-Favicon-01.png">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	@import url('https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap');
	body{
		font-family: 'Kaushan Script', cursive;
		
		max-width: 100%;
	}
	img{
		margin-left:40%;
	}
	nav{
	height:12vh;
	background: rgba(9, 78, 32, 0.9);
	z-index: 1000;
	width:100%;
  }
  .nav-links  li:hover a{
	color: rgb(252, 247, 0);
  }
  .nav-links{
	display: flex;
	list-style: none;
	width: 55%;
	height: 100%;
	justify-content: space-around;
	align-items: center;
	margin-left: auto;
	margin-top: 0;
	z-index: 1;
  }
  .nav-links  li a{
	color:white;
	text-decoration: none;
	font-size: 18px;
	padding: 6px;
	
  }
  
  
  
  @media screen and (max-width:850px){
	.line{
		width: 30px;
		height: 3px;
		background: white;
		margin:5px;
	}
	nav{
		position: relative;
			}
	.hamburger{
				position: absolute;
				cursor: pointer;
				right: 5%;
				top:30%;
				transform: translate(-5%,-50%);
				z-index: 10;
			}
	.nav-links{
			position: fixed;
			background:rgb(9, 78, 32);
			height: 100vh;
			width: 100%;
			flex-direction: column;
			justify-content: flex-start;
			margin-top: 7%;
			clip-path: circle(100px at 90% -10%);
			-webkit-clip-path: circle(100px at 90% -20%);
			transition: all 1s ease-out;
				z-index: 1;
		}
	.nav-links.open{
			clip-path: circle(600px at 90% -20%);
			-webkit-clip-path:circle(600px at 90% -20%);
			position: absolute;
			z-index: 999;
			}
	.header-main.act{
			z-index: -10;
		}
		
	.nav-links li a{
			font-size: 25px;
			z-index: 1;
		}
	.nav-links li:nth-child(1){
			transition: all 0.5s ease-out 0.2s;
  
		}
	.nav-links li:nth-child(2){
		transition: all 0.5s ease 0.4s;
	   }
	.nav-links li:nth-child(3){
		transition: all 0.5s ease 0.6s;
	   }
	li.fade{
		opacity: 1; 
	   }
  
  }
  p.sticky {
	position: -webkit-sticky;
	position: sticky;
	top: 5vh;
	width: 200px;
	z-index:2000;
  }
  .sticky {
  position: fixed;
  top: 0;
  width: 100%;
  }
  .sticky + .mymain{
	padding-top: 60px;
  }
@media screen and (max-width: 992px){
	img{
		margin-left:25%;
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

                <li><a href="home.html"><span class="fa fa-fw fa-home"></span>Home</a></li>
                <li><a href="aboutus.html"><span class="fa fa-user-circle"></span>About</a></li>
                <li><a href="gallery1.html"><span class="fa fa-picture-o" aria-hidden="true"></span>Gallery</a></li>
                <li><a href="Learn.html"><span class="fa fa-lightbulb-o" aria-hidden="true"></span>Learn</a></li>
                <li><a href="donate.php"><span class="fa fa-smile-o" aria-hidden="true"></span>Donate</a></li>
                <li><a href="supporter.php"><span class="fa fa-handshake-o" aria-hidden="true"></span>Supporters</a></li>
                <li><a href="login.php"><span class="fa fa-fw fa-user"></span>Login</a></li>
            </ul>
		</nav>
		<div class="my-main">
			<p class="sticky" style="color: #fff;font-size:18px;margin-top:-12vh;margin-left:0%;margin-bottom:5vh;"><img src="http://smartpower.technology/wp-content/uploads/2019/04/7927_SmartPowerTechnology_Logo_DA-Favicon-01.png" style="width: 40px;height:34px">Globaware</p>
 	<img src="images/confirm.png" style="margin-top: 5%" >
 <p style="text-align: center;font-size: 24px;"> password changed</p>
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