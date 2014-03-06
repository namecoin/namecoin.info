<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link rel="icon" type="image/icon-x" href="./gfx/favicon.ico" />
        <link rel="shortcut icon" href="./gfx/favicon.ico" type="image/icon-x" />        
        <title>Namecoin</title>
        <link rel="stylesheet" href="style_v01.css" type="text/css">
        <link rel="stylesheet" href="style_responsive_v01.css" type="text/css">
    </head>
<body>

<div style="border=0;
            background-color:#61B0DE;
            background: -moz-linear-gradient(top, #93C2DE, #2E4E61);
            background: -webkit-gradient(linear, left top, left bottom, from(#93C2DE), to(#2E4E61));
            padding:20px;">
            
            <img src="./gfx/nmc.png" alt="namecoin">

        <div style="width:1000px;padding:0px;margin:0px;">
            <h1>a secure general purpose p2p key/value storage system</h1>
            <?php  // menu
                $menuItems = array_reverse(array("Home" => "home.php", 
                                                                "FAQ" => "http://dot-bit.org/FAQ", //"faq.php",
                                                                "Forum" => "http://dot-bit.org/forum/index.php",
                                                                "Wiki" => "http://dot-bit.org"));
                writeMenuEntries($menuItems);  // uses variable $currentFile and css classes: menuItem and activeMenuItem
            ?>
        </div>        
        
</div>
