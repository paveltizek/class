<?php

session_start();
  if(isset($_POST['sent'])){      
    $prispevek=($_POST['prispevek']);
   require "db.php"; 
   /* $VlozData=mysql_query("INSERT INTO prispevky (komentar, cas_p) VALUES ('$prispevek', now()") or die (mysql_error()); */
   
  
   $VlozData=mysql_query("INSERT INTO prispevky (idu, komentar, cas_p) VALUES (\"".$_SESSION['id']."\", '$prispevek', now())") or die (mysql_error());   
     header ("location: index.php?page=prispevky&Alert=12");
    }
  else{
  exit();
  }
    
   

?>
