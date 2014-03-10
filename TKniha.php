<?php
/*
* Pokud uživatel není přihlášený, místo obsahu se mu ukáže tato hláška.
*/

require 'db.php';
if(!isset($_SESSION['prihlasen']) and @$_SESSION['prihlasen']!=1){
	echo "<h1>Tato stránka je jen pro registrované</h1>";
	exit;
}






?>


<h1>
 Vzkazy
</h1>
 <form action="pridej_p.php" method="post">
 <label for "prispevek">Příspěvek</label>            
 <textarea id="prispevek" name="prispevek" rows="15" cols="70"></textarea>
              <input type="hidden" name="sent" value=""/>
              
               
              <input class="button pridej" type="submit" name="send" value="Přidej"/>
        </form>
        
    <?php    
        
        
      
    $query = "SELECT jmeno, komentar, cas_p FROM prispevky ORDER BY cas_p desc";
      $result = mysql_query($query);
        
         
       while ($row = mysql_fetch_array($result)){
           $jmeno=$row["jmeno"];
           $komentar=$row["komentar"];
           $cas_p=$row["cas_p"]; 
      
    echo "<div class=prispevek>";
         echo "<h3>";
         echo $jmeno;
         echo "<a href=index.php?page=uzivatel&uzivatel=$jmeno> $jmeno </a>";
         echo "</h3>";
         echo "<p>";
           
            echo $komentar;
            
        echo " </p>";
        echo " <p class=cas_p>";
          
           echo $cas_p;
             
        echo " </p>";
     echo " </div>";
     
     }
     ?>
     
  