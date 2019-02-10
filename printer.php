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

<html>
<head>

<title> Tenebris </title>
<meta charset="utf-8">
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>


.wrap
{
word-wrap: break-word;
}

.print
{
border-style:solid;
border-width:3px;
border-radius: 5px;
border-color:black;
height:60px;
width:180px;
background-color:#4f0817;
color:white;
}


.print:hover
{
border-style:solid;
border-width:3px;
border-radius: 5px;
border-color:black;
height:60px;
width:180px;
background-color:#3c0510;
color:white;
}


</style>

</head>

<body>


  <span class="contact100-form-title" style="text-align: center;">
     Tenebris <img src="images/enc_dec2.png" height="35" width="70">
   </span>

    <hr>


<?php


if (isset($_POST['submit_encrypted_text']))
    {

       require_once('__ROOT__/encrypt_decrypt_tools.php');


    if (class_exists('SECURE_INPUT_DATA_AVAILABLE'))
           {
  
              $obj_secure_data = new SECURE_INPUT_DATA;
            
              $print_encrypted_text =  $obj_secure_data->SECURE_DATA_ENTER($_POST['print_encrypted_text']);       
      

echo"<div align='center' id='print_text' class='wrap'>
        <font size='5'color='red'> Decrypted Text Output </font> 
         <br><br>
     $print_encrypted_text
      </div>";


   } // end of if class encrypt decrypt tools


 } // end of if isset submit encrypt text






if (isset($_POST['submit_decrypted_text']))
    {

       require_once('__ROOT__/encrypt_decrypt_tools.php');


    if (class_exists('SECURE_INPUT_DATA_AVAILABLE'))
           {
  
              $obj_secure_data = new SECURE_INPUT_DATA;
            
              $print_decrypted_text =  $obj_secure_data->SECURE_DATA_ENTER($_POST['print_decrypted_text']);       
      

echo"<div align='center' id='print_text' class='wrap'>
        <font size='5'color='red'> Decrypted Text Output </font> 
          <br><br>
     $print_decrypted_text
      </div>";


   } // end of if class encrypt decrypt tools


 } // end of if isset submit decrypt text





?>


<br>

  <div align="center">
   <button class='print' onClick="window.print()"> 
    Print Text Output <i class="fa fa-print"></i>
   </button>
  </div>



</body>
</html>
