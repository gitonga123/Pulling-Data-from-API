<?php 
	$url = "http://test.hiskenya.org/api/users.json?paging=false";
	$username = "bootcamp2016";
	$password = "Bootcamp2016";
	$ch = curl_init($url);
	if($ch){
		curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,30);
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
		$data = curl_exec($ch);
		curl_close($ch);	
		// /echo $data;
		//echo"<br /><h2 style='color:red;text-decorate:underline'>Display The Users via The Api</h2>";
		echo "<link href='css/bootstrap.min.css' rel='stylesheet'";
		echo "<script src = 'js/bootstrap.min.js'></script";
		echo "<script src = 'jquery-1.12.0.min.js'></script";
		
		$result = json_decode($data, true);
		if ($result) {
			echo "<fieldset class='scheduler-border'>
			<legend class='scheduler-border'>Displaying All users</legend>";
			$total = count($result);
			//echo "<div class='alert alert-info'>";
			//echo "<p>Total Number of users = ";
			//echo sizeof($result). "</p></div>";
			echo "<div class='container'>";
			echo "<div class='table'>";
			echo "<table class='table table-bordered'><tr><th>Name</th><th>ID</th>
			<th>HREF</th</tr><tr>";
			
			
			foreach ($result as $key => $value) {
				if (!is_array($value)) {
					echo $key. '=>' . $value . '<br/>';
				}else{
					foreach ($result['users'] as $value) {
						echo '<td>'. $value['name']. "</td>".
						'<td>'. $value['id']. "</td>".
						'<td><a href="'.$value['href'].'.json'.'">  
						<button type="button" class="btn btn-default">More details</button></td></tr>';
							
					}
				}
				
				

									}
									echo "</div></div></table>";
									echo "</fieldset>";

		}else{
			echo "Pull up your socks";
		}
	} else{
		echo "Not Enable";
		}
?>
