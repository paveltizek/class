<?php
require 'db.php';
$id=$_GET['id'];
if(isset($id))
    {
    $dotaz= "DELETE FROM aktivity WHERE id_a = '$id'";
        $vys = mysql_query ($dotaz);
    }
    if($vys)
    {
        
        header("location:index.php?page=admin_aktivity&Alert=21");
    }
    else
        {
        header("location:index.php?page=admin_aktivity&Alert=22");
        }
?>