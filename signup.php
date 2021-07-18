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

 if (isset($_POST['submit_reg']))
   {
 
  require ('__ROOT__/config.php'); 
  require ('__ROOT__/functions.php');


  $obj = new security();


 $host = $obj->connect[0];
 $user = $obj->connect[1];
 $pass = $obj->connect[2];
 $db   = $obj->connect[3];

  
 $conn = new mysqli ($host,$user,$pass,$db);


 if ($conn->connect_error) 
    {
    die("Connect error " .$conn->connect_error);
     } 



   else
     {

  $obj_secure_data = new SECURE_INPUT_DATA;

  $user = $obj_secure_data->SECURE_DATA_ENTER($_POST['user']);
  $pass = $obj_secure_data->SECURE_DATA_ENTER(md5($_POST['pass']));
  $rev_pass = $obj_secure_data->SECURE_DATA_ENTER(md5(strrev($_POST['pass'])));
  $aes_type = "Advanced_Encryption_Standard_(Aes_256_CBC)";


 $sql1="SELECT user FROM login WHERE user = '$user'";

 $result1=$conn->query($sql1);


 $sql2="SELECT user FROM blacklist WHERE user = '$user'";

 $result2=$conn->query($sql2);

 


  if (($result1->num_rows)>0)
     {
    echo '<script type="text/javascript">alert("This name exists. Please choose an another name");
         </script>';
     echo ("<script>location.href='index.php'</script>");
       }
     
 
 else if (($result2->num_rows)>0)
      {
     echo '<script type="text/javascript">alert("This name exists. Please choose an another name");
         </script>';
     echo ("<script>location.href='index.php'</script>");
       }


   else
    {



    if ($pass == $rev_pass)
      {
      echo '<script type="text/javascript">alert("The password cannot be the same normal and reverse. Choose another password.");
         </script>';
       echo ("<script>location.href='index.php'</script>");
        }



     else
      {


   $sql3 = "INSERT INTO login (user,pass,rev_pass,aes_type) 
            VALUES ('$user','$pass','$rev_pass','$aes_type')";
   $result3=$conn->query($sql3);



if (($result3) === TRUE) 
      {

    echo '<script type="text/javascript">alert("Your registration has been successfully completed");
         </script>';
     echo ("<script>location.href='index.php'</script>");
      }


    else 
     {
      echo '<script type="text/javascript">alert("Something was error. please try again");
         </script>';
     echo ("<script>location.href='index.php'</script>");
     }


   } // end else of pass and rev pass

  
   } // end else of num rows
  

   }//  end of else connect
 

  $conn->close();
 

 } // end of isset submit





  else
   {
   header('Location:index.php');
    }
 


?>
