<?php
require "Data/config.php";
	
$username = $_POST['username'];

$conn = mysqli_connect($server, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// A function for general queries.
function query_to_db($conn, $sql){
    $result = mysqli_query($conn, $sql);

    if ($result) {   
        echo "Your query was successful";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}

$sql = "SELECT * 
		FROM pubg 
		WHERE `name` = $username";
query_to_db($conn, $sql);



mysqli_close($conn);
?>