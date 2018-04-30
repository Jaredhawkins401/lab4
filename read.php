<?php
require_once("dbconn.php");
global $db;
$id = $_GET['id'];
$statement =  $db->prepare("SELECT * FROM corps WHERE id='".$id."'"); //create statement with select to get all rows
$statement->execute();//run statement
$result = 	$statement->fetchAll(PDO::FETCH_ASSOC); // associative array as result




$table = "<table>\n";  
$table .= "<tbody>";
$table .= "<tr>" . "<td>" . "<b>" ."Corporation" . "</td>";//create table categories
$table .= "<td>" . "<b>" ."Incorporated Date" . "</td>";
$table .= "<td>" . "<b>" ."Email" . "</td>";
$table .= "<td>" . "<b>" ."Zipcode" . "</td>";
$table .= "<td>" . "<b>" ."Owner" . "</td>";
$table .= "<td>" . "<b>" ."Phone" . "</td>";
$table .= "</tr>";

foreach($result as $row)
{
$time = strtotime($row['incorp_dt']);
$formattedTime = date("m/d/y g:i A", $time);

$table .= "\t<tr>";
$table .= "<td>" . $row['corp'] . "</td>";
$table .= "<td>" . $formattedTime . "</td>";
$table .= "<td>" . $row['email'] . "</td>";
$table .= "<td>" . $row['zipcode'] . "</td>";//make table with all the values
$table .= "<td>" . $row['owner'] . "</td>";
$table .= "<td>" . $row['phone'] . "</td>";
$table .= "<td>" . "<a class='btn btn-warning' href='update.php?id=" . $row['id'] . "'>" . "Update" . "</a>" . "</td>";
$table .= "<td>" . "<a class='btn btn-danger' href='delete.php?id=" . $row['id'] . "'>" . "Delete" . "</a>" . "</td>"; //link to delete.php with id built in, so user can select to delete the row
$table .= "\t</tr>\n";

}



$table .= "</tbody>";
$table .= "</table>";

echo $table;
?> <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
     <link rel = "stylesheet"
   type = "text/css"
   href = "css/bootstrap.min.css" />
</head>
<body>
</body>
</html>
<a href="index.php"> Return To View </a>