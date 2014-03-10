<?php
require "db.php";
if(!isset($_SESSION['prihlasen']) and @$_SESSION['prihlasen']!=1){
	echo "<h1>Tato stránka je jen pro registrované</h1>";
	exit();
}

require "db.php";
$user=$_SESSION['id'];

//echo $user;

$dot=("SELECT * FROM uzivatele WHERE id='".$user."'") or die (mysql_error());
$vys = MySQL_Query($dot);
$row = mysql_fetch_array($vys);
        

        $mail=$row["mail"];
        $datum_nar=$row["datum_nar"]; 
        $info=$row["info"];
        $facebook=$row["facebook"]; 
        $google=$row["google"];
        $twitter=$row["twitter"];
        $admin=$row['admin'];

?>
<div class="prispevek">
<form action="update_user.php" method="post">
<input type="hidden" name="sent" value=""/>
<input type="email"  name="mail" value="<?php echo $mail ?>" maxlength="32"/>Mail <br/>
<input type="date"  name="datum_nar" value="<?php echo $datum_nar ?>" maxlength="64"/>Dat nar <br/>
<input type="text"  name="info" width="500px"  value="<?php echo $info ?>" />Info<br/>
<input type="text"  name="facebook" value="<?php echo $facebook ?>" maxlength="32"/>FB <br/>
<input type="text"   name="google" value="<?php echo $google ?>" maxlength="64"/>G+ (Nejdelší číslo) <br/>
<input type="text"  name="twitter" value="<?php echo $twitter ?>" maxlength="64"/>Twitter <br/>
<input type="submit" class="button"  name="send" value="Uložit"/>
</form>
    </div>
<?php 
if($admin!=1){
 echo "<form action='zadost_admin.php' method='post'>
    <input type='submit' class='button'  name='zadost' value='Chci být administrátorem'>
    
</form> ";}  
?>
<div class="prispevek">
<form action="update_heslo.php" method="post">
<input type="hidden" name="sent" value=""/>
<input type="password"  name="stare_heslo" value="" maxlength="32" placeholder="Staré heslo"/><br/>
<input type="password"  name="nove_heslo" value="" maxlength="64" placeholder="Nové heslo"/><br/>
<input type="password"  name="nove_heslo2" width="500px"  value="" placeholder="Heslo znovu"/><br/>

<input type="submit" class="button"  name="send" value="Změnit"/>
</form>
    </div>


