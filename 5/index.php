<html>
    <head>
        <title>template 5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/custom-less.less', 'css/custom-css.css');
        ?>
        <link href="css/custom-css.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/custom-js.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="row">
            <div class="container">
                <div class="block-wrapper col-md-8 col-sm-12 col-xs-12">
                    <div class="them-cta-block">
                        <div class="live-demo">
                            <a href="#">Live Demo</a>
                        </div>
                        <div class="license-cart-wrapper">
                            <p class="price">
                                <sup>$</sup><span>169</span>
                            </p>
                            <form class="eStore-button-form">
                                <span>License : </span>
                                <select class="select-list">
                                    <option value="Single Application">Single Application</option>
                                    <option value="Multiple Applications [+ $330.00]">Multiple Applications [+ $330.00]</option>
                                </select>
                                <br>
                                <input type="submit" value="Add to Cart" class="btn-cart">
                            </form>
                        </div>
                        <div class="notice-block license-notes">
                            <p>Single Application License: $169 | Multiple Applications License: $499 </p>
                            <p><a href="#" target="_blank">(License details)</a></p>
                        </div>
                        <div class="notice-block notice-block-guarantee">
                            <h3>100% Money-Back Guarantee</h3>
                            <p>We confidently offer a 100% money-back guarantee with all of our Moodle/Mahara themes. If you decide you don’t want to use it and email us why within <strong>30 days</strong> of buying, we promise you a full refund – no questions asked!</p>
                        </div>
                    </div>
                    <div class="notice-block notice-block-info">
                        <h3>Need a matching Mahara theme?</h3>
                        <p>We have released a <a href="#">responsive Mahara theme “Jupiter”</a>, which is designed to visually match our Moodle theme “Impression”. If you are planning to set up a  seamlessly integrated Moodle and Mahara installation (<a href="#" target="_blank">“Mahoodle”</a>), you need to <a href="#" target="_blank">check out the “Jupiter” theme</a>.</p>
                    </div>
                    <div class="responsive-tabs responsive-tabs--enabled">
                        <ul class="responsive-tabs-list">
                            <li class="list-item-active" stt="0">Description</li>
                            <li stt="1">Changelog</li>
                            <li stt="2">Credits</li>
                        </ul>
                        <h2 class="tablet-mobile" stt="0">Description <i class="fa fa-sort-down"></i></h2>
                        <div class="tabcontent tabcontent-active" stt="0">
                            <h4 class="tabby-first-title">Theme Summary</h4>
                            <ul class="list-unstyled">
                                <li>Theme Version: <strong>v1.4</strong></li>
                                <li>Compatibility: Moodle 2.9/3.0/3.1</li>
                                <li>PHP Compatibility: PHP 5.5.x+</li>
                                <li>Theme Parents: Moodle Bootstrap Theme (Bootstrapbase)</li>
                            </ul>
                            <h4>Theme Features</h4>
                            <ul class="theme-features theme-generic-features list-unstyled">
                                <li><i class="fa fa-check"></i>Responsive design</li>
                                <li><i class="fa fa-check"></i>6 colour schemes (switch via theme settings)
                                    <a href="#" target="_blank">Default</a>, <a href="#" target="_blank">Aqua</a>, <a href="#" target="_blank">Blue</a>, <a href="#" target="_blank">Purple</a>, <a href="#" target="_blank">Red</a>, <a href="#" target="_blank">Yellow</a>
                                </li>
                                <li><i class="fa fa-check"></i>Custom logo</li>
                                <li><i class="fa fa-check"></i>Custom menus</li>
                                <li><i class="fa fa-check"></i>User menu</li>
                                <li><i class="fa fa-check"></i>Moodle Dock</li>
                                <li><i class="fa fa-check"></i>2 columns fluid layout – Left/right sidebar</li>
                                <li><i class="fa fa-check"></i>Frontpage background slideshow(add up to  6 slides)</li>
                                <li><i class="fa fa-check"></i>Frontpage search courses overlay <span class="label label-success">NEW</span></li>
                                <li><i class="fa fa-check"></i>Frontpage partners/press section (add up to 6 logos)</li>
                                <li><i class="fa fa-check"></i>Frontpage alerts (add up to  3 alerts)</li>
                                <li><i class="fa fa-check"></i>Frontpage promo carousel (add up to 6 items) <span class="label label-success">NEW</span></li>
                                <li><i class="fa fa-check"></i>Frontpage promo carousel YouTube/Vimeo video (add up to 6 videos) <span class="label label-success">NEW</span></li>
                                <li><i class="fa fa-check"></i>Frontpage featured blocks (add up to 8 blocks)</li>
                                <li><i class="fa fa-check"></i>Frontpage benefits section (add up to 6 items)</li>
                                <li><i class="fa fa-check"></i>Frontpage testimonials section (add up to 6 items)</li>
                                <li><i class="fa fa-check"></i>Frontpage Call-To-Action section</li>
                                <li><i class="fa fa-check"></i>Header/Footer widget areas</li>
                                <li><i class="fa fa-check"></i>Footer content blocks (3 blocks) (<a href="#" target="_blank">Useful HTML code</a>)</li>
                                <li><i class="fa fa-check"></i>Footer social media section</li>
                                <li><i class="fa fa-check"></i>Page “back-to-top” link</li>
                                <li><i class="fa fa-check"></i>Custom CSS</li>
                                <li><i class="fa fa-check"></i>Google analytics</li>
                                <li><i class="fa fa-check"></i>Supports FontAwesome icons (600+ icons) <span class="label label-success">NEW</span> </li>
                                <li><i class="fa fa-check"></i>Supports Bootstrap components <span class="label label-success">NEW</span> (<a href="#" target="_blank">Basics</a> | <a href="#" target="_blank">Advanced</a>)</li>
                                <li><i class="fa fa-check"></i>Supports Bootstrap Glyphicons</li>
                                <li><i class="fa fa-check"></i>Supports Responsive Video (YouTube/Vimeo)(<a href="#" title="How to add responsive videos in Moodle themes Gourmet and Herald">Learn more</a>)</li>
                                <li><i class="fa fa-check"></i>Compatible Browsers: IE10+, Latest Chrome, Latest Firefox, Latest Safari</li>
                            </ul>
                            <h4>Theme Installation</h4>
                            <ol>
                                <li>Download the theme zip file</li>
                                <li>Extract the /impression/ folder and the files.</li>
                                <li>Upload the /impression/ folder to your hosting server’s Moodle theme directory:<br>
                                    <code style="margin-left:20px;">Your Moodle installation &gt; theme &gt; impression</code> </li>
                                <li>Log into your Moodle site as an admin, and navigate to the theme selector:<br>
                                    <code style="margin-left:20px;">Settings &gt; Site administration &gt; Appearance &gt; Themes &gt; Theme selector</code></li>
                                <li>Click “use theme” next to the impression theme to activate</li>
                            </ol>
                            <h4>Theme Support</h4>
                            <p>If you have any question regarding this theme or need support, please email us at <a href="#">elearning@3rdwavemedia.com</a></p>
                        </div>
                        <h2 class="tablet-mobile" stt="1">Changelog <i class="fa fa-sort-down"></i></h2>
                        <div class="tabcontent" stt="1">
                            <h4 class="tabby-first-title">Changelog</h4>
                            <p><strong>17/07/2016: v1.4</strong></p>
                            <ul class="turnon-liststyle">
                                <li>Added support for global search in Moodle 3.1</li>
                                <li>Added Vimeo to social media links</li>
                                <li>Theme improvements</li>
                                <li>Minor bug fixes</li>
                                <li>Affected files &amp; folders:<br>
                                    <code>impression &gt; fonts (changed)</code><br>
                                    <code>impression &gt; layout (changed)</code><br>
                                    <code>impression &gt; pix_core/a/ (changed)</code><br>
                                    <code>impression &gt; style (changed)</code><br>
                                    <code>impression &gt; settings.php (changed)</code><br>
                                    <code>impression &gt; version.php (changed)</code></li>
                            </ul>
                            <p><strong>12/02/2016: v1.3</strong></p>
                            <ul class="turnon-liststyle">
                                <li>Added support for Bootstrap tooltips and popovers</li>
                                <li>Fixed slideshow 5 and 6 display issue</li>
                                <li>Minor theme improvements</li>
                                <li>Affected files &amp; folders:<br>
                                    <code>impression &gt; javascript (changed)</code><br>
                                    <code>impression &gt; layout (changed)</code><br>
                                    <code>impression &gt; lib.php (changed)</code><br>
                                    <code>impression &gt; version.php (changed)</code></li>
                            </ul>
                            <p><strong>14/01/2016: v1.2</strong></p>
                            <ul class="turnon-liststyle">
                                <li>Fixed header email bug.</li>
                                <li>Affected files &amp; folders:<br>
                                    <code>impression &gt; layout &gt; includes &gt; header.php (changed)</code></li>
                            </ul>
                            <p><strong>09/01/2016: v1.1</strong></p>
                            <ul class="turnon-liststyle">
                                <li>Fixed frontpage CTA section URL bug.</li>
                                <li>Affected files &amp; folders:<br>
                                    <code>impression &gt; layout &gt; includes &gt; home-cta-section.php (changed)</code></li>
                            </ul>
                            <p><strong>20/12/2015: v1.0</strong></p>
                            <ul class="turnon-liststyle">
                                <li>Initial release</li>
                            </ul>
                        </div>
                        <h2 class="tablet-mobile" stt="2">Credits <i class="fa fa-sort-down"></i></h2>
                        <div class="tabcontent" stt="2">
                            <h4 class="tabby-first-title">Theme Credits</h4>
                            <ul class="turnon-liststyle">
                                <li><a href="#" target="_blank">Twitter Bootstrap 3</a></li>
                                <li><a href="#" target="_blank">Moodle Bootstrap Theme</a> (Theme parents)</li>
                                <li><a href="#" target="_blank">Flexslider</a></li>
                                <li><a href="#" target="_blank">FontAwesome</a></li>
                                <li><a href="#" target="_blank">Fitvids</a></li>
                                <li><a href="#" target="_blank">Google Fonts</a></li>
                                <li>Icons – The icons used in this theme are provided free of charge under a <a href="#" target="_blank">Creative Commons Attribution 3.0 License</a> by <a href="#" target="_blank">FatCow Hosting</a></li>
                                <li>Demo Images – <a href="#" target="_blank">picjumbo.com</a>, <a href="#" target="_blank">startupstockphotos.com</a> and <a href="#" target="_blank">deathtothestockphoto.com</a> (All images are shown for demonstration purposes only)</li>
                                <li>User profile images – <a href="#" target="_blank">uifaces.com</a></li>
                                <li>Moodle Themes – <a href="#" target="_blank">Bootstrapbase</a>, <a href="#" target="_blank">Clean</a> and <a href="#" target="_blank">Essential</a></li>
                                <li>HTML5 Template – <a href="#" target="_blank">Tempo</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
