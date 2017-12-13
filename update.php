<?php

require "config.php";

$conn = mysqli_connect($server, $username, $password, $db);

$file = "output.json";

$json = file_get_contents($file);

$data = json_decode($json, true);

$name = $data['playerName'];
$region = $data['region'];
$season = $data['season'];
$match = $data['match'];
$update = $data['lastUpdated'];
$rate = (int)$data['skillRating']['rating'];
$rounds = (int)$data['performance']['roundsPlayed'];
$wins = (int)$data['performance']['wins'];
$top10 = (int)$data['performance']['top10s'];
$kills = (int)$data['combat']['kills'];
$suidices = (int)$data['combat']['suicides'];
$teamkills = (int)$data['combat']['teamKills'];
$headshots = (int)$data['combat']['headshotsKills'];
$roadkills = (int)$data['combat']['roadKills'];
$assists = (int)$data['combat']['assists'];

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function query_to_db($conn, $sql){
    $result = mysqli_query($conn, $sql);

    if ($result) {   
        echo "Your query was successful";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

$sql = "UPDATE mydb
        SET name='$name', region='$region', season='$season', `match`='$match', `update`='$update', rate=$rate, rounds=$rounds,
            wins=$wins, top10=$top10, kills=$kills, suicides=$suidices, teamkills=$teamkills, headshots=$headshots,
            roadkills=$roadkills, assists=$assists";

query_to_db($conn, $sql);

mysqli_close($conn);

?>
