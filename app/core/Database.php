<?php

$string = "mysql:host=" . DBHOST . ";dbname=" . DBNAME;
$con = new PDO($string, DBUSER, DBPASS);

show($con);
