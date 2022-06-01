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
    <title>eBook Byte | Delete Book</title>
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
  background-image: url("images/dltBook_img.jpg");
  background-repeat: no-repeat;
  background-size: 1500px 460px;
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
                <a class="nav-link" href="dltBook.php" style="background-color:darkblue;border-radius:12px">Delete Book</a>
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
          border-radius:5px">DELETE BOOK</mark></i></b></td>
        </tr>
      </table>
    
</div>

 <br>


 <form method="post" action="">
  <div class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; width:80%; 
  height:460px; margin-left:9%;margin-top:10px;background-color:white">
  <fieldset align="center" style=" height: 300px;width:450px; 
  background:rgba(0,0,0,0.38);color:blue;margin-left:730px;
  margin-top:88px;border-radius:5px;" class="box1">
          <div class="boxfour">
            <h3 style="color:white;text-align:center;;padding-top:1px;padding-bottom: 1px;background:#660000;
            border-radius:12px;margin-top:-13px;margin-left:-12px;margin-left:0px;
            height:40px">
            Enter Details</h3>


          </div>

          
  <table style= "color:#FFFFFF;padding-top:10px;">
      <br>
      <br>
      <tr>
    <td style="width:250px;text-align:center;">BOOK ID&nbsp;&nbsp;&nbsp;:</td>
    <td><input class="form-control" style="width:200px;margin-left:-70px;" type="text" 
        name="bid" readonly="readonly"
        value="<?php
                     if(isset($_POST['submit2']))
                     {
                       echo $_POST['bid'];
                     }
             ?>"  
        /></td>
   </tr>
     
     <tr>
     <td><h2><input style="margin-left:180px;margin-top:30%; color:white; 
     background-color: maroon; border-radius:12px;" type="submit" name="submit"
      value="Delete"/></h2></td>
     </tr>
     
   </table>


 </fieldset>
    
</div>
</form>




<!-- -------------------------php code for delete book---------------------------------- -->
<?php
if(isset($_POST['submit']))
{
  $count=0;
  $res=mysqli_query($conn,"SELECT * FROM `books` WHERE
      bid='$_POST[bid]';");
   $count=mysqli_num_rows($res);

   if($count==0)
   {
  ?>
          <div style="margin-left:350px;">
          <div class="alert alert-danger alert-dismissible fade show" role="alert" 
          style="margin-top:-500px;width:700px;height:150px;">
          <h3 style="text-align:center;"><strong>Wrong Book Id!</strong></h3>
          <h5 style="text-align:center;">Please enter a valid Book Id..</h5>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
              </button>
          </div>
          </div>
<?php
   }
   else{
     //-------------select the table to take the column name to delete from server---    
      $res=mysqli_query($conn,"SELECT * FROM `books` where bid = '$_POST[bid]';");
      $row=mysqli_fetch_assoc($res);

      //--------------------for delete the file from server--------------------
      $base_directory = 'uploadedFiles/';
    if(unlink($base_directory.$row['filename']) && unlink($base_directory.$row['cover']))
    {
      //--------------------for delete the file from database-------------------
      mysqli_query($conn,"DELETE from books where bid = '$_POST[bid]'; ");

    ?>
      
      <div style="margin-left:350px;">
              <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:-500px;
                        width:800px;height:100px;">
                  <h3 style="text-align:center;"><strong>Book deleted successfully!</strong></h3>
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              </div>
    <?php
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