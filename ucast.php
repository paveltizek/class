<?php

require 'db.php';
$idu=$_SESSION['id'];
$ida=$_GET['ida'];
if(isset($ida))
{
   if($_GET['zucastnit']=="yes")
    {
        $jetam=mysql_query("SELECT * FROM ucast WHERE ida=$ida and idu=$idu") or die (mysql_error());
        
        if(mysql_num_rows($jetam)==0)
           {
            $ucastni=mysql_query("INSERT INTO ucast (ida,idu,ucastnim) VALUES ('$ida', '$idu', 1)") or die (mysql_errno());      
           }
           else 
               {
               $row=  mysql_fetch_array($jetam) or die (mysql_error());
               $id_udalosti=$row['id_udalosti'];     
               $UpravData=mysql_query("UPDATE ucast 
                            SET  ucastnim=1 
                            WHERE id_udalosti = '$id_udalosti'") or die (mysql_error());
               }
    }
    header("location:index.php?page=aktivity");
    if($_GET['zucastnit']=='no')
    {
        $jetam=mysql_query("SELECT * FROM ucast WHERE ida=$ida and idu=$idu") or die (mysql_error());
        
        if(mysql_num_rows($jetam)==0)
           {
            $ucastni=mysql_query("INSERT INTO ucast (ida,idu,ucastnim) VALUES ('$ida', '$idu', '0')") or die (mysql_error());      
           }
           else 
               {
               $row=  mysql_fetch_array($jetam) or die (mysql_error());
               $id_udalosti=$row['id_udalosti'];     
               $UpravData=mysql_query("UPDATE ucast 
                            SET  ucastnim=0 
                            WHERE id_udalosti = '$id_udalosti'") or die (mysql_error()); 
               }
    }
    header("location:index.php?page=aktivity");

}

?>
