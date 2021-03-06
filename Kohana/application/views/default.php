<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title><?php echo $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="<?php echo $meta['description'] ?>" />
        <meta name="title" content="<?php echo $title ?>" />
        <meta name="keywords" content="<?php echo $meta['keywords'] ?>" />
        <meta name="author" content="Holyvent" />
        <meta name="apple-itunes-app" content="app-id=931170014, app-argument=holyvent.com/<?=$_SERVER["REQUEST_URI"] ?>">
        <link rel="shortcut icon" href="/img/favicon.ico"> 
        <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), PHP_EOL ?>
        <noscript>
                <link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
        </noscript>
        <?php foreach ($js as $jscript) echo HTML::script($jscript), PHP_EOL ?> 
                
    </head>
    <body>
        <?php if( isset($navigation))  { echo $navigation; } ?>
        <?php echo $bodycontent ?>
    </body>
</html>
