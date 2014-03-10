<?php
session_start();
require 'db.php';
$idu=$_SESSION['id'];
if(isset($_FILES['files'])){
    
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$file_name = $_FILES['files']['name'][$key];
		$file_size =$_FILES['files']['size'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$file_type=$_FILES['files']['type'][$key];
                
        if($file_size > 2097152){
            echo 'nasrat';
        }
       
        
        $file=str_replace(" ","", $file_name);
        $file_upload=str_replace(" ","", $file_name);
        $query=("INSERT INTO soubory (idu,cesta,cas_nahrani) VALUES($idu, '$file', now())")  or die (mysql_error());
       
        
            
            if(is_dir("soubory/".$file_upload)==false){
                move_uploaded_file($file_tmp,"soubory/".$file_upload);
            }else{									//rename the file if another one exist
                $new_dir="soubory/".$file_upload.time();
                 rename($file_tmp,$new_dir) ;				
            }
            mysql_query($query);			
        
    }

   header("location:index.php?page=soubory&Alert=12");	
}
?>