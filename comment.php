
<?php

include("auth.php");
?>
<!DOCTYPE html>
<html>
 <head>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="http://smartpower.technology/wp-content/uploads/2019/04/7927_SmartPowerTechnology_Logo_DA-Favicon-01.png">
   <style>
/*Navigation Bar*/
  @import url('https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap');
body{
    font-family: 'Kaushan Script', cursive;
    width: 100%;
    overflow-x: hidden;

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
    .sticky + .container{
      padding-top: 60px;
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
           font-size:24px;
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
        .alt{
          z-index: 999;
        }
</style>
 </head>
 <body>
  <br />
  <br />
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
                      <p style="color:black">Welcome <?php echo $_SESSION['username']; ?>!</p>
                        <p style="color:black">This is secure area.</p>
                        
                        <a href="logout.php" style="color:black;text-decoration: none">Logout</a>
                        <a href="update.php" style="color:black;text-decoration: none">change password</a>
                        <a href="delete.php" style="color:black;text-decoration: none">Delete account</a>
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
                        <div class="container"> 
                            <p class="sticky" style="color: #fff;font-size:24px;margin-top:-10vh;margin-left:2%;margin-bottom:6vh;"><img src="http://smartpower.technology/wp-content/uploads/2019/04/7927_SmartPowerTechnology_Logo_DA-Favicon-01.png" style="width: 40px;height:34px">Globaware</p>
		

   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" style="font-size:20px" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" style="font-size:20px" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" style="font-size:16px" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" style="font-size:16px"value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment" style="font-size:20px"></div>
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

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>
