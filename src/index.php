<?php
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
    echo "<h1>https is working!!!</h1>";
} else {
	echo "<h1>Nice, HTTP is Ok. Try <a href='https://{$_SERVER['HTTP_HOST']}'>https</a></h1>";
}
