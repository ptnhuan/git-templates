<html>
    <head>
        <title>template 4</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if(!class_exists('lessc')){
            include ('../libs/lessc.inc.php');
        }
        $less = new lessc;
        $less ->compileFile('less/custom-less.less', 'css/custom-css.css');
        ?>
        <link href="css/custom-css.css" rel ="stylesheet" type="text/css"/>
    </head>
    <body>
        <div>TODO write content</div>
    </body>
</html>
