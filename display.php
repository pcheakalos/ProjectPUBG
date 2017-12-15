<!DOCTYPE html>
<html>
<head>	
<style>
	body {
            background-size: cover;
	}

table{
    border: 1px solid black;
	border: 1px solid black;

}
	 tr {
		height: 30px;
		padding-left: 100px;
    

	}
    
   
	td {
		text-allign: center;
		padding-left:100px;
		border: 1px solid black;

		}
	th{
		border: 1px solid black;
		text-allign: center;
	}
</style>

<script>

</script>

</head>
<body background = "css/pubg.jpg">


<?php 
        $obj["name"] = $_GET["name"];
		$obj["rounds"] = $_GET["rounds"];
		$obj["teamkills"] = $_GET["teamkills"];
		$obj["region"] = $_GET["region"];
		$obj["top10"] = $_GET["top10"];
		$obj["assists"] = $_GET["assists"];
		$obj["season"] = $_GET["season"];
		$obj["rate"] = $_GET["rate"];
		$obj["roadkills"] = $_GET["roadkills"];
		$obj["match"] = $_GET["match"];
		$obj["wins"] = $_GET["wins"];
		$obj["suicides"] = $_GET["suicides"];
		$obj["update"] = $_GET["update"];
	 ?>
	 
	 <table>
    <tr> <td><th> Play </th></td> 
		 
		 <td><th> Wins </th></td>
		 
		 <td><th> Kills </th></td> 
	</tr>
    <tr>
		<td> Player </td>
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