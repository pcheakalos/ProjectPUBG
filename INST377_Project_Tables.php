<!DOCTYPE html>
<html>
<head>

<style>
    
   table, td {
        border: 1px solid black;
        width: 75%;
    }
    
    th {
        height: 30px;
        text-align: center;
        padding-left: 200px;
    }
    
</style>
</head>

<body>

</body>
</html>

<?php

echo '<table>';
    echo '<tr>' . '<th> Game Matching </th>' . '</tr>';
    echo '<tr>';
        echo '<td> Player Name </td>';
        echo '<td>  </td>' . '</tr>';
    echo '<tr>';
        echo '<td> Region </td>';
        echo '<td>  </td>' . '</tr>';
    echo '<tr>';
        echo '<td> Default Region </td>';
        echo '<td>  </td>' . '</tr>';
    echo '<tr>';
        echo '<td> Last Updated </td>';
        echo '<td>  </td>' . '</tr>';
echo '</table>';

echo '<br>';

echo '<table>';
    echo '<tr>' . '<th> Survival </th>' . '</tr>';
    echo '<tr>';
        echo '<td> Player Name </td>';
        echo '<td>  </td>' . '</tr>';
    echo '<tr>';
        echo '<td> Days </td>';
        echo '<td>  </td>' . '</tr>';
    echo '<tr>';
        echo '<td> Longest Time Survived </td>';
        echo '<td>  </td>' . '</tr>';
    echo '<tr>';
        echo '<td> Average Survival Time </td>';
        echo '<td>  </td>' . '</tr>';
echo '</table>';

echo '<br>';

echo '<table>';
    echo '<tr>' . '<th> Per Game </th>' . '</tr>';
    echo '<tr>';
        echo '<td> Player Name </td>';
        echo '<td>  </td>' . '</tr>';
    echo '<tr>';
        echo '<td> Damage </td>';
        echo '<td>  </td>' . '</tr>';
    echo '<tr>';
        echo '<td> Headshot Kills </td>';
        echo '<td>  </td>' . '</tr>';
    echo '<tr>';
        echo '<td> Heals </td>';
        echo '<td>  </td>' . '</tr>';
    echo '<tr>';
        echo '<td> Kills </td>';
        echo '<td>  </td>' . '</tr>';
    echo '<tr>';
        echo '<td> Distance Moved </td>';
        echo '<td>  </td>' . '</tr>';
    echo '<tr>';
        echo '<td> Revives </td>';
        echo '<td>  </td>' . '</tr>';
    echo '<tr>';
        echo '<td> Road Kills </td>';
        echo '<td>  </td>' . '</tr>';
    echo '<tr>';
        echo '<td> Team Kills </td>';
        echo '<td>  </td>' . '</tr>';
    echo '<tr>';
        echo '<td> Time Survived </td>';
        echo '<td>  </td>' . '</tr>';
echo '</table>';

?>
