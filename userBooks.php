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
   <!-- -----------------for icon link the below---------------------------------- -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
   
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="profile_style.css">

    <title>eBook Byte | Books</title>
  </head>
  <style>
    body{
  background: url(images/loginBack.jpg);
  background-repeat: no-repeat;
  background-size: 1700px 5500px;
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
  background-color: aliceblue;
  background-size: cover;
  box-shadow:0px 0px 15px lightgreen;
  background-size: 1200px 5050px;
  border-radius:12px;
  width: 1700px;
}



.contents{

  font-family: 'Times New Roman', Times, serif;
  color:white;
  font-size: 10pt;
  background-color: maroon;
  
  
}

/* ------------------------------------style for letter profile-----------------------------  */

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
/* ----------------------------------finish of letter profile style----------------------- */


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

  <nav class="navbar navbar-custom" id="top"> 
        
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
          <li class="nav-item ">
            <a class="nav-link" href="user.php">Home</a>
          </li>
        </div>
        <div style="margin-left: 40px;">
          <li class="nav-item active">
            <a class="nav-link" href="user.php" 
            style="background-color:darkblue;border-radius:12px">Books</a>
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

           <div style="margin-left: 40px;">
             <li class="nav-item">
                <a class="nav-link" href="afterAboutUs.php">About Us</a>
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

<br><br>
<!-- -----------------------------------------start main back box--------------------------- -->
   <div class="container">
    <div class="boxtwo" align="center" style="border:solid 1px black;
    border-radius: 10px; width:895px; height:707px; margin-left:84px;
    margin-top:10px;">  
      <fieldset  style ="height:700px; width:895px;overflow:auto;margin-top:5px;"  >

<!-- -------------------------for Trending books------------------------------------------- -->
<h2 style="margin-top: 20px;float:left;color:brown;"  id="trending">
<strong>Trending Books</strong></h2>
<div class="coursel1">
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2000000000">
    <div class="box1">
          <table>
            <tr>
              <td>
                 <div class="book-size" style="margin-left: 5px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/trending1_img.jpg);">
                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" name="trending1"
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->
                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="trending1" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/trending2_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav"
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->
                       
                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="trending2" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" style="background-image: url(images/trending3_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="trending3" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
            </tr>
          </table>
          </div>     
  </div>
    <div class="carousel-item" data-interval="2000000000">
    <div class="box2">
    <table>
            <tr>
              <td>
                 <div class="book-size" style="margin-left: 5px;">
                   <div class="box-under-book" 
                   style="background-image: url(images/trending4_img.jpg);">

                   </div>
                   <p style="margin-left: 16px;margin-top:-13px;">
                    ___________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="trending4" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" style="background-image: url(images/trending5_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="trending5" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/trending6_img.jpg);
                    background-size:190px 210px;">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="trending6" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
            </tr>
          </table>  
  </div>    
  </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<!-- --------------------------------finish for trending books----------------------------------- -->
    
<br><br><br><br><br>
<!-- -------------------------------------for Editor's choices books---------------------------- -->
<h2 style="margin-top: 20px;float:left;color:brown;"  id="editor">
<strong>Editor's Choices</strong></h2>
<div class="coursel1">
<div id="carouselExampleInterval1" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2000000000">
    <div class="box1">
          <table>
            <tr>
              <td>
                 <div class="book-size" style="margin-left: 5px;">
                    <div class="box-under-book" style="background-image: url(images/editor1_img.jpg);">
                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="editor1" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/editor2_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="editor2" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" style="background-image:url(images/editor3_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="editor3" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
            </tr>
          </table>
          </div>     
  </div>
    <div class="carousel-item" data-interval="2000000000">
    <div class="box2">
    <table>
            <tr>
              <td>
                 <div class="book-size" style="margin-left: 5px;">
                   <div class="box-under-book" 
                   style="background-image: url(images/editor4_img.jpg);">

                   </div>
                   <p style="margin-left: 16px;margin-top:-13px;">
                    ___________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->


                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="editor4" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" style="background-image:url(images/editor5_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="editor5" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/editor6_img.jpg);
                    background-size:190px 210px;">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="editor6" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
            </tr>
          </table>  
  </div>    
  </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!-- ---------------------------------finish of Editor's choices------------------------------ -->
<br><br><br><br><br>
<!-- ---------------------------------for classic books---------------------------------- -->
<h2 style="margin-top: 20px;float:left;color:brown;"  id="classic">
<strong>Classic Books</strong></h2>
<div class="coursel1">
<div id="carouselExampleInterval2" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2000000000">
    <div class="box1">
          <table>
            <tr>
              <td>
                 <div class="book-size" style="margin-left: 5px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/classic1_img.jpg);">
                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="classic1" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/classic2_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="classic2" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" style="background-image: url(images/classic3_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="classic3" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
            </tr>
          </table>
          </div>     
  </div>
    <div class="carousel-item" data-interval="2000000000">
    <div class="box2">
    <table>
            <tr>
              <td>
                 <div class="book-size" style="margin-left: 5px;">
                   <div class="box-under-book" 
                   style="background-image: url(images/classic4_img.jpg);">

                   </div>
                   <p style="margin-left: 16px;margin-top:-13px;">
                    ___________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="classic4" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/classic5_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="classic5" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/classic6_img.jpg);
                    background-size:190px 210px;">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="classic6" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
            </tr>
          </table>  
  </div>    
  </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!-- ----------------------------------finish of classic books------------------------------- -->
<br><br><br><br><br>

<!-- --------------------------------for Academic books---------------------------------- -->
<h2 style="margin-top: 20px;float:left;color:brown;"  id="academic">
<strong>Academic Books</strong></h2>
<div class="coursel1">
<div id="carouselExampleInterval3" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2000000000">
    <div class="box1">
          <table>
            <tr>
              <td>
                 <div class="book-size" style="margin-left: 5px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/academic1_img.jpg);">
                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="academic1" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/academic2_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="academic2" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" style="background-image: url(images/academic3_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="academic3" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
            </tr>
          </table>
          </div>     
  </div>
    <div class="carousel-item" data-interval="2000000000">
    <div class="box2">
    <table>
            <tr>
              <td>
                 <div class="book-size" style="margin-left: 5px;">
                   <div class="box-under-book" 
                   style="background-image: url(images/academic4_img.jpg);">

                   </div>
                   <p style="margin-left: 16px;margin-top:-13px;">
                    ___________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="academic4" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" style="background-image: url(images/academic5_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="academic5" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/academic6_img.jpg);
                    background-size:190px 210px;">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="academic6" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
            </tr>
          </table>  
  </div>    
  </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval3" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval3" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!-- ----------------------------------finish of Academic books----------------------------- -->
<br><br><br><br><br>

<!-- ---------------------------------for kids ------------------------------------------- -->
<h2 style="margin-top: 20px;float:left;color:brown;"  id="kids">
<strong>Kids Special</strong></h2>
<div class="coursel1">
<div id="carouselExampleInterval4" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2000000000">
    <div class="box1">
          <table>
            <tr>
              <td>
                 <div class="book-size" style="margin-left: 5px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/kids1_img.jpg);">
                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="kids1" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/kids2_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="kids2" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" style="background-image: url(images/kids3_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="kids3" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
            </tr>
          </table>
          </div>     
  </div>
    <div class="carousel-item" data-interval="2000000000">
    <div class="box2">
    <table>
            <tr>
              <td>
                 <div class="book-size" style="margin-left: 5px;">
                   <div class="box-under-book" 
                   style="background-image: url(images/kids4_img.jpg);">

                   </div>
                   <p style="margin-left: 16px;margin-top:-13px;">
                    ___________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="kids4" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" style="background-image: url(images/kids5_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="kids5" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/kids6_img.jpg);
                    background-size:190px 210px;">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="kids6" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
            </tr>
          </table>  
  </div>    
  </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval4" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval4" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!-- ---------------------------------------finish of kids-------------------------------- -->
<br><br><br><br><br>


<!-- ------------------------------------------for Thrillers------------------------------- -->
<h2 style="margin-top: 20px;float:left;color:brown;"  id="thrillers">
<strong>Thrillers</strong></h2>
<div class="coursel1">
<div id="carouselExampleInterval5" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2000000000">
    <div class="box1">
          <table>
            <tr>
              <td>
                 <div class="book-size" style="margin-left: 5px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/thrillers1_img.jpg);">
                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="thrillers1" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/thrillers2_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="thrillers2" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" style="background-image:url(images/thrillers3_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="thrillers3" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
            </tr>
          </table>
          </div>     
  </div>
    <div class="carousel-item" data-interval="2000000000">
    <div class="box2">
    <table>
            <tr>
              <td>
                 <div class="book-size" style="margin-left: 5px;">
                   <div class="box-under-book" 
                   style="background-image: url(images/thrillers4_img.jpg);">

                   </div>
                   <p style="margin-left: 16px;margin-top:-13px;">
                    ___________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="thrillers4" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                 <div class="box-under-book" style="background-image:url(images/thrillers5_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="thrillers5" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/thrillers6_img.jpg);
                    background-size:190px 210px;">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="thrillers6" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
            </tr>
          </table>  
  </div>    
  </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval5" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval5" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<!-- -------------------------------------------finish of Thrillers------------------------ -->
<br><br><br><br><br>


<!-- -----------------------------------for Music-------------------------------------- -->
<h2 style="margin-top: 20px;float:left;color:brown;"  id="music">
<strong>Music</strong></h2>
<div class="coursel1">
<div id="carouselExampleInterval6" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2000000000">
    <div class="box1">
          <table>
            <tr>
              <td>
                 <div class="book-size" style="margin-left: 5px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/music1_img.jpg);">
                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->


                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="music1" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/music2_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="music2" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" style="background-image: url(images/music3_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->
                       
                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="music3" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
            </tr>
          </table>
          </div>     
  </div>
    <div class="carousel-item" data-interval="2000000000">
    <div class="box2">
    <table>
            <tr>
              <td>
                 <div class="book-size" style="margin-left: 5px;">
                   <div class="box-under-book" 
                   style="background-image: url(images/music4_img.jpg);">

                   </div>
                   <p style="margin-left: 16px;margin-top:-13px;">
                    ___________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->
                       
                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="music4" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" style="background-image: url(images/music5_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="music5" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/music6_img.jpg);
                    background-size:190px 210px;">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="music6" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
            </tr>
          </table>  
  </div>    
  </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval6" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval6" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<!-- -------------------------------------finish of Music------------------------------ -->
<br><br><br><br><br>

<!-- ------------------------------------for poem-------------------------------------- -->
<h2 style="margin-top: 20px;float:left;color:brown;"  id="poem">
<strong>Poems</strong></h2>
<div class="coursel1">
<div id="carouselExampleInterval7" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2000000000">
    <div class="box1">
          <table>
            <tr>
              <td>
                 <div class="book-size" style="margin-left: 5px;">
                    <div class="box-under-book" style="background-image: url(images/poem1_img.jpg);">
                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="poem1" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/poem2_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="poem2" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" style="background-image: url(images/poem3_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="poem3" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
            </tr>
          </table>
          </div>     
  </div>
    <div class="carousel-item" data-interval="2000000000">
    <div class="box2">
    <table>
            <tr>
              <td>
                 <div class="book-size" style="margin-left: 5px;">
                   <div class="box-under-book" 
                   style="background-image: url(images/poem4_img.jpg);">

                   </div>
                   <p style="margin-left: 16px;margin-top:-13px;">
                    ___________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="poem4" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" style="background-image: url(images/poem5_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="poem5" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/poem6_img.jpg);
                    background-size:190px 210px;">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="poem6" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
            </tr>
          </table>  
  </div>    
  </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval7" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval7" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!-- -------------------------------------finish of poem--------------------------------- -->
<br><br><br><br><br>

<!-- -------------------------------------for Novels--------------------------------------- -->
<h2 style="margin-top: 20px;float:left;color:brown;"  id="novels">
<strong>Novels</strong></h2>
<div class="coursel1">
<div id="carouselExampleInterval8" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2000000000">
    <div class="box1">
          <table>
            <tr>
              <td>
                 <div class="book-size" style="margin-left: 5px;">
                    <div class="box-under-book" style="background-image: url(images/novels1_img.jpg);">
                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->


                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="novels1" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/novels2_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="novels2" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>
                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" style="background-image: url(images/novels3_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="novels3" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
            </tr>
          </table>
          </div>     
  </div>
    <div class="carousel-item" data-interval="2000000000">
    <div class="box2">
    <table>
            <tr>
              <td>
                 <div class="book-size" style="margin-left: 5px;">
                   <div class="box-under-book" 
                   style="background-image: url(images/novels4_img.jpg);">

                   </div>
                   <p style="margin-left: 16px;margin-top:-13px;">
                    ___________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="novels4" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" style="background-image: url(images/novels5_img.jpg);">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="novels5" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
              <td>
                 <div class="book-size" style="margin-left: 12px;">
                    <div class="box-under-book" 
                    style="background-image: url(images/novels6_img.jpg);
                    background-size:190px 210px;">

                    </div>
                    <p style="margin-left: 16px;margin-top:-13px;">
                    ____________________________</p>
                    <div style="margin-left:30px;margin-top:-13px;">
                     <!-- <input type="submit" value="Add to Fav" 
                       style="border-radius:12px; color:blue;
                       background-color:aquamarine;">&nbsp; -->

                       <form action="action.php" method="POST">
                       <button type="button" style="border-radius:12px; color:blue;
                       background-color:aquamarine;">Add to fav</button>
                       &nbsp;
                       <input type="hidden" value="novels6" name="bid">
                     <input type="submit" value="More Details"  name="submit"
                     style="border-radius:12px; color:blue;
                       background-color:aquamarine;">
                       </form>
                    </div>

                 </div>
              </td>
            </tr>
          </table>  
  </div>    
  </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval8" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval8" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!-- ----------------------------------------finish of Novels------------------------------ -->
      </fieldset>
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
          <a href="user.php">Home</a>
        </li>
          <a href="#top">Return to Top</a>
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