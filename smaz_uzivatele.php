<?php
require 'db.php';
$id=$_GET['id'];
if(isset($id))
    {
    $dotaz= "DELETE FROM uzivatele WHERE id = '$id'";
        $vys = mysql_query ($dotaz);
    }
    if($vys)
    {
        
        header("location:index.php?page=admin_uzivatele&Alert=17");
    }
    else
        {
        header("location:index.php?page=admin_uzivatele&Alert=18");
        }
?>
