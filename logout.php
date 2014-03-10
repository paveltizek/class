<?php   
ob_start();

if(IsSet($_GET['logout']) and $_GET['logout']=="yes") {
  Session_Start();
  Session_Destroy();
}
header ("location: index.php?Alert=13");
ob_end_flush();
?>