<h1>Přihlášení</h1>
<form action="login_zpracuj.php" method="post">
  <input type="hidden" name="sent" value=""/>
    <input type="text" placeholder="Jméno" name="jmeno" maxlength="32" required autofocus/>
    <input type="password" placeholder="Heslo" name="heslo" maxlength="32"  required/> 
  <input type="submit" class="button" name="send" value="Přihlásit"/>
</form>