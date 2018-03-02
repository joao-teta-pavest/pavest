<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
?>

<html>
<head>

<title>Tracking</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet"
	href="<?php echo base_url('assets/css/base.css');?>">
<!-- jQuery library -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->



<script src="https://cdn.pubnub.com/sdk/javascript/pubnub.4.4.1.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />



<link rel="stylesheet"
	href=" <?php echo base_url('assets/css/base.css');?> ">
<link rel="stylesheet"
	href=" <?php echo base_url('assets/css/MudaImagem.css');?> ">


</head>


<style>
#map {
	width: 100%;
	height: 400px;
	background-color: grey;
}
</style>


<body>



<br>
<br>

    
    
    
    
    
    
    
    
    
    
    <div class="container">
    <div class="row">
    <div class="col-md-2"></div>
     <div class="col-md-8" style="text-align:center">
      <h1>PubNub Google Maps Example</h1>
      <div id="map-canvas" style="width:600px;height:400px;margin:0 auto"></div>
      </div>
       <div class="col-md-2"></div>
      </div>
      <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4" >
      <br>
      <button class="btn btn-primary" onclick="go()" style="margin:0 auto">Start</button>
    <button class="btn btn-danger" onclick="stop()" style="margin:0 auto">Stop</button>
      </div>
      <div class="col-md-4"></div>
      </div>
    </div>
    
    
     <table id="GeoResults"></table>
    <script>
   
    
    var lat;
    var lng;

 $.getJSON("http://ip-api.com/json/8.8.8.8", function(data) {




     
        var cont=0;
        $.each(data, function(k, v) {
            if(cont==5){
            	lat =Number(v);
            	
            }
            if(cont==6){
            	lng =Number(v);
            	
            }
          
            cont=cont+1;
        });
    });

    
  
    

 
    
    var map;
    var mark;
    var lineCoords = [];

    var initialize = function() {
    	 $.getJSON("http://ip-api.com/json/123.98.43.7", function(data) {
    	        
    	        var cont=0;
    	        $.each(data, function(k, v) {
    	            if(cont==5){
    	            	lat =Number(v);
    	            	
    	            }
    	            if(cont==6){
    	            	lng =Number(v);
    	            	
    	            }
    	          
    	            cont=cont+1;
    	        });
    	    });
        map  = new google.maps.Map(document.getElementById('map-canvas'), {center:{lat:lat,lng:lng},zoom:12});
        mark = new google.maps.Marker({position:{lat:lat, lng:lng}, map:map});
        lineCoords.push(new google.maps.LatLng(window.lat, window.lng));
      };



      var redraw = function(payload) {
          lat = payload.message.lat;
          lng = payload.message.lng;
          map.setCenter({lat:lat, lng:lng, alt:0});
          mark.setPosition({lat:lat, lng:lng, alt:0});
          lineCoords.push(new google.maps.LatLng(lat, lng));
          var lineCoordinatesPath = new google.maps.Polyline({
            path: lineCoords,
            geodesic: true,
            strokeColor: 'red'
          });
          lineCoordinatesPath.setMap(map);
        };



        var pnChannel = "map-channel";
        var pubnub = new PubNub({
          publishKey: 'pub-c-8b845e89-bda7-4fc8-a828-548b3903ae62',
          subscribeKey: 'sub-c-58e4b368-acde-11e7-b96f-72d21da71626'
        });

        pubnub.subscribe({channels: [pnChannel]});
        pubnub.addListener({message:redraw});
var track;
        
  function go(){
	 
	  alert("Estamos a seguir o IP indicado");
        
        track=setInterval(function() {
            pubnub.publish({channel:pnChannel, message:{lat:lat+0.001, lng:lng+0.001}});
         }, 1000);
      
  }
 function stop(){
	 clearInterval(track);
	 alert("Obrigado por utilizar a nossa app");
 }
	  
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBPHVI6zFljP2WJ3zKJzzGc4tgf-hv8vGM&sensor=false&callback=initialize"></script>
    
    
    
    
    
    


</body>
</html>