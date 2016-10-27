<?php
  $page = "macys";
?>


<!DOCTYPE html>
<html lang="en">

  <head>

 <?php
  include ("_header.php")
  ?>

    <title>Work Example: Macy's | crg.io</title>
    <meta name="description" content="View work samples from a mobile project for Macy's that Charlie worked on." />
    <meta name="keywords" content="mobile, content, mobile app, new york city, producer, marketing, project manager, resume, Macys, Macy's, photos, in8 id, in8 mobile">



    <!-- Add fancyBox -->
    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

    <link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <!-- Google Analytics Code -->
    <?php include_once("analyticstracking.php") ?>



  </head>

  <body>


    <!-- Facebook Javascript Code -->
    <?php include_once("_facebook.php") ?>

    <!-- Navigation code -->
    <?php include_once("_navigation.php") ?>    
        

      <!-- Wrap the rest of the page in another container to center all the content. -->
      <div class="container marketing">
        
        <!-- Main Content -->
        </br></br></br></br>

        <!-- START THE FEATURETTES -->

        <div class="row featurette">
          <div class="col-md-12">
            <h2 class="featurette-heading">in8 iD:<span class="text-muted"> Macy's "American Icons" Campaign</span></h2>
            <p>Below are a selection of several pages from the "American Icons" mailer I programmed.</p>
            </br>
            <img class="featurette-image img-responsive" src="images/work/macys/1.jpg" /></br>
            <img class="featurette-image img-responsive" src="images/work/macys/2.jpg" /></br>
            <img class="featurette-image img-responsive" src="images/work/macys/3.jpg" /></br>
            <img class="featurette-image img-responsive" src="images/work/macys/4.jpg" /></br>
            <a class="btn btn-success" href="index.php#work" role="button">Go Back</a>
          </div><!-- End col-md-12 -->

        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

        <!-- FOOTER -->
        <?php
          include ("_footer.php")
        ?>

  
<!-- Fancybox Javascript -->
<script type="text/javascript">
$(document).ready(function() {
  $(".fancybox").fancybox();
});

// This is for the "inline" Fancybox JS
$(document).ready(function() {
  $(".various").fancybox({
    maxWidth  : 800,
    maxHeight : 600,
    fitToView : false,
    width   : '70%',
    height    : '70%',
    autoSize  : false,
    closeClick  : false,
    openEffect  : 'none',
    closeEffect : 'none'
  });
});
</script>


    </div> <!-- End main container "marketing" div -->

  </body>

</html>