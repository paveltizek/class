
<header>
<div id="hlava">
<hgroup>  
  <h1>
         <a href="index.php" ><img src="images/logo1.png" alt="logo"></a>
  </h1>
</hgroup> 

<div id="prihlaseny">
<?php




if(isset($_SESSION['prihlasen']) and $_SESSION['prihlasen']==1){
    echo "<strong>Přihlášený uživatel</strong>: ".$_SESSION['login'] . " | <a href='logout.php?logout=yes'> Odhlásit se</a> | <a href='index.php?page=edit_user'>Upravit profil</a>";
    
}else{
    echo "Nejsi přihlášen | <a href='index.php?page=zadost_registrace'> Požádat o registraci</a> | <a href='index.php?page=login'> Login</a>";
}

?>
</div>


</div>



</header>

        
            