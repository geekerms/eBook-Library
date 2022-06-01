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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <link rel="stylesheet" href="style.css">
    <title>eBook Byte | Home</title>
  </head>
  <style>
    body{
  background: url(images/loginBack.jpg);
  background-repeat: no-repeat;
  background-size: 1700px 800px;
  font-family: 'Times New Roman', Times, serif;
}

a {
    text-decoration: none !important;
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
    background-repeat: no-repeat;
  background-size: 1100px 200px;
    margin-left: 13%;
    opacity: .9;
    box-shadow:0px 0px 15px lightgreen;
    border-radius:12px;
  }


  
.boxtwo{
  background-image: url("images/library_img2.jpg");
  background-size: cover;
  box-shadow:0px 0px 15px lightgreen;
  background-size: 1200px 350px;
  border-radius:12px;
  width: 1700px;
}



.category{
  font-family: 'Times New Roman', Times, serif;
  color: aqua;
}

.table{
  box-shadow:0px 0px 0px lightgreen;
}

.contents{

  font-family: 'Times New Roman', Times, serif;
  color:white;
  font-size: 10pt;
  background-color: maroon;
  
  
}

.table-image1{
  background-image: url("images/table_img1.jpg");
  background-size: 140px 100px;
}
.table-image2{
  background-image: url("images/table_img2.jpg");
  background-size: 160px 145px;
}
.table-image3{
  background-image: url("images/table_img3.jpg");
  background-size: 140px 100px;
}
.table-image4{
  background-image: url("images/table_img4.jpg");
  background-size: 140px 100px;
}
.table-image5{
  background-image: url("images/table_img5.jpg");
  background-size: 160px 145px;
}
.table-image6{
  background-image: url("images/table_img6.jpg");
  background-size: 140px 100px;
}
.table-image7{
  background-image: url("images/table_img7.jpg");
  background-size: 140px 145px;
}
.table-image8{
  background-image: url("images/table_img8.jpg");
  background-size: 160px 145px;
}

.table-image9{
  background-image: url("images/table_img9.jpg");
  background-size: 165px 160px;
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



/* ------------------------------style for footer------------------------------- */
.footercls{
  /* box-shadow:0px 0px 20px lightgreen; */
  background-color:  rgb(28, 43, 65);
  color: white;
}


.fa {
  padding: 5px;
  font-size: 17px;
  width: 30px;
  text-align: center;
  text-decoration: none;
}

/* Add a hover effect if you want */
.fa:hover {
  opacity: 9;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
  background: #3B5998;
  color: white;
  border-radius:50px;
}


.fa-twitter {
  background: #55ACEE;
  color: white;
  border-radius:50px;
  margin-left:2px;
}

.fa-google {
  background: #dd4b39;
  color: white;
  border-radius:50px;
  margin-left:2px;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
  border-radius:50px;
  margin-left:2px;
}


</style>



  <body>

  <nav class="navbar navbar-custom"> 
        
        <a class="navbar-brand" href="#"><img src="images/libraryIcon.png" style="max-width: 10%" />
        <span style="border-radius:50% ; border:solid blue 2.3px;
                     padding:5px 2px 9px 2px">eBook Byte</span></a>
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
          <li class="nav-item active">
            <a class="nav-link" href="user.php">Home</a>
          </li>
        </div>
           <div style="margin-left: 40px;">
             <li class="nav-item">
                <a class="nav-link" href="afterAboutUs.php">About Us</a>
             </li>
           </div>
        
        
        <div style="margin-left: 35px;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Browse
          </a>
          <div  class="dropdown-menu" aria-labelledby="navbarDropdown" >
          
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
            
  
        
        <div style="margin-left: 35px;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Contact Us
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="afterHelp.php">Help</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="feedback.php">Feedback</a>
          </div>
        </li>
        </div>
      </ul>
</nav>
</div>

<br>
<br>

<div class="container">
<div class="box">
     <table  style =" font-size:16pt"  align="center" width="100%" height="70%">
        <tr>
            <td style="color:blue"><h1 align="center"><marquee><i>Welcome To Our Library</i> 
         </marquee></h1></td></tr>
        
      </table>
    </div>
</div>

   <div class="container">
    <div class="boxtwo" align="center" style="border:solid 1px #CF0403;border-radius: 10px; width:100%; height:360px; margin-left:0%;margin-top:10px;background-color:white">  
      
    <div class="category">
        <b><u><p align="center" style="font-size: 27pt">Categories</p></u></b>
        </div>
      <fieldset  style ="height:220px; width:500px;overflow:auto" class="three"  >
         
     <div class="table">
      <table width="420px" height="240px" border="1"  align="center" 
      style="color:white;  background:rgba(0,0,0,0.38);box-shadow:0px 0px 15px lightblue;">
      
      <tr>
        <th height="150px" width="140px" class="table-image1"><a href="userBooks.php#editor"  class="contents">
        <mark >Editor's Choice</mark><a></th>
        <th height="150px" width="140px" class="table-image2"><a href="userBooks.php#trending" class="contents">
          <mark>Trending Books</mark></th>
        <th height="150px" width="140px" class="table-image3"><a href="userBooks.php#academic" 
        class="contents"><mark>Academic</mark></th>
        
      </tr>
      <tr>
        <th height="150px" width="140px" class="table-image4"><a href="userBooks.php#classic" class="contents">
        <mark>Classic Books</mark></th>
        <th height="150px" width="140px" class="table-image5"><a href="userBooks.php#kids" class="contents">
          <mark>Kids</mark></th>
        <th height="150px" width="140px" class="table-image6"><a href="userBooks.php#poem" class="contents">
          <mark>Poems</mark></th>
      </tr>
      <tr>
        <th height="150px" width="140px" class="table-image7"><a href="userBooks.php#novels" class="contents">
        <mark>Novels</mark></th>
        <th height="150px" width="140px" class="table-image8"><a href="userBooks.php#thrillers" class="contents">
          <mark>Thrillers</mark></th>
        <th height="150px" width="140px" class="table-image9"><a href="userBooks.php#music" class="contents">
          <mark>Music</mark></th>
      </tr>
  </table>
  </div>
  </feildset>
  </div>
  </div>


  <br><br><br><br>
   <br>

    <!-- Footer -->
    <div class="footercls">
<footer class="page-footer font-small pt-4">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4 mx-auto">

      <!-- Content -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">About Us</h5>
      <p style="color: aquamarine;">we are fans of digital, geeks by nature, 
      addicated to social networks and completely crazy about design.
      We believe that good design is powerful, hard work is essential, and exploring the 
      unknown is important.<br>Click <a href="aboutUs.php">here</a> for details About Us.</p>
      

    </div>

    
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

<!-- Grid column -->
<div class="col-md-2 mx-auto">

  <!-- Links -->
  <h5 class="font-weight-bold  mt-3 mb-4">eBook Byte</h5>

  <ul class="list-unstyled">
    <li>
      <a href="#">History</a>
    </li>
    <li>
      <a href="#">Vision</a>
    </li>
      <a href="afterAboutUs.php#ourTeam">Our Team</a>
    </li>
    
    
  </ul>

</div>


    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 mx-auto">

      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Discover</h5>

      <ul class="list-unstyled">
        <li>
          <a href="userBooks.php">Books</a>
        </li>
        <li>
          <a href="afterHelp.php">Help</a>
        </li>
        
      </ul>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 mx-auto">

      <!-- Links -->
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact</h5>

      <ul class="list-unstyled">
        <li>
          <h6 style="color: aquamarine;">Email : <a href="#!">msd@gmail.com</a></h6>
        </li>
        <li>
         <h6 style="color: aquamarine;">Mobile : <a href="#!">+910000000000</a></h6>
        </li>
        <li>
          <h6 style="color: aquamarine;">
          Follow Us : <br>
           <a href="https://www.facebook.com/mps.c.986" class="fa fa-facebook"></a>
           <a href="https://www.facebook.com/mps.c.986" class="fa fa-twitter"></a>
           <a href="https://www.facebook.com/mps.c.986" class="fa fa-google"></a>
           <a href="https://www.facebook.com/mps.c.986" class="fa fa-linkedin"></a>
        </h6>
        </li>
        
      </ul>

    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<hr>




<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="index.php"> msd.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->

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