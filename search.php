
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

	<div style="margin-left:200px">	
		
		<div id="search" class="w3-content navi">

			<br><h3>Select Route Type:</h3>

			<div class="w3-row-padding w3-margin-top">
				
				<div class="w3-third w3-padding">
					<div class="w3-border w3-card">
						<div class="w3-container w3-light-gray w3-xlarge"><b> PSO <span class="w3-small">TO</span> CO </b></div>
						<div class="w3-padding w3-border-bottom">
							<span> Provincial Statistic Office </span><br>
							<span> to Central Office </span>
						</div>

						<div class="w3-container">
							<?php 
								$s1sql = "SELECT COUNT(TIN) AS s1_id FROM route_table WHERE ROUTE_TYPE = '5'";
								$s1res = $connect->query($s1sql);
								if($s1res->num_rows > 0){ 
									while ($s1row = $s1res->fetch_assoc()) {
										$count_s1 = $s1row['s1_id']; // COUNT ALL UNIQUE SEGMENTS

										echo '<b style="font-size:40px;">'.$count_s1.'</b><br><p>Travel ID Listed </p>';}}
							?>
						</div>
						
						<div class="w3-light-gray w3-padding">
							<a class="w3-button w3-tiny w3-metro-dark-green"><b>View Routes</b></a>
						</div>
					</div>
				</div>



				<div class="w3-third w3-padding">
					<div class="w3-border w3-card">
						<div class="w3-container w3-light-gray w3-xlarge"><b> PSO <span class="w3-small">TO</span> PSO </b></div>
						<div class="w3-padding w3-border-bottom">
							<span> Provincial Statistic Office </span><br>
							<span> to Provincial Statistic Office </span>
						</div>

						<div class="w3-container">
							<?php 
								$s2sql = "SELECT COUNT(TIN) AS s2_id FROM route_table WHERE ROUTE_TYPE = '6'";
								$s2res = $connect->query($s2sql);
								if($s2res->num_rows > 0){ 
									while ($s2row = $s2res->fetch_assoc()) {
										$count_s2 = $s2row['s2_id']; // COUNT ALL UNIQUE SEGMENTS

										echo '<b style="font-size:40px;">'.$count_s2.'</b><br><p>Travel ID Listed </p>';}}
							?>
						</div>
						
						<div class="w3-light-gray w3-padding">
							<form method="" action="">
								<input type="hidden" name="" value="">
							</form>
							<a class="w3-button w3-tiny w3-metro-dark-blue"><b>View Routes</b></a>
						</div>
					</div>
				</div>


				<div class="w3-third w3-padding">
					<div class="w3-border w3-card">
						<div class="w3-container w3-light-gray w3-xlarge"><b> PSO <span class="w3-small">TO</span> CITY </b></div>
						<div class="w3-padding w3-border-bottom">
							<span> Provincial Statistic Office </span><br>
							<span> to City / Municipal Hall </span>
						</div>

						<div class="w3-container">
							<?php 
								$s3sql = "SELECT COUNT(TIN) AS s3_id FROM route_table WHERE ROUTE_TYPE = '7'";
								$s3res = $connect->query($s3sql);
								if($s3res->num_rows > 0){ 
									while ($s3row = $s3res->fetch_assoc()) {
										$count_s3 = $s3row['s3_id']; // COUNT ALL UNIQUE SEGMENTS

										echo '<b style="font-size:40px;">'.$count_s3.'</b><br><p>Travel ID Listed </p>';}}
							?>
						</div>
						
						<div class="w3-light-gray w3-padding">
							<a class="w3-button w3-tiny w3-metro-dark-red"><b>View Routes</b></a>
						</div>
					</div>
				</div>
			</div>


			<div class="w3-row-padding w3-margin-top">

				<div class="w3-third w3-padding">
					<div class="w3-border w3-card">
						<div class="w3-container w3-light-gray w3-xlarge"><b> CITY <span class="w3-small">TO</span> CITY </b></div>
						<div class="w3-padding w3-border-bottom">
							<span> City / Municipal Hall </span><br>
							<span> to City / Municipal Hall </span>
						</div>

						<div class="w3-container">
							<?php 
								$s4sql = "SELECT COUNT(TIN) AS s4_id FROM route_table WHERE ROUTE_TYPE = '8'";
								$s4res = $connect->query($s4sql);
								if($s4res->num_rows > 0){ 
									while ($s4row = $s4res->fetch_assoc()) {
										$count_s4 = $s4row['s4_id']; // COUNT ALL UNIQUE SEGMENTS

										echo '<b style="font-size:40px;">'.$count_s4.'</b><br><p>Travel ID Listed </p>';}}
							?>
						</div>
						
						<div class="w3-light-gray w3-padding">
							<a class="w3-button w3-tiny w3-metro-dark-green"><b>View Routes</b></a>
						</div>
					</div>
				</div>

					<div class="w3-third w3-padding">
						<div class="w3-border w3-card">
							<div class="w3-container w3-light-gray w3-xlarge"><b> CITY <span class="w3-small">TO</span> BRGY </b></div>
							<div class="w3-padding w3-border-bottom">
								<span> City / Municipal Hall </span><br>
								<span> to Barangay Hall </span>
							</div>

							<div class="w3-container">
								<?php 
									$s4sql = "SELECT COUNT(TIN) AS s4_id FROM route_table WHERE ROUTE_TYPE = '9'";
									$s4res = $connect->query($s4sql);
									if($s4res->num_rows > 0){ 
										while ($s4row = $s4res->fetch_assoc()) {
											$count_s4 = $s4row['s4_id']; // COUNT ALL UNIQUE SEGMENTS

											echo '<b style="font-size:40px;">'.$count_s4.'</b><br><p> Travel ID Listed </p>';}}
								?>
							</div>
							
							<div class="w3-light-gray w3-padding">
								<a class="w3-button w3-tiny w3-metro-dark-blue"><b>View Routes</b></a>
							</div>
						</div>
					</div>

					<div class="w3-third w3-padding">
						<div class="w3-border w3-card">
							<div class="w3-container w3-light-gray w3-xlarge"><b> BRGY <span class="w3-small">TO</span> BRGY </b></div>
							<div class="w3-padding w3-border-bottom">
								<span> Barangay Hall </span><br>
								<span> to Barangay Hall </span>
							</div>

							<div class="w3-container">
								<?php 
									$s4sql = "SELECT COUNT(TIN) AS s4_id FROM route_table WHERE ROUTE_TYPE = '10'";
									$s4res = $connect->query($s4sql);
									if($s4res->num_rows > 0){ 
										while ($s4row = $s4res->fetch_assoc()) {
											$count_s4 = $s4row['s4_id']; // COUNT ALL UNIQUE SEGMENTS

											echo '<b style="font-size:40px;">'.$count_s4.'</b><br><p> Travel ID Listed </p>';}}
								?>
							</div>
							
							<div class="w3-light-gray w3-padding">
								<a class="w3-button w3-tiny w3-metro-dark-red"><b>View Routes</b></a>
							</div>
						</div>
					</div>
				
			</div>

		</div>
	</div>





	<!-- Fillers -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
	<script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>

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
			  document.getElementById("nav_search").className += "w3-bar-item w3-button w3-metro-dark-red";
			  document.getElementById("nav_dash").className = "w3-bar-item w3-button";
			  document.getElementById("nav_list").className = "w3-bar-item w3-button";
			}
			myFunction();
		</script>

</body>
        
</html>