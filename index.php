<?php
ob_start();
session_start(); // startujeme session
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8"> 
    <meta name="author" content="Pavel Tížek">
    <meta name="description" content="Třídní portál pro studenty střední školy">.
	<link rel='stylesheet' type='text/css' href='styly/style.css' />
	<script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/lightbox.js"></script>
    <link href="css/lightbox.css" rel="stylesheet" />
    <script src="js/lightzap.js"></script>
   
    <LINK rel="shortcut icon" type=image/x-icon href="images/favicon.ico">
    <LINK rel=icon type=image/ico href="images/favicon.ico">
   
    <script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
    <script type="text/javascript" src="js/zobraz.js"></script>
    <script type="text/javascript">
    tinyMCE.init({
            // General options
            mode : "textareas",
            theme : "advanced",
            plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

            // Theme options
            theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		
                theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

            // Skin options
            skin : "o2k7",
            skin_variant : "gold",
            editor_selector : "mceAdvanced"

    });
    tinyMCE.init({
        mode : "textareas",
        theme : "simple",
        editor_selector : "mceSimple"
});
    </script>
  <!--analytics-->  
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39605247-1', 'tizek.cz');
  ga('send', 'pageview');

</script>

 <!--analytics-->  
    <title>class+</title>

</head>
<body>
    <?php
   
if(isset($_SESSION['prihlasen']) and @$_SESSION['prihlasen']=1)
    {require "head.php";
    
   echo "<div class='celek'>";
        
        require "menu.php";
        
    echo "<section>";
	
        require "page.php";
       
	echo "</section>
    </div>";
    }
    else{
        echo "<div class='neprihlaseny'>";
        echo " <a href='index.php?page=zadost_registrace'> Požádat o registraci</a> | <a href='index.php?page=login'> Přihlásit se</a>";
        require "page.php";
        echo "</div>";
    }
//        require "foot.php";
    ob_flush();?>
</body>
</html>
