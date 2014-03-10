<?php

if(isset($_GET['Alert'])){
    require "error_msg.php"; 
    $Alert=$_GET['Alert'];

    echo "<p class=alert>";       
    echo  $Rvi[$Alert];
    echo "</p>";

    
}
if (IsSet($_GET['page'])){        // kdy� bude page
    $soubor=$_GET['page'];
    $soubor2= dirname($_SERVER['SCRIPT_FILENAME'])."/".$soubor.".php";
    if(file_exists($soubor2)){      //na�t�n� soubor
        include $soubor2;
    }else{                //kdy� se seknu, tam 404
        include "error404.php";
    }
}else{                  // kdy� nebude page, bude obsah
    include "obsah.php";
    
}



?>