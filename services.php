<?php
  $page = "services";
?>


<!DOCTYPE html>
<html lang="en">

  <head>

 <?php
  include ("_header.php")
  ?>

    <title>My Services | crg.io</title>
    <!-- Image Gallery -->
    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.css">
    
    <meta name="description" content="Digital media professional specializing in Mobile Apps, Web Development, Project &amp; Content Management, Digital Marketing, Social Media, Music and more." />
    <meta name="keywords" content="mobile, content, mobile apps, producer, marketing, project manager, resume, work samples, Shmap, ideally, Macy's, in8 iD, Warner Bros., Universal Music Group, music recognition">
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
      <!-- <div class="jumbotron">
        <center><h2><span class="glyphicon glyphicon-list-alt"></span> My Services</h2></center>
        <h4 class="jumbotron-text">Whether you need a website built, a logo designed, a product specification document written, or simply need someone to manage a your business project, I'm your guy. <a href="contactform.php">Drop me a note</a> and I will work with you to determine the scope and price of your project needs.</h4>
        </br>
      </div> -->
      <div class="row">
        <div class="col-sm-4">
          <h1 style="font-size:5em;">My Services</h1>
        </div>
        <div class="col-sm-8">
          <h3 style="font-weight:lighter;">Whether you need a website built, a logo designed, a product specification document written, or simply need someone to manage a your business project, I'm your guy. <a href="contactform.php">Drop me a note</a> and I will work with you to determine the scope and price of your project needs.</h3>
        </div>
      </div>


<!-- START THE FEATURETTES -->

      <hr class="featurette-divider">


<!-- Begin Web Development -->
      <section id="serviceWebDev" class="row featurette">

        <div class="col-sm-6">
          <h2 class="featurette-heading"><span class="glyphicon glyphicon-menu-left"></span>/<span class="glyphicon glyphicon-menu-right"></span> Web Development</h2>
          <h3 class="featurette-heading"><span class="text-muted">Web projects big or small, I'll work with you to create a site perfect for your business or personal needs.</span></h3>
          <p>I have a solid foundation in a variety of languages and earned a <em>Certificate in Web Development</em> from <strong>New York University</strong>. Pay me a visit on <a href="https://github.com/cgigante" target="_blank">GitHub</a> to review my code.</p>
          <p>Live sites which demonstrate some of my skills include the one you're looking at along with those presented here.</p>
        </div>

        <div class="col-sm-6">
          <ul class="img-list">
            <li>
              <a href="http://shmap.me/" target="_blank">
                <img class="img-responsive img-web-dev" src="images/work/webdev/shmap.jpg"/>
                <span class="text-content"><span>shmap.me
                <br><br>
                This is the site I built to support my mobile application, Shmap.</span></span>
              </a>
            </li>
            <li>
              <a href="http://ideally.net/" target="_blank">
                <img class="img-responsive img-web-dev" src="images/work/webdev/ideally.jpg"/>
                <span class="text-content"><span>ideally.net
                <br><br>
                I built this site to support my current company, ideally.</span></span>
              </a>
            </li>

            <li>
              <a href="http://d-daysthefilm.com/" target="_blank">
                <img class="img-responsive img-web-dev" src="images/work/webdev/ddays.jpg"/>
                <span class="text-content"><span>D-Days
                <br><br>
                I built this site to support the launch of an upcoming feature film called "D-Days"</span></span>
              </a>
            </li>                         

            <li>
              <a href="http://shavewitholivers.com/" target="_blank">
                <img class="img-responsive img-web-dev" src="images/work/webdev/olivers.jpg"/>
                <span class="text-content"><span>Oliver's Skincare
                <br><br>
                I designed and put together this Shopify storefront for shaving supply company, "Oliver's Skincare."</span></span>
              </a>
            </li>
          </ul>
        </div>
      </section>

<!-- End Web Development -->

      <hr class="Project Management">

<!-- Begin Project Management -->
      <section id="servicePM" class="row featurette">
        <div class="col-sm-6">
          <h2 class="featurette-heading"><span class="glyphicon glyphicon-ok"></span> Project Management</h2>
          <h3 class="featurette-heading"><span class="text-muted"> I'll take your project from inception to launch and deliver a product you can be proud of.</span></h3>
          <p></p>

        
        </div>

        <div class="col-sm-6">
          <img class="img-responsive img-work" src="images/work/in8/in8.png" alt="in8 iD" title="in8 iD">
        </div>
      </section>
<!-- End Project Management -->

      <hr class="featurette-divider">

<!-- Begin Design -->
      <section id="serviceDesign" class="row featurette">

        <div class="col-sm-6">
          <h2 class="featurette-heading"><span class="glyphicon glyphicon-pencil"></span> Design &amp; Creative</h2>
          <h3 class="featurette-heading"><span class="text-muted">Custom logos, photo retouching, video editing, voiceover, etc.</span></h3>
          <p></p>
        </div>
        <div class="col-sm-6">
          <img class="img-responsive img-work" src="images/work/wb_mobilecontent_gif.gif" alt="My Work" title="Remember these phones?">
        </div>
      </section>
<!-- End Design -->



      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

      <!-- FOOTER -->
       <?php
        include ("_footer.php")
        ?>

<!-- Image Gallery Links -->    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="js/bootstrap-image-gallery.min.js"></script>

    
    </div> <!-- End main container "marketing" div -->

  </body>

</html>