<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introduction to Human-Computer Interaction: Logistics">
    <title>IxDesign: Tips &amp; Tricks for Mobile Web Applications</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/hci.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body data-spy="scroll" data-target=".sidenav" data-spy="scroll">

    <!-- Fixed navbar -->
    <?php include "nav.php" ?>

  <!-- this is a comment in HTML -->
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="sidenav" data-spy="affix">
          <ul class="nav nav-stacked" id="sidenav-content">
          </ul>
        </div> <!-- /sidenav -->
      </div> <!-- /col-md-3 -->

      <div class="col-md-9" id="logistics">
        <div id="general_resources" class="sidenav-anchor">
          <h3>General web development resources</h3>
          <ul>
            <li><a href="https://www.bento.io/">Bento.io </a> is a guided tour through curated, free coding tutorials on the web.
            </li>
            <li><a href="http://getbootstrap.com">getbootstrap.com</a> For your mobile app's responsive layout, we highely recommend Bootstrap framework, you can refer to this page for examples and references.
            </li>
            <li><a href="http://jquery.com/">jquery.com</a>To add interactivities to your mobile web app, jQuery will be super helpful. You can find a lots of tutorials through Bento.io, and you can always refer to its official documentatio through this link. </li>
            <li><a href="http://thinkster.io">thinkster.io</a> If you want to incorporate cutting-edge technology such as Angular.js to your Node.js app, thinkster.io has greate tutorials for you to learn and practice.  </li>
            <li><a href="http://www.codecademy.com/">codeacademy.com</a> Code Academy offers one of the best online interactive platform to learn web development. You can find lessons about HTML, CSS, Javascript, jQuery from here. </li>
            <li><a href="https://www.codeschool.com/paths/javascript">codeschool.com</a> Another great online platform to learn web dev stuffs</li>
          </ul>
        </div>
        <hr>

        <div id='git-related' class='sidenav-anchor'>
          <h3>Git related tutorial</h3>
          <p>A lot of tutorial can be found here <a href="https://github.com/thoughtbot/trail-map/blob/master/git.md">Thoughtbot Git Trails</a></p>
        </div>
        <hr>

        <div id="web-design-tutorial" class='sidenav-anchor'>
          <h3>Web design tutorial</h3>
          <ul>
            <li>Web Design <a href="https://github.com/thoughtbot/trail-map/blob/master/web-design.md">trail map</a> from Thoughtbot  </li>
            <li>An easy to follow design course for people who want to learn more about web design <a href="https://hackdesign.org/">Hacker Design</a></li>
          </ul>
          <p><b>User Experience Design</b> Product hunt list <a href="http://www.producthunt.com/jennyshen/collections/user-experience-design">here</a> </p>
        </div>

        <hr>

        <div class='sidenav-anchor' id='web-design-resource'>
            <h3>Web design resources</h3>
            <li>
              <b>Web fonts:</b> Use custom fonts for better typography.  <a href="http://www.google.com/fonts">Google Web Fonts</a> is a great source of easy-to-add fonts (<a href="http://chad.is/beautiful-web-type/">list of highlights</a>).  Also, here's a <a href="http://www.smashingmagazine.com/2009/03/18/10-principles-for-readable-web-typography/">nice article about good typography.</a>
            </li>
            <li><b>Icons</b>
              There are a number of free icon packages out there (just search around).  <a href="http://fontawesome.io">Font Awesome</a> is a good start though.

            </li>
            <li>
              <b>Subtle Patterns:</b> Ever wondered how to make backgrounds a little more interesting than a plain color?  You can use <a href="http://subtlepatterns.com/">Subtle Patterns</a> to add a light pattern to your designs.
            </li>
            <li>
              <a href="http://www.flatuicolorpicker.com/">Flat color picker</a>
            </li>
            <li>HD images for your website and design <a href="http://www.resplashed.com/">Resplashed</a> </li>
            <li>Product hunt design resource collection <a href="http://www.producthunt.com/GoldFireStudios/collections/design-resources-2">here</a>  </li>
			<li> <a href = "https://developer.chrome.com/devtools/docs/device-mode" target="_blank"> Use Google device mode to fit a mobile form factor </a></li>
        </div>
        <hr>
        <div id="msg-voip-voice" class="sidenav-anchor">
          <h3>Resources for text messaging, VOIP & VOICE</h3>
          <ul>
            <li>You can hyperlink your phone numbers so that mobile users can simply click on them and start a phone call, <code>&lt;a href="tel:3177594940"&gt;317.759.4940&lt;/a&gt;</code> </li>
            <li>You can do the same thing for SMS, <code>&lt;a href="sms://+14035550185"&gt;Send an SMS&lt;/a&gt;</code>, Some systems (Android, Symbian, webOS) don’t allow a number, then you can try <code>&lt;a href="sms:"&gt;Send an SMS&lt;/a&gt;</code> </li>
          </ul>
          <p>If you want to programmingly send SMS or invoke phone call or video streaming, you can check out <a href="https://www.twilio.com/products">Twilio</a> They also offer helper library for Node.js app <a href="https://www.twilio.com/docs/node/install">Twilio node lib</a> </p>
        </div>

        <div id="locations" class="sidenav-anchor">
          <h3>Locations</h3>
          <ul>
            <li><b>Accessing Phone Location:</b>Use the HTML5 Geolocation API <a href="https://developer.mozilla.org/en-US/docs/WebAPI/Using_geolocation">HTML5 Geolocation API</a></li>
            <li><b>Using Google Maps</b>Use the <a href="https://developers.google.com/maps/documentation/javascript/">Google Maps Javascript API</a></li>
          </ul>
        </div>

        <div id='motion' class='sidenav-anchor'>
          <h3>Motion</h3>
          <ul>
            <li><b>Accessing Gyroscope/Accelerometer</b> Use the <a href="https://developer.mozilla.org/en-US/docs/WebAPI/Detecting_device_orientation">DeviceMotion/DeviceOrientation APIs</a>(<a href="http://www.html5rocks.com/en/tutorials/device/orientation/">(tutorial)</a>)</li>
          </ul>
        </div>

        <div id="internet-service and social-media" class="sidenav-anchor">
          <h3>Internet Services/Social Media</h3>
          <ul>
            <li>
              <b>Accessing Calendar:</b>There's no way I know of to access the native calendar on the mobile device.  However, you can integrate with <a href="https://developers.google.com/google-apps/calendar/">Google Calendar API</a> and load the data that way.
            </li>
            <li>
              <b>Accessing Contacts:</b>Similarly, no native way of accessing contacts but you can use <a href="https://developers.google.com/google-apps/contacts/v3/?csw=1">Google Contacts API</a> if you need their contact info or use the <a href="https://developers.facebook.com/docs/javascript">Facebook API</a>for friends
            </li>
            <li>
              <b>Facebook:</b>If you need to access Facebook data on their phone, use the <a href="https://developers.facebook.com/docs/javascript/quickstart">Facebook Javascript API</a>.  Otherwise, there are several third-party <a href="https://developers.facebook.com/docs/other-sdks">Node.js libraries</a> to access the API.

            </li>
          </ul>
        </div>

        <div id="camera" class="sidenav-anchor">
          <h3>Camera</h3>
          <ul>
            <li>
              <b>Taking a photo/picking photo: </b>If you have a newer version of the iPhone (iOS6+) or Android (3.0+), use <a href="http://dev.opera.com/articles/view/media-capture-in-mobile-browsers/">HTML Media Capture</a>
            </li>
            <li>
              <b>QR Code Reading:</b> Substantially more difficult. Just about do-able if you take a photo using HTML Media Capture (see above) and use a QR code library on the server-side to read the QR code from the picture (e.g. https://npmjs.org/package/jsqrcode).  No guarantees on this one though.

            </li>
          </ul>
        </div>


      </div>
    </div>

    <footer style='margin-top: 20px;'>
      <p>
        This course was created by <a href='http://d.ucsd.edu/srk'>Scott Klemmer</a>, revised in collaboration with <a href='http://hci.stanford.edu/msb'>Michael Bernstein</a>, and the teaching staff, You can see  <a href='http://cs147.stanford.edu'>Michael's version of the course here</a>.
      </p>
    </footer>


  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/hci.js"></script>
  </body>
</html>