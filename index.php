<?php
$page = 'home.php';
if (isset($_GET['page'])) {
    if ($_GET['page'] == 'download') $page = 'download.php';
}

$home = $page == 'home.php' ? 'active' : '';
$download = $page == 'download.php' ? 'active' : '';

$header = array('<strong>In information</strong><br />we <strong>trust</strong>.',
    'A <strong>trust anchor</strong><br />for the Internet.',
    '<strong>Against<br />censorship.</strong>',
    '<strong>Supporting<br />free speach.</strong>',
    'Decentralized<br /><strong>secure</strong> names.');
?>

<!DOCTYPE html>
<html lang="en">
    <!-- Work in progress, created by Ben <dotbitgod@gmail.com>. -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Namecoin</title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="/"><img src="images/logo.png" alt="Namecoin" /></a>
                </div>
                <div class="navbar-collapse collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li class="<?=$home?>"><a href="/home">Home</a></li>
                    <li><a href="https://wiki.namecoin.info/index.php?title=FAQ">FAQ</a></li>
                    <li><a href="http://forum.namecoin.info">Forum</a></li>
                    <li><a href="https://wiki.namecoin.info">Wiki</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?=$download?>"><a href="#download"><span class="glyphicon glyphicon-download-alt"></span> Download</a></li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="fancy-graphic"><div class="container"><p><?=$header[array_rand($header)]?></p></div></div>
    <div id="content"><div class="container"><?php include $page; ?></div></div>
    <footer>
        <div class="container">
            <ul class="list-inline">
                <li><a href="https://github.com/namecoin/namecoin"><i class="fa fa-github fa-2x" title="GitHub"></i></a></li>
                <li><a href="https://twitter.com/NamecoinDotInfo"><i class="fa fa-twitter fa-2x" title="Twitter"></i></a></li>
                <li><a href="https://www.facebook.com/Namecoin.NMC"><i class="fa fa-facebook fa-2x" title="Facebook"></i></a></li>
                <li><a href="https://pay.reddit.com/r/namecoin"><i class="fa fa-users fa-2x" title="Reddit"></i></a></li>
            </ul>
        </div>
    </footer>
    </body>

</html>
