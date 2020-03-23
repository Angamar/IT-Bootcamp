<?php
require_once "dm_konekcija.php";

$friend_id = $conn->real_escape_string($_GET['friend_id']);
//id korisnika kome brisemo pracenje

$logged_id = 1;

$sql = "DELETE FROM follow
        WHERE user_id = $logged_id
        AND friend_id = $friend_id";

$result = $conn->query($sql);

if(!$result)
{
    die("Neuspeli upit: " . $conn->error);
}

header('Location: dm_prijatelji.php');