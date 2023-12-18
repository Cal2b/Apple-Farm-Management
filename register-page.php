<!DOCTYPE html>
<html lang="en">
	<head>
 		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=l, shrink-to-fit=no">
		<title>Register Page</title>

		<!-- Bootstrap CSS File -->
        <link rel="stylesheet" href="styles.css"> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	</head>
    <body>
    <div class="containers" style="margin-top:10px">
		<div class="legend">
            <img src="images/apple.jpg" alt="Apple Logo">
        </div>
        <h1>Register Apple</h1>
        <form action="process-register.php" method="POST">
		<div class="input-text">
				<div class="input-groups">
					<label for="apple_id">AppleId:</label>
                    <div>
                        <input type="number" class="form-control" id="apple_id" name="apple_id"	placeholder="Apple Id"  required > <br>
                    </div>
                </div>
           
				<div class="input-group"> 
					<label for="yop">Year of planting:</label>
					<div>
							<input type="number" class="form-control" id="yop"	name="yop" 	placeholder="Year of planting" maxlength="30" required > <br>
					</div>
				</div>

				<div class="input-group">
					<label for="breed">Breed:</label>
					<div>
						<input type="text" class="form-control" id="breed" name="breed" placeholder=" Apple Breed" maxlength="60" required> <br>
					</div>
				</div>

				<div class="input-group">
					<label for="apple_row">Apple Row:</label>
					<div>
						<input type="number" class="form-control" id="apple_row" name="apple_row" placeholder="Apple Row" maxlength="30" required > <br>
					</div>
				</div>

				<div class="input-group">
					<label for="apple_column">Apple Column:</label>
					<div>
						<input type="number" class="form-control" id="apple_column" name="apple_column" placeholder="Apple Column" maxlength="30" required > <br>
					</div>
				</div>
				<div class="input-group">
					<label for="latitude">Latitude:</label>
					<div>
						<input type="text" class="form-control" id="geolocationLatitude" name="latitude" placeholder="Geolocation" maxlength="30" hidden required value >
				
					</div>
				</div>

				<div class="input-group">
				<label for="longitude" class="col-sm-2 col-form-label text-right">Longitude:</label>
					<div class="col-sm-6" id="new">
						<input type="text" class="form-control" id="geolocationLongitude" name="longitude" placeholder="Geolocation" maxlength="30" hidden required value >
					</div>
				</div>
            	<div class="input-group">
					<label for=""></label>
					<div>
						<input id="submit"  class="btn btn-secondary" type="submit" name="submit" value="Submit">
					</div>
				</div>
		</div>					
    </div>
	<script>
		var latitude = document.getElementById("geolocationLatitude");
		var longitude = document.getElementById("geolocationLongitude");
		latitude.value = getLatitude();
		longitude.value=getLongitude();

		function getLatitude() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showLatitude);

		} else {
			x.innerHTML = "Geolocation is not supported by this browser.";
		}
		}

		function showLatitude(position) {
		latitude.value =  position.coords.latitude;
	
		}
		function getLongitude() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showLongitude);

		} else {
			alert("Geolocation is not supported by this browser.");
		}
		}
		function showLongitude(position) {
		longitude.value =  position.coords.longitude;
		}
	</script>