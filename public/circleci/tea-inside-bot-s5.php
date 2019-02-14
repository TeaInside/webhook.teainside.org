<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$cmd = [
		"git pull -vvv --rebase"
	];

	foreach ($cmd as $c) {
		$c = escapeshellarg($c);
		print shell_exec(
			"cd /var/www/teainside-bot-s5.teainside.org && sudo -u root /usr/bin/env bash -c {$c} 2>&1"
		);
	}	
}
