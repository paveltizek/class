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
echo "<div class=galerie>";

$query = "SELECT * FROM nahledy n  JOIN obrazky o WHERE n.id_o=o.ido";
$result = mysql_query($query);      
while($row = mysql_fetch_assoc($result)){
$id_o=$row['ido'];
 echo "<div class=obrazek>";
  echo '<img src="'.$row['url_n'].'" height="75px" alt="image"></a>';
  echo "<a href=index.php?page=smaz_obrazek&id=$id_o class=smaz>Smaž obrázek</a>"; 
  echo "</div>"; 
  
     }
     echo "</div>";   
 
?>
