<!DOCTYPE html>
<html>
<head>	
<style>
	div {
		margin-top: 20px;
		margin-bottom: 20px;
	}
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 4px 0;
    box-sizing: border-box;
}
input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 4px 0;
    box-sizing: border-box;
}
</style>

<script>
function validateForm() {
    // you can write a code for validating your forms (if you want).
 var x = document.forms["form"]["form"].value;
    if (x == " ") {
        alert("The form must be filled out!");
        return false;
    } else{
    	alert("Form accepted...");
    	return false;
    }
}
</script>

</head>
<body>


<?php 

$server = "localhost";
$username = "root";
$password = "root";
$db = "pubg";


//'<form name="Sakila" action='form_display.php' method='POST' onsubmit="return validateForm()">';
/*
*/
// Create connection
$conn = mysqli_connect($server, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br><br>";
// forms need to be generated here inside the PHP tag. 

// Select data from the "city" table.

$sql = "SELECT name, region, season, 'match', 'update', rate, rounds, wins, top10, kills, suicides, teamkills, headshots, roadkills, assists
FROM `pubg`.`mydb`";
;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {   
    while($row = mysqli_fetch_assoc($result)) {
        //r_dump($row);
    ///    echo $row['customer_id'] . " " . $row['store_id'] . " ". $row['first_name'] . " ". $row['last_name'] . " ". $row['email'] . " ". $row['address'] . " ". $row['active'] . " ". ['create_date'] . " ". ['last_update'];
     //   echo "<br>";
/*echo '<div>';
//echo "<form action='pubg_display.php' method='POST'>";
echo " Name: <input type='text' name='name' value=" . $row["name"] . "><br>";
echo " Region: <input type='text' name='region' value=" . $row["region"] . "><br>";
echo " Season: <input type='text' name='season' value=" . $row["season"] . "><br>";
echo " match: <input type='text' name='match' value='" . $row["match"] . "'><br>";
//echo " Address: <input alt='address' name='address' type='text' size='57'   value=" . $row["address"] . "><br>";
echo " update: <input type='text' name='update' value=" . $row["update"] . "><br>";


echo '<input type="Submit"><br>';



echo '</form>';

echo '</div>';
*/
echo ''; 
   }
	
} else {
    echo "No results..";
}
///added here



///break
echo "<br><br>";
/*
*/
// Close the connection.

mysqli_close($conn);

?>

</div>
</body>
</html>