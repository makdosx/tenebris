<?php



?>


<!DOCTYPE html>
<html >
<head>


  <meta charset="UTF-8">

  <title> Tenebris </title>


  <link rel="SHORTCUT ICON" href="images/icons/icon.png" />


  <link href='css/family.css' rel='stylesheet' type='text/css'>


  <link rel="stylesheet" href="css/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>

body
{
background-image: url(), url() ,url();
background-position: left center, right center;
background-repeat: no-repeat, no-repeat;
background-size: 30%,  30%, cover;
background-color:;    
}

</style>


  
</head>

<body>

 
   <!--
   <div align="center"> 
   <img src="/photos/3.gif" height="100" width="120"> 
   </div> 
    -->
       <br>

     <div align="center"> 
       <font size="4" color="grey"> 
         <b> <i>
            Welcome to Tenebris <br>
          The conversations here are anonymous
           </i> </b>
         </font>
        </div>

  <div class="form" style="background-color:transparent;">
      
      <ul class="tab-group">
        <li class="tab "><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>
      


      <div class="tab-content">

        <div id="login">   

          <div align="center"> 
             <img src="images/enc_dec2.png" height="35" width="70">
         </div>
             
              <br>
          
          <form action="login.php" method="post">
          
            <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" name="user" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="pass" required autocomplete="off"/>
          </div>
          
          
          <button class="button button-block" name="submit_log"/>
             LOG IN <i class="fa fa-sign-in"></i>
         </button>

          </form>

        </div>




        <div id="signup">   

          <div align="center"> <img src="images/enc_dec2.png" height="35" width="70"> </div> <br>
          
          <form action="signup.php" method="post">
          
          <div class="field-wrap">
            <div class="field-wrap">
              <label>
                Username<span class="req">*</span>
              </label>
              <input type="text" name="user" required autocomplete="off" />
            </div>
        
          </div>


           <div class="field-wrap">
            <label>
              <span class="req"> Advanced Encryption Standard (Aes 256 CBC) </span>
            </label>
            <input type="text" name="_key" autocomplete="off" disabled/>
          </div>

          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required autocomplete="off"/>
          </div>
          
          <button type="submit"  name="submit_reg" class="button button-block"/> 
            <i class="fa fa-user-plus"></i> REGISTER 
          </button>
          
          </form>

        </div>
        
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->




  <script src='js/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
