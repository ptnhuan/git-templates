<html>
    <head>
        <title>template 4</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('/libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/custom-less.less', 'css/custom-css.css');
        ?>
        <link href="css/custom-css.css" rel ="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="available-course">
            <div class="container">
                <div class="course-list col-md-9">
                    <h2>Available course</h2>
                    <div class="course-list-all">
                        <div class="coursebox">
                            <h3 class="course-name">
                                <a href="#">Demo Course 1.1</a></a>
                            </h3>
                            <div class="enrolmenticons">
                                <img src="img/withoutpassword.png">
                            </div>
                            <div class="content">
                                <p>Welcome to our Moodle demo site! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                            </div>
                        </div>
                        <div class="coursebox">
                            <h3 class="course-name">
                                <a href="#">Demo Course 1.2</a></a>
                            </h3>
                            <div class="enrolmenticons">
                                <img src="img/withoutpassword.png">
                            </div>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                            </div>
                        </div>
                        <div class="coursebox">
                            <h3 class="course-name">
                                <a href="#">Demo Course 1.3</a></a>
                            </h3>
                            <div class="enrolmenticons">
                                <img src="img/withoutpassword.png">
                            </div>
                            <div class="content">
                                <p>Course summary goes here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                            </div>
                        </div>
                        <div class="coursebox">
                            <h3 class="course-name">
                                <a href="#">Bootstrap Components Advanced</a></a>
                            </h3>
                            <div class="enrolmenticons">
                                <img src="img/withoutpassword.png">
                            </div>
                            <div class="content">
                                <span class="label label-warning">NEW</span>
                                <p>More Bootstrap components you can use...</p>
                                <a class="btn btn-primary" href="#"><i class="fa fa-play-circle"></i>Explore Now</a>
                            </div>
                        </div>
                        <div class="coursebox">
                            <h3 class="course-name">
                                <a href="#">Bootstrap Components Basics</a></a>
                            </h3>
                            <div class="enrolmenticons">
                                <img src="img/withoutpassword.png">
                            </div>
                            <div class="content">
                                <span class="label label-warning">NEW</span>
                                <p>Come and explore all the useful Bootstrap components you can use in this Moodle course!</p>
                                <a class="btn btn-primary" href="#"><i class="fa fa-play-circle"></i>Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
