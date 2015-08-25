<?php
/**
 * Файл Index.php
 *
 *
 * Отображает страницы сайта, работающего на WordPress
 *
 * @package WordPress
 * @subpackage Lone_Star
 * @since Lone Star 1.0
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/lonestar/css/owl.carousel.css">
    <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/lonestar/css/jquery.fancybox.css">
    <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/lonestar/css/animate.css">
    <link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/lonestar/css/google-map.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel='stylesheet' id='main-style' href='<?php echo get_stylesheet_uri(); ?>' type='text/css' media='all'/>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
    <script src="http://localhost/wordpress/wp-content/themes/lonestar/scripts/jquery-1.9.1.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- owl-carousel-->
    <script src="http://localhost/wordpress/wp-content/themes/lonestar/scripts/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $('.carousel1').owlCarousel({
                autoplay: 1,
                margin: 30,
                smartSpeed: 450,
                loop: true,
                dots: true,
                dotsEach: 1,
                items: 1,
                responsiveClass: true
            });
        });
    </script>
    <!--stickUp-->
    <script src="http://localhost/wordpress/wp-content/themes/lonestar/scripts/tmstickup.js"></script>
    <script>
        $(document).ready(function () {
            $('#stuck_container').TMStickUp()
        });
    </script>
    <!-- Parallax Scroll-->
    <script src="http://localhost/wordpress/wp-content/themes/lonestar/scripts/jquery.rd-parallax.js"></script>
    <!-- Superfish Menu Plugin-->
    <script src="http://localhost/wordpress/wp-content/themes/lonestar/scripts/superfish.js"></script>
    <!--Navbar -->
    <script src="http://localhost/wordpress/wp-content/themes/lonestar/scripts/jquery.rd-navbar.js"></script>
    <!--fancyBox-->
    <script src="http://localhost/wordpress/wp-content/themes/lonestar/scripts/jquery.fancybox.js?v=2.1.5"></script>
    <script>
        $(document).ready(function () {
            $('.fancybox').fancybox();
        });
    </script>
    <!-- Animation wow-->
    <script src="http://localhost/wordpress/wp-content/themes/lonestar/scripts/wow.js"></script>
    <script>
        $(document).ready(function () {
            new WOW().init();
        });
    </script>
    <!-- Responsive tabs-->
    <script src="http://localhost/wordpress/wp-content/themes/lonestar/scripts/jquery.responsive.tabs.js"></script>
    <script>
        $(document).ready(function () {
            $('.resp-tabs').easyResponsiveTabs();
        });
    </script>
    <!--owl-carousel2 for resp tabs -->
    <script>
        $(document).ready(function () {
            $('.carousel2').owlCarousel({
                margin: 30,
                smartSpeed: 450,
                loop: true,
                dots: false,
                dotsEach: 1,
                nav: true,
                navClass: ['owl-prev fa fa-angle-left', 'owl-next fa fa-angle-right'],
                responsive: {
                    0: {items: 1},
                    320: {items: 1},
                    768: {items: 3},
                    1199: {items: 3}
                }
            });
        });
    </script>
    <!-- simple Smoothscroll-->
    <script src="http://localhost/wordpress/wp-content/themes/lonestar/scripts/jquery.mousewheel.min.js"></script>
    <script src="http://localhost/wordpress/wp-content/themes/lonestar/scripts/jquery.simplr.smoothscroll.min.js"></script>
    <script>
        $(document).ready(function () {
            $.srSmoothscroll({
                step: 150,
                speed: 800
            });
        });
    </script>
    <!-- Google Map-->
    <script src="https://www.google.com/maps/api/js?sensor=false"></script>
    <script src="http://localhost/wordpress/wp-content/themes/lonestar/scripts/jquery.rd-google-map.js"></script>
    <script>
        $(document).ready(function () {
            var o = $('#google-map');
            if (o.length > 0) {
                o.googleMap({
                    styles: [{
                        "featureType": "administrative",
                        "elementType": "all",
                        "stylers": [{"visibility": "on"}]
                    }, {
                        "featureType": "administrative.province",
                        "elementType": "all",
                        "stylers": [{"visibility": "off"}]
                    }, {
                        "featureType": "administrative.locality",
                        "elementType": "all",
                        "stylers": [{"visibility": "on"}]
                    }, {
                        "featureType": "administrative.neighborhood",
                        "elementType": "all",
                        "stylers": [{"visibility": "on"}]
                    }, {
                        "featureType": "administrative.land_parcel",
                        "elementType": "all",
                        "stylers": [{"visibility": "on"}]
                    }, {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]
                    }, {
                        "featureType": "landscape.man_made",
                        "elementType": "all",
                        "stylers": [{"visibility": "off"}]
                    }, {
                        "featureType": "landscape.natural",
                        "elementType": "all",
                        "stylers": [{"visibility": "on"}]
                    }, {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "off"}]
                    }, {
                        "featureType": "poi.attraction",
                        "elementType": "all",
                        "stylers": [{"visibility": "off"}]
                    }, {
                        "featureType": "poi.business",
                        "elementType": "all",
                        "stylers": [{"visibility": "off"}]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [{"saturation": -100}, {"visibility": "simplified"}]
                    }, {
                        "featureType": "road.arterial",
                        "elementType": "all",
                        "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]
                    }, {
                        "featureType": "road.local",
                        "elementType": "all",
                        "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]
                    }, {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [{"saturation": -100}, {"visibility": "simplified"}]
                    }, {
                        "featureType": "transit",
                        "elementType": "labels.text",
                        "stylers": [{"visibility": "off"}]
                    }, {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]
                    }, {
                        "featureType": "water",
                        "elementType": "labels",
                        "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]
                    }]
                });
            }
        });
    </script>
    <link href='http://fonts.googleapis.com/css?family=Maiden+Orange' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ewert' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div id="stuck_container" class="stuck_container">
        <div class="container">
            <nav>
                <ul class="sf-menu" data-type="navbar">
                    <li class="active">
                        <a href="javascript:void(0)">main</a>
                        <ul class="clearfix">
                            <li><a href="javascript:void(0)">history</a></li>
                            <li><a href="javascript:void(0)">offers</a></li>
                            <li><a href="javascript:void(0)">news</a>
                                <ul class="clearfix">
                                    <li><a href="javascript:void(0)">fresh</a></li>
                                    <li><a href="javascript:void(0)">archive</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">menu</a></li>
                    <li><a href="javascript:void(0)">services</a></li>
                    <li><a href="javascript:void(0)">reservations</a></li>
                    <li><a href="javascript:void(0)">contacts</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<main>
    <section class="presentation parallax parallax header-parallax overflow"
             data-url="http://localhost/wordpress/wp-content/themes/lonestar/images/presentation/parallax-01.jpg" data-mobile="true"
             data-direction="normal" data-speed="1">
        <div class="container">
            <div class="brand">
                <h1><a href="./">lone<span></span>star</a></h1>
                <span>2012</span>

                <p>steak house</p>
            </div>

            <div class="advertising shadow clearfix">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 left-part">
                        <div class="owl-carousel carousel1">
                            <div class="item"><img src="http://localhost/wordpress/wp-content/themes/lonestar/images/presentation/img2.jpg" alt="share"></div>
                            <div class="item"><img src="http://localhost/wordpress/wp-content/themes/lonestar/images/presentation/img3.jpg" alt="share"></div>
                            <div class="item"><img src="http://localhost/wordpress/wp-content/themes/lonestar/images/presentation/img1.jpg" alt="share"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 right-part">
                        <div class="share">
                            <figure>
                                <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/presentation/img4.jpg" alt="share">
                                <figcaption>
                                    <h2>dine early and <br><span>save!</span></h2>
                                </figcaption>
                            </figure>
                            <figure>
                                <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/presentation/img5.jpg" alt="share">
                                <figcaption>
                                    <h2>give the gift of <br><span class="steak">steak</span></h2>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="offers parallax" data-url="http://localhost/wordpress/wp-content/themes/lonestar/images/offers/parallax-02.jpg" data-mobile="true" data-speed="1"
             data-direction="normal">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="features wow fadeInLeft" data-wow-delay="0.2s">
                        <h2><span>100%</span> <br>organic products</h2>

                        <p>Cum socis natoqu eagnis dist mte dulmuese feugiata lesuada lecenas stricies ase ledatyfenanec
                            sit
                            aeaserta ermentas ts dolor.</p>
                        <a class="button organic" href="javascript:void(0)">read more</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <h2>today's <span>hot</span> offers</h2>

                        <div class="separator"></div>
                        <div class="separator thin"></div>
                        <div class="menu-wrapper">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <figure>
                                        <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/offers/img6.jpg" alt="menu">
                                        <figcaption>
                                            <h3>meas delouyas</h3>

                                            <p>Meciegast nveritekytrs lertyasu aysety keretabo serde fae keremo eniptes
                                                ades.
                                                Bolernatur
                                                aut
                                                oditaut. onsequuntur magni dolornytarsas btretferas qui ratione</p>
                                            <a class="button" href="javascript:void(0)">read more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <figure>
                                        <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/offers/img7.jpg" alt="menu">
                                        <figcaption>
                                            <h3>keraser mias</h3>

                                            <p>Bolernatur aut oditaut. Meciegast nveritekytrs lertyasu aysety keretabo
                                                serde
                                                fae
                                                keremos
                                                eniptes ades. Vnsecntur magni masertas doloresas.</p>
                                            <a class="button" href="javascript:void(0)">read more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <figure>
                                        <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/offers/img8.jpg" alt="menu">
                                        <figcaption>
                                            <h3>ferrode viera</h3>

                                            <p>Fertyasa eritekytrs doloeras aysety keretabo serde fae keremo eniptes
                                                ades.
                                                Bolernatur
                                                aut
                                                oditaut. onsequuntur magni dolores eo kertyuas miyrasas.</p>
                                            <a class="button" href="javascript:void(0)">read more</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="wow fadeInLeft">
                        <div class="left-part clearfix">
                            <div class="best-place">
                                <figure>
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/banner/logo.png" alt="menu">
                                    <figcaption>
                                        <h3> Just the best place to take friends for a drink or dinner</h3>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <a class="thumb fancybox" href="http://localhost/wordpress/wp-content/themes/lonestar/images/banner/img9.jpg"
                           data-fancybox-group="gallery"><img
                                src="http://localhost/wordpress/wp-content/themes/lonestar/images/banner/img9.jpg" alt="banner"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="image-border">
                        <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/testimonials/img10.jpg" alt="menu">
                    </div>
                    <p class="name"> john miller</p>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 clearfix">
                    <h2>testimonials</h2>

                    <p>Meciegast nveritekytars lertyasu ayseertya asetabrde fae kerto enipadese lastas lernatur auitaut.
                        onsequuntur magni dolores eo qui ratione volutsequi nesciunt kaseres nequorro quisquam esquim
                        ipsumquia dolosit, amet nsectetu. Asdipisci velit, sed quia non numquam eius modi tempora
                        incidunt.</p>
                    <a class="button" href="javascript:void(0)">more testimonials</a>
                </div>
            </div>
        </div>
    </section>
    <section class="menu">
        <div class="container">
            <h2>our menu</h2>

            <div class="resp-tabs">
                <ul class="resp-tabs-list">
                    <li>Appetizers & Soups</li>
                    <li>Grill menu</li>
                    <li>Sauces & Sides</li>
                    <li>Desserts</li>
                    <li>Other</li>
                </ul>
                <div class="resp-tabs-container">
                    <div>
                        <div class="row owl-carousel carousel2">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="item">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img11.jpg" alt="menu">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img12.jpg" alt="menu">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="item">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img13.jpg" alt="menu">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img14.jpg" alt="menu">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="item">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img15.jpg" alt="menu">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img16.jpg" alt="menu">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="item">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img17.jpg" alt="menu">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img18.jpg" alt="menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row owl-carousel carousel2">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="item">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img13.jpg" alt="menu">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img12.jpg" alt="menu">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="item">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img11.jpg" alt="menu">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img16.jpg" alt="menu">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="item">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img17.jpg" alt="menu">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img14.jpg" alt="menu">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="item">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img15.jpg" alt="menu">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img18.jpg" alt="menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row owl-carousel carousel2">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="item">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img12.jpg" alt="menu">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img11.jpg" alt="menu">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="item">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img17.jpg" alt="menu">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img16.jpg" alt="menu">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="item">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img14.jpg" alt="menu">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img15.jpg" alt="menu">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="item">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img13.jpg" alt="menu">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img18.jpg" alt="menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row owl-carousel carousel2">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="item">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img12.jpg" alt="menu">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img11.jpg" alt="menu">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="item">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img14.jpg" alt="menu">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img13.jpg" alt="menu">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="item">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img17.jpg" alt="menu">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img18.jpg" alt="menu">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="item">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img15.jpg" alt="menu">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img16.jpg" alt="menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row owl-carousel carousel2">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="item">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img18.jpg" alt="menu">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img17.jpg" alt="menu">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="item">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img16.jpg" alt="menu">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img16.jpg" alt="menu">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="item">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img15.jpg" alt="menu">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img13.jpg" alt="menu">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="item">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img12.jpg" alt="menu">
                                    <img src="http://localhost/wordpress/wp-content/themes/lonestar/images/menu/img11.jpg" alt="menu">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news-block">
        <div class="container">
            <h2>fresh news</h2>

            <div class="separator"></div>
            <div class="separator thin"></div>
            <div class="row">
                <div class="post-wrapper">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="news clearfix">
                            <time>14.08</time>
                            <h4><a href="javascript:void(0)">Moleie lacneanrit maellus ertswer miase</a></h4>

                            <p>lrurtasfeugiat malesuad asravida aturs usecuctu aecenas tristique orci acet rtertas
                                dertas.Uls pharetra ma onec accumsan. Basalesuada nec sitertas vertasades.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="news clearfix last">
                            <time>18.08</time>
                            <h4><a href="javascript:void(0)">Neyurasas kuytrasar sit aconsectetuer</a></h4>

                            <p>Iaoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum ves cursus eleifend, elit.
                                Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante
                                eu lacus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator thin btt">
                <a class="button" href="javascript:void(0)">more news</a>
            </div>
        </div>
    </section>
</main>
<footer>
    <div class="container">
        <div class="privacy clearfix">
            &copy; 2015
            <a href="javascript:void(0)">privacy policy</a>
        </div>
        <ul class="clearfix">
            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-rss"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
        </ul>
    </div>
    <section class="map">
        <div id="google-map" class="map_model" data-x="-73.9776068" data-y="40.643180"></div>
        <ul class="map_locations">
            <li data-x="-73.9874068" data-y="40.643180">
            </li>
        </ul>
        <div class="information-wrapper clearfix">
            <div class="address">
                28 Jackson Blvd Ste 1020 <br/>
                Chicago <br/>
                IL 60604-2340
            </div>
            <div class="contacts">
                <span><a href="tel:javascript:void(0)">1(234) 567-9842</a></span> <br>
                call us toll freebr <br>
                <a href="mailto:javascript:void(0)">info@demolink.org</a>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>
