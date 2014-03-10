<?php
require 'db.php';

if(isset($_GET['id']) and $_GET['povolit']='yes')
{ 
    $id=$_GET['id'];
    $dot=("SELECT * FROM uzivatele WHERE id='".$id."'") or die (mysql_error());
    $vys = MySQL_Query($dot);
    $row = mysql_fetch_array($vys);
    $aktivacni_kod = md5($row['id']).md5($row['jmeno']);
    $UpravData=mysql_query("UPDATE uzivatele 
                                SET  aktivacni_kod='$aktivacni_kod' WHERE id = '$id'") 
            or die (mysql_error()); 
echo "<a href='index.php?page=reg_formular&aktivacni_kod=$aktivacni_kod&id=$id'>registruj</a>";
            }
?>
