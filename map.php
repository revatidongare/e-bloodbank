<?php

	include("includes/config.php");
	$sql = "SELECT * FROM `members`";
	$result = $conn->query($sql);
	$mapstring = "";
	if ($result->num_rows > 0) {
		// output data of each row
		//Data Format: name#latitudde#longitude#blood group and phone
		
		while($row = $result->fetch_assoc()) {
			$name=$row["name"];
			
			if($mapstring==""){
				$mapstring = $name."#".$row["lat"].",".$row["long"]."#Blood Group: ".$row["blood_group"]."<br>Mobile: ".$row["mobile"];
			}else{
				$mapstring = $mapstring."@".$name."#".$row["lat"].",".$row["long"]."#Blood Group: ".$row["blood_group"]."<br>Mobile: ".$row["mobile"];
			}

		}
	}		

?>
<!DOCTYPE html>
<html>
<head>
<title>E-Blood Bank</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
	html, body { height:100%; width:100%; margin: 0;}
	#map {
		min-height: 100%;
	  height: 100%;
	  width: 100%;
	 }
	 .banners{
	 		text-align: center;
	 		background: #F44336;
	 		padding: 10px;
	 		color: #FFF;
	 		font-size: 18px;
	 }

</style>
</head>
<body>
	<div class="banners">Blood Donors</div>
	<div id="map"></div>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkFMU95IembEyVxpCNGDXaDUwkYiL09Vo&callback=initMap"></script>

	<script type="text/javascript">
		var users = <?php echo '"'.$mapstring.'"'; ?>;
		function initMap() {
		  var uluru = {lat: 19.0759840, lng: 72.8776560};
		  var map = new google.maps.Map(document.getElementById('map'), {
		    zoom: 12,
		    center: uluru
		  });
				
		
		var userArray = users.split('@');

	  		for(var i=0; i<userArray.length; i++){

	  			var data = userArray[i].split("#");

				lats = data[1];
	    		longs = data[2];

	  			var latlon = new google.maps.LatLng(lats, longs);
	 		    var contentString = '<div id="content">'+data[0]+'</div>';

				var infowindow = new google.maps.InfoWindow({
				content: contentString
				});

				var marker = new google.maps.Marker({
					position: latlon,
					map: map,
	            	info: data[0]+'<br><br>'+data[3],
					title: 's'
				});
				marker.addListener('click', function() {
					infowindow.setContent(this.info);
					infowindow.open(map, this);
				});


	  		}

		}

	</script>

</body>
</html>

