<?php
require 'db.php';
$id=$_GET['id'];
if(isset($id))
{$query = "SELECT * FROM nahledy  WHERE id_o=$id";
$result = mysql_query($query)or die (mysql_error());      
$row = mysql_fetch_assoc($result)or die (mysql_error());

    $url_n=$row['url_n'];
   
  
unlink ( $url_n  );
// $ido=$_GET['id'];
    $query1 = "SELECT * FROM obrazky  WHERE ido=$id";
$result1 = mysql_query($query1)or die (mysql_error());      
$row1 = mysql_fetch_assoc($result1)or die (mysql_error());

    $url_o=$row1['url_o'];
    unlink ( $url_o  );
    $dotaz= "DELETE FROM nahledy WHERE id_o = '$id'";
        $vys = mysql_query ($dotaz);
        
         $dotaz1= "DELETE FROM obrazky WHERE ido = '$id'";
        $vys1 = mysql_query ($dotaz1);
        
        if(($vys) and ($vys1)){
            header("location:index.php?page=admin_obrazky&Alert=23");
            
        }
        else{
            header("location:index.php?page=admin_obrazky&Alert=24");
        }
   


}

?>
