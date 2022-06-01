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
    <title>eBook Byte | Registration</title>
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
              style="color:white;background-color:maroon; border-radius:5px">Registration Portal</mark></i></b></td>
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
    margin-left:-12px;margin-left:0px;height:40px">YOUR DETAILS</h3>
   </div>


<!-- 
  ----------------------------Input to Database--------------------------------------------- -->



   <form name="registration" action="" method="post" style="margin-top:-30px;
          margin-right:55px;">
       <table align="Right" style="color:white;font-size:13pt; border-radius: 12px;">
	     <tr>
			<td>NAME    <a class="word-space-name" style="color:white;">:</a></td>
            <td ><input type="text" placeholder="Enter your name" 
               required="required" name="name"  style="color:blue"/></td>
         </tr>
         <tr>
            <td>GENDER     <a class="word-space-gen" style="color:white;">:</a></td>
            <td>
               <input type="radio" name="gender" value="m" checked> Male
               <input type="radio" name="gender" value="f"> Female</td>
         </tr>


<tr>
 <td>COUNTRY <a class="word-space-coun" style="color:white;">:</a> </td>
 <td>
<select style="width:220px;" name="countryCode" id="">
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
            <td>MOBILE NO. <a class="word-space-mob" style="color:white;">:</a></td>
            <td><input type="tel" id="phone" name="phone" placeholder="Enter your phone no." required="required" ></td>
         </tr>
        <tr>
             <td>E-MAIL ID  <a class="word-space-email" style="color:white;">:</a></td>
             <td><input type="email" name="email" placeholder="Enter your mail id" required="required" style="color:blue"/></td>
        </tr>
        <tr>
            <td>PASSWORD<a class="word-space-pass" style="color:white;">:</a></td>
            <td><input type="password" name="password" placeholder="Password length 1-8 char" required="required" style="color:blue"/>
            </td>
        </tr>

<br>
 <tr>
  <td><input type="submit" name="submit"
   value="REGISTER"></td>
   <td><a href="login.php" style="color:white;font-size:10pt;margin-left:100px;">
   Already register!</a></td>
</tr>
<br>
 </table>
</form>
 </fieldset>
</div>




    <div class="boxthree" style="background-color:teal; border:solid 2px teal;border-radius: 10px; width:73.5%; height:40px; margin-left:13%; margin-top:15px" >
    <marquee behavior="alternate" direction="right" loop="1" style="margin-right:38%" align="center"><h6 style="line-height:1px;margin-top:20px;">
    For any query please <a style="color:white;" href="https://www.facebook.com/mps.c.986">contact us</a>.Thank You.</h6></marquee>
    </div>


<!-- ----------------------------php code------------------------------------ -->
    <?php

      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT email from `member`";
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
          mysqli_query($conn,"INSERT INTO `member` 
          VALUES('$_POST[name]', '$_POST[gender]','$_POST[countryCode]',
          '$_POST[phone]', '$_POST[email]', '$_POST[password]');");
      ?>
       <script type="text/javascript">
            window.location="thnk.php"
         </script>

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