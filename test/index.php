<?php
$user = "root";
$password = "usbw";
$conn;

$conn = new PDO("mysql:host=localhost;dbname=vooraad;", $user, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // geeft fouten in sql weer