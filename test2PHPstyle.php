<!DOCTYPE html>
<html>
<head>	
<style>


	 tr {
		height: 30px;
		text-align: Left;
		padding-left: 100px;
	}
    
   
	td {
		text-allign: left;
		padding-left:100px;

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
$obj = [];
$sql = "SELECT name, region, season, `match`, `update`, rate, rounds, wins, top10, kills, suicides, teamkills, headshots, roadkills, assists
FROM `pubg`.`mydb` where region is not null;"
;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {   
    while($row = mysqli_fetch_assoc($result)) {
        $obj["name"] = $row["name"];
		$obj["rounds"] = $row["rounds"];
		$obj["teamkills"] = $row["teamkills"];
		$obj["region"] = $row["region"];
		$obj["top10"] = $row["top10"];
		$obj["assists"] = $row["assists"];
		$obj["season"] = $row["season"];
		$obj["rate"] = $row["rate"];
		$obj["roadkills"] = $row["roadkills"];
		$obj["match"] = $row["match"];
		$obj["wins"] = $row["wins"];
		$obj["suicides"] = $row["suicides"];
		$obj["update"] = $row["update"];
		
		
	}
}
//echo "<pre>";
	//	print_r($obj);
		//echo "</pre>";
		
	 ?>
	 
	 <table>
    <tr> <td><th> Play </td></th> 
		 
		 <td><th> Wins </td></th>
		 
		 <td><th> Kills </td></th> 
	</tr>
    <tr>
		<td> Players </td>
        <td id="player"> <?php echo $obj["name"]; ?> </td>
        <td> Rounds </td>
        <td id="round123"><?php echo $obj["rounds"]; ?>  </td>
		<td> Team Kills </td>
		<td  id="teamkills123"><?php echo $obj["teamkills"]; ?>    </td>
		
		</tr>
    <tr>
        <td> Region </td>
        <td id="region1"><?php echo $obj["region"]; ?> </td> 
		<td> Top 10 </td>
		<td id="topten"><?php echo $obj["top10"]; ?>  </td>
		<td> Assists </td>
        <td id="assists123"><?php echo $obj["assists"]; ?>  </td> 
		</tr>
    <tr>
        <td> Season </td>
        <td id="season2"><?php echo $obj["season"]; ?>  </td> 
		<td> Rating </td>
        <td id="rating123"><?php echo  $obj["rate"]; ?>  </td>
		<td> Road Kills </td>
        <td id="roadkills123"><?php echo  $obj["roadkills"]; ?>  </td>  
		</tr>
    <tr>
        <td> Match </td>
        <td id="match123"><?php echo $obj["match"]; ?>  </td> 
		 <td> Win Ratio </td>
        <td id="winratio123"><?php echo $obj["wins"]; ?>  </td>
		<td> Suicide </td>
        <td id="suicide123"><?php echo $obj["suicides"]; ?>  </td> 
		</tr>
    <tr>
        <td> Last Updated </td>
        <td id="lastupdate"><?php echo $obj["update"]; ?>  </td>
		<td>Wins</td>
		<td> <?php echo $obj["wins"];?> </td>
		<td>  </td>
        <td> </td>
		</tr>


</table>
	 


</div>
</body>
</html>