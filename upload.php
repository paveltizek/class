<?php

require "db.php";
session_start();
$allowedExts = array("jpg", "jpeg", "gif", "png");
//$extension = end(explode(".", $_FILES["file"]["name"]));
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 20000000)
/*&& in_array($extension, $allowedExts)*/)
  {
  if ($_FILES["file"]["error"] > 0)
    {
    header ("location: index.php?page=galerie&Alert=1");
    }
  else
    {
    

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      header ("location: index.php?page=galerie");
      }
    else
    {  
     header ("location: index.php?page=galerie");
      move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
     
     // echo $url_o;
      $uploader=$_SESSION['login'];
       $url_o=("upload/" . $_FILES["file"]["name"]);
      // $datum = StrFTime("%d/%m/%Y %H:%M:%S", Time());
       $VlozData=mysql_query("INSERT INTO obrazky (url, uploader, cas_nahrani) VALUES ('$url_o', \"".$_SESSION['login']."\", now())") or die (mysql_error());  
       /*$sql = mysql_query("INSERT INTO obrazky (url,uploader) VALUES('$url_o',\"".$_SESSION['login']."\")"); */
     //  $VlozData=mysql_query("INSERT INTO obrazky (url, cas_nahrani) VALUES ('$url_o', Now())") or die (mysql_error());
     
      }
    }
  }
else
  {
  header ("location: index.php?page=galerie");
  }
  
?>