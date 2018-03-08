<?php 
  if (!empty($_GET['location']))
  {

      $maps_url="https://maps.googleapis.com/maps/api/geocode/json?address="
      .urlencode($_GET["location"]);
      $maps_json = file_get_contents($maps_url);

      $maps_array = json_decode($maps_json, true);

      $lat = $maps_array['results'][0]['geometry']['location']['lat'];
      $lng = $maps_array['results'][0]['geometry']['location']['lng'];
 
      echo ($lat);
      echo "                ";
      echo ($lat);
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>geogram</title>
</head>
<body>
<form action="">
<input type="text" name="location">
<button type="submit">submit</button>
</form>
</body>
</html> 

