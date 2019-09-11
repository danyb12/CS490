	<?php
						if (!empty($_POST)) {
							$data = array(
							"username" => $_POST["username"],
							"password" => $_POST["password"]
							);

							$url = 'https://web.njit.edu/~ms2285/cs490/middle/middle.php';
							$ch = curl_init($url);
							$postData = http_build_query($data);
							curl_setopt($ch, CURLOPT_POST, 1);
							curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
							$response = json_decode(curl_exec($ch), true);
							curl_close($ch);

							if($response["gradesystem"]) {
								echo '<p class="card-content">Logged into Grading System.</p>';
							} else {
								echo '<p class="card-content">Failed to login to grading system</p>';
							}
							if($response["njit"]) {
								echo '<p class="card-content">logged into NJIT.</p>';
							} else {
								echo '<p class="card-content">failed to log into NJIT.</p>';
							}
						}
					?>