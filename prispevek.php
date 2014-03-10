<?php

if(isset($_GET['idp']) )
{
    require 'db.php';
    
    $idp=$_GET['idp'];
     $query = "SELECT * FROM prispevky p LEFT JOIN uzivatele u ON (p.idu=u.id) WHERE id_p=$idp";
      
//    "SELECT * FROM obrazky o LEFT JOIN uzivatele u ON (o.uploader=u.id) WHERE o.ido='$ido'"
    
    $result = mysql_query($query);
        
         
       $row = mysql_fetch_array($result)or die (mysql_error());
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
      
          
       
        echo " </p>";
        
                        
        
     echo " </div>";
    
     $query2 = "SELECT * FROM uzivatele u RIGHT JOIN reakce r ON ( u.id = r.idu ) LEFT JOIN prispevky p ON ( r.idp = p.id_p ) 
WHERE p.id_p =$idp
ORDER BY r.cas_r ASC ";
                        $result2 = mysql_query($query2) ;
     
                        while ($row2 = mysql_fetch_array($result2)  ){
                       
                        $reakce=$row2["reakce"];
                           $cas_r=$row2["cas_r"]; 
                      $jmeno1=$row2['jmeno'];
                      $idu=$row2['id'];
                      $idr=$row2['idr'];
                      $idp1=$row2['idp'];
                            echo " <div class='prispevek'>";
                           echo "<a href=index.php?page=uzivatel&uzivatel=$jmeno1>$jmeno1</a>";
                           echo "<br>";
                           echo $reakce;
                           echo "<br>";
                           echo $cas_r;
                           echo "<br>";
                           if($_SESSION['id']==$idu)
                           {
                                echo "<a href=index.php?page=smaz_reakci&id=$idr&idp=$idp1 class='button ucast' >Smazat</a><br>";
                           }
                             echo " </div>";
                             continue;    
                        }
                        
                        
                    
                         
    
}
else{
    echo "asascascas";
}
  echo "as";
echo "<form action='pridej_r.php' method='post'>
 <textarea id='reakce' class='mceSimple' name='reakce' rows='5' cols='90'></textarea>
 <input type='hidden' name='sent' value=''/>
 <input type='hidden' name='idp' value=$idp />
 <input class='button pridej' type='submit' name='send' value='Přidej komentář'/>
        </form>";
?>




