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

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

 session_start();

 if (!isset($_SESSION['login']))
    {
      header("Location: index.php");
      }


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


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>

.print
{
border-style:solid;
border-width:3px;
border-radius: 5px;
border-color:black;
height:50px;
width:250px;
background-color:#4f0817;
color:white;
}


.print:hover
{
border-style:solid;
border-width:3px;
border-radius: 5px;
border-color:black;
height:50px;
width:250px;
background-color:#3c0510;
color:white;
}



.print2
{
border-style:solid;
border-width:3px;
border-radius: 5px;
border-color:black;
height:40px;
width:250px;
background-color:#4f0817;
color:white;
}


.print2:hover
{
border-style:solid;
border-width:3px;
border-radius: 5px;
border-color:black;
height:40px;
width:250px;
background-color:#3c0510;
color:white;
}


body
{
background-color:;    
}


</style>

<!-- PopAds.net Popunder Code for www.openloadlinks.com -->
<script type="text/javascript" data-cfasync="false">
/*<![CDATA[/* */
  var _pop = _pop || [];
  _pop.push(['siteId', 3027835]);
  _pop.push(['minBid', 0]);
  _pop.push(['popundersPerIP', 0]);
  _pop.push(['delayBetween', 0]);
  _pop.push(['default', false]);
  _pop.push(['defaultPerDay', 0]);
  _pop.push(['topmostLayer', false]);
  (function() {
    var pa = document.createElement('script'); pa.type = 'text/javascript'; pa.async = true;
    var s = document.getElementsByTagName('script')[0]; 
    pa.src = '//c1.popads.net/pop.js';
    pa.onerror = function() {
      var sa = document.createElement('script'); sa.type = 'text/javascript'; sa.async = true;
      sa.src = '//c2.popads.net/pop.js';
      s.parentNode.insertBefore(sa, s);
    };
    s.parentNode.insertBefore(pa, s);
  })();
/*]]>/* */
</script>
<!-- PopAds.net Popunder Code End -->



<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>


<style>
.button
{
height: 25px;    
width: 100px;
}
</style>



<script>
function YNconfirm() { 
 if (window.confirm('Are you sure you want to disconnect? \nIn this case all your public and  private keys delete. \nPossible conversations that are encrypted with these keys will be lost.'))
 {
   alert("You agree") 
   window.location.href = 'logout.php';
 }
}
</script>



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
                            

<?php

  require ('__ROOT__/config.php'); 

  $obj = new security();


 $host = $obj->connect[0];
 $user = $obj->connect[1];
 $pass = $obj->connect[2];
 $db   = $obj->connect[3];

$conn = mysqli_connect($host,$user,$pass,$db);

  if($conn->connect_error)
   {
    die ("Cannot connect to server " .$conn->connect_error);
    }


  else
    {
 
    $user_log = $_SESSION['login'];

    $user_priv_key = $_SESSION['priv_key'];
    
    $user_pub_key = $_SESSION['pub_key'];

    $user_used_key = $_SESSION['used_key'];

    $priv_key = $user_priv_key;
    $pub_key = $user_pub_key;
     

    $sql = "select user from login order by user asc";
    $result = $conn->query($sql);

    
       echo"
	<div class='container-contact100'>
		<div class='contact100-map'> 

               
                  <div style='width:80%; text-align:center; background-color:#a27151;'>
                     <font size='5'> 
                        Welcome <b> $user_log </b> 
                      </font>
                   </div>

                <img src='images/ten2.jpeg' height='84%' width='80%'>
             </div>

		<div class='wrap-contact100'>
	      <form class='contact100-form validate-form' autocomplete='off' action='#tenebris' method='post'>
                                <a href=''>
				<span class='contact100-form-title'>
				 Tenebris
                                 <img src='images/enc_dec2.png' height='35' width='70'> 
				</span>
                                </a>

                                 <a href='logout.php' onclick='YNconfirm(); return false;'>
                                  <font size='5'>
                                    Logout
                                  </font> 
                                 </a>

                        <font size='5'> <a href='lang.php'> SELECT LANGUAGE </a> </font>
                            
          
		<div class='wrap-input100 validate-input' data-validate='Name is required'>
                      
                       <span class='label-input100'> <font color='red'> Secret Cryptography </font> </span>
                       <i class='fa fa-lock'></i> &nbsp; <br>

                     <a href='teneb.php'>  
                      <span class='label-input100'> Cryptography </span>
                      <i class='fa fa-microchip'></i> 
                     </a>
                       <br>
                   
                        <a href='emergency_mode.php'>
                        <span class='label-input100'> Emergency Mode </span>
                      <i class='fa fa-exclamation-triangle'></i> 
                      </a> 
      
                      <br>
  
                     
                 <a href='rand_keys.php'>  
                      <span class='label-input100'> Public Keys And Private Keys </span>
                      <i class='fa fa-random'></i> 
                     </a> <br>

		   <input class='input100' type='text' name='name' 
                           value='Secret Cryptography (Aes 256 CBC)' readonly>
		    <span class='focus-input100'></span>

	         </div>";

  
               echo"
         <div class='wrap-input100 validate-input' data-validate = 'This field is required'>
	    <span class='label-input100'> Select User </span>
                      <i class='fa fa-user'></i>
		<select class='input100' name='user_key'>";
 
                 while($row=$result->fetch_assoc())
                     {
     
                  echo "<option value='{$row['user']}'>";

                     if ($row['user'] == $user_log)
                         {
                          $row['user'] = 'My Account';
                          }
                      else
                        {
                        $row['user'];
                          }

                      echo $row['user'];

                  echo "</option>";
     
                 }

                 echo"</select>  
                 <span class='focus-input100'></span>
                 </div>";
 
       
              

            echo "<div class='wrap-input100' data-validate = 'This field is required'>
     	<span class='label-input100'> Decrypt Key (Decrypt) </span>
                   <i class='fa fa-key'></i>
     		  <input class='input100' type='text' name='dec_key'>
     		<span class='focus-input100'></span>
        	</div>";


             echo"<div class='wrap-input100 validate-input' data-validate = 'This field is required'>
					<span class='label-input100'> Message </span>
                                         <i class='fa fa-comment'></i>
	          <textarea class='input100' name='message' placeholder='Message / World'></textarea>
					<span class='focus-input100'></span>
				</div>



	              <div class='wrap-input100'>

     		       <div class='wrap-contact100-form-btn'>
			  <div class='contact100-form-bgbtn'></div>
		           <button type='submit' name='encrypt' class='contact100-form-btn'>
                             Encrypt &nbsp;
                           <i class='fa fa-lock'></i>
                           </button>
                          </div>

                          &nbsp; &nbsp;

                     <div class='wrap-contact100-form-btn'>
			  <div class='contact100-form-bgbtn'></div>
                          <button type='submit' name='decrypt' class='contact100-form-btn'>
                             Decrypt &nbsp;
                           <i class='fa fa-unlock'></i>
                           </button>

                         </div>
	     	      </div>
		      
			</form>


		</div>
	</div>";

  
 } // end of else connect

$conn->close();

 ?>


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



</body>
</html>






<?php

/*
	include_once "__ROOT__/config.php";
    include_once "__ROOT__/functions.php";

	$database = new Database();
	$db = $database->getConnection();

if (array_key_exists('HTTP_ORIGIN', $_SERVER)) {
    $origin = $_SERVER['HTTP_ORIGIN'];
} else if (array_key_exists('HTTP_REFERER', $_SERVER)) {
    $origin = $_SERVER['HTTP_REFERER'];
} else {
    $origin = $_SERVER['REMOTE_ADDR'];
}
$ip=getRealUserIp();
$xml = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$ip);
$country=$xml->geoplugin_countryName;
$country_code=$xml->geoplugin_countryCode;
$url="http://".$_SERVER['HTTP_HOST'];
$header="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (!isset($_COOKIE["type"]) || $_COOKIE["type"]!=="administrator") {
    if ($ip!=="127.0.0.1" && $ip!=="::1"){
        $sql="INSERT INTO visitors (IP, country, country_code, page, origin) VALUES ('{$ip}', '{$country}', '{$country_code}', '{$header}', '{$origin}')";
        $stmt = $db->prepare($sql);
        $stmt->execute();
    }
}

*/


//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

  if (isset($_POST['encrypt']))
    {

    require_once('__ROOT__/encrypt_decrypt_tools.php');
    require_once('__ROOT__/functions.php');


  if (class_exists('SECURE_INPUT_DATA_AVAILABLE'))
         {
  
          $obj_secure_data = new SECURE_INPUT_DATA;
               
          //$_from   =  $_SESSION['login'];
         // $_to     =  $obj_secure_data->SECURE_DATA_ENTER($_POST['user']);
          $key     =  $pub_key.$priv_key.$obj_secure_data->SECURE_DATA_ENTER($_POST['user_key']);
          $message =  $obj_secure_data->SECURE_DATA_ENTER($_POST['message']);
        
      

  if (class_exists('ENCRYPT_DECRYPT_AES_256_CBC_TOOLS')) 
      {

    $obj_encrypt_aes_type = new ENCRYPT_DECRYPT_AES_256_CBC_TOOLS;

    $ENCRYPT_AES_TYPE = $obj_encrypt_aes_type->ENCRYPT_DECRYPT_AES_TYPE[0];

    $text_to_encrypt = $message;

    $private_key     = $key;



   echo "<p align='center'> <font size='4'> Your key is: &nbsp; <font color='blue'> $pub_key$priv_key </font> </font> </p>";


   $encrypted_text  = openssl_encrypt($text_to_encrypt,"$ENCRYPT_AES_TYPE",$private_key);


echo "<div align='center' id='tenebris'>
         <i class='fa fa-file'></i>
       <font size='5'color='red'> Encrypted Text Output </font> 
         <i class='fa fa-file'></i>
             <br>
          <button onclick='myFunction()' class='print2'> 
                Copy Encrypted Text &nbsp;
              <i class='fa fa-clipboard'></i>
            </button>
         <hr>
       <textarea rows='10' cols='40' id='myInput' readonly>$encrypted_text</textarea>
        <form method='post' action='printer.php' target='_blank'>
         <input type='hidden' name='print_encrypted_text' value='$encrypted_text'>
         <button type='submit' name='submit_encrypted_text' class='print'>
           Go To Print text &nbsp;
           <i class='fa fa-arrow-right'></i>
        </button>
      </form>
     </div>";




  } // end of secure data  

  } // end class exists encrypt decrypt tools

 } // end if isset encrypt






if (isset($_POST['decrypt']))
    {

   
     if ($_POST['user_key'] == $user_log)
          {
  

       require_once('__ROOT__/encrypt_decrypt_tools.php');
       require_once('__ROOT__/functions.php');

        $conn = mysqli_connect($host,$user,$pass,$db);
  
       $sql_dec = "select used_key from _keys
                   where used_key = '{$_POST['dec_key']}' ";   
       $result_dec = $conn->query($sql_dec); 

           while($row_dec = $result_dec->fetch_assoc())
              {
               $used_key_dec = $row_dec['used_key'];
               }  

     if($used_key_dec == $_POST['dec_key'])
      {

  
      if (class_exists('SECURE_INPUT_DATA_AVAILABLE'))
           {
  
              $obj_secure_data = new SECURE_INPUT_DATA;

             // $_from   =  $obj_secure_data->SECURE_DATA_ENTER($_POST['user']); 
             // $_to     =  $_SESSION['login'];
              $key     =  $obj_secure_data->SECURE_DATA_ENTER($_POST['dec_key']);       
              $message =  $obj_secure_data->SECURE_DATA_ENTER($_POST['message']);


   if (class_exists('ENCRYPT_DECRYPT_AES_256_CBC_TOOLS')) 
       {

    $obj_encrypt_aes_type = new ENCRYPT_DECRYPT_AES_256_CBC_TOOLS;

    $DECRYPT_AES_TYPE = $obj_encrypt_aes_type->ENCRYPT_DECRYPT_AES_TYPE[0];


    $text_to_decrypt = $message;

    $private_key     = $key;


    $decrypted_text  = openssl_decrypt($text_to_decrypt,"$DECRYPT_AES_TYPE",$private_key);


echo "<div align='center' id='tenebris'>
       <font size='5'color='red'> Decrypted Text Output </font> 
          <br>
          <button onclick='myFunction()' class='print2'> 
                Copy Decrypted Text &nbsp;
              <i class='fa fa-clipboard'></i>
            </button>
         <hr>
       <textarea rows='5' cols='40' id='myInput' readonly>$decrypted_text</textarea>
        <form method='post' action='printer.php' target='_blank'>
         <input type='hidden' name='print_decrypted_text' value='$decrypted_text'> 
         <button type='submit' name='submit_decrypted_text' class='print'> 
           Go To Print text &nbsp;
           <i class='fa fa-arrow-right'></i>
         </button>
       </form>
      </div>";

   } // end of secure data  

   } // end class exists encrypt decrypt tools

   } // end of exists public_key and private_key

   } // end if user key

 } // end if isset decrypt




?>
