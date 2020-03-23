<?php

$servername = "localhost";
$username = "Angamar";
$password = "Tritacke123";
$databaze = "dm";

$conn = new mysqli ($servername, $username, $password, $databaze);

if($conn->connect_error)
{
    die("Neuspesna konekcija" . $conn->connect_error);
}

$conn->set_charset('utf8');
