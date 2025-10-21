<?php
if (!function_exists('loadEnv')) {
	function loadEnv(string $path): void
	{
		if (!file_exists($path)) {
			throw new Exception(".env file not found at: {$path}");
		}

		$env = parse_ini_file($path, false, INI_SCANNER_RAW);
		foreach ($env as $key => $value) {
			putenv("{$key}={$value}");
		}
	}
}
// echo __DIR__ . '/.env';
// Load .env at project root
loadEnv('../.env');
