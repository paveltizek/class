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
$query = "SELECT * FROM aktivity ORDER BY datum_konani desc";
      $result = mysql_query($query)or die (mysql_error());
        
         
       while ($row = mysql_fetch_array($result)or die (mysql_error())){
       
           $datum_konani=$row['datum_konani'];
    
    $misto_konani=$row['misto_konani'];
    
    $nazev_akce=$row['nazev_akce'];
    $id=$row['id_a'];
    echo "<div class='prispevek'>";
     echo "<table>";
            echo "<tr>";
            echo "<th>Název akce: </th>";
            echo "<td>";
            echo $nazev_akce; 
            echo "</td>"; 
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>Místo konání: </th>";
            echo "<td>";
            echo $misto_konani; 
            echo "</td>"; 
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>Datum konání: </th>";
            echo "<td>";
            echo $datum_konani; 
            echo "</td>"; 
            echo "</tr>";
            echo "</table>";
            echo "<a href=index.php?page=smaz_aktivitu&id=$id class=smaz>Smaž aktivitu</a><br>";
      
       echo "</div>";
       }
?>
