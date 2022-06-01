<?php
    include "connection.php";
    session_start();
    if(!isset($_SESSION['login']))
		header("Location:index.php");
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
    <title>eBook Byte | Feedback</title>
  </head>
  <style>
  body{
  background-repeat: no-repeat;
  background: url(images/loginBack.jpg);
  background-size: 1700px 800px;
  font-family: 'Times New Roman', Times, serif;
}


.box{
    width:70%;
    height:60px;
	
     border:solid 1px #CF0403;
      background-image: url("images/lib.jpeg");
     
     /* background-color: white; */
    background-repeat: no-repeat;
  background-size: 1100px 200px;
    margin-left: 13%;
    opacity: .9;
    box-shadow:0px 0px 15px lightgreen;
    border-radius:12px;
  }

 
.five{
  padding:10px 0px 10px 10px;
  margin-top: 30px;
  margin-left: 11%;
  border-radius:12px;
  margin-right: 5%;
  box-shadow:0px 0px 15px lightgreen;
  font-size:25px;
  height:400px;
  width:1000px;

}


.boxtwo{
  box-shadow:0px 0px 20px lightgreen;
  border-radius:20px;
  background-image: url("images/feedback_img.jpg");
  background-size: 1300px 500px;
}

.boxnav{
  box-shadow:0px 0px 20px lightgreen;
  border-radius:20px;
}

.help24{
    margin-top:20px;
}
.help1{
    font-size: 20pt;
}

   
input[type=text], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
input[type=email], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
    
label {    
  padding: 12px 12px 12px 0;    
  display: inline-block;    
}    
    
input[type=submit] {    
  background-color: rgb(37, 116, 161);    
  color: white;    
  padding: 12px 20px;    
  border: none;    
  border-radius: 4px;    
  cursor: pointer;    
  float: right;    
}    
    
input[type=submit]:hover {    
  background-color: #45a049;    
}    

   
.col-25 {    
  float: left;    
  width: 20%;  
  height:10px;  
  margin-top: 10px;    
}    
    
.col-75 {    
  float: left;    
  width: 50%; 
     
  margin-top: 3px;    
}    
    
#proimage {
 width: 40px;
 height: 40px;
 border-radius: 50%;
 /* background: #512DA8; */
 background:darkblue;
 font-size: 25px;
 color: #fff;
 text-align: center;
 line-height: 40px;
 margin-left:-45px;
 margin-top:-30px;
}




</style>



  <body>

  <nav class="navbar navbar-custom"> 
        
        <a class="navbar-brand" href="#"><img src="images/libraryIcon.png" style="max-width: 10%" />
        <span style="border-radius:50% ; border:solid blue 2.3px;padding:5px 2px 9px 2px">eBook Byte</span></a>
        
        <!-- --------------------------------for showing loggedin username---------------------- -->
        <?php
           $email=$_SESSION['login'];
           $res=mysqli_query($conn,"SELECT * FROM `member` WHERE
           email='$email'; ");

         $row=mysqli_fetch_assoc($res);
         $name=$row['name'];
         ?>
         <div style="margin-left:800px;margin-top:7px;color:white;"> 
         <span style="border-radius:20px;border:solid blue 2.3px;padding:5px;
                      box-shadow:0px 0px 1px lightblue;">   
        
<!-- --------------------------letter profile pic-----------------------------------         -->
<span id="name"><?php echo $name ?></span>
</span>
        <div id="proimage"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
        </script>
        <script>
        $(document).ready(function(){
         var intials = $('#name').text().charAt(0);
         var proimage = $('#proimage').text(intials);
        });
        </script>
        </div>

        <div>
            <form action="logout.php">
              <button style="background-color:darkblue;" class="button button2">Logout
            </button>
            </form>
        </div>
  </nav>
  


<div class="boxnav">
<nav class="navbar navbar-expand-lg  navbar-dark  bg-dark">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
      <ul class="navbar-nav mr-auto">
        <div style="margin-left: 300px;">
          <li class="nav-item">
            <a class="nav-link" href="user.php">Home</a>
          </li>
        </div>
           <div style="margin-left: 40px;">
             <li class="nav-item ">
                <a class="nav-link" href="afterAboutUs.php">About Us</a>
             </li>
           </div>
        
        
        <div style="margin-left: 35px;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Browse
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <table >
               <tr>
                 <td><a class="dropdown-item" href="userBooks.php#academic">Academic</a></td>
                 <td><a class="dropdown-item" href="userBooks.php#classic">Classic Books</a></td>
                 <td><a class="dropdown-item" href="userBooks.php#editor">Editor's choice</a></td>
               </tr>

               <tr>
                  <td><a class="dropdown-item" href="userBooks.php#kids">Kids</a></td>
                  <td><a class="dropdown-item" href="userBooks.php#music">Music</a></td>
                  <td><a class="dropdown-item" href="userBooks.php#novels">Novels</a></td>
               </tr>

               <tr>
                 <td><a class="dropdown-item" href="userBooks.php#poem">Poems</a></td>
                 <td><a class="dropdown-item" href="userBooks.php#thrillers">Thrillers</a></td>
                 <td><a class="dropdown-item" href="userBooks.php#trending">Trending Books</a></td>
               </tr>
             </table>
            
          </div>
        </li>
      </div>    
            
  
      <div style="margin-left: 25px;">
      <li class="nav-item active">
              <a class="nav-link" href="feedback.php" 
              style="padding-left: 12px;padding-right:12px;
              background-color:darkblue;border-radius:12px;">Feedback</a>
           </li>
      </div>
      </ul>
</nav>
</div>

<br>


<section>

<div class="container">
     <table  style =" font-size:16pt"  align="center" width="100%" height="70%">
        
         <tr>
          <td align="center"><b><i><mark style="padding-left:15px;padding-right:15px;color:white;background-color:maroon;
           border-radius:5px">Feedback</mark></i></b></td>
        </tr>
      </table>
    
</div>
<br>


<div class="boxtwo" style="border:solid 1px #CF0403;
border-radius: 10px; width:84%; height:460px; 
margin-left:9%;margin-top:10px;background-color:white">




<fieldset align="center" style="  background:rgba(0,0,0,0.38);color:blue;" 
class="five" class="one">
<div><h2 style="margin-left:-110px;color:lightcyan;"><i>If you have any suggestions or questions please 
                  comment below:</i>
      </h2>
</div>
<form action="" method="post">
<div class="row">    
      <div style="margin-top:20px;color:aqua;" class="col-25">    
        <label for="name"><strong> Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</strong></label>    
      </div>    
      <div class="col-75">    
        <input style="margin-top:30px; height:40px;" type="text" id="name" name="name" placeholder="Your name..">    
      </div>    
    </div>    
    <div class="row">    
        <div style="margin-top:5px;color:aqua;" class="col-25">    
          <label for="email"><strong> Email Id &nbsp;:</strong></label>    
        </div>    
        <div class="col-75">    
          <input style="margin-top:10px; height:40px;" type="email" id="email" name="email" placeholder="Your mail id..">    
        </div>    
      </div>    
        
    <div class="row">    
      <div style="margin-top:5px;color:aqua;" class="col-25">    
        <label for="feed_back"><strong> Feedback :</strong></label>    
      </div>    
      <div class="col-75">    
        <textarea style="margin-top:10px; height:120px;" id="comment" 
        name="comment" placeholder="Write something..." style="height:200px"></textarea>    
      </div>    
    </div>    
    <div style="margin-left:400px; " class="row">    
      <input type="submit" name="submit" value="Submit">    
    </div> 

</form>


         </fieldset>
</div>


</section>




<?php
       if(isset($_POST['submit']))
       {
         $sql="INSERT INTO `comment` VALUES('','$_POST[name]','$_POST[email]','$_POST[comment]');";
         $res=mysqli_query($conn,$sql);

         if($res)
         {
     ?>

        <div style="margin-left:350px;">
              <div class="alert alert-primary alert-dismissible fade show" 
                   role="alert" style="margin-top:-450px;
                        width:800px;height:100px;">
                  <h3 style="text-align:center;"><strong>Thank You for the Feedback</strong></h3>
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              </div>
              
    <?php

         }
        }
    ?>


<br>



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