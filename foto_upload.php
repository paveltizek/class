<?php
session_start(); 


        require "db.php";
        
       
   
            if (isset($_FILES['upload']) === true){
                $files = $_FILES['upload'];
                $i=0;
                $post_size = (int)$_SERVER['CONTENT_LENGTH'];
                
                for($x = 0; $x < count($files['name']); $x++){
                   
                    $name = $files['name'][$x];
                    $tmp_name = $files['tmp_name'][$x];
                    $typ=$files['type'][$x];
                    $velikost=$files['size'][$x];
                    $_SESSION['velikost']=$velikost;
                    $size2 =  getimagesize($tmp_name);
                    $width = $size2[0];
                    $height = $size2[1];
                    $uploads= md5( rand( 0, 1000 ) . rand( 0, 1000 ) . rand( 0, 1000 ) . rand( 0, 1000 ) );
                    if(($typ=="image/jpeg") || ($typ=="image/png") || ($typ=="image/gif") || ($typ=="image/pjpeg")) {
                            if(($velikost < 2097152) && ($post_size < 8388608)) {
                                
                              //  move_uploaded_file($tmp_name, "galerie/".$vypis["ID_galerie"]."/".$name);
                             //   $url_o=("galerie/".$vypis["ID_galerie"]."/".$name);
                             //   $VlozData=mysql_query("INSERT INTO obrazky (cesta, id_uzivatele, id_galerie, datum) VALUES ('$url_o', \"".$_SESSION['id']."\", '$idg', now())") or die (mysql_error());
                                
                                
                                $newwidth = 200;
                                $newheight = 150;
                                

                               
                                       switch ($typ) {
                                           case 'image/jpeg':
                                                $ext= '.jpeg';
                                                
                                                $thumb_path= "nahledy/".$uploads.$ext;
                                                move_uploaded_file($tmp_name, "upload/".$uploads.$ext);
                                                
                                                $url_o=("upload/".$uploads.$ext);
                                                $VlozData=mysql_query("INSERT INTO obrazky (url_o, uploader, cas_nahrani) VALUES ('$url_o', \"".$_SESSION['id']."\", now())") or die (mysql_error());
                                                $img =  imagecreatefromjpeg("upload/".$uploads.$ext);
                                                $thumb= imagecreatetruecolor( $newwidth, $newheight );
                                                        imagecopyresized( $thumb, $img, 0, 0, 0, 0, $newwidth, $newheight, $width, $height );
                                                        imagejpeg( $thumb, $thumb_path, 100 );
                                                        
                                                $query2 = ("SELECT * FROM obrazky WHERE url_o='$url_o'") or die (mysql_error());
                                                $result2 = mysql_query($query2)or die(mysql_error()); 
                                                $vypis2=mysql_fetch_array($result2); 
                                                $id_ob=$vypis2['ido'];
                                                
                                                $VlozData2=mysql_query("INSERT INTO nahledy (id_o, url_n) VALUES ('$id_ob', '$thumb_path')") or die (mysql_error()); 
                                                header("location: index.php?page=galerie&Alert=12");
                                                break;
                                            
                                           case 'image/png':
                                                $ext= '.png';
                                                
                                                $thumb_path= "nahledy/".$uploads.$ext;
                                                move_uploaded_file($tmp_name, "upload/".$uploads.$ext);
                                                
                                                $url_o=("upload/".$uploads.$ext);
                                                $VlozData=mysql_query("INSERT INTO obrazky (url_o, uploader, cas_nahrani) VALUES ('$url_o', \"".$_SESSION['id']."\", now())") or die (mysql_error());
                                                $img = imagecreatefrompng("upload/".$uploads.$ext);
                                                $thumb= imagecreatetruecolor( $newwidth, $newheight );
                                                        imagecopyresized( $thumb, $img, 0, 0, 0, 0, $newwidth, $newheight, $width, $height );
                                                        imagepng( $thumb, $thumb_path );
                                                        
                                                $query2 = ("SELECT * FROM obrazky WHERE url_o='$url_o'") or die (mysql_error());
                                                $result2 = mysql_query($query2)or die(mysql_error()); 
                                                $vypis2=mysql_fetch_array($result2); 
                                                $id_ob=$vypis2['ido'];
                                                
                                                $VlozData2=mysql_query("INSERT INTO nahledy (id_o, url_n) VALUES ('$id_ob', '$thumb_path')") or die (mysql_error()); 
                                                header("location: index.php?page=galerie&Alert=12");
                                                break;
                                          case 'image/gif':
                                                $ext= '.gif';
                                                
                                                $thumb_path= "nahledy/".$uploads.$ext;
                                                move_uploaded_file($tmp_name, "upload/".$uploads.$ext);
                                                
                                                $url_o=("upload/".$uploads.$ext);
                                                $VlozData=mysql_query("INSERT INTO obrazky (url_o, uploader, cas_nahrani) VALUES ('$url_o', \"".$_SESSION['id']."\", now())") or die (mysql_error());
                                                $img = imagecreatefromgif("upload/".$uploads.$ext);
                                                $thumb= imagecreatetruecolor( $newwidth, $newheight );
                                                        imagecopyresized( $thumb, $img, 0, 0, 0, 0, $newwidth, $newheight, $width, $height );
                                                        imagegif( $thumb, $thumb_path, 100 );
                                                        
                                                $query2 = ("SELECT * FROM obrazky WHERE url_o='$url_o'") or die (mysql_error());
                                                $result2 = mysql_query($query2)or die(mysql_error()); 
                                                $vypis2=mysql_fetch_array($result2); 
                                                $id_ob=$vypis2['ido'];
                                                
                                                $VlozData2=mysql_query("INSERT INTO nahledy (id_o, url_n) VALUES ('$id_ob', '$thumb_path')") or die (mysql_error()); 
                                                header("location: index.php?page=galerie&Alert=12");
                                                break;
                                           
                                       }
                                       
                                    
                                $i++;
             
                }}}}

               

           
 
?>
<!-- case 'image/png':
                                                $ext= '.png';
                                                
                                                $thumb_path= "nahledy/".$uploads.$ext;
                                                move_uploaded_file($tmp_name, "upload/".$uploads.$ext);
                                                
                                                $url_o=("upload/".$uploads.$ext);
                                                $VlozData=mysql_query("INSERT INTO obrazky (url_o, uploader, cas_nahrani) VALUES ('$url_o', \"".$_SESSION['id']."\", now())") or die (mysql_error());
                                                $img = imagecreatefrompng("upload/".$uploads.$ext);
                                                $thumb= imagecreatetruecolor( $newwidth, $newheight );
                                                        imagecopyresized( $thumb, $img, 0, 0, 0, 0, $newwidth, $newheight, $width, $height );
                                                        imagepng( $thumb, $thumb_path, 100 );
                                                        
                                                $query2 = ("SELECT * FROM obrazky WHERE url_o='$url_o'") or die (mysql_error());
                                                $result2 = mysql_query($query2)or die(mysql_error()); 
                                                $vypis2=mysql_fetch_array($result2); 
                                                $id_ob=$vypis2['ido'];
                                                
                                                $VlozData2=mysql_query("INSERT INTO nahledy (id_o, url_n) VALUES ('$id_ob', '$thumb_path')") or die (mysql_error()); 
                                                header("location: index.php?page=galerie&Alert=12");
                                                break;
                                          case 'image/gif':
                                                $ext= '.gif';
                                                
                                                $thumb_path= "nahledy/".$uploads.$ext;
                                                move_uploaded_file($tmp_name, "upload/".$uploads.$ext);
                                                
                                                $url_o=("upload/".$uploads.$ext);
                                                $VlozData=mysql_query("INSERT INTO obrazky (url_o, uploader, cas_nahrani) VALUES ('$url_o', \"".$_SESSION['id']."\", now())") or die (mysql_error());
                                                $img = imagecreatefromgif("upload/".$uploads.$ext);
                                                $thumb= imagecreatetruecolor( $newwidth, $newheight );
                                                        imagecopyresized( $thumb, $img, 0, 0, 0, 0, $newwidth, $newheight, $width, $height );
                                                        imagegif( $thumb, $thumb_path, 100 );
                                                        
                                                $query2 = ("SELECT * FROM obrazky WHERE url_o='$url_o'") or die (mysql_error());
                                                $result2 = mysql_query($query2)or die(mysql_error()); 
                                                $vypis2=mysql_fetch_array($result2); 
                                                $id_ob=$vypis2['ido'];
                                                
                                                $VlozData2=mysql_query("INSERT INTO nahledy (id_o, url_n) VALUES ('$id_ob', '$thumb_path')") or die (mysql_error()); 
                                                header("location: index.php?page=galerie&Alert=12");
                                                break;
                                           -->
               