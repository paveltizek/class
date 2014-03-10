<?php
require 'db.php';

if(isset($_GET['aktivacni_kod'])){
$aktivacni_kod=$_GET['aktivacni_kod'];
$mail=$_GET['id'];
$jmeno=$_GET['jmeno'];



echo "
<div class='prispevek'>
<h1>
 Registrace
</h1>
<form action='reg_zpracuj.php' method='post'>
    <input type='hidden' name='sent' value=''/>
        <input type='text'  name='jmeno' value=$jmeno readonly /> <br/>
        <input type='password' placeholder='Heslo' name='heslo' maxlength='32' required pattern='.{5,}' title='5-32 znaků'/>5-32 znaků <br/>
        <input type='password' placeholder='Heslo znovu' name='heslo_znovu' maxlength='32' required/> <br/>
        <input type='email' placeholder='E-mail'  name='mail' value=$mail maxlength='64' readonly required/> <br/>
        <input type='hidden'   name='aktivacni_kod' value=$aktivacni_kod /> <br/>
        <input class='button' type='submit' name='send' value='Registruj'/>
</form>
</div>
";}
else{
    echo "<div class='prispevek'>Pro přístup na web <a href='index.php?page=zadost_registrace'>požádej</a> administrátora o svolení</div>";
}
?>
