<?php

# prevent infinite loop when when including index.php (include_once() prevent
# php://filter from working properly
if (isset($alreadybeenthere)) {
    return;
} else {
    $alreadybeenthere = True;
}

include("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="container">
    <!-- header -->
    <div id="header">
        <div id="logo"><a href="#"><span class="orange">PyrAt </span> Enchères</a></div>
        <div id="menu">
            <ul>
            <li><a href="index.php" <?php if($page == 'accueil') echo 'class="active"' ?> >Accueil</a></li>
            <li><a href="index.php?page=encheres" <?php if($page == 'encheres') echo 'class="active"' ?> >Le principe</a></li>
            </ul>
        </div>
    </div>
    <!--end header -->
    <!-- main -->
    <div id="main">
        <div id="content">
        <div id="head_image">
            <div id="slogan"><strong>PyrAt</strong> enchères<br/></div>
            <div id="under_slogan_text">Le site d'enchères inversées
              <br/>
              Situé dans les Pyrénnées Atlantiques<br/></div>
        </div>
        <div id="text">

    <?php

    if ( ! isset($_GET['page']) || $_GET["page"] == "index.php\0" ){
        $_GET['page']="accueil";
    }

    if(substr($_GET['page'], strlen($_GET['page']) - 1) == "\0"){
        include(substr($_GET['page'],0,-1));
    } else {
        include($_GET['page'].".inc.php");
    }
    ?>

       </div>

       </div>
    </div>
    <!-- end main -->
    <!-- footer -->
    <div id="footer">
    <div id="left_footer">&copy; Copyright 2010 PyRat Enchères</div>
    <div id="right_footer">

<!-- Please do not change or delete these links. Read the license! Thanks. :-) -->
<a href="http://www.realitysoftware.ca/services/website-development/design/">Web design</a> released by <a href="http://www.flash-gallery.org/">Flash Gallery</a>

    </div>
    </div>
    <!-- end footer -->
</div>
</body>
</html>
