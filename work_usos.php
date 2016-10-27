<?php
  $page = "usos";
?>


<!DOCTYPE html>
<html lang="en">

  <head>

 <?php
  include ("_header.php")
  ?>

    <title>Work Example: IMG's US open of Surfing | crg.io</title>
    <!-- Image Gallery -->
    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.css">
    <meta name="description" content="Work samples from a campaign Charlie conceived of and execucted for IMG's US Open of Surfing." />
    <meta name="keywords" content="IMG, USOS, US Open of Surfing, Huntington Beach, California, mobile, mobile apps, image recognition, in8 id, id, in8 mobile">

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
          <h2 class="featurette-heading">in8 iD:<span class="text-muted"> US Open of Surfing Campaign</span></h2>
          <p>Below are a selection of several images and screenshots from the US Open of Surfing Campaign I programmed.</p>
          <hr>
          </br>

          <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
          <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" style="display: none;" data-use-bootstrap-modal="false"> <!-- Removed "blueimp-gallery-controls" from the class -->
              <!-- The container for the modal slides -->
              <div class="slides"></div>
              <!-- Controls for the borderless lightbox -->
              <h3 class="title"></h3>
              <a class="prev">‹</a>
              <a class="next">›</a>
              <a class="close">×</a>
              <a class="play-pause"></a>
              <ol class="indicator"></ol>
              <!-- The modal dialog, which will be used to wrap the lightbox content -->
              <div class="modal fade">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" aria-hidden="true">&times;</button>
                              <h4 class="modal-title"></h4>
                          </div>
                          <div class="modal-body next"></div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default pull-left prev">
                                  <i class="glyphicon glyphicon-chevron-left"></i>
                                  Previous
                              </button>
                              <button type="button" class="btn btn-primary next">
                                  Next
                                  <i class="glyphicon glyphicon-chevron-right"></i>
                              </button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>


          <div id="links">
              <a href="images/work/USOS/large/usos1.png" title="App Screenshot 1" data-gallery>
                  <img src="images/work/USOS/small/usos1.jpg" alt="App Screenshot 1">
              </a>
              <a href="images/work/USOS/large/usos2.png" title="App Screenshot 2" data-gallery>
                  <img src="images/work/USOS/small/usos2.jpg" alt="App Screenshot 2">
              </a>
              <a href="images/work/USOS/large/usos3.png" title="App Screenshot 3" data-gallery>
                  <img src="images/work/USOS/small/usos3.jpg" alt="App Screenshot 3">
              </a>
              <a href="images/work/USOS/large/usos4.png" title="App Screenshot 4" data-gallery>
                  <img src="images/work/USOS/small/usos4.jpg" alt="App Screenshot 4">
              </a>
              <a href="images/work/USOS/large/usos5.png" title="App Screenshot 5" data-gallery>
                  <img src="images/work/USOS/small/usos5.jpg" alt="App Screenshot 5">
              </a>
              <a href="images/work/USOS/large/usos6.png" title="USOS Posters" data-gallery>
                  <img src="images/work/USOS/small/usos6.jpg" alt="USOS Posters">
              </a>
              <a href="images/work/USOS/large/usos7.png" title="USOS Posters" data-gallery>
                  <img src="images/work/USOS/small/usos7.jpg" alt="USOS Posters">
              </a>
          </div>

          </br>
          </br>

          <a class="btn btn-success" href="index.php#work" role="button">Go Back</a>

        </div><!-- End col-md-12 -->
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <?php
        include ("_footer.php")
      ?>
    
    </div> <!-- End main container "marketing" div -->

    <!-- Image Gallery Links -->    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>

    <script>
    document.getElementById('links').onclick = function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement,
            link = target.src ? target.parentNode : target,
            options = {index: link, event: event},
            links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    };
    </script>

  </body>

</html>