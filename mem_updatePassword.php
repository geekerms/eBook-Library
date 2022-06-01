<?php
  include "connection.php";
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
    <title>eBook Byte | Update Password</title>
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

  .title h2{
           background:#660000;
       border:none;
       margin-left:-10px;
      margin-top: -05px;
      
      padding-top:3px;
      padding-bottom: 2px;
        padding-left:132px;
      border-radius:10px;
      width:77.2%;
      color:white;
           }
.one{
  margin-top: 1.5%;
  margin-left:52%;
  margin-right:2%;
  opacity: .9;
  box-shadow:0px 0px 15px lightgreen;
  height:320px;
  background:rgba(0,0,0,0.5);
}
.boxtwo{
  background-image: url("images/library_img2.jpg");
  background-size: 1100px 350px;
  box-shadow:0px 0px 15px lightgreen;
  border-radius:12px;
}
.boxtwo input[type="submit"]
       {

     font-size:25px;
     text-align:center;
   border:none;
   height:40px;
   margin-left:60% ;
   margin-top: 10px;
   background:#660000;
   color:#FFFFFF;
   border-radius:18px;
   }



.boxthree{
  box-shadow:0px 0px 15px lightgreen;
  
}


.boxnav{
  box-shadow:0px 0px 15px lightgreen;
}
.word-space-name{
    margin-left:46px;
}
.word-space-gen{
    margin-left:28px;
}
.word-space-coun{
    margin-left:16px;
}
.word-space-mob{
    margin-left:0px;
}
.word-space-email{
    margin-left:16px;
}
.word-space-pass{
    margin-left:10px;
}

.details{
   margin-left: 0px;
}
.boxnav{
  box-shadow:0px 0px 20px lightgreen;
  border-radius:20px;
}


  </style>



  <body>


  <div class="boxnav1">
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

<!--     
/*---------------------------------------------------- */ -->
  
   <br>
   <div class="box" >
   <table  style =" font-size:16pt;margin-top:-25px;"  align="center" width="100%" height="100%" >
      <tr>
        <td style="color:blue;"><h1 align="center"><marquee>Welcome To Our Library</marquee></td></h1>
      </tr>
      <br>
      <tr>
          <td align="center"><b><i><mark 
              style="color:white;background-color:maroon; border-radius:5px">
              Update Password</mark></i></b></td>
        </tr>
    </table>
  </div>
    <br>
    <br>

    
    <div  class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; width:73.5%; height:370px; margin-left:13%;margin-top:10px;background-color:white">
   <fieldset align="center" style="color:blue;  border-radius: 12px;" class="one">
   <div>
    <h3 style="color:white;text-align:center;;padding-top:1px;padding-bottom: 1px;
    background:#660000;border-radius:12px;margin-top:0px;
    margin-left:-12px;margin-left:0px;height:40px">UPDATE &nbsp;YOUR &nbsp;PASSWORD</h3>
   </div>


<!-- 
  ----------------------------Input to Database--------------------------------------------- -->



   <form name="registration" action="" method="post" style="margin-top:-20px;margin-right:60px;">
       <table align="Right" style="color:white;font-size:13pt; border-radius: 12px;">
	     
         <tr>
            <td>USERNAME &nbsp;&nbsp;&nbsp;&nbsp; <a class="word-space-mob">:&nbsp;</a></td>
            <td><input type="email" id="email" name="email" placeholder="Enter your username" required="required" ></td>
         </tr>
        <tr>
             <td>&nbsp;MOBILE NO.  <a class="word-space-email">: &nbsp;</a></td>
             <td><input type="tel" name="phone" placeholder="Enter your phone no." required="required" style="color:blue"/></td>
        </tr>
        <tr>
            <td>&nbsp;PASSWORD &nbsp;&nbsp;&nbsp;<a class="word-space-pass">: &nbsp;</a></td>
            <td><input type="password" name="password" placeholder="Set new password (1-8 char)" required="required" style="color:blue"/>
            </td>
        </tr>
<br>
 <tr>
  <td><input  type="submit" name="submit"
   value="UPDATE"></td>
   
</tr>
<br>
 </table>
</form>
 </fieldset>


     <!-- -------------------------------------------php code----------------------------- -->

     <?php

if(isset($_POST['submit']))
{
    if(mysqli_query($conn,"UPDATE member SET password='$_POST[password]' WHERE 
    email='$_POST[email]' AND phone='$_POST[phone]' ;"))
    {
        ?>
            <script type="text/javascript">
            window.location="success_updatePassword.php"
         </script>

        <?php
    }
}
?>
</div>




    <div class="boxthree" style="background-color:teal; border:solid 2px teal;border-radius: 10px; width:73.5%; height:40px; margin-left:13%; margin-top:15px" >
    <marquee behavior="alternate" direction="right" loop="1" style="margin-right:38%" align="center"><h6 style="line-height:1px;margin-top:20px;">
    For any query please <a style="color:white;" href="https://www.facebook.com/mps.c.986">contact us</a>.Thank You.</h6></marquee>
    </div>


<!-- ----------------------------php code------------------------------------ -->



    



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