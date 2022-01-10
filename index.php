<?php
    $page = "home";
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <?php
            include ("_header.php")
        ?>

        <title>Charlie Gigante | Product Management Professional</title>
        <meta name="description" content="Charlie is a Product Management Professional specializing in SAAS, Mobile Apps, Web Development, Project &amp; Content Management, Digital Marketing, Social Media, Music and more." />
        <meta name="keywords" content="product, web, mobile, mobile apps, web apps, ecommerce, producer, product manager, resume, product development, Los Angeles tech, LA tech, silicon beach">

<!-- Begin: Google Font "Special Elite" -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
<!-- End: Google Font "Special Elite" -->

<!-- this is the full-slider CSS for the home page -->
        <link href="css/full-slider.css" rel="stylesheet">
<!-- Google Analytics Code -->

        <?php include_once("analyticstracking.php") ?>
    </head>

    <body data-spy="scroll" data-target="#crgNav">

        <!-- Facebook Javascript Code -->
        <?php include_once("_facebook.php") ?>

        <!-- Navigation code -->
        <?php include_once("_navigation.php") ?>

        <!-- Full Page Image Background Carousel Header -->
        <header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <!-- <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol> -->

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('images/home/slide1.jpg');"></div>
                    <div class="carousel-caption">
                        <a href="#about">
                            <!-- <h1>Who I Am</h1> -->
                            <button class="btn btn-default btn-lg" type="button" aria-haspopup="true" aria-expanded="false">
                                <h3 class="carousel-btn-text">About Charlie</h3>
                            </button>
                            <!-- <p class="fontchange-p">Mobile industry veteran, web developer, musician, DJ and photographer.</p> -->
                        </a>
                    </div>
                </div>
                <div class="item">
                    <!-- Set the second background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('images/home/slide2.jpg');"></div>
                    <div class="carousel-caption">
                        <a href="#work">
                            <button class="btn btn-default btn-lg" type="button" aria-haspopup="true" aria-expanded="false">
                                <h3 class="carousel-btn-text">My Work</h3>
                            </button>
                            <!-- <p class="fontchange-p">Browse work samples from my past projects.</p> -->
                        </a>
                    </div>
                </div>
                <div class="item">
                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill" style="background-image:url('images/home/slide3.jpg');"></div>
                    <div class="carousel-caption">
                        <a href="#interests">
                            <button class="btn btn-default btn-lg" type="button" aria-haspopup="true" aria-expanded="false">
                                <h3 class="carousel-btn-text">Interests</h3>
                            </button>
                            <!-- <p class="fontchange-p">When I'm not up to my ears in all things digital, I do things. Have a look and listen.</p> -->
                        </a>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>

        </header>

        <!-- About Me code -->
        <div id="about">
            <?php include_once("_about.php") ?>
        </div>
        
        <hr class="featurette-divider">

        <!-- Work code -->
        <div id="work">
            <?php include_once("_work.php") ?>
        </div>

        <hr class="featurette-divider">
        
        <!-- interests code -->
        <div id="interests">
            <?php include_once("_interests.php") ?>
        </div>

        <hr class="featurette-divider">

        <!-- Charities -->
        <div id="charities-section">
            <?php include_once("_charities.php") ?>
        </div>

        <hr class="featurette-divider">

        <!-- Contact code -->
        <div id="contact-section">
            <?php include_once("_contact.php") ?>
        </div>


        <!-- Vote code -->
        <!--
        <div id="vote-section">
            <?php
            # include_once("_vote.php")
            ?>
        </div>
        -->


        <!-- FOOTER -->
        <?php
            include ("_footer.php")
        ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script> -->

    <!-- Image Gallery Links -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
        <script src="js/bootstrap-image-gallery.min.js"></script>
    <!-- End Image Gallery Links -->

        <!-- ##########################The following script provides the SCROLL functionality ################################## -->
        <script>
            $('a[href^="#"]').on('click', function(event) {

            var target = $( $(this).attr('href') );

            if( target.length ) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 500);
            }

            });
        </script>

    </body>

</html>