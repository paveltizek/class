<h1>Žádost o registraci</h1>
<form action="zadost_registrace_zpracuj.php" method="post">
    <input type="hidden" name="sent" value=""/>
        <input type="text" placeholder="Jméno"  name="jmeno" value="" maxlength="64" required/> 
         <input type="email" placeholder="E-mail"  name="mail" value="" maxlength="64" required/> 
        <input class="button" type="submit" name="send" value="Odeslat"/>
</form>

