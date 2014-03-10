<?php

if(!isset($_SESSION['prihlasen']) and @$_SESSION['prihlasen']!=1  ){
	echo "<h1>Tato stránka je jen pro registrované</h1>";
	exit();
}
if(@$_SESSION['prava']!='admin')
{
    echo "<h1>Tato stránka je jen pro administrátory</h1>";
	exit();
}


require 'db.php';
    
        $dot = ("SELECT * FROM uzivatele ORDER BY jmeno asc ") or die (mysql_error());
        $vys = MySQL_Query($dot);
        
        
        
        
       
        
        while ($row = mysql_fetch_array($vys)or die (mysql_error())){
            
            
            $jmeno=$row["jmeno"];
            $mail=$row["mail"];
            $id=$row['id'];
            $admin=$row['admin'];
            
            
            
              echo "<div class=user>";  
            echo "<h2>";   
            echo "<a href=index.php?page=uzivatel&uzivatel=$jmeno> $jmeno </a>";
            echo "</h2>";
             echo "<th>E-mail: </th>";
            
            echo $mail;
            echo "<br><hr>";
                      
           
            
           echo "<a href=index.php?page=smaz_uzivatele&id=$id class=smaz>Smaž uživatele</a><br>";
           if($admin!=1) 
          { echo "<a href=index.php?page=pridej_admina&id=$id&admin=yes>Udělit administrátorské práva</a><br>";}
         if($admin==1 and $_SESSION['id']!=$id) 
             { echo "<a href=index.php?page=pridej_admina&id=$id&admin=no>Odebrat administrátorské práva</a><br>";}

              echo "</div>"; 
          
       
            
           
           
        }
?>
