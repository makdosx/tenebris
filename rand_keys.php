<?php

/*
*  Copyright (c) 2019-2020 Barchampas Gerasimos <makindosxx@gmail.com>.
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

 session_start();

 if (!isset($_SESSION['login']))
    {
      header("Location: index.php");
      }


?>

<html>
<head>

<title> Tenebris </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/icon.png"/>


<style>


body
{
background-color:;
}

.centered 
{
position: fixed;
top: 10%;
left: 40%;
margin-top: -50px;
margin-left: -100px;
font-size: 20px;
}

</style>


</head>


<body>

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

     $private_key = substr(str_shuffle(str_repeat("0123456789", 16)), 0, 16);
     $public_key = substr(str_shuffle(str_repeat("0123456789ABCDEF", 32)), 0, 32);
  

    $sql = "insert into _keys (private_key,public_key) values('$private_key','$public_key')";
    $result=$conn->query($sql);

    echo "<div class='centered'> 
           <h1 align='center'> Tenebris Random Keys </h1>
            <h2 align='center'> <a href='teneb_secr.php'> Stop Generate Keys </a> </h2>
           <img src='images/enc_dec1.png' height='300' width='500'> <br><br>
           Public Key: $public_key <br> Private Key $private_key <br><br>
           <font color='green'> <b> Create News keys after 30 Seconds </b> </font>
          </div>";

    echo '<meta http-equiv="refresh" content="30">';


   }
 

?>



</body>
</html>
