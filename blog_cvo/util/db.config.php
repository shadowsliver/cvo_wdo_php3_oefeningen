<?php
$dbInfo = "mysql:host=localhost;dbname=simple_blog";
$dbUser = 'homestead';
$dbPassword = 'secret';

$db = new PDO($dbInfo, $dbUser, $dbPassword);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
