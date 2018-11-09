<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$cmd = [
		"git pull -vvv --rebase",
		"make -j4",
		"make install",
		"make clean"
	];

	foreach ($cmd as $c) {
		$c = escapeshellarg($c);
		print shell_exec(
			"cd /var/app/teaAI && sudo -u root /usr/bin/env bash -c {$c} 2>&1"
		);
	}	
}
