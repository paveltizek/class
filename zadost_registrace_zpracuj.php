<?php

if(isset($_POST['mail']))
    {
    $mail=$_POST['mail'];
    $aktivacni_kod=md5($_POST['mail']);
    $jmeno=$_POST['jmeno'];
    $pridelit="http://dmp.tizek.cz/index.php?page=potvrzeni_registrace&jmeno=$jmeno&id=$mail&aktivacni_kod=$aktivacni_kod&povolit=yes";
    
    $odmitnout="http://dmp.tizek.cz/index.php?page=potvrzeni_registrace&jmeno=$jmeno&id=$mail&aktivacni_kod=$aktivacni_kod&povolit=no";

        $_headers  = 'MIME-Version: 1.0' . "\r\n";
        $_headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $_headers .= 'From: <admin@dmp.tizek.cz>' . "\r\n";
        $title = "Žádám si o přístup na clas+!"; 
        $mess= 'Uživatel '.$jmeno. '('.$mail.') požaduje přístup na web class+. 
        Povolit  přístup: ' .$pridelit. '
        Odmínout přístup: ' .$odmitnout;
       
        $to = 'pavel@tizek.cz'; 
        
        $from='From:pavel@localhost'; 
       
        
if(isset($_POST['sent']))
{
  if(Mail($to, $title, $mess, $from, $_headers)){
     header("location:index.php?&Alert=12");   
  } 
  else{
     header("location:index.php?page=zadost_registrace&Alert=0"); 
  }
    
}
    }



?>
