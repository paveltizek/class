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
        
        $_message = "<div style=\"font-size:11pt; font-family:Times New Roman; color:black; padding:5px;\"><div>Dobrý den,</div>";
                $_message .= "<div style=\"text-indent:10px;\">děkuji Vám za registraci na portálu koding.cz. Pro aktivaci vašeho účtu klikněte na odkaz: http://localhost/registration/activation.php?login=".$id."&amp;</div>";
                $_message .= "<div style=\"margin:10px 0;\">Vaše uživatelské jméno: ".$jmeno."</div>";
                $_message .= "<div>S pozdravem, administrace koding.cz</div>";
        
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
  if(Mail($to, '=?UTF-8?B?'.base64_encode($title).'?=', $_message, $from, $_headers)){
     header("location:index.php?page=edit_user&Alert=16");   
  } 
  else{
     header("location:index.php?page=edit_user&Alert=1"); 
  }
    
}
?>




<!--'Uživatel '.$jmeno.' ('.$mail.') si žádá o admin práva'.$pridelit.''-->