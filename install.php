#!/usr/bin/php
<?php
include("../index.php"); // bootstrap ProcessWire

$writable_paths = array($config->paths->root.'site/assets', $config->paths->root.'site/config.php');

foreach ($writable_paths as $path)
{
	if (@chmod($path, 0777))
	{
		echo "✔  Made writeable (".$path.")\n";
	}

	else
	{
		echo "✖  Could not make writeable ".$path."\n";
	}
}