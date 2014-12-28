

         <style>
.licontact{
	color: white;
}

.margin-left{
	margin-left: 20px;
}

.mapdiv_wrapper{
		    margin-top: 20px;
		    display: block;
 		    margin-left: auto;
  		    margin-right: auto;
		    width: 90%;
		    height: 400px;
		   /* height: 80%; */
		    /*height: 450px;*/

			background-color: #FFF;
		    -moz-box-shadow: 0px 1px 2px #9f9f9f;
		    -webkit-box-shadow: 0px 1px 2px #9f9f9f;
		    box-shadow: 0px 1px 2px #9f9f9f;
		    padding: 10px;
		    margin-bottom: 20px;
		}
	    #mapdiv {
	        width: 100%; 
	      	height: 100%;
	      	margin:auto;
	    }
</style>


<div class="wrap">
		   <div class="content">
		   	   <div class="contact_desc">
					 <div class="content_bottom">
					 	<div class="company_address lead">
					     	<h2>联系我们</h2>
							    	<p>Via Ferrarese 209/3</p>
							   		<p>40128 Bologna, Italy</p>
							   		<p>博洛尼亚,意⼤利</p>
					   		<p>Phone:+39 3279712255</p>
					   		<p>Fax: +39 0514125509</p>
					 	 	<p>Email: <span><a href="mailto:kaccino2014@gmail.com">kaccino2014[at]gmail.com</a></span></p>
					   		<p>Follow on: <span><a href="#">Facebook</a></span>, <span><a href="#">Twitter</a></span></p>
					     </div>
					       <div class="contact_info">
	    	 				
	    	 					<div class='mapdiv_wrapper'>
		<div id="mapdiv" class="box"></div>
	</div>
	      				     </div>
					      <div class="clear"></div>
		                </div>	
	               </div>			  
	  		</div>
   		</div>

   		<script src="http://www.openlayers.org/api/OpenLayers.js"></script>
 <script>
    map = new OpenLayers.Map("mapdiv");
    map.addLayer(new OpenLayers.Layer.OSM());
 
    var lonLat = new OpenLayers.LonLat(11.3570687,44.5191945)
          .transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map.getProjectionObject() // to Spherical Mercator Projection
          );
 
    var zoom=16;
 
    var markers = new OpenLayers.Layer.Markers( "Markers" );
    map.addLayer(markers);
 
    markers.addMarker(new OpenLayers.Marker(lonLat));
 
    map.setCenter (lonLat, zoom);
  </script>