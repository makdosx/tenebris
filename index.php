<?php

/*
 * Copyright (c) 2019 Barchampas Gerasimos <makindosx@gmail.com>
 * Tenebris is an encryption and decryption program to reach secure conversations.
 *
 * Tenebris is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 *
 * Tenebris is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

error_reporting(0);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title> Tenebris </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/icon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->



<style>

#output
{

}
</style>



</head>
<body>


	<div class="container-contact100">
		<div class="contact100-map"> 
             <img src="images/enc_dec1.png" height="80%" width="100%">
             </div>

		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="#tenebris" method="post">
				<span class="contact100-form-title">
				   Tenebris
				</span>


       
		<div class="wrap-input100 validate-input" data-validate="Name is required">
		  <span class="label-input100"> Cryptography </span>
                   <i class="fa fa-microchip"></i>
		   <input class="input100" type="text" name="name" 
                           value="Advanced Encryption Standard (Aes 256 CBC)" readonly>
		    <span class="focus-input100"></span>
	         </div>
       
				<div class="wrap-input100 validate-input" data-validate = "This field is required">
					<span class="label-input100"> Key </span>
                                        <i class="fa fa-key"></i>
					<input class="input100" type="text" name="key" placeholder="Private Key">
					<span class="focus-input100"></span>
				</div>


		<div class="wrap-input100 validate-input" data-validate = "This field is required">
					<span class="label-input100"> Message </span>
                                         <i class="fa fa-comment"></i>
			<textarea class="input100" name="message" placeholder="Message / World"></textarea>
					<span class="focus-input100"></span>
				</div>



	              <div class="container-contact100-form-btn">

     		       <div class="wrap-contact100-form-btn">
			  <div class="contact100-form-bgbtn"></div>
		           <button type="submit" name="encrypt" class="contact100-form-btn">
                             Encrypt &nbsp;
                           <i class="fa fa-lock"></i>
                           </button>
                          </div>

                          &nbsp; &nbsp; &nbsp; &nbsp;

                     <div class="wrap-contact100-form-btn">
			  <div class="contact100-form-bgbtn"></div>
                          <button type="submit" name="decrypt" class="contact100-form-btn">
                             Decrypt &nbsp;
                           <i class="fa fa-unlock"></i>
                           </button>

                         </div>
	     	      </div>
		      
			</form>


		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</body>
</html>






<?php


  if (isset($_POST['encrypt']))
    {

    require_once('__ROOT__/encrypt_decrypt_tools.php');


    if (class_exists('SECURE_INPUT_DATA_AVAILABLE'))
           {
  
              $obj_secure_data = new SECURE_INPUT_DATA;
            
              $message =  $obj_secure_data->SECURE_DATA_ENTER($_POST['message']);
              $key     =  $obj_secure_data->SECURE_DATA_ENTER($_POST['key']);
        
      

     if (class_exists('ENCRYPT_DECRYPT_AES_256_CBC_TOOLS')) 
      {

    $obj_encrypt_aes_type = new ENCRYPT_DECRYPT_AES_256_CBC_TOOLS;

    $ENCRYPT_AES_TYPE = $obj_encrypt_aes_type->ENCRYPT_DECRYPT_AES_TYPE[0];

$text_to_encrypt = $message;
$private_key     = $key;

$encrypted_text  = openssl_encrypt($text_to_encrypt,"$ENCRYPT_AES_TYPE",$private_key );



echo "<div align='center' id='tenebris'>
         <i class='fa fa-file'></i>
       <font size='5'color='red'> Encrypted Text Output </font> 
         <i class='fa fa-file'></i>
         <hr>
       <textarea rows='5' cols='50' name='after_form' readonly>$encrypted_text</textarea>
      </div>";


  } // end of secure data  

  } // end class exists encrypt decrypt tools

 } // end if isset encrypt




if (isset($_POST['decrypt']))
    {

       require_once('__ROOT__/encrypt_decrypt_tools.php');


    if (class_exists('SECURE_INPUT_DATA_AVAILABLE'))
           {
  
              $obj_secure_data = new SECURE_INPUT_DATA;
            
              $message =  $obj_secure_data->SECURE_DATA_ENTER($_POST['message']);
              $key     =  $obj_secure_data->SECURE_DATA_ENTER($_POST['key']);       
      

     if (class_exists('ENCRYPT_DECRYPT_AES_256_CBC_TOOLS')) 
      {

    $obj_encrypt_aes_type = new ENCRYPT_DECRYPT_AES_256_CBC_TOOLS;

    $DECRYPT_AES_TYPE = $obj_encrypt_aes_type->ENCRYPT_DECRYPT_AES_TYPE[0];


$text_to_decrypt = $message;
$private_key     = $key;

$decrypted_text  = openssl_decrypt($text_to_decrypt,"$DECRYPT_AES_TYPE",$private_key);



echo "<div align='center' id='tenebris'>
       <font size='5'color='red'> Decrypted Text Output </font> 
         <hr>
       <textarea rows='5' cols='50' name='after_form' readonly>$decrypted_text</textarea>
      </div>";

   } // end of secure data  

   } // end class exists encrypt decrypt tools

 } // end if isset decrypt




?>

