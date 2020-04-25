<!doctype html>
<html lang="en">
  <head>
    <title>BMISamarinda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" href="leaflet/leaflet.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  
  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   

    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-12">
		  <div class="float-right">
			<a href="#" class="text-white"><span class="mr-2 text-white icon-instagram"></span> <span >@munzalan.samarinda</span></a>
			<br>
			<a href="#" class="text-white"><span class="mr-2 text-white icon-whatsapp"></span> <span >0811-588-7075 / 0811-5544-415</span></a></a>
            

            </div>

          </div>
          
        </div>
        
      </div>
    </div>
      
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">
          
            
            <div class="site-logo">
			<figure>
                <img src="images/person_4.PNG">
              </figure>
			 
            </div>
            
            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li><a href="index.html" class="nav-link">Beranda</a></li>
				<li><a href="PetaUs.php" class="nav-link">Peta Pondok Pesantren</a></li>
				  <li><a href="kontak.php" class="nav-link">Kontak Kami</a></li>
				  <li><a href="login.php" class="nav-link">Login</a></li>
              </nav>
          
            </div>

          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    
    
<?php

?>

              <div id="map" style="width:1370px;height:470px;"></div>
			  
			  
			  
			  

    <script>
      var officeLocations = [
        <?php
          $data = file_get_contents('http://localhost/pondok1/ambildata.php');
          
          $no=1;
          if(json_decode($data,true)){
            $obj = json_decode($data);  
              foreach($obj->results as $item){
        ?>
           ['<?php echo $item->id ?>','<?php echo $item->latitude ?>','<?php echo $item->longitude ?>', '<?php echo $item->nama_pondok ?>','<?php echo $item->alamat ?>', '<?php echo $item->j_santriputri ?>','<?php echo $item->j_santriputra ?>','<?php echo $item->fasilitas ?>','<?php echo $item->kontak ?>', '<?php echo $item->foto ?>'],  
        <?php 
            } 
          }
        ?>    
      ];

      var markers = [];

      function search() {
        var e = document.getElementById('info');
        var value = e.options[e.selectedIndex].value;

        initMap(value);
      }
  
      function initMap(keyword="semua") {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: -0.456266, lng: 117.159454}
        });
        
        setMarkers(map, officeLocations, keyword);

        var geocoder = new google.maps.Geocoder();
        document.getElementById('submit').addEventListener('click', function() {
          geocodeAddress(geocoder, map);
        });
      }

      function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }

      function setMarkers(map, locations, keyword) { 
        var globalPin = 'img/CARI.png';
        for (var i = 0; i < locations.length; i++) {
          
            var office = locations[i];

           if (office[5].toLowerCase().indexOf(keyword)>=0 || keyword =="semua") {
              var myLatLng = new google.maps.LatLng(office[1], office[2]);
              var infowindow = new google.maps.InfoWindow({content: contentString});
              
              var contentString = 
                  '<div id="content">'+
                  '<div id="siteNotice">'+
                  '</div>'+
                  '<h5 id="firstHeading" class="firstHeading">'+ office[3] + '<br><br><img height=100px src=img/'+office[7]+'></h5>'+
                  '<div id="bodyContent">'+ 
                  '<a href=detailUs.php?id='+office[0]+'>Info Detail</a>'+
                  '</div>'+
                  '</div>';

              var marker = new google.maps.Marker({
                  position: myLatLng,
                  map: map,
                  title: office[3],
                  icon:'img/CARI.png'
              });
              google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
            }
        }
      }

      function getInfoCallback(map, content) {
        var infowindow = new google.maps.InfoWindow({content: content});
        return function() {
                infowindow.setContent(content); 
                infowindow.open(map, this);
            };
      }
    
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKH2F9gZMQyATwBodQsEr-uM0fokVCvZw&callback=initMap">
    </script>
  </body>

            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>