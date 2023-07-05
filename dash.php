<?php 

	
	$csql = "SELECT COUNT(TIN) AS rt_count FROM route_table";
	$cres = $connect->query($csql);
		if($cres->num_rows > 0){
			while ($crow = $cres->fetch_assoc()) {
				$count_all = $crow['rt_count']; // COUNT ALL UNIQUE TRAVEL ID NUMBER
			}
		}
	$rsql = "SELECT COUNT(DISTINCT CONCAT(TIN,RN)) AS route_id FROM segment_table";
	$rres = $connect->query($rsql);
		if($rres->num_rows > 0){
			while ($rrow = $rres->fetch_assoc()) {
				$count_route = $rrow['route_id']; // COUNT THE UNIQUE ROUTES
			}
		}

	
	$ssql = "SELECT COUNT(DISTINCT CONCAT(TIN,RN,SN)) AS all_id FROM segment_table";
	$sres = $connect->query($ssql);
		if($sres->num_rows > 0){ while ($srow = $sres->fetch_assoc()) {
				$count_segment = $srow['all_id']; // COUNT ALL UNIQUE SEGMENTS
			}
		}

	
	$rtsql = "SELECT COUNT(DISTINCT ROUTE_TYPE) AS segments_id FROM route_table";
	$rtres = $connect->query($rtsql);
	if($rtres->num_rows > 0){
		while ($rtrow = $rtres->fetch_assoc()) {
			$rt = $rtrow['segments_id'];// COUNT ALL UNIQUE SEGMENTS
		}
	}

?>



<div id="dashboard" class="w3-content navi">

	<br><h3>Select Route Type:</h3>

	<div class="w3-row-padding w3-margin-top">

		<div class="w3-quarter w3-padding">
			<div class="w3-border w3-card w3-center">
				<div class="w3-padding w3-light-gray">
					<b> TOTAL NUMBER OF <br><span class="w3-text-red">TRAVEL ID</span></b>
				</div>
				<b style="font-size:40px;"><?php echo $count_all; ?> </b>
			</div>
		</div>

		<div class="w3-quarter w3-padding">
			<div class="w3-border w3-card w3-center">
				<div class="w3-padding w3-light-gray">
					
					<b> TOTAL NUMBER OF <br><span class="w3-text-blue">ROUTES</span></b>
				</div>
				<b style="font-size:40px;"><?php echo $count_route; ?> </b>				
			</div>
		</div>

		<div class="w3-quarter w3-padding">
			<div class="w3-border w3-card w3-center">
				<div class="w3-padding w3-light-gray">
					
					<b> TOTAL NUMBER OF <br><span class="w3-text-green">SEGMENTS</span></b>
				</div>
				<b style="font-size:40px;"><?php echo $count_segment; ?> </b>				
			</div>
		</div>

		<div class="w3-quarter w3-padding">
			<div class="w3-border w3-card w3-center">
				<div class="w3-padding w3-light-gray">
					
					<b> TOTAL NUMBER OF <br><span class="w3-text-purple">ROUTE TYPE</span></b>
				</div>
				<b style="font-size:40px;"><?php echo $rt; ?> </b>				
			</div>

			
		</div>

	</div>



	<div class="w3-row-padding w3-margin-top">


		<div class="w3-half w3-padding">
			<div class="w3-border w3-card">
				<div class="w3-light-gray w3-padding-16 w3-padding">
					<b>TOTAL NUMBER OF <span class="w3-text-red">TRAVEL ID</span> PER MUNICIPALITY</b>
				</div>
		
				<table class="w3-table w3-striped ">
					<?php 
						$citysql = "SELECT DISTINCT CITY AS city FROM route_table ORDER BY CITY ASC";
						$cityres = $connect->query($citysql);
						if($cityres->num_rows > 0){
							while ($cityrow = $cityres->fetch_assoc()) {
								// CALL ALL CITY NAMES
								$cityname = $cityrow['city'];

								$crsql = "SELECT COUNT(CITY) AS cr FROM route_table WHERE CITY = $cityname";
								$crres = $connect->query($crsql);
								if($crres->num_rows > 0){
									while ($crrow = $crres->fetch_assoc()) {
										$cityroutecount = $crrow['cr'];
								
										if($cityname == "01"){$cityname = "BAGUMBAYAN";}
										if($cityname == "02"){$cityname = "COLUMBIO";}
										if($cityname == "03"){$cityname = "ESPERANZA";}
										if($cityname == "04"){$cityname = "ISULAN";}
										if($cityname == "05"){$cityname = "KALAMANSIG";}
										if($cityname == "06"){$cityname = "LEBAK";}
										if($cityname == "07"){$cityname = "LUTAYAN";}
										if($cityname == "08"){$cityname = "LAMBAYONG";}
										if($cityname == "09"){$cityname = "PALIMBANG";}
										if($cityname == "10"){$cityname = "PRES.QUIRINO";}
										if($cityname == "11"){$cityname = "TACURONG CITY";}
										if($cityname == "12"){$cityname = "SEN. NINOY AQUINO";}

									echo '	<tr><td>'.$cityname.'</td><td><b>'.$cityroutecount.'</b></td></tr>';
									}
								}
							}
						}
					?> 
				</table>
			</div>
		</div>


		<div class="w3-half w3-padding">
			<div class="w3-border w3-card">
				<div class="w3-light-gray w3-padding-16 w3-padding">
					<b>TOTAL NUMBER OF <span class="w3-text-blue">ROUTES</span> PER MUNICIPALITY</b>
				</div>
		
				<table class="w3-table w3-striped">
					<?php 
						$citysql = "SELECT DISTINCT CITY AS city FROM route_table ORDER BY CITY ASC";
						$cityres = $connect->query($citysql);
						if($cityres->num_rows > 0){
							while ($cityrow = $cityres->fetch_assoc()) {
								// CALL ALL CITY NAMES
								$cityname = $cityrow['city'];

								$crsql = "SELECT COUNT(CITY) AS cr FROM route_table WHERE CITY = $cityname";
								$crres = $connect->query($crsql);
								if($crres->num_rows > 0){
									while ($crrow = $crres->fetch_assoc()) {
										$cityroutecount = $crrow['cr'];
								
										if($cityname == "01"){$cityname = "BAGUMBAYAN";}
										if($cityname == "02"){$cityname = "COLUMBIO";}
										if($cityname == "03"){$cityname = "ESPERANZA";}
										if($cityname == "04"){$cityname = "ISULAN";}
										if($cityname == "05"){$cityname = "KALAMANSIG";}
										if($cityname == "06"){$cityname = "LEBAK";}
										if($cityname == "07"){$cityname = "LUTAYAN";}
										if($cityname == "08"){$cityname = "LAMBAYONG";}
										if($cityname == "09"){$cityname = "PALIMBANG";}
										if($cityname == "10"){$cityname = "PRES.QUIRINO";}
										if($cityname == "11"){$cityname = "TACURONG CITY";}
										if($cityname == "12"){$cityname = "SEN. NINOY AQUINO";}

									echo '	<tr><td>'.$cityname.'</td><td><b>'.$cityroutecount.'</b></td></tr>';
									}
								}
							}
						}
					?> 
				</table>
			</div>
		</div>


		

	</div>

	<script>
		function myFunction() {
		  document.getElementById("nav_dash").className += "w3-bar-item w3-button w3-metro-dark-blue";
		  document.getElementById("nav_search").className = "w3-bar-item w3-button";
		  document.getElementById("nav_list").className = "w3-bar-item w3-button";
		}
		myFunction();
	</script>

</div>