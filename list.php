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

	<div class="w3-row navi" id="search" style="margin-left:200px" style="display:none;">
		
		<div class="w3-container">
			<?php 

				$list_sql = "SELECT * FROM route_table ORDER BY ROUTE_TYPE";
				$list_res = $connect->query($list_sql);


				if ($list_res->num_rows > 0){

					echo '	<table class="w3-table-all  w3-margin-bottom" id="example" style="width:100%;">	
								<thead class="w3-small">
								   	<td> TIN 				</td>
								    <td> Route Origin 		</td>
									<td> Route Destination	</td>
								    <td> Fare 				</td>
								    <td> Action 			</td>
						  		</thead>
				  			<tbody>';


					while ($row = $list_res->fetch_assoc()) {

					
						$TIN = $row['TIN'];

						$list_sql2 = "SELECT SUM(FARE) AS value_sum FROM segment_table WHERE TIN = $TIN";
						$list_res2 = $connect->query($list_sql2);

						if($list_res2->num_rows > 0){

							while ($row2 = $list_res2->fetch_assoc()) {

								$list_sql3 = "SELECT COUNT(DISTINCT RN) AS value_count FROM segment_table WHERE TIN = $TIN";
								$list_res3 = $connect->query($list_sql3);

								if($list_res3->num_rows > 0){

									while ($row3 = $list_res3->fetch_assoc()) {

									echo '	<tr>
												<td><span class="w3-small">'.$row['TIN'].'</span></td>
												<td><span class="">'.$row['ROUTE_ORIGIN'].'</span</td>
												<td><span class="">'.$row['ROUTE_DESTINATION'].'</span></td>
												<td><b class="w3-right">₱'.number_format($row2['value_sum']).'.00</b></td>
												<td>
													<form method="post" action="view.php">
														<button class="" type="submit">
														<input type="hidden" name="get_route_id" value="'.$row['ID'].'">
														'.$row3['value_count'].'
														</button>
													</form>	
												</td>
											</tr>';
									}	
								}
							}
						}
					}
				}


		  		
			?> 				

		</div>
	</div>


	<script>
			function myFunction() {
			  document.getElementById("nav_list").className  += "w3-bar-item w3-button w3-metro-dark-blue";
			  document.getElementById("nav_dash").className = "w3-bar-item w3-button";
			  

			  document.getElementById("nav_s1").className   = "w3-bar-item w3-button";
			  document.getElementById("nav_s2").className   = "w3-bar-item w3-button";
			  document.getElementById("nav_s3").className   = "w3-bar-item w3-button";
			  document.getElementById("nav_s4").className   = "w3-bar-item w3-button";
			  document.getElementById("nav_s5").className   = "w3-bar-item w3-button";
			  document.getElementById("nav_s6").className   = "w3-bar-item w3-button";
			}
			myFunction();
		</script>

	</body>	
</html>



