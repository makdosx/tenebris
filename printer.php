<?php

/*
*  Copyright (c) 2019-2021 Barchampas Gerasimos <makindosxx@gmail.com>.
*  Tenebris is an encryption and decryption program to reach secure conversations.
*
*  Tenebris program is free software: you can redistribute it and/or modify
*  it under the terms of the GNU Affero General Public License as published by
*  the Free Software Foundation, either version 3 of the License, or
*  (at your option) any later version.
*
*  Tenebris  is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU Affero General Public License for more details.
*   
*  You should have received a copy of the GNU Affero General Public License, version 3,
*  along with this program.  If not, see <http://www.gnu.org/licenses/>
*
*/


error_reporting(0);

 session_start();

 if (!isset($_SESSION['login']))
    {
      header("Location: index.php");
      }


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



<style type="text/css">
<!--
a.gflag {vertical-align:middle;font-size:32px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/32.png);}
a.gflag img {border:0;}
a.gflag:hover {background-image:url(//gtranslate.net/flags/32a.png);}
#goog-gt-tt {display:none !important;}
.goog-te-banner-frame {display:none !important;}
.goog-te-menu-value:hover {text-decoration:none !important;}
body {top:0 !important;}
#google_translate_element2 {display:none!important;}
-->
</style>

<div id="google_translate_element2"></div>
<script type="text/javascript">
function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


<script type="text/javascript">
/* <![CDATA[ */
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
/* ]]> */
</script>


  <span class="contact100-form-title" style="text-align: center;">
     Tenebris <img src="images/enc_dec2.png" height="35" width="70">
   </span>

    <hr>


<?php


if (isset($_POST['submit_encrypted_text']))
    {

       require_once('__ROOT__/encrypt_decrypt_tools.php');
       require_once('__ROOT__/functions.php');


    if (class_exists('SECURE_INPUT_DATA_AVAILABLE'))
           {
  
              $obj_secure_data = new SECURE_INPUT_DATA;
            
              $print_encrypted_text =  $obj_secure_data->SECURE_DATA_ENTER($_POST['print_encrypted_text']);       
      

echo"<div align='center' id='print_text' class='wrap'>
        <font size='5'color='red'> Encrypted Text Output </font> 
         <br><br>
     $print_encrypted_text
      </div>";


   } // end of if class encrypt decrypt tools


 } // end of if isset submit encrypt text






if (isset($_POST['submit_decrypted_text']))
    {

       require_once('__ROOT__/encrypt_decrypt_tools.php');
       require_once('__ROOT__/functions.php');


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
