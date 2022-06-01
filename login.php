<?php
    include "connection.php";
    session_start();
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>eBook Byte | User Login</title>
  </head>
  <style>
 body{
  background: url(images/loginBack.jpg);
  background-repeat: no-repeat;
  background-size: 1700px 800px;
  font-family: 'Times New Roman', Times, serif;
}
  .box{
    width:74%;
    height:60px;
	
     border:solid 1px #CF0403;
     background-image: url("images/lib.jpeg");
    
    background-repeat: no-repeat;
  background-size: 1200px 200px;
    margin-left: 13%;
    opacity: .9;
    border-radius:12px;
    box-shadow:0px 0px 15px lightgreen;
  }

  .boxnav{
  box-shadow:0px 0px 20px lightgreen;
  border-radius:20px;
}

  .boxtwo{
    background-image: url("images/library_img2.jpg");
  background-size: cover;
    
    background-repeat: no-repeat;
  background-size: 1200px 380px;
    box-shadow:0px 0px 15px lightgreen;
    border-radius:12px;
  }

.five{
  padding:10px 0px 10px 10px;
  margin-top: 30px;
  margin-left: 55%;
  border-radius:12px;
  margin-right: 5%;
  box-shadow:0px 0px 15px lightgreen;
  font-size:25px;

}
   .five input[type="submit"]
          {

		    font-size:22px;
		    text-align:center;
			border:none;
			height:40px;
			margin-left:90% ;
            margin-top: 20px;
			background:#660000;
			color:#FFFFFF;
			border-radius:18px;
			}


.boxthree{
  box-shadow:0px 0px 15px lightgreen;
  
}

  </style>



  <body>
  <div class="boxnav">
  <nav class="navbar navbar-custom"> 
        
        <a class="navbar-brand" href="#"><img src="images/libraryIcon.png" style="max-width: 10%" />
        <span style="border-radius:50% ; border:solid blue 2.3px;padding:5px 2px 9px 2px">eBook Byte</span></a>
        
  </nav>
  </div>
  
<!--     
---------------- second navbar----------------------- -->
   
<div class="boxnav">
<nav class="navbar navbar-expand-lg  navbar-dark  bg-dark">
    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
    <ul class="navbar-nav mr-auto">
      <div style="margin-left: 350px;">
        <li class="nav-item ">
          <a class="nav-link" href="index.php">Public Domain</a>
        </li>
      </div>
         <div style="margin-left: 50px;">
           <li class="nav-item">
              <a class="nav-link" href="aboutUs.php">About Us</a>
           </li>
         </div>
      
          
      
         <div style="margin-left: 50px;">
           <li class="nav-item">
              <a class="nav-link" href="help.php">Help</a>
           </li>
         </div>
      
    </ul>
    </div>
    </div>
    </nav>
    </div>

    

    
   <br>
   <br>


    


  


   <div class="box">
   <table  style =" font-size:16pt"  align="center" width="100%" height="100%" >
      <tr>
        <td style="color:blue"><h1 align="center">
        <marquee>Welcome To Our Library</marquee></td></h1>
      </tr>
    
      <tr>
          <td align="center"><b><i><mark style="color:white;background-color:maroon;
           border-radius:5px">User Login Portal</mark></i></b></td>
        </tr>
    </table>
  </div>
    <br>
    <br>
    
   
    
      <div  class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; 
                  width:73.5%; height:360px;
                  margin-left:13%;margin-top:15px;background-color:white">
        <fieldset align="center" style="  background:rgba(0,0,0,0.38);color:blue;"
                  class="five" class="one">
          <div class="boxfour">
            <h3 style="color:white;text-align:center;;padding-top:1px;
            padding-bottom: 1px;background:#660000;border-radius:12px;
            margin-top:-13px;margin-left:-12px;height:40px">Please Login Here</h3>
          </div>
          <form method="post" action="" name="login">
        <table style="font-size:16pt;width:300px;height:50px;margin-right:45px;" align="Right">
          <tr>
            <td><br></td>
          </tr>
          <tr>
            <td><label style="color:white">Username:</label></td>
            <td><input type="text" name="email" placeholder="username" required="" style="color:red"></td>
          </tr>

          <tr>
            <td><label style="color:white">Password:</label></td>
            <td><input type="password" name="password" placeholder="****" required=""  style="color:red"></td>
          </tr>
          <tr>

              <td><input type="submit" name="submit"
                   value="LOGIN">
              </td>
              
          </tr>
        
          <tr>
            <td ><br></td>
            <td><br></td>
          </tr>
        </table>
        </form>

        <p><a style="font-size:10pt; color:white;margin-left:17px;"
                   href="mem_updatePassword.php">Forgot Password?</a>&nbsp;&nbsp;&nbsp;
            <a style="color: aqua;font-size:11pt">If not register yet..!!!</a>
            <a href="registration.php" style="color:white;font-size:10pt;">Register Now</a>
        </p>
      
      </fieldset>
      </div >
    


    <div class="boxthree" style="background-color:teal; border:solid 2px teal;border-radius: 10px; width:73.5%; height:40px; margin-left:13%; margin-top:15px" >
      <marquee><h6 style="line-height:1px; margin-top:18px;">Thank You For Using This System.</h6></marquee>
    </div>



<!-- 
    -----------------------php code------------------------------------------------- -->

  
<?php
    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($conn,"SELECT * FROM `member` WHERE
          email='$_POST[email]' && password='$_POST[password]';");
       $count=mysqli_num_rows($res);

       if($count==0)
       {
   ?>
              <div style="margin-left:350px;">
              <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:-500px;
                        width:800px;height:100px;">
                  <h3 style="text-align:center;"><strong>Wrong username or password!</strong></h3>
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              </div>
    

  <?php
       }
       else
       { 
        $_SESSION['login']=$_POST['email'];
   ?>
         <script type="text/javascript">
            window.location="user.php"
         </script>
   <?php
       }
    }
   

?>









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>