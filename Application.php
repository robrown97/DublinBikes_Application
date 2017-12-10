<?php
    include_once 'ApplicationHeader.php';
?>

<!---body tag has been opened, place content here.--->
<div id="body">
			<div id="left">
<!-- Select -->
			<div id="bike"><img id="bikeimg" src="images/dubLogo.png"></div>
			
			<div id="addressDropdown">
				<p id="title">Find Your Station:</p>
        		<form id="mainForm" name="location" onchange="stationInfo()">
	        		<select id="mySelect">
					<option id="stationName" value="select station" selected="selected" name="selectStation">Select Station</option>
	        		</select><br>
        		</form>	
        	</div>
<!-- Info -->		
		<div id="bikeInfo">
			<h3>Station:</h3>
			<p id="station"></p>
			<table>
				<tr>
					<td class="icondiv"><img class="icon" src="images/bikes.png"</td>
	            	<td class="attribute">Available Bikes:</td>  
					<td class="value" id="availBikes"></td>
				</tr>
				<tr>
					<td class="icondiv"><img class="icon" src="images/avail.png"</td>
	            	<td class="attribute">Available Stands:</td>  
					<td class="value" id="availStands"></td>
				</tr>
				<tr>
					<td class="icondiv"><img class="icon" src="images/bank.png"</td>
					<td class="attribute">Payment Machine:</td>   
					<td class="value" id="banking"></td>
				</tr>
				<tr>
				<td class="icondiv"><img class="icon" src="images/status.png"</td>
	            	<td class="attribute">Station Status:</td>    
					<td class="value" id="status"></td>
				</tr>
			</table>
        </div>
		</div>
		<div id="right">
<!-- Map -->		
		<div id="googleMap">
			<iframe id="map"
				src="https://www.google.com/maps/embed/v1/place?center=53.347604, -6.259245%
					20&zoom=14
					&key=AIzaSyBvcz6T46mJrve5fMIrgykjTDAiqcBgRh4
					&q=Dublin">
			</iframe>
		</div>
		<button id="locate" onclick="map()">Locate</button>
		
		</div>	
	</div>



<!---body tag will now be closed, place content above.--->

