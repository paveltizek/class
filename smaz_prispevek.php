<?php
require 'db.php';
$id=$_GET['id'];
$page=$_GET['page'];
if(isset($id))
    {
    $dotaz= "DELETE FROM prispevky WHERE id_p = '$id'";
        $vys = mysql_query ($dotaz);
    }
    if($vys)
    {
        
        header("location:index.php?page=prispevky&Alert=19");
    }
    else
        {
        header("location:index.php?page=prispevky&Alert=20");
        }
?>
