<?php
ob_start();
session_start();
$id=$_SESSION['id'];
echo $id;
echo "<hr>";
if(isset($_POST['sent'])){
    require "db.php";
    $mail=$_POST['mail'];
    $datum_nar=$_POST["datum_nar"]; 
    $info=$_POST["info"];
    $facebook=$_POST["facebook"]; 
    $google=$_POST["google"];
    $twitter=$_POST["twitter"];
    $id=$_SESSION['id'];
    $UpravData=mysql_query("UPDATE uzivatele 
                            SET  mail='$mail', datum_nar='$datum_nar', info='$info', facebook='$facebook', google='$google', twitter='$twitter' 
                            WHERE id = '$id'") 
        or die (mysql_error()); 
    header("location:index.php?page=edit_user&Alert=12");
}
else{
    header("location:index.php?page=edit_user");
}
ob_end_flush();
?>