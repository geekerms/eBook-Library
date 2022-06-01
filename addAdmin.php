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
    <title>eBook Byte | Add Admin</title>
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
  background-image: url("images/addMem_img.jpg");
  background-repeat: no-repeat;
  background-size: 1300px 480px;
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
        <div style="margin-left: 200px;">
          <li>
            <a class="nav-link" href="admin.php">Home</a>
          </li>
        </div>
           <div style="margin-left: 10px;">
             <li  class="nav-item">
                <a class="nav-link" href="addBook.php">Add Book</a>
             </li>
           </div>
           
           
           <div style="margin-left: 10px;">
             <li class="nav-item active">
                <a class="nav-link" href="addAdmin.php"
                style="background-color:darkblue;border-radius:12px;">Add Admin</a>
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
           border-radius:5px">Add Admin</mark></i></b></td>
        </tr>
      </table>
    
</div>

 <br>
 

  <div class="boxtwo" style="border:solid 1px #CF0403;border-radius: 10px; width:80%;
        height:480px; margin-left:9%;margin-top:10px;background-color:white">
  <fieldset align="center" style=" height: 367px;width:450px;border-radius:8px; 
    background:rgba(0,0,0,0.38);color:blue;margin-left:720px;margin-right:350px;
    margin-top:65px;" class="box1">
          <div class="boxfour">
            <h3 style="color:white;text-align:center;;padding-top:1px;padding-bottom: 1px;background:#660000;
            border-radius:12px;margin-top:-13px;margin-left:-12px;margin-left:0px;
            height:40px">
            Enter Details</h3>

            <form name="registration" action="" method="post" style="margin-top:-20px;
                margin-right:36px;">
       <table align="Right" style="color:white;font-size:13pt; border-radius: 12px;">
	     <tr>
			<td>NAME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
            <td ><input type="text" placeholder="Enter name" class="form-control"
               required="required" name="name"  style="color:blue"/></td>
         </tr>
         <tr>
            <td>GENDER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
            <td>
               <input type="radio" name="gender" value="m" checked> Male
               <input type="radio" name="gender" value="f"> Female</td>
         </tr>

         <tr>
			<td>PROFESSION:</td>
            <td ><input type="text" placeholder="Enter profession" class="form-control"
               required="required" name="profession"  style="color:blue"/></td>
         </tr>
<tr>
 <td>COUNTRY &nbsp;&nbsp; :</td>
 <td>
<select style="width:220px;" class="form-control" name="countryCode" id="">
	<option data-countryCode="IN" value="91" Selected>India (+91)</option>
	<option data-countryCode="GB" value="47" >Norway (+47)</option>
	<option data-countryCode="US" value="44">UK (+44)</option>
  <option data-countryCode="US" value="1">USA (+1)</option> 
	<optgroup label="Other countries">
		<option data-countryCode="DZ" value="213">Algeria (+213)</option>
		<option data-countryCode="AR" value="54">Argentina (+54)</option>
		<option data-countryCode="AU" value="61">Australia (+61)</option>
		<option data-countryCode="AT" value="43">Austria (+43)</option>
		<option data-countryCode="BD" value="880">Bangladesh (+880)</option>
		<option data-countryCode="BT" value="975">Bhutan (+975)</option>
		<option data-countryCode="BW" value="267">Botswana (+267)</option>
		<option data-countryCode="BR" value="55">Brazil (+55)</option>
		<option data-countryCode="BG" value="359">Bulgaria (+359)</option>
		<option data-countryCode="CA" value="1">Canada (+1)</option>
		<option data-countryCode="CN" value="86">China (+86)</option>
		<option data-countryCode="EG" value="20">Egypt (+20)</option>
		<option data-countryCode="FR" value="33">France (+33)</option>
		<option data-countryCode="HK" value="852">Hong Kong (+852)</option>
		<option data-countryCode="IS" value="354">Iceland (+354)</option>

		<option data-countryCode="ID" value="62">Indonesia (+62)</option>
		<option data-countryCode="IR" value="98">Iran (+98)</option>
		<option data-countryCode="IQ" value="964">Iraq (+964)</option>
		<option data-countryCode="IE" value="353">Ireland (+353)</option>

		<option data-countryCode="IT" value="39">Italy (+39)</option>
		<option data-countryCode="JP" value="81">Japan (+81)</option>
		<option data-countryCode="KP" value="850">Korea North (+850)</option>
		<option data-countryCode="KR" value="82">Korea South (+82)</option>
		<option data-countryCode="MY" value="60">Malaysia (+60)</option>
		<option data-countryCode="MV" value="960">Maldives (+960)</option>
		<option data-countryCode="MX" value="52">Mexico (+52)</option>
		<option data-countryCode="MN" value="95">Myanmar (+95)</option>
		<option data-countryCode="NP" value="977">Nepal (+977)</option>
		<option data-countryCode="NZ" value="64">New Zealand (+64)</option>

		<option data-countryCode="PH" value="63">Philippines (+63)</option>
		<option data-countryCode="PT" value="351">Portugal (+351)</option>

		<option data-countryCode="RO" value="40">Romania (+40)</option>
		<option data-countryCode="RU" value="7">Russia (+7)</option>
		<option data-countryCode="SG" value="65">Singapore (+65)</option>
		<option data-countryCode="ZA" value="27">South Africa (+27)</option>

		<option data-countryCode="SE" value="46">Sweden (+46)</option>
		<option data-countryCode="CH" value="41">Switzerland (+41)</option>
		<option data-countryCode="SI" value="963">Syria (+963)</option>
		<option data-countryCode="TR" value="90">Turkey (+90)</option>
		<option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
		<option data-countryCode="UG" value="256">Uganda (+256)</option>
		<option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
		
		<option data-countryCode="VN" value="84">Vietnam (+84)</option>
		<option data-countryCode="ZM" value="260">Zambia (+260)</option>
	</optgroup>
</select>
</td>
</tr>


         <tr>
            <td>MOBILE NO.:</td>
            <td><input type="tel" id="phone" name="phone" class="form-control"
                placeholder="Enter  phone no." required="required" ></td>
         </tr>
        <tr>
             <td>E-MAIL ID &nbsp;&nbsp; :</td>
             <td><input type="email" name="email" class="form-control"
                 placeholder="Enter  mail id" required="required" style="color:blue"/></td>
        </tr>
        <tr>
            <td>PASSWORD &nbsp;:</td>
            <td><input type="password" name="password" class="form-control"
                value="admin123" required="required" readonly="readonly" style="color:blue"/>
            </td>
        </tr>


<tr>
	  <td><h2><input style="margin-left:180%;margin-top:5px;margin-top:15px;color:white; 
    background-color: maroon; border-radius:12px;" type="submit" name="submit" value="ADD"/></h2></td>
	  </tr>
<br>
 </table>
</form>

</div>    

 </fieldset>
    
</div>
</form>


<!-- ----------------------------------------php code -------------------------- -->
<?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT email from `admin`";
        $res=mysqli_query($conn,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['email']==$_POST['email'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($conn,"INSERT INTO `admin` 
          VALUES('$_POST[name]', '$_POST[gender]','$_POST[profession]','$_POST[countryCode]',
          '$_POST[phone]', '$_POST[email]', '$_POST[password]');");
      ?>
       
       <div style="margin-left:350px;">
              <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:-500px;
                        width:800px;height:100px;">
                  <h3 style="text-align:center;"><strong>Admin added successfully :)</strong></h3>
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
                  <h3 style="text-align:center;"><strong>Email Id already exist!</strong></h3>
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                  </button>
              </div>
           </div>

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