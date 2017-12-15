<?php
require "data/config/config.php";

$conn = mysqli_connect($server, $username, $password, $db);

$name = $_POST["nickname"];

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM mydb WHERE name = " . '"' . $name . '"' . ";";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {   
    while($row = mysqli_fetch_assoc($result)) {
        // var_dump($row);
        echo "{\"name\":" . '"' . $row["name"] . '"' . ", " . "\"region\":" . '"' . $row["region"] . '"' . ", " . "\"season\":" . '"' . $row["season"] . '"' . ", " . "\"match\":" . '"' . $row["match"] . '"' . ", " ."\"update\":" . '"' . $row["update"] . '"' . ", " ."\"rate\":" . '"' . $row["rate"] . '"' . ", " . "\"rounds\":" . '"' . $row["rounds"] . '"' . ", " . "\"wins\":" . '"' . $row["wins"] . '"' . ", " ."\"top10\":" . '"' . $row["top10"] . '"' . ", " . "\"kills\":" . '"' . $row["kills"] . '"' . ", " . "\"suicides\":" . '"' . $row["suicides"] . '"' . ", " . "\"teamkills\":" . '"' . $row["teamkills"] . '"' . ", " . "\"headshots\":" . '"' . $row["headshots"] . '"' . ", " . "\"roadkills\":" . '"' . $row["roadkills"] . '"' . ", " . "\"assists\":" .  '"' . $row["assists"] . '"' . "}";
    }
} else {
    echo "No results..";
}
mysqli_close($conn);
?>