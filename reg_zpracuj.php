<?php
ob_start();              
  if(isset($_POST['sent'])){      
    $jmeno=  strtolower(trim($_POST['jmeno']));
    $heslo1=  strtolower($_POST['heslo']);
    $heslo2=  strtolower($_POST['heslo_znovu']);
    $mail=trim($_POST['mail']);
    $aktivacni_kod=$_POST['aktivacni_kod'];
      $backlink="index.php?page=registrace";
   
       if($jmeno=="" or $heslo1=="" or $mail==""){ // pokud nebylo vyplněno něco z toho, co je povinné, dáme vědět a skript ukončíme
      echo "Nebyly vyplněny všechny povinné údaje!";
      
      }else{             
      require "db.php";     
      $PocetStejnych=mysql_result(mysql_query("SELECT COUNT(*) FROM `uzivatele` WHERE `jmeno`='$jmeno' OR `mail`='$mail'"), 0);
	  if($PocetStejnych!=0){    
        $backlink="index.php?page=registrace&Alert=2";
      }elseif($heslo1 != $heslo2){    
        $backlink="index.php?page=registrace&Alert=3";
      }else{            
          $heslo=md5($heslo1);  
        
        $registruj=mysql_query("INSERT INTO uzivatele (jmeno,heslo,mail,cas_reg,aktivacni_kod) VALUES ('$jmeno', '$heslo', '$mail', now(), '$aktivacni_kod')") or die (mysql_error());
        
     
		   
        $backlink="index.php?Alert=4"; }
      }
    
    
  }else{
      echo 'nasrrat';
//    $backlink="index.php?page=registrace";
  }

 header ("Location: $backlink");
ob_end_flush();

?>
