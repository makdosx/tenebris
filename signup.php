<?php
 
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
  $aes_type = "Advanced_Encryption_Standard_(Aes_256_CBC)";


 $sql1="SELECT * FROM login WHERE user = '$user'";

 $result1=$conn->query($sql1);

 


  if (($result1->num_rows)>0)
     {
    echo '<script type="text/javascript">alert("This name exists. Please choose an another name");
         </script>';
     echo ("<script>location.href='index.php'</script>");
       }


   else
    {


   $sql3 = "INSERT INTO login (user,pass,aes_type) VALUES ('$user','$pass','$aes_type')";
   $result3=$conn->query($sql3);



if (($result3) === TRUE) 
      {

     $sql4="INSERT INTO backup_login (user,pass,$aes_type) VALUES ('$user','$pass','$aes_type')";
     $result4=$conn->query($sql4);
     

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


   } // end of else sign up
  

   }//  end of else connect
 

  $conn->close();
 

 } // end of isset submit





  else
   {
   header('Location:index.php');
    }
 


?>
