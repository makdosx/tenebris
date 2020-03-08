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

    echo '<meta http-equiv="refresh" content="0">';

   }
 

?>
