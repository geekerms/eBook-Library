<?php
    include "connection.php";
    session_start();
    if(!isset($_SESSION['login_user']))
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
    <title>eBook Byte | Admin Area</title>
  </head>
  <style>
    body{
  background: url(images/loginback.jpg);
  background-repeat: no-repeat;
  background-size: 1700px 800px;
  font-family: 'Times New Roman', Times, serif;
}


.boxnav{
  box-shadow:0px 0px 20px lightgreen;
  border-radius:20px;
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
 margin-left:-50px;
 margin-top:-30px;
}



.boxtwo{
  background-image: url("images/adminback_img.jpg");
  background-repeat: no-repeat;
  background-size: 1300px 460px;
  box-shadow:0px 0px 15px lightgreen;
  border-radius:12px;

}
  </style>



  <body>

  <nav class="navbar navbar-custom"> 
        
        <a class="navbar-brand" href="#"><img src="images/libraryIcon.png" style="max-width: 10%" />
        <span style="border-radius:50% ; border:solid blue 2.3px;padding:5px 2px 9px 2px">eBook Byte</span></a>
        
        
<!-- --------------------------------for showing loggedin username---------------------- -->
<?php
           $email=$_SESSION['login_user'];
           $res=mysqli_query($conn,"SELECT * FROM `admin` WHERE
           email='$email'; ");

         $row=mysqli_fetch_assoc($res);
         $name=$row['name'];
         ?>
         <div style="margin-left:900px;margin-top:7px;color:white;"> 
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
        <div style="margin-left: 200px;">
          <li class="nav-item active">
            <a class="nav-link" href="admin.php">Home</a>
          </li>
        </div>
           <div style="margin-left: 10px;">
             <li class="nav-item">
                <a class="nav-link" href="addBook.php">Add Book</a>
             </li>
           </div>
           
           <div style="margin-left: 10px;">
             <li class="nav-item">
                <a class="nav-link" href="addAdmin.php">Add Admin</a>
             </li>
           </div>
           <div style="margin-left: 10px;">
             <li class="nav-item">
                <a class="nav-link" href="bookDetail.php">Book Details</a>
             </li>
           </div>
           <div style="margin-left: 10px;">
             <li class="nav-item">
                <a class="nav-link" href="memDetail.php">Member Details</a>
             </li>
           </div>
           <div style="margin-left: 10px;">
             <li class="nav-item">
                <a class="nav-link" href="showFeedback.php">Member Feedback</a>
             </li>
           </div>

      </ul>
  
    </div>
    </div>
  </nav>
  </div>

   <br>

   
  <br>
    <div class="container">

     <table  style =" font-size:16pt"  align="center" width="100%" height="70%">
        
          <td align="center"><b><i><mark style="color:white;background-color:maroon; border-radius:5px">ADMIN PANEL</mark></i></b></td>
        </tr>
      </table>
    
</div>


 <br>
  <div class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; 
  width:84%; height:460px; margin-left:9%;margin-top:10px;background-color:white">
</div>







    



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