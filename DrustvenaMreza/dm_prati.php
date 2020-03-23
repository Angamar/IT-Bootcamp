<?php
require_once "dm_konekcija.php";

$friend_id = 
$conn->real_escape_string($_GET['friend_id']);
//friend_id je id korisnika koga hocu da pratim

$id=$_SESSION['id'];
//logged_id je id logovanoG korisnika

$sql = "SELECT * FROM follow
        WHERE user_id = $id
        AND friend_id = $friend_id";

$result = $conn->query($sql);

if ($result->num_rows == 0)
{
    $sql1 = "INSERT INTO follow (user_id, friend_id)
    VALUES($id, $friend_id)";
    $result1=$conn->query($sql1);
    if(!$result1)
    {
        die("neuspeli upit: " . $conn->error);
    }
}

header('Location: dm_prijatelji.php'); //redirekcija na stranicu dm_prijatelji.php