<?php
require "db.php";
if(!isset($_SESSION['prihlasen']) and @$_SESSION['prihlasen']!=1){
	echo "<h1>Tato stránka je jen pro registrované</h1>";
	exit();
}

?>
<div class="prispevek">
<h1>Události</h1>



    <form action="pridej_a.php" method="post" class="aktivity">
    <input type="text" size="30" name="nazev_akce" placeholder="Název akce" width="100px" required/><br>
    <input type="date" size="30" name="datum_konani" placeholder="Datum konání" required/>Datum konání<br>
    <input type="time" size="30" name="cas_konani" required/>Čas konání<br>
    <input type="text" size="30" name="misto_konani" placeholder="Místo konání" required/><br>
    <textarea class="mceSimple" name="popis"></textarea><br>
    <input type="radio" name="pov_nepov" value="ano" required/>Povinná<br>
    <input type="radio" name="pov_nepov" value="ne" required/>Nepovinná<br><br>
    <input type="radio" name="sko_mis" value="ano­" required/>Školní akce<br>
    <input type="radio" name="sko_mis" value="ne" required/>Mimoškolní akce<br>
    <input type="hidden" name="sent" value=""/>
    <input class="button pridej" type="submit" name="send" value="Přidej aktivitu"/>
    </form>
 </div>   
  <?php
  $query = "SELECT * FROM aktivity ORDER BY datum_konani desc";
      $result = mysql_query($query);
        
  echo "<div class='prispevek'>";       
       while ($row = mysql_fetch_array($result)){
       
           $datum_konani=$row['datum_konani'];
    $cas_konani=$row['cas_konani'];
    $popis=$row['popis'];
    $misto_konani=$row['misto_konani'];
    $pov=$row['pov_nepov'];
    $sko=$row['sko_mis'];
    $nazev_akce=$row['nazev_akce'];
    $ida=$row['id_a'];
    $idu=$_SESSION['id'];
     $datum = StrFTime("%Y-%m-%d", Time());
     $datum1 = StrFTime("%d-%m-%Y", $datum_konani);

    
            
            
            if($datum_konani > $datum)
            {
                $jetam=mysql_query("SELECT * FROM ucast WHERE ida=$ida and idu=$idu") ;
                
                
                 if(mysql_num_rows($jetam)==0)
                    {
                     echo "<a href='index.php?page=ucast&ida=$ida&zucastnit=yes' class='button ucast'>Půjdu</a>";
                     }
                     else{$radek=mysql_fetch_array($jetam);
                     $ucastnimse=$radek['ucastnim']; 
                     if($ucastnimse==0)
                          {
                          echo "<a href='index.php?page=ucast&ida=$ida&zucastnit=yes' class='button ucast'>Půjdu</a>";
                     }}
                     
                     if($ucastnimse==1)
                 {
                     echo "<a href='index.php?page=ucast&ida=$ida&zucastnit=no' class='button ucast'>Nepůjdu</a>";
                 }
             
             } 
    echo "<table>";
            echo "<tr>";
            echo "<th>Název akce: </th>";
            echo "<td>";
            echo $nazev_akce; 
            echo "</td>"; 
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>Kde: </th>";
            echo "<td>";
            echo $misto_konani; 
            echo "</td>"; 
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>Kdy: </th>";
            echo "<td>";
            echo $datum_konani; 
            echo "</td>"; 
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>V kolik: </th>";
            echo "<td>";
            echo $cas_konani;
            echo "</td>"; 
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>Co to bude: </th>";
            echo "<td>";
            echo $popis;
            echo "</td>"; 
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>Musím jít: </th>";
            echo "<td>";
            echo $pov;
            echo "</td>"; 
            echo "</tr>";
            
            echo "<tr>";
            echo "<th>Pořádá škola: </th>";
            echo "<td>";
            echo $sko;
            echo "</td>"; 
            echo "</tr>";
            
            
            
             
            echo "</table>";
           
      
       $dot="SELECT * FROM ucast uc LEFT JOIN uzivatele u ON(uc.idu=u.id) WHERE ida=$ida";
       $vys=  mysql_query($dot);
       echo " <strong>Půjde:</strong> ";
       while($radek=  mysql_fetch_assoc($vys) ){
           if($radek['ucastnim']==1)
           {
               $jmeno=$radek['jmeno'];
               echo "<a href=index.php?page=uzivatel&uzivatel=$jmeno> $jmeno, </a>";
               
               }
       }
        echo "<hr>";
       }
       
       echo "</div>";
       
       
       
  ?>      
    
        