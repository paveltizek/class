<?php
ob_start();
require 'db.php';
$id=$_GET[id];
if(IsSet($_GET['id']) and $_GET['admin']=="yes") {
$UpravData=mysql_query("UPDATE uzivatele 
                            SET  admin=1 
                            WHERE id = '$id'") or die (mysql_error()); 
$dot=("SELECT * FROM uzivatele WHERE id='$id'") or die (mysql_error());
$vys = MySQL_Query($dot);
$row = mysql_fetch_array($vys);
$mail=$row['mail'];

$head = "MIME-Version: 1.0\r\n";
        $head .= "Content-Type: text/html; charset=\"utf-8\"\r\n";
        $head .= "Content-Transfer-Encoding: base64\r\n";
        $title = "Byly ti přiděleny admin práva!"; 
        $mess = 'Dostal(a) jsi administrátorské práva' ; 
        // $to - příjemce emailu 
//        $to === $mail; 
        // $from - odesílatel 
        $from='From:pavel@tizek.cz\n'; 
        // funkce, která odesíla email. 
        

  Mail($mail, $title, $mess, $from, $head);
header("location:index.php?Alert=14");
}
if(IsSet($_GET['id']) and $_GET['admin']=="no"){
$UpravData=mysql_query("UPDATE uzivatele 
                            SET  admin=0 
                            WHERE id = '$id'") or die (mysql_error()); 
$dot=("SELECT * FROM uzivatele WHERE id='$id'") or die (mysql_error());
$vys = MySQL_Query($dot);
$row = mysql_fetch_array($vys);
$mail=$row['mail'];

$head = "MIME-Version: 1.0\r\n";
        $head .= "Content-Type: text/html; charset=\"utf-8\"\r\n";
        $head .= "Content-Transfer-Encoding: base64\r\n";
        $title = "Byly ti odebrány admin práva!"; 
        $mess = 'Byly ti odebrány administrátorská práva' ; 
        // $to - příjemce emailu 
//        $to === $mail; 
        // $from - odesílatel 
        $from='From:pavel@tizek.cz\n'; 
        // funkce, která odesíla email. 
        

  Mail($mail, $title, $mess, $from, $head);
    header("location:index.php?page=admin_uzivatele&Alert=15");   
}
ob_flush();?>
