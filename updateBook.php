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
    <title>eBook Byte | Update Book</title>
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




.boxtwo{
  background-image: url("images/updateBook_img.jpg");
  background-repeat: no-repeat;
  background-size: 1300px 535px;
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

.box1{
    box-shadow:0px 0px 15px lightgreen;
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
        <div style="margin-left: 190px;">
          <li>
            <a class="nav-link" href="admin.php">Home</a>
          </li>
        </div>
           <div style="margin-left: 10px;">
             <li  class="nav-item">
                <a class="nav-link" href="addBook.php" >Add Book</a>
             </li>
           </div>

           <div style="margin-left: 10px;">
             <li class="nav-item active">
                <a class="nav-link" href="updateBook.php"
                style="background-color:darkblue;border-radius:12px">Update Book</a>
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
   
  
    <div class="container">

     <table  style =" font-size:16pt"  align="center" width="100%" height="70%">
        
          <td align="center"><b><i><mark style="color:white;background-color:maroon;
           border-radius:5px">Update Book</mark></i></b></td>
        </tr>
      </table>
    
</div>

 <br>
 

 <form method="post" action="" enctype="multipart/form-data">
  <div class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; width:80%;
        height:480px; margin-left:9%;margin-top:10px;background-color:white">
  <fieldset align="center" style=" height: 467px;width:680px;border-radius:5px; 
    background:rgba(0,0,0,0.38);color:blue;margin-left:550px;
    margin-top:12px;" class="box1">
          <div class="boxfour">
            <h3 style="color:white;text-align:center;;padding-top:1px;padding-bottom: 1px;background:#660000;
            border-radius:12px;margin-top:-13px;margin-left:-12px;margin-left:0px;
            height:40px">
            Enter Book Details</h3>
          </div>
          <table style= "color:#FFFFFF; " align="left">

          <tr>
            <td>BOOK ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
            <td><input type="text" name="bid" readonly="readonly"
                 value="<?php
                     if(isset($_POST['submit1']))
                     {
                       echo $_POST['bid'];
                     }
             ?>"  
                 class="form-control" 
                 placeholder="Book Id" required="">
            </td>
          </tr>      
          <tr>
            <td>BOOK NAME&nbsp;&nbsp;&nbsp;&nbsp;:</td>
            <td><input type="text" name="name" 
                 value="<?php
                     if(isset($_POST['submit1']))
                     {
                       echo $_POST['name'];
                     }
                 ?>"  

                class="form-control" 
                placeholder="Book Name" required=""></td>
          </tr>
          <tr>
            <td>AUTHORS NAME:</td>
            <td><input type="text" name="authors" 
                   value="<?php
                     if(isset($_POST['submit1']))
                     {
                       echo $_POST['authors'];
                     }
                 ?>"  
            
            class="form-control" 
            placeholder="Authors Name" required=""></td>
          </tr>
          <tr>
            <td>EDITION
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
            <td><input type="text" name="edition" 
                  value="<?php
                     if(isset($_POST['submit1']))
                     {
                       echo $_POST['edition'];
                     }
                 ?>"  
                  
            class="form-control" 
            placeholder="Edition" required=""></td>
          </tr>
          <tr>
            <td>STATUS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;:</td>
            <td>
               <input type="radio" name="status" value="Available" checked>Available
               <input type="radio" name="status" value="Unavailable">Unavailable
            </td>
          </tr>
          <tr>
            <td>NO OF COPIES :</td>
            <td><input type="text" name="copies" 
                  value="<?php
                     if(isset($_POST['submit1']))
                     {
                       echo $_POST['copies'];
                     }
                 ?>"  

            class="form-control" 
            placeholder="available copies.." required=""></td>
          </tr>
          <tr>
            <td>DEPARTMENT :</td>
            <td><input type="text" name="department" 
                  value="<?php
                     if(isset($_POST['submit1']))
                     {
                       echo $_POST['department'];
                     }
                 ?>"  
            class="form-control" 
            placeholder="Department" required=""> </td>
          </tr>
          <tr>
          <tr>
	       <td>UPLOAD EBOOK:</td>
	       <td><input  type="file" name="filename"></td>
	       </tr>
         <tr>
	       <td>COVER Img&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
	       <td><input  type="file" name="cover"></td>
	       </tr>
  <br>
	    <tr>
	  <td><h2><input style="margin-left:180%;margin-top:20px;color:white; 
    background-color: maroon; border-radius:12px;" type="submit" name="submit" 
      value="UPDATE"/></h2></td>
	  </tr>
   </table>


 </fieldset>
    
</div>
</form>

<!-- ----------------------------------------php code to update books-------------------------- -->
<?php
  
    if(isset($_POST['submit']))
    {
     //-------------for checking the book is present or not in the datebase------------
     $count=0;
      $res=mysqli_query($conn,"SELECT * FROM `books` WHERE
          bid='$_POST[bid]';");
          
       $count=mysqli_num_rows($res);

       if($count==0)
       {
    ?>
              <div style="margin-left:350px;">
              <div class="alert alert-danger alert-dismissible fade show" role="alert" 
              style="margin-top:-500px;width:800px;height:250px;">
              <h3 style="text-align:center;margin-top:30px;"><strong>Sorry you can't update!</strong></h3>
              <h4 style="text-align:center;">The book id is not match</h4>
              <h5 style="text-align:center;">Please enter a valid Book Id..</h5>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              </div>
  <?php
       }
       else{
    

      $filename2=$_FILES['filename']['name'];
      $destination = 'uploadedFiles/'.$filename2;
      
      $extension = pathinfo($filename2,PATHINFO_EXTENSION);
      $file = $_FILES['filename']['tmp_name'];
      
      $size = $_FILES['filename']['size'];


     //-----------------for book cover img-------------
     $cover2=$_FILES['cover']['name'];
     $destination2 = 'uploadedFiles/'.$cover2;
     
     $extension2 = pathinfo($cover2,PATHINFO_EXTENSION);
     $file2 = $_FILES['cover']['tmp_name'];





      if(!in_array($extension,['pdf']))
      {
      ?>
        <div style="margin-left:350px;">
              <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:-500px;
                        width:800px;height:100px;">
                  <h3 style="text-align:center;"><strong>File extension must be .pdf !!!</strong></h3>
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              </div>

      <?php
      }
       
      elseif(!in_array($extension2,['jpg']))
      {
      ?>
        <div style="margin-left:350px;">
              <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:-500px;
                        width:800px;height:100px;">
                  <h3 style="text-align:center;"><strong>cover image extension must be .jpg !!!</strong></h3>
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              </div>

      <?php
      }
    

      elseif($_FILES['filename']['size']>100000000)
      {
      ?>
    
        <div style="margin-left:350px;">
              <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:-500px;
                        width:800px;height:100px;">
                  <h3 style="text-align:center;"><strong>File size is too large..</strong></h3>
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              </div>
     
     <?php       
      }
      else{
        if(move_uploaded_file($file,$destination) && move_uploaded_file($file2,$destination2))
        {
          $sql =    "UPDATE books set name='" . $_POST['name'] . "',
          authors='" . $_POST['authors'] . "', edition='" . $_POST['edition'] . "', 
          status='" . $_POST['status'] . "' , copies='" . $_POST['copies'] . "',
          department='" . $_POST['department'] . "',filename='".$filename2."',
          cover='".$cover2."'
          WHERE bid='" . $_POST['bid'] . "'";
  
          if(mysqli_query($conn,$sql))
          {
         ?>
               <div style="margin-left:350px;">
              <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:-500px;
                        width:800px;height:100px;">
                  <h3 style="text-align:center;"><strong>Book updated successfully :)</strong></h3>
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              </div>

         <?php
          }
          else
          {
         ?>
             <div style="margin-left:350px;">
              <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:-500px;
                        width:800px;height:100px;">
                  <h3 style="text-align:center;"><strong>Failed to update book :(</strong></h3>
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              </div>

         <?php
          }
        
        }
      }
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