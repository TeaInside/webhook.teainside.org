<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$cmd = [
		"git pull -vvv --rebase",
		"php restart.php"
	];

	foreach ($cmd as $c) {
		$c = escapeshellarg($c);
		print shell_exec(
			"cd /var/app/ibl && sudo -u root /usr/bin/env bash -c {$c} 2>&1"
		);
	}	
}
