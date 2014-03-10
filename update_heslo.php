<?php
ob_start();
session_start();
$id=$_SESSION['id'];
echo $id;
echo "<hr>";
if(isset($_POST['sent'])){
    require "db.php";
    $s_heslo=md5($_POST['stare_heslo']);
    $n_heslo1=md5($_POST["nove_heslo"]); 
    $n_heslo2=md5($_POST["nove_heslo2"]);
    
    $id=$_SESSION['id'];
     $query = mysql_query("SELECT * FROM `uzivatele` WHERE `id` = '$id' and heslo='$s_heslo'") or die (mysql_error());
    
      $Vysledek = mysql_fetch_array($query);
    if($Vysledek['heslo'])
    {
       if($n_heslo1==$n_heslo2)
           
       { $UpravData=mysql_query("UPDATE uzivatele 
                            SET  heslo='$n_heslo1'
                            WHERE id = '$id'") 
        or die (mysql_error()); 
        header("location:index.php?page=edit_user&Alert=12");}
        else{
            $bl="index.php?page=edit_user&Alert=3";
          header("location: $bl"); 
        }
    }
    else{
        $bl="index.php?page=edit_user&Alert=6";
          header("location: $bl"); 
          
          }
   
    
   
}
else{
    header("location:index.php?page=edit_user");
}
ob_end_flush();
?>