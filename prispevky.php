<?php


require 'db.php';
if(!isset($_SESSION['prihlasen']) and @$_SESSION['prihlasen']!=1){
	echo "<h1>Tato stránka je jen pro registrované</h1>";
	exit();
}

?>

<div class="prispevek">

 <form action="pridej_p.php" method="post">
            
 <textarea id="prispevek" class="mceAdvanced" name="prispevek" rows="15" cols="80"></textarea>
 <input type="hidden" name="sent" value=""/>
 <input class="button pridej" type="submit" name="send" value="Přidej"/>
        </form>
          </div>
    <!--<div id="prispevky">-->
            <?php    
        
        
      
    $query = "SELECT * FROM prispevky p LEFT JOIN uzivatele u ON (p.idu=u.id) ORDER BY cas_p desc";
      

    
    $result = mysql_query($query);
        
         
       while ($row = mysql_fetch_array($result)or die (mysql_error())){
           $jmeno=$row["jmeno"];
           $komentar=$row["komentar"];
           $cas_p=$row["cas_p"]; 
           $id=$row['id'];
           $id_p=$row['id_p'];
    echo "<div class=prispevek>";
         echo "<h3>";
         
         echo "<a href=index.php?page=uzivatel&uzivatel=$jmeno> $jmeno </a>";
         echo "</h3>";
         echo "<p>";
           
            echo $komentar;
            
        echo " </p>";
        echo " <p class=cas_p>";
          
           echo $cas_p;
       echo "<a href='index.php?page=prispevek&idu=$id&idp=$id_p' class='button ucast'>Zobrazit příspěvek</a>";
           if($_SESSION['id']==$id)
        {
            echo "<a href='index.php?page=smaz_prispevek&id=$id_p' class='button ucast'>Smazat</a>";
        }     
        echo " </p>";
         $query1 = "SELECT * FROM reakce WHERE idp=$id_p";
      
   
    $result1 = mysql_query($query1);
   $pocet_k=  mysql_num_rows($result1)  ;
   echo 'Počet komentářů: '.$pocet_k;
         
                 
        
     echo " </div>";
     
     }
    
     
 mysql_free_result($query);
 
     ?>
    <!--</div>-->
     
  