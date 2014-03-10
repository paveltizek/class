<?php
require 'db.php';
if(isset($_GET['id'])){
   $ids=$_GET['id'];
  $query1 = "SELECT * FROM soubory WHERE ids=$ids";
$result1 = mysql_query($query1)or die (mysql_error());      
$row1 = mysql_fetch_assoc($result1)or die (mysql_error());

    $cesta=$row1['cesta'];
    unlink ( 'soubory'/$cesta  );
    $dotaz= "DELETE FROM soubory WHERE ids = $ids";
        $vys = mysql_query ($dotaz);
        
       
        
        if($vys){
            header("location:index.php?page=admin_soubory&Alert=25");
            
        }
        else{
            header("location:index.php?page=admin_soubory&Alert=26");
        }}
        else{
            echo "Nebylo provedeno";
        }
?>
