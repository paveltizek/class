<?php


session_start();
  if(isset($_POST['sent'])){      
    $datum_konani=($_POST['datum_konani']);
    $cas_konani=($_POST['cas_konani']);
    $popis=($_POST['popis']);
    $misto_konani=($_POST['misto_konani']);
    $pov=($_POST['pov_nepov']);
    $sko=($_POST['sko_mis']);
    $nazev_akce=($_POST['nazev_akce']);
    
   require "db.php"; 
   
   
   $uploader=$_SESSION['id'];
   $VlozData=mysql_query("INSERT INTO aktivity 
    (id_u, nazev_akce, cas_vytvoreni, datum_konani, cas_konani, popis, misto_konani, pov_nepov, sko_mis) 
    VALUES ('$uploader', '$nazev_akce', now(), '$datum_konani', '$cas_konani', '$popis', '$misto_konani', '$pov', '$sko')") or die (mysql_error());   
     header ("location: index.php?page=aktivity");
    }
  else {
  exit();
  }

?>
