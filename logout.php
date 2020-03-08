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

    $user_pub_key = $_SESSION['pub_key'];
    $user_priv_key = $_SESSION['priv_key'];
    $user_used_key = $_SESSION['used_key'];
   
    $sql = "Delete from _keys where public_key = '$user_pub_key' 
            and private_key = '$user_priv_key' and used_key = '$user_used_key'";
    $result = $conn->query($sql);

 
    session_destroy();

    echo ("<script>location.href='index.php'</script>");

   }

$conn->close();   

?>
