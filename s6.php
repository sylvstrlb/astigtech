
<!DOCTYPE html>

<html>

	<?php 
		include '_conn.php';
		include '_head.php';
	?>

<body>

	<?php 
		include '_nav.php';
	?>

	<div class="w3-row" id="search" style="margin-left:200px">	

		<div class="w3-col w3-sidebar w3-card" style="margin-right:200px;width:300px;">
			<div class="w3-padding w3-margin-top">

				<b> SEARCH ROUTES</b><br>
				<div class="w3-panel" style="width: 100%;">
					<i class="fa fa-angle-right"></i>
					<span> &nbsp REGION XII</span>
				</div>

				<div class="w3-panel" style="width: 100%;">
					<i class="fa fa-angle-right"></i>
					<span>&nbsp SULTAN KUDARAT</span>
				</div>
			</div>

			<div class="w3-container w3-light-gray" style="font-weight: bold;">
				<br>
				<form method="post">
					<div class="w3-padding">
						<p>ROUTE <span class="w3-text-blue">ORIGIN:</span></p>
						<select name="c1" id="city" class="w3-input w3-margin-bottom" required=""><option selected disabled>Select City</option></select>
						<select name="b1" id="barangay" class="w3-input" required=""><option selected disabled >Select Barangay</option></select>
					</div>

					<center class="w3-opacity">
						<i class="fa fa-angle-double-down w3-xxlarge"></i>
					</center>
					

					<div class="w3-padding">
						<p>ROUTE <span class="w3-text-red">DESTINATION:</span></p>
						<select name="c2" id="city2" class="w3-input w3-margin-bottom" required=""><option selected disabled>Select City</option></select>
						<select name="b2" id="barangay2" class="w3-input" required=""><option selected disabled >Select Barangay</option></select>
					</div>

					<div class="w3-center w3-margin">
						<button class="w3-button w3-block w3-medium w3-metro-dark-red w3-hover-dark-gray">
							<i class="fa fa-search"></i> Search Route
						</button>
					</div>
				</form>
				<br>
			</div>
		</div>




		<div class="w3-rest" style="margin-left:300px;">
			<div class="w3-container w3-row-padding w3-padding w3-margin-top">
				<h4 class="w3-text-dark-gray"> AVAILABLE ROUTES OF SULTAN KUDARAT: </h4>
				
				<?php
					if($_SERVER["REQUEST_METHOD"] == "POST") {

						if (empty($_POST['c1'])){
						  echo '<div class="w3-quarter w3-center w3-padding w3-large  w3-opacity"><div class="w3-border w3-round-xxlarge w3-padding-48 w3-margin w3-sand w3-text-red"><i class="fa fa-warning" style="font-size:100px;"></i><br><b>REQUIRED<br> CITY ORIGIN!</b></div></div>';
						}if (empty($_POST['b1'])) {
				    	  echo '<div class="w3-quarter w3-center w3-padding w3-large  w3-opacity"><div class="w3-border w3-round-xxlarge w3-padding-48 w3-margin w3-sand w3-text-red"><i class="fa fa-warning" style="font-size:100px;"></i><br><b>REQUIRED<br> BRGY ORIGIN!</b></div></div>';
					  	}if (empty($_POST['c2'])) {
						  echo '<div class="w3-quarter w3-center w3-padding w3-large  w3-opacity"><div class="w3-border w3-round-xxlarge w3-padding-48 w3-margin w3-sand w3-text-red"><i class="fa fa-warning" style="font-size:100px;"></i><br><b>REQUIRED<br> CITY DESTINATION!</b></div></div>';
						}if (empty($_POST['b2'])) {
						  echo '<div class="w3-quarter w3-center w3-padding w3-large  w3-opacity"><div class="w3-border w3-round-xxlarge w3-padding-48 w3-margin w3-sand w3-text-red"><i class="fa fa-warning" style="font-size:100px;"></i><br><b>REQUIRED<br> BRGY DESTINATION!</b></div></div>';
						}

						else{
							$c1 = $_POST['c1'];	
							$b1 = $_POST['b1'];

							$c2 = $_POST['c2'];	
							$b2 = $_POST['b2'];
								

							include 'citybrgy.php';




						echo '<p> BASES: </p>';
						echo $c1 ;
						echo '<br>';
						echo $b1;
						echo '<br>';
						echo $c2;
						echo '<br>';
						echo $b2;
						echo '<br><br>';



						echo '<table class="w3-table-all w3-padding">
								<tr>
									<th>TIN</th>
									<th>ROUTE TYPE</th>
									<th>ROUTE ORIGIN</th>
									<th>ROUTE DESTINATION</th>
									<th>ACTION</th>
								</tr>';


						$asql = "SELECT * FROM route_table WHERE CONCAT(1265,CITY) = $c1 AND ROUTE_DESTINATION like '%$c2%'";
						$ares = $connect->query($asql);

							if ($ares->num_rows > 0) {
								while ($arow = $ares->fetch_assoc()) {

									$cityrow =  '1265'.$arow['CITY'];
									$brgyrow =  $cityrow.$arow['BRGY'];

									
									if($c1 = $cityrow or $b1 = $brgyrow){
										echo 	'<tr>
													<td>'.$arow['TIN'].'</td>
													<td>'.$arow['ROUTE_TYPE'].'</td>
													<td>'.$arow['ROUTE_ORIGIN'].'</td>
													<td>'.$arow['ROUTE_DESTINATION'].'</td>
													<td> </td>
												</tr>';		
									}
								}
							}

							echo '</table>';
						}
						
					
						
					}

					else{
						echo '<div class="w3-row w3-opacity" style="margin-top:200px;">
								<div class="w3-third w3-container"></div>
								<div class="w3-third w3-light-gray w3-center w3-padding w3-card w3-round-xxlarge">
									<br><br>
									<i class="fa fa-calendar w3-jumbo"></i><br><br>
									<h1> Seach Route </h1>
									<br><br>
								</div>
							  </div>';
					}
				?>
			</div>
		</div>
	</div>





	<!-- Fillers -->
	<script type="text/javascript" src="head/cdnjs.cloudflare.com_ajax_libs_jquery_3.5.0_jquery.js"></script>
	
	<script type="text/javascript" src="head/f001.backblazeb2.com_file_buonzz-assets_jquery.ph-locations.js"></script>

       	<script type="text/javascript">

            $(document).ready(function(){

                // $('#region').on('change', my_handlers.fill_provinces);
                setTimeout(function() {
                    var province_code = "1265";
                    $('#city').ph_locations( 'fetch_list', [{"province_code": province_code}]);
                }, 1000);

                $('#city').on('change', function() {
                    var city_code = $("#city").val();
                    $('#barangay').ph_locations('fetch_list', [{"city_code": city_code}]);
                });

                $('#barangay').on('change', function() {	
                	var province_code = "1265";
                    $('#city2').ph_locations( 'fetch_list', [{"province_code": province_code}]);
                });

                $('#city2').on('change', function() {
                    var city_code = $("#city2").val();
                    $('#barangay2').ph_locations('fetch_list', [{"city_code": city_code}]);
                });


                $('#city').ph_locations({'location_type': 'cities'});
                $('#barangay').ph_locations({'location_type': 'barangays'});
                $('#city2').ph_locations({'location_type': 'cities'});
                $('#barangay2').ph_locations({'location_type': 'barangays'});

            });
        </script>

        <script>
			function myFunction() {
			  document.getElementById("nav_search").className  += "w3-bar-item w3-button w3-metro-dark-blue";
			  document.getElementById("nav_dash").className = "w3-bar-item w3-button";
			  document.getElementById("nav_list").className = "w3-bar-item w3-button";
			}
			myFunction();
		</script>

</body>
        
</html>