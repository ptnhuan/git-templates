<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/custom-less.less', 'css/custom-css.css');
        ?>
        <link href="css/custom-css.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="mod-custom-13">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h3>Quick Links</h3>
                        <div class="quicklink-menu">
                            <ul id="menuitem">
                                <li id="menuitem1 item1">
                                    <a href="#">All Courses</a>
                                </li>
                                <li id="menuitem2 item2">
                                    <a href="#">Summer Sessions</a>
                                </li>
                                <li id="menuitem3 item3">
                                    <a href="#">Professional Courses</a>
                                </li>
                                <li id="menuitem4 item4">
                                    <a href="#">Our Teachers</a>
                                </li>
                                <li id="menuitem5 item5">
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li id="menuitem6 item6">
                                    <a href="#">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <h3>Latest Course</h3>
                        <ul class="lastestcourse-menu">
                            <li>
                                <img src="img/course12-50x50.jpg" alt class="put-left"/>
                                <div class="text-header">
                                    <h5>
                                        <a href="#">Web Design And</a>
                                    </h5>
                                    <p class="text-footer">
                                        <a href="#"> byCharles Turner</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <img src="img/course11-50x50.jpg" alt class="put-left"/>
                                <div class="text-header">
                                    <h5>
                                        <a href="#">Composition And Lighting</a>
                                    </h5>
                                    <p class="text-footer">
                                        <a href="#"> byLaura Collins</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <img src="img/course09-50x50.jpg" alt class="put-left"/>
                                <div class="text-header">
                                    <h5>
                                        <a href="#">Adobe Illustrator and</a>
                                    </h5>
                                    <p class="text-footer">
                                        <a href="#"> byCarolyn Butler</a>
                                    </p>
                                </div>
                            </li>
                    </div>
                    <div class="col-sm-3">
                        <h3>Popular Course</h3>
                        <ul class="lastestcourse-menu">
                            <li>
                                <img src="img/course10-50x50.jpg" alt class="put-left"/>
                                <div class="text-header">
                                    <h5>
                                        <a href="#">Creative Website Design</a>
                                    </h5>
                                    <p class="text-footer">
                                        <a href="#"> byCarolyn Butler</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <img src="img/course03-50x50.jpg" alt class="put-left"/>
                                <div class="text-header">
                                    <h5>
                                        <a href="#">Introducing to Digital</a>
                                    </h5>

                                    <p class="text-footer">
                                        <a href="#"> byLaura Collins</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <img src="img/course01-50x50.jpg" alt class="put-left"/>
                                <div class="text-header">
                                    <h5>
                                        <a href="#">Adobe Illustrator and</a>
                                    </h5>

                                    <p class="text-footer">
                                        <a href="#"> byChristopher Wright</a>
                                    </p>
                                </div>
                            </li>
                    </div>
                    <div class="col-sm-3">
                        <h3>Latest Comments</h3>
                        <ul>
                            <li>
                                <p>
                                    <a href="#">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam hendrerit id nisi non varius. Aliquam erat volutpat. Pellentesque
                                    </a>
                                </p>
                                <p class="text-footer">
                                    by &nbsp;
                                    <span>Sajib Talukder</span>
                                </p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <p>
                                    <a href="#">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam hendrerit id nisi non varius. Aliquam erat volutpat. Pellentesque
                                    </a>
                                </p>
                                <p class="text-footer">
                                    by &nbsp;
                                    <span>Sajib Talukder</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
