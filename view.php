<!DOCTYPE html>

<html>

	<?php 
		
		include '_conn.php';
		include '_head.php';

		$route_id =  $_POST['get_route_id'];

	?>


<body class="w3-light-grey">

	<div class="w3-content w3-white">
		<?php 
			include '_nav.php';
		?>
		
	
		<div class="w3-container">
			<?php 

				$list_sql = "SELECT * FROM route_table WHERE ID ='$route_id'";
				$list_res = $connect->query($list_sql);


				if ($list_res->num_rows > 0) {
					
					
					while ($row = $list_res->fetch_assoc()) {

						if ($row['ROUTE_TYPE'] == 5){
							$row['ROUTE_TYPE'] = 'PSO to CO';
						}if ($row['ROUTE_TYPE'] == 6){
							$row['ROUTE_TYPE'] = 'PSO to PSO';
						}if ($row['ROUTE_TYPE'] == 7){
							$row['ROUTE_TYPE'] = 'PSO to City';
						}if ($row['ROUTE_TYPE'] == 8){
							$row['ROUTE_TYPE'] = 'City to City';
						}if ($row['ROUTE_TYPE'] == 9){
							$row['ROUTE_TYPE'] = 'City to Brgy';
						}

						echo '
							<div class="w3-row">
						
								<div class="w3-half w3-row w3-green">
									<div class="w3-third w3-padding">
										<span class="w3-small"> Travel ID: </span><br>
										<span class="w3-small"> Route Origin: </span><br>
										<span class="w3-small"> Route Destination: </span>
									</div>
									<div class="w3-rest w3-padding">
										<b class=""> '.$row['TIN'].'</b><br>
										<b class=""> '.$row['ROUTE_ORIGIN'].' </b><br>
										<b class=""> '.$row['ROUTE_DESTINATION'].'</b>
									</div>
								</div>

								<div class="w3-quarter w3-padding w3-center w3-red">
									here counts the total FARE
								</div>
								<div class="w3-quarter w3-padding w3-center w3-blue">
									here counts the total route
								</div>
								
							</div>';


							

							$rtin = $row['TIN'];

							$list_sql2 = "SELECT * FROM segment_table WHERE TIN ='$rtin'";
							$list_res2 = $connect->query($list_sql2);


							echo '	<table class="w3-table-all">	
										<thead class="w3-small">
										   	<td> RN 					</td>
										    <td> SN 					</td>
											<td> Segment Origin			</td>
										    <td> Segment Destination 	</td>
										    <td> Distance 				</td>
										    <td> Road Type 				</td>
										    <td> Topographical 			</td>
										    <td> Mode of Travel			</td>
										    <td> Duration 				</td>
										    <td> Frequency 				</td>
										    <td> Fare 					</td>
								  		</thead>

						  			<tbody>';

								while ($row2 = $list_res2->fetch_assoc()) {
								

									echo '	
											<tr class="w3-small">
												<td class="">'.$row2['RN'].'</td>
												<td class="">'.$row2['SN'].'</td>
												<td class="">'.$row2['SEG_ORIGIN'].'</td>
												<td class="">'.$row2['SEG_DESTINATION'].'</td>
												<td class="">'.$row2['DISTANCE'].'</td>
												<td class="">'.$row2['ROAD_TYPE'].'</td>
												<td class="">'.$row2['TOPOGRAPHICAL'].'</td>
												<td class="">'.$row2['MODE_OF_TRAVEL'].'</td>
												<td class="">'.$row2['DURATION'].'</td>
												<td class="">'.$row2['FREQUENCY'].'</td>
												<td class="">'.$row2['FARE'].'</td>
											</tr>';

								}

							echo '</tbody></table>';
					  	}
					}


					  

				?> 
			</div>
		</div>

	</body>	

</html>



