<?php
		$pdo->exec($sql);
		$sql2 = "INSERT INTO users (role, username, password, user_id) VALUES (1, '$newUsername', '$newPassword', '$lastID');";