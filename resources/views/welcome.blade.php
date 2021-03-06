<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Duncan Fraiser</title>
    <link rel="icon" href="{{url('/img/blacklogo.png')}}">

    <meta name="keywords" content="Duncan Fraiser">

    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,100%7CRoboto:400,700,300,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- owl carousel css -->

    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- CSS Animations -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- Mordernizr -->
    <script src="js/modernizr-2.6.2.min.js"></script>

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
<![endif]-->

         <!-- APPLE IOS WEB APP NECESSITIES -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="Duncan">
        <link rel="apple-touch-icon" href="{{url('/img/iconlogo.png')}}">
        <link rel="apple-touch-startup-image" href="{{url('/img/iconlogo.png')}}">
        <!-- By Default, Links open externally (in safari) on the IOS Web App after 'download'. This prevents internal links from opening externally. It still allows external links to open externally, though. -->
        <script type="text/javascript">
            if(("standalone" in window.navigator) && window.navigator.standalone){
                var noddy, remotes = false;
                document.addEventListener('click', function(event) {
                    noddy = event.target;
                    while(noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
                    noddy = noddy.parentNode;
                    }
                    if('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes))
                    {
                    event.preventDefault();
                    document.location.href = noddy.href;
                    }
                },false);
            }
        </script>


</head>

<body data-spy="scroll" data-target="#navigation" data-offset="120">

    <!-- *** NAVBAR ***
_________________________________________________________ -->

    <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand scrollTo" href="#intro"><img height='100%' src="{{url('/img/blacklogo.png')}}"></a>
            </div>

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#intro">Intro</a>
                    </li>
                    <li><a href="#about">About</a>
                    </li>
                    <li><a href="#services">Skills</a>
                    </li>
                    <li><a href="#references">My work</a>
                    </li>
                    <li><a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->

        </div>
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->


    <div id="all">


        <!-- *** INTRO IMAGE ***
_________________________________________________________ -->
        <div id="intro" class="clearfix">
            <div class="item">
                <div class="container">
                    <div class="row">
                        <div class="carousel-caption">
                            <div data-animate="fadeInDown" class="logo">
                                <img src="img/whitelogo.png" alt="logo" width="130">
                            </div>
                            <h1 data-animate="fadeInDown">Duncan McLeod Fraiser Jr.</h1>
                            <h2 data-animate="slideInUp">Full Stack Developer</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- *** INTRO IMAGE END *** -->

        <!-- *** ABOUT ***
_________________________________________________________ -->
        <div class="section" id="about">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12">
                        <h2 class="title" data-animate="fadeInDown">About me</h2>
                    </div>

                    <div class="col-sm-12">

                        <div class="row">

                            <div class="col-sm-12 text-left" data-animate="fadeInUp">

                                <p>An sincerity so extremity he additions. Her yet <strong>there truth merit</strong>. Mrs all projecting favourable now unpleasing. Son law garden chatty temper. Oh children provided to mr elegance marriage strongly. Off can
                                    admiration prosperous now devonshire diminution law.</p>

                                <p>Received overcame oh sensible so at an. Formed do change merely to county it. <strong>Am separate contempt</strong> domestic to to oh. On relation my so addition branched. Put hearing cottage she norland letters equally prepare
                                    too. Replied exposed savings he no viewing as up. Soon body add him hill. No father living really people estate if. Mistake do produce beloved demesne if am pursuit.</p>

                                <p>An sincerity so extremity he additions. Her yet <strong>there truth merit</strong>. Mrs all projecting favourable now unpleasing. Son law garden chatty temper. Oh children provided to mr elegance marriage strongly. Off can
                                    admiration prosperous now devonshire diminution law.</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 mt-big" data-animate="bounceIn">
                        <img src="img/profile.jpg" class="image img-circle img-responsive" alt="This is me - IT worker">
                    </div>
                </div>
            </div>
        </div>
        <!-- /#about -->

        <!-- *** ABOUT END *** -->

        <!-- *** SERVICES ***
_________________________________________________________ -->
        <div class="section text-gradient" id="services">
            <div class="container">
                <div class="col-md-12">
                    <h2 class="title" data-animate="fadeInDown">FULL STACK SKILLS</h2>

                    <div class="row services">

                        <div class="col-md-3" data-animate="fadeInUp">
                        {{--     <div class="icon"><i class="fa fa-search"></i>
                            </div> --}}
                            <h3 class="heading">Server</h3>
                            <p>On on produce colonel pointed. Just four sold need over how any. In to september suspicion determine he prevailed admitting. On adapted an as affixed limited on. Giving cousin warmly things no spring mr be abroad. Relation
                                breeding be as repeated strictly followed margaret. One gravity son brought shyness waiting regular led ham.</p>
                        </div>

                        <div class="col-md-3" data-animate="fadeInUp">
                        {{--     <div class="icon"><i class="fa fa-html5"></i>
                            </div> --}}
                            <h3 class="heading">Databases</h3>
                            <p>Manor we shall merit by chief wound no or would. Oh towards between subject passage sending mention or it. Sight happy do burst fruit to woody begin at. Assurance perpetual he in oh determine as.</p>
                        </div>

                        <div class="col-md-3" data-animate="fadeInUp">
                    {{--         <div class="icon"><i class="fa fa-tachometer"></i> 
                            </div> --}}
                            <h3 class="heading">Front-End</h3>
                            <p>Rooms oh fully taken by worse do. Points afraid but may end law lasted. Was out laughter raptures returned outweigh. Luckily cheered colonel me do we attacks on highest enabled. Tried law yet style child. Bore of true of no
                                be deal.</p>
                        </div>

                        <div class="col-md-3" data-animate="fadeInUp">
                        {{--     <div class="icon"><i class="fa fa-search"></i>
                            </div> --}}
                            <h3 class="heading">Back-End</h3>
                            <p>On on produce colonel pointed. Just four sold need over how any. In to september suspicion determine he prevailed admitting. On adapted an as affixed limited on. Giving cousin warmly things no spring mr be abroad. Relation
                                breeding be as repeated strictly followed margaret. One gravity son brought shyness waiting regular led ham.</p>
                        </div>

                    </div>

                    <hr>

                    <div class="text-center">

                        <p class="lead">Would you like to know more or just discuss something?</p>

                        <p><a style=" text-decoration: none;" href="#contact" class="scrollTo redwhitebtn ">CONTACT ME</a>
                        </p>

                    </div>

                </div>
                <!-- /.12 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.section -->

        <!-- *** SERVICES END *** -->

        

        <!-- *** SHOWCASE ***
_________________________________________________________ -->
        <div class="section text-parallax parallax-image1" id="services">

            <!-- /.container -->

            <div class="dark-mask"></div>

        </div>
        <!-- /.section -->

        <!-- *** REFERENCES IMAGE ***
_________________________________________________________ -->
        <div class="section" id="references">
            <div class="container">
                <div class="col-sm-12">

                    <div class="mb20">
                        <h2 class="title" data-animate="fadeInUp">Recent work</h2>

                        <p class="lead" data-animate="fadeInUp">I have worked on dozens of projects so I have picked only the latest for you.</p>
                    </div>

                    <ul id="filter" data-animate="fadeInUp">
                        <li class="active"><a href="#" data-filter="all">All</a>
                        </li>
                        <li><a href="#" data-filter="charity">Charity</a>
                        </li>
                        <li><a href="#" data-filter="entertainment">Entertainment</a>
                        </li>
                        <li><a href="#" data-filter="work">Work</a>
                        </li>
                    </ul>

                    <div id="detail">

                        <span class="close">&times;</span> 

                        <div id="detail-slider"></div>

                        <div class="text-center">
                            <h1 id="detail-title">&nbsp;</h1>
                        </div>

                        <div id="detail-content"></div>

                    </div>
                    <!-- Reference detail -->

                    <div id="references-masonry" data-animate="fadeInUp">

                        <div class="reference-item" data-category="work">
                            <div class="reference">
                                <a href="#">
                                    <img src="img/work.png" class="img-responsive" alt="" />

                                    <div class="overlay">
                                        <h3 class="reference-title">Work Related Sites</h3> 
                                        <p>I am the Lead Web Developer at Ergon, Inc.</p>
                                    </div>
                                </a>

                                <div class="sr-only reference-description" data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg">

                                    <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour
                                        explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>

                                    <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies
                                        talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>

                                    <p class="buttons">
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-globe"></i> Visit website</a>
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-download"></i> Download case study</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="reference-item" data-category="charity">
                            <div class="reference">
                                <a href="#">
                                    <img src="img/learning_center.png" class="img-responsive" alt="" />

                                    <div class="overlay">
                                        <h3 class="reference-title">St Paul Early Learning Center</h3> 
                                        <p>My daughter goes here.</p>
                                    </div>
                                </a>

                                <div class="sr-only reference-description" data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg">

                                    <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour
                                        explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>

                                    <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies
                                        talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>

                                    <p class="buttons">
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-globe"></i> Visit website</a>
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-download"></i> Download case study</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="reference-item" data-category="entertainment">
                            <div class="reference">
                                <a href="#">
                                    <img src="img/kennykens.png" class="img-responsive" alt="" />

                                    <div class="overlay">
                                        <h3 class="reference-title">Kenny Kens & The Brown Bottle Boys</h3> 
                                        <p>100% Pure Detroit Honky Tonk!</p>
                                    </div>
                                </a>

                                <div class="sr-only reference-description" data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg,img/main-slider3.jpg">

                                    <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour
                                        explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>

                                    <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies
                                        talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>

                                    <p class="buttons">
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-globe"></i> Visit website</a>
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-download"></i> Download case study</a>
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="reference-item" data-category="charity">
                            <div class="reference">
                                <a href="#">
                                    <img src="img/stpaul.png" class="img-responsive" alt="" />

                                    <div class="overlay">
                                        <h3 class="reference-title">St Paul Catholic Church</h3> 
                                        <p>The Catholic Church my family attends.</p>
                                    </div>
                                </a>

                                <div class="sr-only reference-description" data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg">

                                    <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour
                                        explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>

                                    <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies
                                        talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>

                                    <p class="buttons">
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-globe"></i> Visit website</a>
                                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-download"></i> Download case study</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /#references-masonry -->

                </div>
                <!-- /.12 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.section -->

        <!-- *** REFERENCES END *** -->

        <!-- *** CONTACT ***
_________________________________________________________ -->

        <div class="section contact" id="contact" data-animate="bounceIn">
            <div class="container">
                <div class="col-md-12">


                    <h2 class="title">Contact me</h2>

                    <div class="row">

                        <div class="col-md-8 col-md-offset-2">
                            <form id="contact-form" method="post" action="contact.php">

                                <div class="messages">

                                </div>

                                <div class="controls">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="name" class="form-control" placeholder="Your firstname *" required="required">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="surname" class="form-control" placeholder="Your lastname *" required="required">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="email" class="form-control" placeholder="Your email *" required="required">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="phone" class="form-control" placeholder="Your phone">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea name="message" class="form-control" placeholder="Message for me *" rows="4" required="required"></textarea>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <input type="submit" class="redwhitebtn" value="Send message">
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>

                </div>
                <!-- /.12 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.section -->

        <!-- *** CONTACT END *** -->


        <div class="section" id="footer">
            <div class="container">

                <div class="row">

                    <div class="col-sm-6">

                        <p class="social">
                            <a href="#" class="external facebook" data-animate-hover="shake" data-animate="fadeInUp"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="external instagram" data-animate-hover="shake" data-animate="fadeInUp"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="external gplus" data-animate-hover="shake" data-animate="fadeInUp"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email" data-animate-hover="shake" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>
                        </p>
                    </div>
                    <!-- /.6 -->

                    <div class="col-sm-6">
                        <p>&copy; 2017 Duncan Fraiser All rights reserved.</p>
                    </div>

                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /.section -->

        <!-- *** FOOTER END *** -->



    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <!-- js base -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- for demo purpose -->
    <script src="js/jquery.cookie.js"></script>

    <!-- waypoints for scroll spy -->
    <script src="js/waypoints.min.js"></script>

        <!-- maps -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
    <script src="js/gmaps.js"></script>


    <!-- masonry layout -->
    <script src="js/masonry.pkgd.min.js"></script>

    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>


    <!-- jQuery scroll to -->
    <script src="js/jquery.scrollTo.min.js"></script>

    <!-- jQuery counter -->
    <script src="js/jquery.counterup.min.js"></script>

    <!-- jQuery parallax -->
    <script src="js/jquery.parallax-1.1.3.js"></script>

    <!-- main js file -->

    <script src="js/front.js"></script>

    



</body>

</html>

