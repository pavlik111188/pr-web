<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 18.06.2016
 * Time: 22:24
 *
 */
require("includes/app_top.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo WEBSITE_NAME; ?></title>
    <!-- Latest compiled and minified CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/preloader.css" />
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    <link rel="icon" href="img/logo.ico" type="image/x-icon">
</head>
<body id="main">
<?php
    $active = 1;
    require("nav.php");
?>
    <div class="intro-header">
        <div class="col-xs-12 text-center header_title">
            <h1 class="main_title">PR-WEB</h1>
            <div class="lines_area">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <h3 class="main_sub_title">Web Studio</h3>
        </div>
    </div>
    <div class="row content_main">
        <div class="col-md-8 col-md-offset-2 col-xs-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="area_main_content">
                        <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3">
                            <div class="block_main_first">
                                <div class="block_main_art hidden-xs">
                                    <i class="icon major glyphicon glyphicon-send"></i>
                                </div>
                                <div class="main_article_text">
                                    <article class="hidden-xs">
                                        We are awaiting for your letter with order or question or proposition
                                    </article>
                                    <div class="">
                                        <button class="btn btn-primary contact">Contact Us</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3">
                            <div class="block_main_second">
                                <div class="block_main_art hidden-xs">
                                    <i class="icon major glyphicon glyphicon-plane"></i>
                                </div>
                                <div class="main_article_text">
                                    <article class="hidden-xs">
                                        We are awaiting to start a working with you
                                    </article>
                                    <div class="">
                                        <button class="btn btn-primary start">Get Started</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3">
                            <div class="block_main_third">
                                <div class="block_main_art hidden-xs">
                                    <i class="icon major glyphicon glyphicon-usd"></i>
                                </div>
                                <div class="main_article_text">
                                    <article class="hidden-xs">
                                        We are awaiting when would you familiarize with our prices
                                    </article>
                                    <div class="">
                                        <button class="btn btn-primary prices">Prices</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section id="contact_us">
                        <h3>Contact Us</h3>
                        <form action="javascript:void(0);">
                            <fieldset class="form-group">
                                <label for="inputName">Name</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Enter your name" required>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="inputEmail">Email address</label>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Enter email" required>
                                <small class="text-muted">We'll never share your email with anyone else.</small>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="3" placeholder="Enter your message" required></textarea>
                            </fieldset>
                            <button class="btn btn-primary" id="sendMessage">Submit</button>
                        </form>
                    </section>
                    <section id="start">
                        <h3>Get Started</h3>
                            <div class="col-md-6 col-xs-12 site_type">
                                <label for="type_site">Select a type of your new Website</label>
                                <select id="type_site" class="form-control">
                                    <option disabled selected value> -- select a type -- </option>
                                    <option value="blog">Blog</option>
                                    <option value="personal">Personal</option>
                                    <option value="busines">Business</option>
                                    <option value="market">Market</option>
                                    <option value="job">Job Board</option>
                                    <option value="question">Question & Answer Website</option>
                                    <option value="portfolio">Portfolio</option>
                                    <option value="multilingual">Multilingual Websites</option>
                                    <option value="knowledgebase">Knowledgebase / Wiki Websites</option>
                                    <option value="podcasting">Podcasting Websites</option>
                                    <option value="photography">Photography Websites</option>
                                    <option value="school">School or College Websites</option>
                                </select>
                            </div>
                            <div class="col-md-10 site_template">
                                <label for="type_site">Select a template of your new Website</label>
                                        <div class="carousel slide" id="myCarousel">
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <ul class="thumbnails">
                                                        <li class="col-sm-3 col-xs-3">
                                                            <div class="fff">
                                                                <div class="thumbnail">
                                                                    <a href="javascript:void(0);" thumb="4"><img src="img/blog_4.png" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-sm-3 col-xs-3">
                                                            <div class="fff">
                                                                <div class="thumbnail">
                                                                    <a href="javascript:void(0);" thumb="3"><img src="img/blog_3.png" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-sm-3 col-xs-3">
                                                            <div class="fff">
                                                                <div class="thumbnail">
                                                                    <a href="javascript:void(0);" thumb="1"><img src="img/blog_1.png" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-sm-3 col-xs-3">
                                                            <div class="fff">
                                                                <div class="thumbnail">
                                                                    <a href="javascript:void(0);" thumb="2"><img src="img/blog_2.png" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div><!-- /Slide1 -->
                                                <div class="item">
                                                    <ul class="thumbnails">
                                                        <li class="col-sm-3 col-xs-3">
                                                            <div class="fff">
                                                                <div class="thumbnail">
                                                                    <a href="javascript:void(0);" thumb="5"><img src="img/blog_5.png" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-sm-3 col-xs-3">
                                                            <div class="fff">
                                                                <div class="thumbnail">
                                                                    <a href="javascript:void(0);" thumb="6"><img src="img/blog_6.png" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-sm-3 col-xs-3">
                                                            <div class="fff">
                                                                <div class="thumbnail">
                                                                    <a href="javascript:void(0);" thumb="7"><img src="img/blog_7.png" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-sm-3 col-xs-3">
                                                            <div class="fff">
                                                                <div class="thumbnail">
                                                                    <a href="javascript:void(0);" thumb="8"><img src="img/blog_8.png" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div><!-- /Slide2 -->
                                                <div class="item">
                                                    <ul class="thumbnails">
                                                        <li class="col-sm-3 col-xs-3">
                                                            <div class="fff">
                                                                <div class="thumbnail">
                                                                    <a href="javascript:void(0);" thumb="9"><img src="img/blog_9.png" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-sm-3 col-xs-3">
                                                            <div class="fff">
                                                                <div class="thumbnail">
                                                                    <a href="javascript:void(0);" thumb="10"><img src="img/blog_10.png" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-sm-3 col-xs-3">
                                                            <div class="fff">
                                                                <div class="thumbnail">
                                                                    <a href="javascript:void(0);" thumb="11"><img src="img/blog_11.png" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="col-sm-3 col-xs-3">
                                                            <div class="fff">
                                                                <div class="thumbnail">
                                                                    <a href="javascript:void(0);" thumb="12"><img src="img/blog_12.png" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div><!-- /Slide3 -->
                                            </div>
                                            <nav>
                                                <ul class="control-box pager">
                                                    <li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                                                    <li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></a></li>
                                                </ul>
                                            </nav>
                                            <!-- /.control-box -->

                                        </div><!-- /#myCarousel -->
                            </div>
                            <div class="col-md-6 col-xs-12 site_contact_form">
                                <form action="javascript:void(0);">
                                    <fieldset class="form-group">
                                        <label for="orderInputName">Name</label>
                                        <input type="text" class="form-control" id="orderInputName" placeholder="Enter your name" required>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label for="orderInputEmail">Email address</label>
                                        <input type="email" class="form-control" id="orderInputEmail" placeholder="Enter email" required>
                                        <small class="text-muted">We'll never share your email with anyone else.</small>
                                    </fieldset>
                                    <button id="sendOrder" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                    </section>
                    <section id="prices">
                        <h3>Prices</h3>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="price_list">
                                    <div><span>landing-page</span> <span>from $200</span></div>
                                    <div><span>Online business card</span> <span>from $250</span></div>
                                    <div><span>Online shop</span> <span>from $1000</span></div>
                                    <div><span>Portal site</span> <span>from $1500</span></div>
                                    <div><span>Blog and forum</span> <span>from $2000</span></div>
                                    <div><span>SEO optimization</span> <span>$400 per/month</span></div>
                                    <div><span>For other tasks</span> <span>$15-20 / hr</span></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="cssload-spinner">
                        <div class="cssload-cube cssload-cube0"></div>
                        <div class="cssload-cube cssload-cube1"></div>
                        <div class="cssload-cube cssload-cube2"></div>
                        <div class="cssload-cube cssload-cube3"></div>
                        <div class="cssload-cube cssload-cube4"></div>
                        <div class="cssload-cube cssload-cube5"></div>
                        <div class="cssload-cube cssload-cube6"></div>
                        <div class="cssload-cube cssload-cube7"></div>
                        <div class="cssload-cube cssload-cube8"></div>
                        <div class="cssload-cube cssload-cube9"></div>
                        <div class="cssload-cube cssload-cube10"></div>
                        <div class="cssload-cube cssload-cube11"></div>
                        <div class="cssload-cube cssload-cube12"></div>
                        <div class="cssload-cube cssload-cube13"></div>
                        <div class="cssload-cube cssload-cube14"></div>
                        <div class="cssload-cube cssload-cube15"></div>
                    </div>
                    <section id="messagesFlash">
                        <h3></h3>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/scrypt.js"></script>
<input type="hidden" id="site_type" value="">
<input type="hidden" id="site_thumb" value="">
</body>
</html>
