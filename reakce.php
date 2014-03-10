<?php


require 'db.php';
if(!isset($_SESSION['prihlasen']) and @$_SESSION['prihlasen']!=1){
	echo "<h1>Tato stránka je jen pro registrované</h1>";
	exit();
}

?>
<?php
if(isset($_GET['idp']))
{
    $idp=$_GET['idp'];
    $query1 = "SELECT * FROM prispevky p LEFT JOIN uzivatele u ON (p.idu=u.id) WHERE p.id_p=$idp ";
    $result1 = mysql_query($query1) or die (mysql_error());
    $row1 = mysql_fetch_array($result1) or die (mysql_error());
    
    $jmeno=$row1["jmeno"];
           $komentar=$row1["komentar"];
           $cas_p=$row1["cas_p"]; 
           $id=$row1['id'];
    
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
     
    
}





 echo "<form action='pridej_r.php' method='post'>
           
 <textarea id='reakce' name='reakce' rows='15' cols='70'></textarea>
 <input type='hidden' name='sent' value=''/>
 <input type='hidden' name='idp' value=$idp />
 <input class='button pridej' type='submit' name='send' value='Přidej komentář'/>
        </form>";
        ?>
        
    <div id="prispevky">
            <?php    
        
        
      
    $query = "SELECT * FROM prispevky p LEFT JOIN uzivatele u ON (p.idu=u.id) ORDER BY cas_p desc";
      
//    "SELECT * FROM obrazky o LEFT JOIN uzivatele u ON (o.uploader=u.id) WHERE o.ido='$ido'"
    
    $result = mysql_query($query);
        
         
       while ($row = mysql_fetch_array($result)or die (mysql_error())){
           $jmeno=$row["jmeno"];
           $komentar=$row["komentar"];
           $cas_p=$row["cas_p"]; 
           $id=$row['id'];
    echo "<div class=prispevek>";
         echo "<h3>";
         
         echo "<a href=index.php?page=uzivatel&uzivatel=$jmeno> $jmeno </a>";
         echo "</h3>";
         echo "<p>";
           
            echo $komentar;
            
        echo " </p>";
        echo " <p class=cas_p>";
          
           echo $cas_p;
       echo "<a href='index.php?page=reakce&id=$id' class='button ucast'>Odpovědět</a>";
           if($_SESSION['id']==$id)
        {
            echo "<a href='index.php?page=smaz_prispevek&id=$id' class='button ucast'>Smazat</a>";
        }     
        echo " </p>";
        
     echo " </div>";
     
     }
 mysql_free_result($query);
     ?>
    </div>
     
  