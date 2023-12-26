<!doctype html>
<!--[if IE 9]><html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Gear HTML5 Audio Player - Sleek, Modern & Innovative</title>
  <link rel="icon" type="image/png" href="favicon.png?v=0.1" />


  <!-- Needed only for the sake of this demo. -->
  <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.2/css/foundation.min.css" /> -->
  <!-- <link rel="stylesheet" href="css/styles.css?v=0.2"> -->

  <!-- Stylesheet for the Gear Player, keep this one. -->
  <link rel="stylesheet" href="css/gear.css?v=0.2">

  <!-- Meta tags for mobile behavior. Recommended to use! -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

</head>
<body>

      <!-- Stage Start -->
      <div class="stage">

          <!-- Wrap Start -->
          <div class="wrap">


          <!-- Content Start -->
          <div class="content">
            <div class="wrapper">
              <section>
                  <div class="row">
                    <div class="columns">
                      <h3>Demos</h3>
                      <hr>
                    </div>
                  </div>

                  <div class="row">

                    <div class="large-4 medium-4 columns">
                        <div data-gearPath="json/audiojungle.json">
                          <a href="javascript:;">
                          <img src="img/covers/01.jpg">
                          </a>
                        </div>

                        <div class="album">
                          <div>Feel the Sound</div>
                          <span>Audio Jungle</span>
                        </div>
                    </div>

                    <div class="large-4 medium-4 columns">
                        <div class="cover playing" data-gearPath="json/audiotheque.json">
                          <img src="img/covers/02.jpg">
                          <div class="over"><span class="floater"></span><i class="fi-play-circle"></i></div>
                        </div>

                        <div class="album">
                          <div>Audiotheque</div>
                          <span>Creative Commons</span>
                        </div>
                    </div>

                    <div class="large-4 medium-4 columns">
                        <div class="cover" data-gearPath="json/lost.json">
                          <img src="img/covers/03.jpg">
                          <div class="over"><span class="floater"></span><i class="fi-play-circle"></i></div>
                        </div>

                        <div class="album">
                          <div>Lost Sounds</div>
                          <span>Creative Commons</span>
                        </div>
                    </div>

                  </div>
              </section>
            </div>
          </div>
          </div>
          <!-- Content End -->


      </div>
      <!-- Stage Wrapper End -->


  <!-- Gear Player Start -->
  <div class="gearWrap">
    <div id="gearContainer" class="gear" data-gear="json/setup.json"></div>
  </div>
  <!-- Gear Player End -->


  <!-- jQuery is needed to run Gear Player. Include it only once! -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

  <!-- If you're using Soundcloud, this one is needed! -->
  <!-- <script src="//connect.soundcloud.com/sdk.js"></script> -->


  <!-- All dependencies concatenated and packed for you! -->
  <script src="js/jquery.gearplayer.libs.min.js"></script>
  <!-- The main app script for Gear Player. -->
  <script src="js/jquery.gearplayer.js"></script>


  <!-- These are just for the sake of the demo page, not needed for Gear Player. -->
  <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.2/js/foundation.min.js"></script> -->
  <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/plugins/ScrollToPlugin.min.js"></script> -->
  <script src="js/app.js"></script>
  <!-- In case you get rid of app.js remember to initialize the player with $('.gearWrap').gearPlayer(); -->

</body>
</html>
