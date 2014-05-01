 <div class="about_container">Where am I now? <br />
    <span class="focus">Helsinki</span>, <span class="focus">Finland</span></div>
    </div>
    
    <div id="map"></div><img id="marker" height="18px" width="18pxpx" src="img/marker@2x.png" /></img>
 <footer>
        	<?php if(has_menu_items()) :?>
        	<?php while(menu_items()) : ?>
	        <a href="<?php echo menu_url(); ?>"><?php echo menu_name(); ?></a>
	        <?php endwhile; ?>
	        <?php endif; ?>
	       

        </footer>
        </section><!-- CONTAINER -->
        <script src="_scripts/plugins.js"></script>
        <script src="_scripts/main.js"></script>
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
  
          <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB32DyL7Jn3APzVDtCrM4P3l6c1ix5khxA&sensor=false">
    </script>
    
<script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 13,
                    scrollwheel: false,
                    draggable: false,
                    streetViewControl: false,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(60.172001, 24.956131), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using out element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
                
                
            }
        </script>
        
    </body>
</html>
