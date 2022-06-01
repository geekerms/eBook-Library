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
    <title>eBook Byte | About Us</title>
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
  background-image: url("images/aboutUs_img.jpg");
  background-size: 1300px 400px;
}

.boxnav{
  box-shadow:0px 0px 20px lightgreen;
  border-radius:20px;
}



.footercls{
  
  background-color:  rgb(28, 43, 65);
  color: white;

}



/*-------------style on footer section--------------*/


.column {
  float: left;
  width: 33.1%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin:8px;
}





.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
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
             <li class="nav-item active">
                <a class="nav-link" href="afterAboutUs.php" 
                style="background-color:darkblue;border-radius:12px">About Us</a>
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
<section>




<div class="container">
<div class="box">
     <table  style =" font-size:16pt"  align="center" width="100%" height="70%">
        <tr>
            <td style="color:blue"><h1 align="center"><marquee><i>Welcome To Our Library</i> 
         </marquee></h1></td>
         </tr>
         <tr>
          <td align="center"><b><i><mark style="color:white;background-color:maroon;
           border-radius:5px">About Us</mark></i></b></td>
        </tr>
      </table>
    </div>
</div>
<br>
<br>

<div class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; width:84%; height:360px; 
margin-left:9%;margin-top:10px;background-color:white">
 
 <pre><h3  style="text-align:center;    font-family: 'Times New Roman', Times, serif;
 color: darkblue;margin-left:-30px; margin-top: 10px;">
    <mark>we are fans of digital, geeks by nature,addicated to social networks 
and completely crazy about design.
We believe that good design is powerful,hard
work is essential, and exploring the 
unknown is important.</mark></h3></pre>

</div>


</section>


<br><br><br><br>
    <!-- Footer -->
<div class="footercls">
  <br><br>
    
<h2><strong>
<div style=" padding-left:600px;" id="ourTeam">
<span style=" font-family: Times New Roman, Times, serif;color: aqua;border-radius:50% ;
background-color:maroon;
 border:solid black 3px;padding:5px 80px 5px 80px">Our Team</span>
</div>
</strong>
</h2>
    <br>
<div class="row">
  <div  class="column">
    <div style=" box-shadow:0px 0px 6px lightgreen;" class="card">
      <img src="images/about_img2.jpg" alt="MS" style="margin-left:50px;width:80%;height:250px;">
      <div  class="container">
        <h3 style="color: black">Mamata Shee</h3>
        <h5 style="color: blue;" class="title">Student</h5>
        <h5 style="color: blue;">ms@gmail.com</h5>
        <p><button class="button"><a style="color: white;" 
        href="https://www.facebook.com/mps.c.986">Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div style=" box-shadow:0px 0px 6px lightgreen;"class="card">
      <img src="images/about_img3.jpg" alt="SM" style="margin-left:50px;width:80%;height:250px;">
      <div class="container">
        <h3 style="color:black;">Php Dev</h3>
        <h5 style="color:blue;" class="title">Student</h5>
        <h5 style="color:blue;" >phpdev@gmail.com</h5>
        <p><button class="button"><a style="color: white;" 
        href="https://www.facebook.com/mps.c.986">Contact</a></button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div style=" box-shadow:0px 0px 6px lightgreen;" class="card">
      <img src="images/about_img2.jpg" alt="DN" style="margin-left:50px;width:80%;height:250px;">
      <div class="container">
        <h3 style="color:black;">Php Pro</h3>
        <h5 style="color:blue;" class="title">Student</h5>
        <h5 style="color:blue;">phpro@gmail.com</h5>
        <p><button class="button"><a style="color: white;" 
        href="https://www.facebook.com/mps.c.986">Contact</a></button></p>
      </div>
    </div>
  </div>
</div>

</div>


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