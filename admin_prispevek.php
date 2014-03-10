<?php

if(!isset($_SESSION['prihlasen']) and @$_SESSION['prihlasen']!=1){
	echo "<h1>Tato stránka je jen pro registrované</h1>";
	exit();
}
if(@$_SESSION['prava']!='admin')
{
    echo "<h1>Tato stránka je jen pro administrátory</h1>";
	exit();
}



require 'db.php';
?>
 <div id="prispevky">
            <?php    
        
        
      
    $query = "SELECT * FROM prispevky p LEFT JOIN uzivatele u ON (p.idu=u.id) ORDER BY cas_p desc";
      $result = mysql_query($query);
        
         
       while ($row = mysql_fetch_array($result)){
           $jmeno=$row["jmeno"];
           $komentar=$row["komentar"];
           
           $id=$row['id_p'];
    echo "<div class=prispevek onmouseover=zobraz('zob'); onmouseout=skryj('zob');>";
         echo "<h3>";
         
         echo "<a href=index.php?page=uzivatel&uzivatel=$jmeno> $jmeno </a>";
         echo "</h3>";
         echo "<p>";
           
            echo strip_tags((substr($komentar, 0, 100)))  .'...';
            
            
            
        echo " </p>";
        
          
           echo "<a href=index.php?page=smaz_prispevek&id=$id >Smazat příspěvek</a><br>";
             
        
     echo " </div>";
     
     }
 
     ?>
    </div>

