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

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);


 if (isset($_POST['submit_log']))
  {

  require ('__ROOT__/config.php'); 
  require ('__ROOT__/functions.php');


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


  $obj_secure_data = new SECURE_INPUT_DATA;

  $user = $obj_secure_data->SECURE_DATA_ENTER($_POST['user']);
  $pass = $obj_secure_data->SECURE_DATA_ENTER(md5($_POST['pass']));
  $aes_type = "Advanced_Encryption_Standard_(Aes_256_CBC)";
 

  $sql = "select user,pass,aes_type from login where binary user = '$user' 
          AND pass = '$pass' AND aes_type = '$aes_type' ";
  $result=$conn->query($sql);

  $sql2 = "SELECT private_key, public_key FROM _keys ORDER BY RAND() LIMIT 1";
  $result2 = $conn->query($sql2);

   while ($row2 = $result2->fetch_assoc())
         {
          $priv_key = $row2['private_key'];
          $pub_key = $row2['public_key'];
          $used_key = $pub_key.$priv_key;
          }


  $sql3 = "UPDATE _keys SET used_key = '$used_key' 
           WHERE public_key = '$pub_key' AND private_key = '$priv_key' ";
  $result3 = $conn->query($sql3);


  if (($result->num_rows)>0)
       {

       $_SESSION['login'] = $user;
       $_SESSION['priv_key'] = $priv_key;
       $_SESSION['pub_key'] = $pub_key;
       $_SESSION['used_key'] = $used_key; 
    
    echo ("<script>location.href='teneb.php'</script>");

    }
 

 else 
  {
  echo ("<script>location.href='index.php'</script>");
  }



  }// end of else connect


 $conn->close(); 
 
 
 } // end of isset submit


?>
