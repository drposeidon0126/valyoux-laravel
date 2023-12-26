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
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.2/css/foundation.min.css" />
  <link rel="stylesheet" href="css/styles.css?v=0.2">
   
  <!-- Stylesheet for the Gear Player, keep this one. -->
  <link rel="stylesheet" href="css/gear.css?v=0.2">
    
  <!-- Meta tags for mobile behavior. Recommended to use! -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

</head>
<body>


  
  <div class="content">

        <div class="wrapper">
            <section class="row">
               <h1>Inline Example</h1>
                <p>This is an inline example of Gear Player. It will show the interface automatically and hide the close button. All you need to do is add an "inline" class to the wrapper and move the container in the DOM.</p>
            </section>
            
            <section class="row">
                 <!-- The player will use the size of the parent node when set as inline, so size the container properly! -->
                  <div class="container">
                      <!-- Gear Player Start -->
                      <div class="gearWrap inline"> <div id="gearContainer" class="gear" data-gear="json/setup.json"></div> </div>
                      <!-- Gear Player End -->
                  </div>
            </section>
        </div>

  </div>
  


  <!-- jQuery is needed to run Gear Player. Include it only once! -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
  <!-- If you're using Soundcloud, this one is needed! -->
  <script src="//connect.soundcloud.com/sdk.js"></script>


  <!-- All dependencies concatenated and packed for you! -->
  <script src="js/jquery.gearplayer.libs.min.js"></script>
  <!-- The main app script for Gear Player. -->
  <script src="js/jquery.gearplayer.js"></script>
  
  <script>
    jQuery(document).ready(function(){ 
        jQuery('.gearWrap').gearPlayer();
    });
  </script>
  
</body>
</html>
