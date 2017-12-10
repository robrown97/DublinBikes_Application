<?php
    include_once 'ApplicationHeader.php';
?>
<!---body tag has been opened, place content here.--->
<script src="stations.js"></script>
<body onload="addressList()">
<script src="stations.js"></script>

<div id="addressDropdown">
	<form id="stationsForFav" name="location" onchange="favourite()" action="includes/fav.inc.php" method="POST">
		<h3 id="title">Choose you favourite station:</h3>
		
		<select id="mySelect">
		<option id="addressList" value="select station" selected="selected" name="selectStation">Select Station</option>
		</select><br>
	</form>	
	
	<div>
		<form action="includes/fav.inc.php" name="favTest" method="POST">
			<!--<input type="hidden" name="uid" value='<?php echo $_SESSION['u_uid'];?>'/>-->
			<input  id="favName" type="text" name="fav" value="Favourite Station Here...."/>
			<button onclick="favPrint()" type="save" name="save">Save/Update</button>
		</form>
	</div>
	
	<div>
		<h2>Your details</h2>
		<?php
			echo 'Username: ';
			echo $_SESSION['u_uid'];
			echo '      |      ';
			echo 'Email: ';
			echo $_SESSION['u_email'];
			echo '</br></br>';
			// echo'<p id="favStation">Favourite Station: that one</p>';
			// echo $_SESSION['u_fav'];
			
			//echo 'Account Id: ';
			//var_dump ((int)$_SESSION['u_id']);
		?>
	</div>
	<button onclick="deleteAccount()" id="delete" type="delete" name="delete" action="includes/delete.inc.php" method="POST">Delete Account</button>
</div>
</body>
<!---body tag will now be closed, place content above.--->
