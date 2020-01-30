<?php
	if (isset($_POST['search'])) {
		$response = "<ul><li>No data found!</li></ul>";

		$connection = new mysqli('localhost', 'root', '', 'test');
		$q = $connection->real_escape_string($_POST['q']);

		$sql = $connection->query("SELECT 동주소 FROM autoxx WHERE 동주소 LIKE '%$q%'");
		if ($sql->num_rows > 0) {
			$response = "<ul>";

			while ($data = $sql->fetch_array())
				$response .= "<li>" . $data['동주소'] . "</li>";

			$response .= "</ul>";
		}

		
		exit($response);
	}
	
	
?>
