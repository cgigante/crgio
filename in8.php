<?php
    $page = "home";
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <?php
            include ("_header.php")
        ?>

        <title>Charlie Gigante | Notable in8 Projects</title>
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
        <?php include_once("_navigation_in8.php") ?>


<!-- Body  -->
            <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing">

    <!-- Main Content -->
    </br></br></br></br>
        
        <div class="jumbotron jumbotron-interests">
            <h1 class="text-center" style="font-size:5em;"><i class="fas fa-award"></i> Notable in8 Projects</h1>
        </div>
        
           <!-- Begin Notable in8 projects -->
                <div class="div-height-75"></div>

                <!-- Begin Row 1 -->
                <!-- Topic begin - Row 1 - Column 1 -->
                                <div class="div-height-25"></div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h5>Macy's Campaigns</h5>
                                        <p style="font-size: .85em;">I managed campaigns for Macy's, activating a series of promotional mailers which allowed users to receive product info and augmented reality experiences simply by scanning the physical pages with the app's camera.</p>
                                        </br>
                                        <a class="btn btn-success" href="/work_macys.php" role="button">More</a>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="work_macys.php" target="_blank"><img class="img-small" src="images/work/macys1.jpg"></a>
                                    </div>
                <!-- Topic end - Row 1 - Column 1 -->
                <!-- Topic begin - Row 1 - Column 2 -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h5>IMG's US Open of Surfing</h5>
                                            <p style="font-size: .85em;">In conjunction with IMG, I conceptualized and executed an on-site image activation campaign supporting at the US Open of Surfing in Huntington Beach, CA (August 2012).</p></br>
                                            <a class="btn btn-success" href="work_usos.php" role="button">More</a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="work_usos.php" target="_blank"><img class="img-small" src="images/work/USOS/usos2.png"></a>
                                        </div>
                                    </div>
                <!-- Topic end - Row 1 - Column 2 -->
                                </div>
                <!-- End Row 1 -->


                <!-- Begin Row 2 -->
                <!-- Topic begin - Row 2 - Column 1 -->
                                <div class="div-height-25"></div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5>BMI / Lollapalooza National Campaign</h5>
                                        <p style="font-size: .85em;">In conjunction with <a href="http://www.bmi.com/">BMI</a>, conceived and executed a national campaign around the 2012 <a href="http://www.lollpalooza.com/">Lollapalooza</a> festival.</p>
                                        <!-- <br>
                                        <img class="img-small" src="images/work/bmi1.jpg"> -->
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="images/work/bmi1.jpg" target="_blank"><img class="img-small" src="images/work/bmi1.jpg"></a>
                                    </div>
                <!-- Topic end - Row 2 - Column 1 -->
                <!-- Topic begin - Row 2 - Column 2 -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h5>Super Bowl XLVI Campaign</h5>
                                            <p style="font-size: .85em;">
                                                Developed and executed two campaigns in conjunction with <span class="superBowlBold">Verizon Wireless</span> for <span class="superBowlBold">Super Bowl XLVI</span>:One national campaign built around an advertisement in USA Today and one on-site at Super Bowl Village in Indianapolis.
                                                </br></br>
                                                <span class="label label-primary superBowlHeader">"Today's Your Day" campaign:</span>
                                                <br><br>
                                                Users were instructed to snap a photo of a specific iD-activated Verizon ad in USA Today to be entered in a drawing for a chance to win 2 tickets to the following year's Super Bowl.</br></br>
                                                <span class="label label-primary superBowlHeader">"Go For The Trophy" campaign:</span>
                                                <br><br>
                                                Indianapolis locals and visitors to the city were asked to snap a photo of the Super Bowl XLVI Trophy logo while inside the Super Bowl village.
                                                </br></br>
                                                All entrants were entered into a random-drawing sweepstakes. The grand prize winner took home 2 tix to Super Bowl XLVI and 25 additional winners received autographed NFL merchandise.
                                            </p></br>
                                        </div>
                                        <div class="col-sm-2">
                                            <img class="img-small" src="images/work/superbowl5.jpg">
                                        </div>
                                    </div>
                <!-- Topic end - Row 2 - Column 2 -->
                                </div>
                <!-- End Row 2 -->
    <!-- End Notable in8 projects -->


<!-- End in8iD -->

    </div> <!-- End main container "marketing" div -->



<!-- End Body -->

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