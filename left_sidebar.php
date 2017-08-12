<!--Temporary Style for Homepage ->left Sidebar, Banner & Modal  ! Will be Moved on Some Where-->

<style>

    /*Style For Left Sidebar Thumbnail*/
    .ten_reason {
        height: auto;
        border-radius: 5px;
        padding: 10px;
        margin: 20px 0;
        cursor: pointer;

        -moz-box-shadow:    0 1px 2px #bbbbbb;
        -webkit-box-shadow: 0 1px 2px #bbbbbb;
        box-shadow:         0 1px 2px #bbbbbb;
    }

    .ten_reason p {
        color: #565556;
        margin: 10px 0 10px 0;
        font-size: 12px;
        text-decoration: none;
    }

    .reason_logo img {
        padding-bottom: 10px;
        display: inline-block;
        margin: auto;
    }

    .hand img {
        display: inline-block;
        margin: auto;
    }

    /*End Style For Left Sidebar Thumbnail*/

    /*Start Style For Top Ten Slider*/
    #homeVideo .bannerImg img {
        display: inline-block;
        margin: 0 auto;
        padding-top: 10px;
    }

    #homeVideo .close{
        position: absolute;
        top: -20px;
        right: -20px;
        color: #ffffff;
        background-color: #333!important;
        width: 35px;
        height: 35px;
        border-radius: 50%;
        display: inline-block;
    }

    #homeVideo .close:focus,  #homeVideo .close:hover {
        text-decoration: none;
        cursor: pointer;
        opacity: 1;
    }

    #homeVideo .carousel-indicators li {
        background: #f2f2f2;
        border: 1px solid #f2f2f2;
    }

    #homeVideo .carousel-indicators {
        position: absolute;
        bottom: -20px;
        left: 50%;
        z-index: 15;
        width: 60%;
        padding-left: 0;
        margin-left: -30%;
        text-align: center;
        list-style: none;
        margin-top: 20px;

    }
    #homeVideo .carousel-indicators .active {
        background-color: #757575;
        border: 1px solid #757575;
    }

    #homeVideo .item {
        margin-bottom: 30px;
        height: 190px;
    }

    #homeVideo .item h3 {
        font-weight: 900;
    }

    /*End Style For Top Ten Slider*/

</style>

<div id="sidebar1">
    <div class="side-menu sidebar">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Main Menu -->
            <div class="collapse navbar-collapse side-menu-container" id="myNavbar">
                <ul class="nav navbar-nav left_menu">
                    <li class="panel panel-default <?= (Yii::app()->controller->id == 'site' && Yii::app()->controller->action->id == 'index') ? 'active' : '' ; ?>" id="dropdown">
                        <a href="<?php echo Yii::app()->homeUrl ?>">
                            <div class="M_name(_close) menu_title">Home <span class="M_icon"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></span></div>
                        </a>

                    </li>
                    <li class="panel panel-default <?= (Yii::app()->controller->id == 'customize' && Yii::app()->controller->action->id == 'wristbands') ? 'active' : '' ; ?> " id="dropdown">
                        <a href="<?php echo Yii::app()->createUrl( '//customize/wristbands' ) ?>">
                            <div class="M_name(_close) menu_title">Silicone Wristbands <span class="M_icon"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></span></div>
                        </a>
                    </li>


                    <li class="panel panel-default <?= (Yii::app()->controller->id == 'customize' && Yii::app()->controller->action->id == 'tyvek') ? 'active' : '' ; ?>" id="dropdown">
                        <a href="<?php echo Yii::app()->createUrl( '//customize/tyvek' ) ?>">
                            <div class="M_name(_close) menu_title">Tyvek Wristbands <span class="M_icon"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></span></div>
                        </a>
                    </li>

                    <li class="panel panel-default <?= (Yii::app()->controller->id == 'customize' && Yii::app()->controller->action->id == 'fabric') ? 'active' : '' ; ?>" id="dropdown">
                        <a href="<?php echo Yii::app()->createUrl( '//customize/fabric' ) ?>">
                            <div class="M_name(_close) menu_title">Fabric Wristbands <span class="M_icon"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></span></div>
                        </a>
                    </li>

                    <li class="panel panel-default <?= (Yii::app()->controller->id == 'customize' && Yii::app()->controller->action->id == 'vinyl') ? 'active' : '' ; ?>" id="dropdown">
                        <a href="<?php echo Yii::app()->createUrl( '//customize/vinyl' ) ?>">
                            <div class="M_name(_close) menu_title">Vinyl Wristbands <span class="M_icon"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></span></div>
                        </a>
                    </li>


                    <li class="panel panel-default <?= (Yii::app()->controller->id == 'customize' && Yii::app()->controller->action->id == 'lanyards') ? 'active' : '' ; ?>" id="dropdown">
                        <a href="<?php echo Yii::app()->createUrl( '//customize/lanyards' ) ?>">
                            <div class="M_name(_close) menu_title">Lanyards <span class="M_icon"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></span></div>
                        </a>
                    </li>


                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#">
                            <div class="M_name(_close) menu_title">Beverage Coolers <span class="M_icon"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></span></div>
                        </a>
                    </li>


                    <li class="panel panel-default <?= (Yii::app()->controller->id == 'site' && Yii::app()->controller->action->id == 'corkcoaster') ? 'active' : '' ; ?>" id="dropdown">
                        <a  href="<?php echo Yii::app()->createUrl( '//site/corkcoaster' ) ?>">
                            <div class="M_name(_close) menu_title">Coaster <span class="M_icon"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></span></div>
                        </a>
                    </li>

                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#">
                            <div class="M_name(_close) menu_title">Tote Bags <span class="M_icon"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></span></div>
                        </a>
                    </li>

                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#">
                            <div class="M_name(_close) menu_title">Pin Badge <span class="M_icon"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></span></div>
                        </a>
                    </li>

                    <li class="panel panel-default <?= (Yii::app()->controller->id == 'site' && Yii::app()->controller->action->id == 'beachflag') ? 'active' : '' ; ?>" id="dropdown">
                        <a  href="<?php echo Yii::app()->createUrl( '//site/beachflag' ) ?>">
                            <div class="M_name(_close) menu_title">Beach Flag <span class="M_icon"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></span></div>
                        </a>
                    </li>
                    <li class="panel panel-default" id="dropdown">
                        <a data-toggle="collapse" href="#">
                            <div class="M_name(_close) menu_title">Custom Canopy <span class="M_icon"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></span></div>
                        </a>
                    </li>


                    <li class="panel panel-default" id="dropdown">
                        <a href="<?php echo Yii::app()->createUrl( '//category/All' ) ?>">
                            <div class="M_name(_close) menu_title">Stock Item <span class="M_icon"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i></span></div>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>

<!-- Start Top Ten Reason-->
    <a data-toggle="modal" data-target="#homeVideo">

        <div class="ten_reason text-center hidden-xs hidden-sm" style="background: #ffffff">
            <div class="hand">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/topten/hand.jpg" alt="">
            </div>
            <p>Top 10 Reasons to Choose US.</p>
            <div class="reason_logo">
                <img class="img-responsive" src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/topten/uscraft_logoBanner.png" alt="uscraft">
            </div>
        </div>
    </a>
<!--End Top Ten Reason-->

</div> <!--end sidebar1-->


<!--Start Modal for Top Ten Reason-->
<div id="homeVideo" class="modal fade" role="dialog" style="margin-top: 100px;">
    <div class="modal-dialog" style="border:10px solid #000000">

        <div class="modal-content" style="border-radius: 0">
            <div class="modal-header" style="background: #ffffff;border-bottom: none;">
                <button type="button" class="close" data-dismiss="modal" style="opacity: 1;">&times;</button>
                <h4 class="modal-title"
                    style="padding-bottom:10px;font-weight: 900;font-size: 50px;line-height: 1.2; border-bottom: 6px solid #000000">
                    TOP 10 REASON <span
                            style="display: inline-block;position:relative;top:12px;right:20px;float:right"><img
                                class="img-responsive"
                                src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/topten/uscraft_logo.png"
                                alt="us_craft"></span>
                </h4>
            </div>
            <div class="modal-body"
                 style="background: #ffffff;margin-bottom: 10px;padding-top: 0;margin-top: -15px">
                <div class="row">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                            <li data-target="#myCarousel" data-slide-to="5"></li>
                            <li data-target="#myCarousel" data-slide-to="6"></li>
                            <li data-target="#myCarousel" data-slide-to="7"></li>
                            <li data-target="#myCarousel" data-slide-to="8"></li>
                            <li data-target="#myCarousel" data-slide-to="9"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-6">
                                                <div class="bannerImg">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/topten/topTen00.png"
                                                         alt="lowest Price">
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-xs-6">
                                                <h3>1. Provides Job For Future Generations</h3>
                                                <p>Our future generations matter, Jobs for our children and
                                                    grandchildren are important so that they can build a
                                                    life
                                                    for
                                                    themselves and provide for their families. Buying
                                                    USCraft is
                                                    one
                                                    step forward in believing in a better tomorrow for
                                                    generations
                                                    to
                                                    come.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-6">
                                                <div class="bannerImg">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/topten/topTen11.png"
                                                         alt="lowest Price">
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-xs-6">
                                                <h3>2. Faster Production and Delivery</h3>
                                                <p>your hands as early as possible.your orders. Which in turn
                                                    means its also in orders to be completed before we start on
                                                    wait for the production of other companies line. Meaning our
                                                    customers don’t need to We at USCraft LLC have our own
                                                    production </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-6">
                                                <div class="bannerImg">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/topten/topTen22.png"
                                                         alt="lowest Price">
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-xs-6">
                                                <h3>3. Better for the Environment</h3>
                                                <p>Our process allows manufacturing to lean toward cleaner more
                                                    eco-friendly processes. We can be sure that we are doing our
                                                    part to contribute to a cleaner environment for our
                                                    generation, not to mention the generations to come.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-6">
                                                <div class="bannerImg">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/topten/topTen33.png"
                                                         alt="lowest Price">
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-xs-6">
                                                <h3>4. Lowest Overall Cost</h3>
                                                <p>Since USCraft is the manufacturer, we don’t need to raise our
                                                    prices superfluously and the savings go to you the buyer. If
                                                    we cant get you the best price for quality of goods ordered
                                                    we don’t deserve your business.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-6">
                                                <div class="bannerImg">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/topten/topTen44.png"
                                                         alt="lowest Price">
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-xs-6">
                                                <h3>5. Easy Online Website</h3>
                                                <p>Our website is designed to be easy to use by both businesses
                                                    and customers.
                                                    We have programmed the website with all of the default
                                                    configurations needed to get started. Unlike many other
                                                    products, you do not need an army of consultants to get
                                                    started.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-6">
                                                <div class="bannerImg">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/topten/topTen55.png"
                                                         alt="lowest Price">
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-xs-6">
                                                <h3>6. Quality of Goods</h3>
                                                <p>USCraft is quality, excellent craftsmanship and a superior
                                                    product. We only use the highest quality materials to make
                                                    our products. Our goal is to make our customers happy with
                                                    their purchase so we can be great business partners for the
                                                    foreseeable future.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-6">
                                                <div class="bannerImg">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/topten/topTen66.png"
                                                         alt="lowest Price">
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-xs-6">
                                                <h3>7.Quality Customer Service</h3>
                                                <p>We really care about our products. If you run into any
                                                    problems you can contact us doing anything and everything we
                                                    can to help you resolve it quickly and

                                                    Effortlessly. We are here 24 hours a day to help with your
                                                    needs.
                                                    <br/><em>Feel free to Contact us anytime.</em>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-6">
                                                <div class="bannerImg">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/topten/topTen77.png"
                                                         alt="lowest Price">
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-xs-6">
                                                <h3>8. Free Artwork Assistance</h3>
                                                <p>If you feel the need to see what your product might look like
                                                    before purchase just let us know and well be happy to assist
                                                    you. Unlike other companies USCraft provides free artwork
                                                    assistance to make your purchase easier. If we ask for your
                                                    payment before you’re happy let us know, we may have been
                                                    hacked.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-6">
                                                <div class="bannerImg">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/topten/topTen88.png"
                                                         alt="lowest Price">
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-xs-6">
                                                <h3>9. Variety of Products</h3>
                                                <p>We carry a variety of products from custom silicon
                                                    wristbands, custom convention tents to tote bags and pins to
                                                    help your promotional event go smoothly. If we don’t have
                                                    what you need on our website just lets us know via email and
                                                    we’ll see if we can make that item for you.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="row">
                                            <div class="col-sm-4 col-xs-6">
                                                <div class="bannerImg">
                                                    <img src="<?php echo Yii::app()->theme->baseUrl ?>/assets/images/topten/topTen99.png"
                                                         alt="lowest Price">
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-xs-6">
                                                <h3>10. Secure Easy Ordering</h3>
                                                <p> Orders can be placed online using either a credit card or
                                                    PayPal. All transactions are SSL-secured and guarantee your
                                                    privacy. You can also order by check, wire transfer, or with
                                                    a corporate purchase order.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <a style="background-image:none;" class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon">
                                        <svg>
                                            <use x="20" y="60" xlink:href="#leftArrow"></use>
                                        </svg>
                                    </span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <a style="background-image:none;" class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon">
                                        <svg>
                                            <use x="35" y="60" xlink:href="#rightArrow"></use>
                                        </svg>
                                    </span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!--End Modal for top ten reason-->


<!--All SVG Icon Here-->
<div style="display:none">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="30px" height="30px" viewBox="0 0 60 60" enable-background="new 0 0 60 60" xml:space="preserve">

                <g id="rightArrow"><polygon fill="#828182" points="18.924,14.761 11.659,28.875 11.659,0.96 "/></g>
                <g id="leftArrow"><polygon fill="#828182" points="11.658,14.761 18.924,28.875 18.924,0.96 "/></g>
            </svg>

</div>
<!--End All SVG Icon Here-->




