<?php

 $pridelit='<a href=index.php?page=pridej_admina&id=&admin=yes>Přidělit</a>';
        $head = "MIME-Version: 1.0\r\n";
        $head .= "Content-Type: text/html; charset=\"utf-8\"\r\n";
        $head .= "Content-Transfer-Encoding: base64\r\n";
        $title = "Žádám si o admin práva!"; 
        $mess = 'Uživatel  si žádá o admin práva' ; 
        // $to - příjemce emailu 
        $to = 'pavel@tizek.cz'; 
        // $from - odesílatel 
        $from='From: pavel@localhost\r\n'; 
        // funkce, která odesíla email. 
        

  if(Mail($to, $title, $mess, $from, $head)){echo "nasrat";}
  echo "asf";
?>
