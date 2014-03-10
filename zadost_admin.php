<?php
session_start();
require "db.php";
$user=$_SESSION['id'];

//echo $user;

$dot=("SELECT * FROM uzivatele WHERE id='".$user."'") or die (mysql_error());
$vys = MySQL_Query($dot);
$row = mysql_fetch_array($vys);
        
        $jmeno=$row["jmeno"];
        $id=$row["id"];
        $mail=$row["mail"]; 
        
        $pridelit="http://dp2.tizek.cz/index.php?page=pridej_admina&id=$id&admin=yes";
        $odmitnout="http://dp2.tizek.cz/index.php?page=pridej_admina&id=$id&admin=no";
//        $head = "MIME-Version: 1.0\r\n";
       $_headers  = 'MIME-Version: 1.0' . "\r\n";
                $_headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $_headers .= 'From: <info@koding.cz>' . "\r\n";
        $title = "Žádám si o admin práva!"; 
        
        
        
        $mess= 'Uživatel ' .$jmeno. '('.$mail.') požaduje administrátorská práva na webu class+. 
                Přidělit administrátorská práva: ' .$pridelit. '
                Odmínout: ' .$odmitnout;
        // $to - příjemce emailu 
        $to = 'pavel@tizek.cz'; 
        // $from - odesílatel 
        $from='From:pavel@localhost\n'; 
        // funkce, která odesíla email. 
        
if(isset($_POST['zadost']))
{
  if(Mail($to, $title, $mess, $from, $_headers)){
     header("location:index.php?page=edit_user&Alert=16");   
  } 
  else{
     header("location:index.php?page=edit_user&Alert=1"); 
  }
    
}
?>




<!--'Uživatel '.$jmeno.' ('.$mail.') si žádá o admin práva'.$pridelit.''-->