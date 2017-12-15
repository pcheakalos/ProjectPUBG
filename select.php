<?php
require "Data/Config/config.php";

$conn = mysqli_connect($server, $username, $password, $db);

$name = $_POST["nickname"];

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM mydb WHERE name = " . '"' . $name . '"' . ";";
// A function for general queries.
//function query_to_db($conn, $sql){
//    $result = mysqli_query($conn, $sql);
//	$resultAry = array();
//	
//	if(mysqli_num_rows($result) > 0) {
//		while($row = mysqli_fetch_assoc($result)) {
//			$resultAry[] = $row["`name`"];
//		}
//	}
//
////    if ($result) {   
////        echo "Your query was successful";
////    } else {
////        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
////    }
//	return $resultAry;
//}
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {   
    while($row = mysqli_fetch_assoc($result)) {
        // var_dump($row);
        echo "{\"name\":" . '"' . $row["name"] . '"' . ", " . "\"region\":" . '"' . $row["region"] . '"' . ", " . "\"season\":" . '"' . $row["season"] . '"' . ", " . "\"match\":" . '"' . $row["match"] . '"' . ", " ."\"update\":" . '"' . $row["update"] . '"' . ", " ."\"rate\":" . '"' . $row["rate"] . '"' . ", " . "\"rounds\":" . '"' . $row["rounds"] . '"' . ", " . "\"wins\":" . '"' . $row["wins"] . '"' . ", " ."\"top10\":" . '"' . $row["top10"] . '"' . ", " . "\"kills\":" . '"' . $row["kills"] . '"' . ", " . "\"suicides\":" . '"' . $row["suicides"] . '"' . ", " . "\"teamkills\":" . '"' . $row["teamkills"] . '"' . ", " . "\"headshots\":" . '"' . $row["headshots"] . '"' . ", " . "\"roadkills\":" . '"' . $row["roadkills"] . '"' . ", " . "\"assists\":" .  '"' . $row["assists"] . '"' . "}";
    }
} else {
    echo "No results..";
}
//$sql = "SELECT * FROM mydb WHERE name = " . '"' . $name . '"' . ";";
//$result = query_to_db($conn, $sql);

//if (mysqli_num_rows($result) > 0) {   
//    while($row = mysqli_fetch_assoc($result)) {
//        echo "<tr>";
//        // var_dump($row);
//        echo "<td>" . $row["first_name"] . " " . $row['last_name'] . "</td><td>". $row['email'] 
//        . "</td><td>". $row['address'] . "</td><td>". $row['city'] . "</td>";
//        echo "<br>";
//        echo "</tr>";
//    }
//} else {
//    echo "No results..";
//}




mysqli_close($conn);
?>