<?php
ob_start();
session_start(); 
if(isset($_POST['jmeno'])){
  require 'db.php';
  $name = strtolower($_POST['jmeno']);
  $pass = md5($_POST['heslo']);
    $query = mysql_query("SELECT * FROM `uzivatele` WHERE `jmeno` = '$name' and `heslo` = '$pass'") or die (mysql_error());
    
      $Vysledek = mysql_fetch_array($query);
        if($Vysledek['jmeno']){ 
          $_SESSION['prihlasen'] = 1;
          $_SESSION['login'] = $Vysledek['jmeno'];
          $_SESSION['id'] = $Vysledek['id'];
          if($Vysledek['admin'] == 1){
              
              $_SESSION['prava'] = 'admin';
              }
              else {
                 $_SESSION['prava'] = 'uzivatel';
              }
          
          $bl="index.php?Alert=7";
          header("location: $bl"); 
     
          exit;
        }else{
          $bl="index.php?page=login&Alert=6";
          header("location: $bl"); 
          exit;
          
        }
    mysql_free_result($query);
}else{
  echo "Zde nic není.";
}
ob_end_flush();
?>