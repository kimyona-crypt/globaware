<html>
<head>
<style>
	@import url('https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap');
body{
    font-family: 'Kaushan Script', cursive;
    width: 100%;
   background-image: linear-gradient(rgba(0,0,0,0.3),rgba(255,255,255,0.3)),url('https://images.pexels.com/photos/7361/startup-photos.jpg?auto=compress&cs=tinysrgb&dpr=2&w=500');

}
	form{
		margin-left:35%;
	}
	h2{
		margin-top: 23%;
		margin-left: 35%;
		font-size:30px;
	}
	.text{
		height:5vh;
		width:24%;
	}
	h3{
		font-size: 27px;
	}
	.btn{
		height:v7h;
		margin-top: 0%;
		width:13%;
		background:red;
		opacity:0.9;
		border-radius: 10%;
		font-size: 25px;
		 font-family: 'Kaushan Script', cursive;
	}
	.btn:hover{
		background: green;
	}
</style></head>
<body>
<h2 >Enter Your E-mail Address</h2>
<form action="mail.php" method="post">
<h3>Email:<span>   <input type="email" class="text" placeholder="Enter your Mail" name="email"></span>
<input type="submit" name="submit" class="btn" value="Submit"></h3 >
</form>
</body>
</html>