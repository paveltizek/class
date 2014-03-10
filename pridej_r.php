<?php
session_start();

  if(isset($_POST['sent'])){      
    $reakce=($_POST['reakce']);
    $idp=$_POST['idp'];
    $idu=$_SESSION['id'];
   require "db.php"; 
   
  
   $VlozData=mysql_query("INSERT INTO reakce (idu, idp, reakce, cas_r) VALUES (\"".$_SESSION['id']."\", '$idp', '$reakce', now())") or die (mysql_error());   
     header ("location: index.php?page=prispevek&idp=$idp&idu=$idu&Alert=12");
    }
  else{
  exit();
  }
    
   

?>
