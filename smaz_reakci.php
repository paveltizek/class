<?php
require 'db.php';
$idr=$_GET['id'];
$idp1=$_GET['idp'];
if(isset($idr))
{
     
    $dotaz= "DELETE FROM reakce WHERE idr = '$idr'";
        $vys = mysql_query ($dotaz);
    
    if($vys)
    {
        
        header("location:index.php?page=prispevek&idp=$idp1&Alert=27");
    }
    else
        {
        header("location:index.php?page=prispevek&idp=$idp1&Alert=28");
        }
}
?>
