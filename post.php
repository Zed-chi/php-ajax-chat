<?php
include "db.php";

		if (isset($_POST['name'])) {
			$name = $_POST['name'];
			$msg = $_POST['msg'];
			$query = "insert into chat(name, msg) values('$name', '$msg')";

			$req = $db->prepare($query);
			$req->execute();
		}
?>