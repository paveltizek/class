<?php
require "db.php";
if(!isset($_SESSION['prihlasen']) and @$_SESSION['prihlasen']!=1){
	echo "<h1>Tato stránka je jen pro registrované</h1>";
	exit();
}

?>

<h1 class="prispevek">Uživatelé</h1>


 <?php    
 
 
    if (IsSet($_GET['uzivatel'])){        
         $user=$_GET['uzivatel'];
         
         $dot = ("SELECT * FROM uzivatele WHERE jmeno='".$user."'") or die (mysql_error());
         $vys = MySQL_Query($dot);
        $row = mysql_fetch_array($vys);
       
        $jmeno=$row["jmeno"];
        $mail=$row["mail"];
        $datum_nar=$row["datum_nar"]; 
        $cas_reg=$row["cas_reg"];
        $info=$row["info"];
        $facebook=$row["facebook"]; 
        $google=$row["google"];
        $twitter=$row["twitter"];
        echo "<div class=prispevek>";
           
            echo "<h2>";   
            echo "<a href=index.php?page=uzivatel&uzivatel=$jmeno> $jmeno </a>";
            echo "</h2>";   
            echo "<table>";
            echo "<tr>";
            echo "<th>Registrován od: </th>";
            echo "<td>";
            echo $cas_reg; 
            echo "</td>"; 
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>E-mail: </th>";
            echo "<td>";
            echo $mail;
            echo "</td>"; 
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>Datum narození: </th>";
            echo "<td>";
            echo $datum_nar;
            echo "</td>"; 
            echo "</tr>";
           
            echo "<tr>";
            echo "<th>Informace: </th>";
            echo "<td>";
            echo $info;
            echo "</td>"; 
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>Facebook: </th>";
            echo "<td>";
            echo "<a href=https://facebook.com/$facebook target=_blank> $facebook </a>";
            echo "</td>"; 
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>Google+: </th>";
            echo "<td>";
            echo "<a href=https://plus.google.com/u/0/$google target=_blank> $google </a>";
            echo "</td>"; 
            echo "</tr>";
            
            
            echo "<tr>";
            echo "<th>Twitter: </th>";
            echo "<td>";
            echo "<a href=https://twitter.com/$twitter target=_blank> $twitter </a>";
            echo "</td>"; 
            echo "</tr>";
            
             
            echo "</table>";
           echo "</div>";  
             
        }
    else{                
            
        $dot = ("SELECT * FROM uzivatele ORDER BY jmeno asc ") or die (mysql_error());
        $vys = MySQL_Query($dot);
        
       while ($row = mysql_fetch_array($vys)){
            
            
            $jmeno=$row["jmeno"];
            $mail=$row["mail"];
            $datum_nar=$row["datum_nar"]; 
            $cas_reg=$row["cas_reg"];
            $info=$row["info"];
            $facebook=$row["facebook"]; 
            $google=$row["google"];
            $twitter=$row["twitter"];
            
            
             echo "<div class=prispevek>"; 
             
            echo "<h2>";   
            echo "<a href=index.php?page=uzivatel&uzivatel=$jmeno> $jmeno </a>";
            echo "</h2>";
           
            echo "<table>";
            echo "<tr>";
            echo "<th>Registrován od: </th>";
            echo "<td>";
            echo $cas_reg; 
            echo "</td>"; 
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>E-mail: </th>";
            echo "<td>";
            echo $mail;
            echo "</td>"; 
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>Datum narození: </th>";
            echo "<td>";
            echo $datum_nar;
            echo "</td>"; 
            echo "</tr>";
          
            echo "<tr>";
            echo "<th>Informace: </th>";
            echo "<td>";
            echo $info;
            echo "</td>"; 
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>Facebook: </th>";
            echo "<td>";
            echo "<a href=https://facebook.com/$facebook target=_blank> $facebook </a>";
            echo "</td>"; 
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>Google+: </th>";
            echo "<td>";
            echo "<a href=https://plus.google.com/u/0/$google target=_blank> $google </a>";
            echo "</td>"; 
            echo "</tr>";
            
            
            echo "<tr>";
            echo "<th>Twitter: </th>";
            echo "<td>";
            echo "<a href=https://twitter.com/$twitter target=_blank> $twitter </a>";
            echo "</td>"; 
            echo "</tr>";
            
             
            echo "</table>";
           
            echo "</div>";
        }
            
        }
     ?>
     
     
     