<?php if(!isset($_SESSION['prihlasen']) and @$_SESSION['prihlasen']!=1){
	echo "<h1>Tato stránka je jen pro registrované</h1>";
	exit;
}
?>
<form action="foto_upload.php" method="post" enctype="multipart/form-data" class="upload">
<label for="file">Obrázek: </label>

<input name="upload[]" type="file" class="button" multiple />
<input type="submit" class="button" name="submit" value="Nahrát">
</form>


<?php
require "db.php";

if (isset($_GET['ido'])){
    echo "<div class='prispevek'>";
    echo "<div class='detail'>";
   
    $ido=$_GET['ido'];
  
      $dot = ("SELECT * FROM obrazky o LEFT JOIN uzivatele u ON (o.uploader=u.id) WHERE o.ido='$ido'") ;
        $vys = MySQL_Query($dot) ;
       
      $radek=mysql_fetch_array($vys);               
            $jmeno=$radek["jmeno"];
            $idu=$radek["id"];
            $get=mysql_query("SELECT MAX(ido), MIN(ido) FROM obrazky"); 
            $got = mysql_fetch_array($get); 
            $dot1=  mysql_query("SELECT
                                ( SELECT ido FROM obrazky WHERE ido > $ido ORDER BY ido asc LIMIT 1 )
                                AS NEXT_VALUE,
                                ( SELECT ido FROM obrazky WHERE ido < $ido ORDER BY ido desc LIMIT 1 )
                                AS PREV_VALUE
                                    FROM obrazky;");
            $vys1 =  mysql_fetch_array($dot1);
            $next=$vys1['NEXT_VALUE'];
            $prev=$vys1['PREV_VALUE'];
            $max = $got['MAX(ido)'];
            $min = $got['MIN(ido)'];
       

            if($radek['ido'] < $max ){           
            
                echo '<a href="index.php?page=galerie&ido='.$next.'" class=""><img src='.$radek['url_o'].' width=400px></img><br></a>';
                
            } 
            elseif ($radek['ido'] == $max) {
                echo '<img src='.$radek['url_o'].' width=400px></img>';
            
        }
        echo "</div>";
        echo "<div class='detail_info'>";
        echo "Nahrál: <a href=index.php?page=uzivatel&uzivatel=$jmeno> $jmeno </a><br><br><br>";
        
        
            
           
            if($radek['ido'] > $min){           
                
              
                    echo '<a href="index.php?page=galerie&ido='.$prev.'" class="button posun"> Předchozí</a>';
                
            } 
             if($radek['ido'] < $max ){           
            
                echo '<a href="index.php?page=galerie&ido='.$next.'" class="button posun">Další </a><br>';
                
            } 
             if($_SESSION['id']==$idu)
             {
             echo "<br><br><a href=index.php?page=smaz_obrazek&id=$ido class='button posun'>Smazat</a><br><br><br>"; 
             }   
            
             echo "</div>";
           
           
           
           
 

       
    echo "</div>";
}
           
         
echo "<div class=galerie>";

$query = "SELECT * FROM nahledy n  JOIN obrazky o WHERE n.id_o=o.ido ";
$result = mysql_query($query);      
while($row = mysql_fetch_assoc($result)){

  
  echo '<a href="index.php?page=galerie&ido='.$row['ido'].'" class="galerie"><img src="'.$row['url_n'].'" height="75px" alt="image"></a>';
   
   
  
     }
  
     echo "</div>"; 
      


?>