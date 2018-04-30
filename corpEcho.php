<form action='index.php' method='get' value='Sort'>
<label for='col'>Sort Column: </label>
	<select name='col' id='col'>
		<option value='id'>ID</option>
		<option value='corp'>Corporation</option>
		<option value='incorp_dt'>Incorporated datetime</option>
		<option value='email'>Email</option>
		<option value='zipcode'>ZIP Code</option>
		<option value='owner'>Owner</option>
		<option value='phone'>Phone</option>
	</select>
	
<label for='asc'>Ascending: </label>
<input type='radio' name='dir' value='ASC' id='asc' />
<label for='desc'>Descending: </label>
<input type='radio' name='dir' value='DESC' id='desc' />
<input type='hidden' name='action' value='Sort' />
<input class="btn btn-default" type='submit' />
<input class="btn btn-default" type='submit' name='action' value='Reset' />
</form>

<section><form action='index.php' method='get' value='Search'>
<label for='col'>Search Column: </label>
	<select name='col' id='col'>
		<option value='id'>ID</option>
		<option value='corp'>Corporation</option>
		<option value='incorp_dt'>Incorporated datetime</option>
		<option value='email'>Email</option>
		<option value='zipcode'>ZIP Code</option>
		<option value='owner'>Owner</option>
		<option value='phone'>Phone</option>
	</select>
<label for='term'>Term: </label>
<input type='text' name='term' id = 'term' /> 
<input type='hidden' name='action' value='Search' /> 
<input class="btn btn-default" type='submit' /> 
<input class="btn btn-default" type='submit' name='action' value='Reset' /> 
</form></section>

<?php
$table = "<table>\n";  
$table .= "<tbody>";
$table .= "<tr>" . "<td>" . "<b>" ."Corporation" . "</td>";//create table categories
$table .= "</tr>";
foreach($corp as $value) //foreach corporation in corp
{
    $table .= "\t<tr>";
    $table .= "<td>" . $value['corp'] . "</td>";
    $table .= "<td>" . "<a class='btn btn-primary' href='read.php?id=" . $value['id'] . "'>" . "Read" . "</a>" . "</td>";
	$table .= "<td>" . "<a class='btn btn-warning' href='update.php?id=" . $value['id'] . "'>" . "Update" . "</a>" . "</td>";
    $table .= "<td>" . "<a class='btn btn-danger' href='delete.php?id=" . $value['id'] . "'>" . "Delete" . "</a>" . "</td>"; //link to delete.php with id built in, so user can select to delete the row


    $table .= "\t</tr>\n";
    }



$table .= "</tbody>";
$table .= "</table>";

echo $table;
?>

<form action='index.php' method='get'> 
	<input class="btn btn-primary" type='submit' name='action' value='Add'></input> 
</form>


