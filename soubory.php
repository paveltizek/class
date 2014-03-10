<?php if(!isset($_SESSION['prihlasen']) and @$_SESSION['prihlasen']!=1){
	echo "<h1>Tato stránka je jen pro registrované</h1>";
	exit;
}
?>
<form action="soubory_upload.php" method="POST" enctype="multipart/form-data" class="upload">
	<input type="file" name="files[]" class="button" multiple/>
	<input type="submit" class="button" value="Nahrát"/>
</form>
<?php    
require 'db.php';  
        
      
    $query = "SELECT * FROM soubory s LEFT JOIN uzivatele u ON (s.idu=u.id) ORDER BY cas_nahrani asc";
      
//    "SELECT * FROM obrazky o LEFT JOIN uzivatele u ON (o.uploader=u.id) WHERE o.ido='$ido'"
    
    $result = mysql_query($query);
        
         
       while ($row = mysql_fetch_array($result)or die (mysql_error())){
           $cesta_vypis=  str_replace("+"," ",$row["cesta"]);
//           $cesta=  str_replace("+","",$row["cesta"]);
           $cesta= $row["cesta"];
           $cas_nahrani=$row["cas_nahrani"]; 
           $id=$row['ids'];
           $uploader=$row['jmeno'];
   

           echo "<div class=prispevek>";
//        echo "<a href=index.php?page=stahnout&cesta=soubory/$cesta>$cesta_vypis</a> - ".$uploader." - ".$cas_nahrani;
       echo "<a href=soubory/$cesta_vypis>$cesta_vypis</a> - ".$uploader." - ".$cas_nahrani;
        
        
     echo " </div>";
     
     }
 mysql_free_result($query);
     ?>