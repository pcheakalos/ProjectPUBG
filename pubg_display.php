<!DOCTYPE html>
<html>
<head>	
<style>
	div {
		margin-top: 20px;
		margin-bottom: 20px;
	}
	table, th, td {
    border: 1px solid black;
}
	th:nth-child(n) { 
		color: Blue; font-style: italic; font-weight: Bold}	
	
</style>

  
</head>
<body>

<?php 
$server = "localhost";
$username = "root";
$password = "root";
$db = "pubg";
$conn = mysqli_connect($server, $username, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully<br><br>";

$sql = "SELECT name, region, season, 'match', 'update', rate, rounds, wins, top10, kills, suicides, teamkills, headshots, roadkills, assists
FROM `pubg`.`mydb`" . $_POST['name'] .";";

// The code that you recieve input data from the form goes to here.
$form = $_POST["name"] . $_POST["region"] . $_POST["season"] . $_POST["match"] .$_POST["update"] . $_POST["rate"] . $_POST["rounds"] . 
$_POST["wins"] . $_POST["top10"] . $_POST["kills"] . $_POST["suicides"] . $_POST["teamkills"] . $_POST["headshots"] . $_POST["roadkills"] . $_POST["assists"];




if (isset($form)){
	//$forms = stripslashes($forms);
	$form = str_replace(' ', '', $form);
	echo "Received <strong>" . $form . "</strong> from the form.";
} else {
	echo "Nothing was received...";
}
echo '<table style="width:50%">';
echo '<tr>';
echo '<th>First Name</th>';
echo '<td>' . $_POST["name"] . '</td>';
$sql = "SELECT name, region, season, 'match', 'update', rate, rounds, wins, top10, kills, suicides, teamkills, headshots, roadkills, assists
FROM `pubg`.`mydb`" . $_POST['name'] .";";
if ($sql["name"] ==  $_POST["name"]){
	echo '<td>exists </td>';
}else{
	echo '<td>new</td>';
}
echo '</tr>';
echo '<tr>';
echo '<th>Players</th>';
echo '<td>' . $_POST["name"] . '</td>';
$sql = "SELECT name, region, season, 'match', 'update', rate, rounds, wins, top10, kills, suicides, teamkills, headshots, roadkills, assists
FROM `pubg`.`mydb`" . $_POST['name'] .";";
if ($sql["name"] ==  $_POST["name"]){
	echo '<td>exists </td>';
}else{
	echo '<td>new</td>';
}

echo '</tr>';
echo '<tr>';
echo '<th>Rounds</th>';
echo '<td>' . $_POST["rounds"] . '</td>';
$sql = "SELECT name, region, season, 'match', 'update', rate, rounds, wins, top10, kills, suicides, teamkills, headshots, roadkills, assists
FROM `pubg`.`mydb`" . $_POST['name'] .";";
if ($sql["rounds"] ==  $_POST["rounds"]){
	echo '<td>exists </td>';
}else{
	echo '<td>new</td>';
}

echo '</tr>';
echo '<tr>';
echo '<th>Region</th>';
echo '<td>' . $_POST["region"] . '</td>';
$sql = "SELECT name, region, season, 'match', 'update', rate, rounds, wins, top10, kills, suicides, teamkills, headshots, roadkills, assists
FROM `pubg`.`mydb`" . $_POST['name'] .";";
if ($sql["region"] ==  $_POST["region"]){
	echo '<td>exists </td>';
}else{
	echo '<td>new</td>';
}
echo '</tr>';
echo '<tr>';
echo '<th>Top 10</th>';
echo '<td>' . $_POST["top10"] . '</td>';
$sql = "SELECT name, region, season, 'match', 'update', rate, rounds, wins, top10, kills, suicides, teamkills, headshots, roadkills, assists
FROM `pubg`.`mydb`" . $_POST['name'] .";";
if ($sql["top10"] ==  $_POST["top10"]){
	echo '<td>exists </td>';
}else{
	echo '<td>new</td>';
}
echo '</tr>';
echo '</table>';
?>



</body>
</html>