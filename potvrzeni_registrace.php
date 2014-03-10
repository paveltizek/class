<?php

if(isset($_GET['aktivacni_kod']) and $_GET['povolit']=='yes')
    {
    $mail=$_GET['id'];
    $aktivacni_kod=md5($_POST['mail']);
    $jmeno=$_GET['jmeno'];
    
    $udeleno="http://dmp.tizek.cz/index.php?page=reg_formular&jmeno=$jmeno&id=$mail&aktivacni_kod=$aktivacni_kod&povolit=yes";

       $_headers  = 'MIME-Version: 1.0' . "\r\n";
                $_headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $_headers .= 'From: <pavel@tizek.cz>' . "\r\n";
        $title = "Byl ti umožněn přístup na class+!"; 
        
        
        
        $mess= 'Nyní se můžeš pomocí následujícího odkazu registrovat 
        Pokračovat: ' .$udeleno. 
        
        $from='From:pavel@tizek.cz\n'; 
        
        

  if(Mail($mail, $title, $mess, $from, $_headers)){
     header("location:index.php?&Alert=12");   
  } 
  else{
     header("location:index.php?page=zadost_registrace&Alert=0"); 
  }
    
}
    



?>