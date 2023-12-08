				<?php

				$hostname="localhost";
				$username= "root";
				$password= "root123";
				$database="db_evoting";

				// UserInput Test
					function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					
					  return $data;
					}	

								

?>