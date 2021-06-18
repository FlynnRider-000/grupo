<?php if(!defined('s7V9pz')) {die();}?><?php
fc('grupo');
$erpgtitle = '404_page_title';
$erpgerror = '404_page_oops';
$erpgheading = '404_page_heading';
$erpgdesc = '404_page_desc';
$erpgbtn = '404_page_go_to_btn';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php gec($GLOBALS["lang"]->$erpgtitle) ?>">
    <meta name="author" content="Baevox">
    <meta name="generator" content="Grupo">
    <title><?php gec($GLOBALS["lang"]->$erpgtitle) ?></title>
    <link rel="shortcut icon" type="image/png" href="<?php gec(mf("grupo/global/favicon.png")); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,700i,800" rel="stylesheet">
    <link href="<?php gec($GLOBALS["default"]->weburl) ?>gem/tone/404.css" rel="stylesheet">
</head>
<body>
    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h1><?php gec($GLOBALS["lang"]->$erpgerror) ?></h1>
            </div>
            <h2><?php gec($GLOBALS["lang"]->$erpgheading) ?></h2>
            <p>
                <?php gec($GLOBALS["lang"]->$erpgdesc) ?>
            </p>
            <a href="<?php gec(url()); ?>"><?php gec($GLOBALS["lang"]->$erpgbtn) ?></a>
        </div>
    </div>

</body>
</html>