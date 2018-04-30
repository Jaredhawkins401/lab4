<?php
$table = "<table>\n";  
$table .= "<tbody>";
$table .= "<tr>" . "<td>" . "<b>" ."Corporation" . "</td>";//create table categories
$table .= "<td>" . "<b>" ."Incorporated Date" . "</td>";
$table .= "<td>" . "<b>" ."Email" . "</td>";
$table .= "<td>" . "<b>" ."Zipcode" . "</td>";
$table .= "<td>" . "<b>" ."Owner" . "</td>";
$table .= "<td>" . "<b>" ."Phone" . "</td>";
$table .= "</tr>";

foreach($corp as $value) //foreach corporation in corp
{
    $table .= "\t<tr>";
    $table .= "<td>" . $value['corp'] . "</td>";
    $table .= "<td>" . $value['incorp_dt'] . "</td>";
    $table .= "<td>" . $value['email'] . "</td>";
    $table .= "<td>" . $value['zipcode'] . "</td>";//make table with all the values
    $table .= "<td>" . $value['owner'] . "</td>";
    $table .= "<td>" . $value['phone'] . "</td>";
    $table .= "\t</tr>\n";
    }



$table .= "</tbody>";
$table .= "</table>";

echo $table;
?>

<form action='index.php' method='get'> 
	<input class='btn btn-primary' type='submit' name='action' value='Add'></input> 
    <input class='btn btn-primary' type='submit' name='action' value='Read'></input>
    <input class='btn btn-warning' type='submit' name='action' value='Update'></input>
    <input class='btn btn-danger' type='submit' name='action' value='Delete'></input>
</form>


