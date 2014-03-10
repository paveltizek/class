
<nav>

<ul class="menu">
  <li><a href='index.php'>Domů</a></li> 
  
  <li><a href='index.php?page=prispevky'>Novinky</a></li>
  <li><a href='index.php?page=aktivity'>Události</a></li>
  <li><a href='index.php?page=galerie'>Galerie</a></li>
  <li><a href='index.php?page=soubory'>Dokumenty</a></li>
  <li><a href='index.php?page=uzivatel'>Uživatelé</a></li>
  <li><a href='index.php?page=seznam_u'>Kontakty na učitele</a></li>
  <li><a href='index.php?page=odkazy'>Důležité odkazy</a></li>
  
  
  <?php
  if(@$_SESSION['prava']=='admin')
  {
  echo "<h2 class=admin>Administrační zóna</h2>";
  echo "<li><a href='index.php?page=admin_uzivatele'>#Uživatelé</a></li>";
  echo "<li><a href='index.php?page=admin_prispevek'>#Příspěvky</a></li>";
  echo "<li><a href='index.php?page=admin_aktivity'>#Události</a></li>";
  echo "<li><a href='index.php?page=admin_obrazky'>#Obrázky</a></li>";
  echo "<li><a href='index.php?page=admin_soubory'>#Dokumenty</a></li>";
  }
  ?>
 </ul>
</nav>
