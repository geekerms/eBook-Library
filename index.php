<?PHP
	session_start();
	if(isset($_SESSION['login']))
    header("location:user.php");
  
  elseif(isset($_SESSION['login_user']))
    header(("location:admin.php"));
	else
		session_destroy();
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
    <title>eBook Byte</title>
  </head>
  <style>
    body{
  background: url(images/loginBack.jpg);
  background-repeat: no-repeat;
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


.boxtwo{
  box-shadow:0px 0px 20px lightgreen;
  border-radius:20px;
  background-image: url("images/lib.jpeg");
}

.boxnav{
  box-shadow:0px 0px 20px lightgreen;
  border-radius:20px;
}

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

<header>
<nav class="navbar navbar-custom"> 
        
      <a class="navbar-brand" href="#"><img src="images/libraryIcon.png" style="max-width: 10%" />
      <span style="border-radius:50% ; border:solid blue 2.3px;padding:5px 2px 9px 2px">eBook Byte</span></a>
      
     
      <div  align="right">
          <form action="adminLogin.php">
        
                
            <button style="background-color:darkblue;" class="button button1">
          Admin Login

            <img src="images/adminLogin.png" style="max-width: 12%" />
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
      <div style="margin-left: 70px;">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Public Domain</a>
        </li>
      </div>
         <div style="margin-left: 25px;">
           <li class="nav-item">
              <a class="nav-link" href="aboutUs.php">About Us</a>
           </li>
         </div>
      
      
      <div style="margin-left: 25px;">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Discover
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <table >
               <tr>
                 <td><a class="dropdown-item" href="login.php">Academic</a></td>
                 <td><a class="dropdown-item" href="login.php">Classic Books</a></td>
                 <td><a class="dropdown-item" href="login.php">Editor's choice</a></td>
               </tr>

               <tr>
                  <td><a class="dropdown-item" href="login.php">Kids</a></td>
                  <td><a class="dropdown-item" href="login.php">Music</a></td>
                  <td><a class="dropdown-item" href="login.php">Novels</a></td>
               </tr>

               <tr>
                 <td><a class="dropdown-item" href="login.php">Poems</a></td>
                 <td><a class="dropdown-item" href="login.php">Thrillers</a></td>
                 <td><a class="dropdown-item" href="login.php">Trending Books</a></td>
               </tr>
             </table>
          
        </div>
      </li>
    </div>    
          

      
      <div style="margin-left: 25px;">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contact Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="help.php">Help</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="beforeFeedback.php">Feedback</a>
        </div>
      </li>
      </div>
    </ul>
    
  
      <div >
          <form action="login.php">
          <button style="background-color:darkblue;" class="button button2">Login</button>
          </form>
      </div>
      &nbsp;&nbsp;
      <div style="margin-right: -30px;">
          <form action="registration.php">
          <button style="background-color:darkblue;" class="button button2">Sign Up</button>
          </form>
      </div>  

  </div>
  </div>
</nav>
</div>
</header>



<section>
<div class="alert alert-info alert-dismissible fade show" role="alert"><div class="a1">
  <strong>STAY HOME,BE SAFE!</strong>&nbsp;&nbsp;Due to Covid condition we are working from home</div>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
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

<br>



<div class="container boxtwo">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    
  </ol>
  <div class="carousel-inner quotes">
    <div class="carousel-item active ">
      <img src="images/library_img4.jpg"  alt="Failed to load image" width="1350" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h1 style="color: crimson"><strong>To build up a library is to create a life. 
          It’s never just a random collection of books.</strong></h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/library_img14.jpg" alt="Failed to load image" width="1350" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h1 style="color: crimson"><strong>The only thing that you absolutely have to know, 
          is the location of the library.</strong></h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/library_img1.jpg" alt="Failed to load image" width="1350" height="400">
      <div class="carousel-caption d-none d-md-block">
        <h1 style="color: aqua"><strong>If I was a book, I would like to be a library book, 
          so I would be taken home by all different sorts of kids.</strong></h1>
      </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</section>


<br><br><br><br>
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
      <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Useful Links</h5>

      <ul class="list-unstyled">
        <li>
          <a href="login.php">Login</a>
        </li>
        <li>
          <a href="help.php">Help</a>
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
<!-- Call to action -->
<ul class="list-unstyled list-inline text-center py-2">
  <li class="list-inline-item">
    <h5 class="mb-1">Register for free</h5>
  </li>
  <li class="list-inline-item">
    <a href="registration.php" class="btn btn-danger btn-rounded">Sign up!</a>
  </li>
</ul>
<!-- Call to action -->
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