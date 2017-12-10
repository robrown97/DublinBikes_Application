var lat;	//lat = 53.XXXXXXX
var lng;	//lng = -6.XXXXXX
var stationName;

									//APPLICATION PAGE

//PUTTING STATION NAMES INTO DROPDOWN LIST
	function addressList(){
	    var xhr = new XMLHttpRequest(); 		
			xhr.open('GET','https://api.jcdecaux.com/vls/v1/stations?contract=Dublin&apiKey=fc485179156e7d3c19085b499c05dd7bf9191cb4');
			xhr.onreadystatechange = function() {
				if (xhr.readyState == 4 && xhr.status == 200) {
		    		var items = JSON.parse(xhr.responseText);
					for (var i in items) {
						document.getElementById("mySelect").innerHTML += '<option>' + items[i].address + '</option>';
					}	
				}					
			}
		xhr.send();
	};

//GETTING STATION INFO
	function stationInfo(){
		stationName = document.getElementById("mainForm").elements[0].value;//getting value of selected station
		document.getElementById("station").innerHTML = stationName;//setting the variable value
		//request	
		var xhr = new XMLHttpRequest(); 	
		xhr.open('GET', 'https://api.jcdecaux.com/vls/v1/stations?contract=Dublin&apiKey=fc485179156e7d3c19085b499c05dd7bf9191cb4');
		xhr.onreadystatechange = function() {
			if (xhr.readyState == 4 && xhr.status == 200) {
	    		var items = JSON.parse(xhr.responseText);//parsing text
				//getting info based on that station  		
	    		for (var i in items){//for each loop
					if(items[i].address == stationName){//finding users station in the API
						var bikes = items[i].available_bikes;//getting the number of bikes free
						var stands = items[i].available_bike_stands;//finding the amount of stands free
						var bank = items[i].banking;//is there a payment machine at the stop?
							if(bank===true){//editing returned value
								bank = "Yes";
							}else{
								bank = "No";
							}
						var stat = items[i].status;//is the station open or closed?
							if(stat==="OPEN"){//editing returned value
									stat = "Open";
								}else{
									stat = "Closed";
								}
						//getting longitude and latitude for Google Map
						lat = items[i].position.lat;
						lng = items[i].position.lng;
					//inserting values into DOM
					document.getElementById("availBikes").innerHTML = bikes;
					document.getElementById("availStands").innerHTML = stands;
					document.getElementById("banking").innerHTML = bank;
					document.getElementById("status").innerHTML = stat;
					}
					
	    		}
	    	}
		}
		xhr.send();
	}

//LOAD PING ON STATION ADDRESS
	function map(){
		document.getElementById("map").src="https://www.google.com/maps/embed/v1/place?center="+lat+","+lng+"%20&zoom=15&key=AIzaSyBvcz6T46mJrve5fMIrgykjTDAiqcBgRh4&q="+lat+","+lng;
	}
	


function favourite(){
	stationName = document.getElementById("stationsForFav").elements[0].value;//getting value of selected station
		document.getElementById("favName").value = stationName;
}
//UPDATE SUCESS POPUP
function favPrint(){
	stationName = document.getElementById("stationsForFav").elements[0].value;//getting value of selected station
		alert("Yay!"+"\n"+"Your favourite station has been updated to: "+"\n"+stationName);
}
//DELETE ACCOUNT, CONFIRMATION, REDIRECT
function deleteAccount(){
	if(confirm("Are you sure you want to DELETE your Account?" +"\n"+"We'd be sad to see go!") == true){
		if(confirm("Are you positive?") == true){
				alert("Fair enough <sadface.png>");
		}
	}else(
		alert("Too Late!"));
		window.location.href = "/includes/delete.inc.php";
}