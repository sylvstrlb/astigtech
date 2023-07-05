






	<!---- NAV BAR / NAV BAR / NAV BAR / NAV BAR / NAV BAR / NAV BAR / NAV BAR ---->

	<div class="w3-container w3-padding w3-card w3-black">

		<a href="../Astigtech/"><img class="w3-margin-right" src="img\astiglogo.png" style="width:40px;"></a>
		<b> Augmented System for Travel Information using GIS Technology </b>
		<b class="w3-right w3-padding"> Sultan Kudarat <i class="fa fa-angle-down"></i></b>
		
	</div>



	<!---- SIDE BAR / SIDE BAR / SIDE BAR / SIDE BAR / SIDE BAR / SIDE BAR ---->
	<div class="w3-sidebar w3-bar-block w3-metro-darken w3-border-right" style="width:200px">

		<h3 class="w3-bar-item w3-margin-top w3-wide">ASTIG</h3>
		<a  class="w3-bar-item w3-button" href="index.php"  id="nav_dash">Dashboard</a>
		<a  class="w3-bar-item w3-button" href="search.php" id="nav_search">Search Routes</a>
		<a  class="w3-bar-item w3-button" href="list.php" 	id="nav_list">List of Routes</a>
	</div>	

		<script>
			function openCity(evt, cityName) {
			  var i, x, tablinks;
			  x = document.getElementsByClassName("navi");
			  for (i = 0; i < x.length; i++) {
			    x[i].style.display = "none";
			  }
			  tablinks = document.getElementsByClassName("tablink");
			  for (i = 0; i < x.length; i++) {
			    tablinks[i].className = tablinks[i].className.replace(" w3-metro-dark-red", ""); 
			  }
			  document.getElementById(cityName).style.display = "block";
			  evt.currentTarget.className += " w3-metro-dark-red";
			}

			// FUNCTION OF ACCORDION
			function myAccFunc() {
			  var x = document.getElementById("demoAcc");
			  if (x.className.indexOf("w3-show") == -1) {
			    x.className += " w3-show";
			    x.previousElementSibling.className += " w3-metro-dark-blue";
			  } else { 
			    x.className = x.className.replace(" w3-show", "");
			    x.previousElementSibling.className = 
			    x.previousElementSibling.className.replace(" w3-metro-dark-blue", "");
			  }
			}
		</script>