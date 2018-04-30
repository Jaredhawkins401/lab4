<?php
function returnRows(){
	global $db;
	$statement =  $db->prepare("SELECT * FROM corps"); //create statement with select to get all rows
	$statement->execute();//run statement
	$results = 	$statement->fetchAll(PDO::FETCH_ASSOC); // associative array as result
	return $results; //return result
}

function returnSort($db, $col, $dir){
	$statement =  $db->prepare("SELECT * FROM corps ORDER BY $col $dir"); //create statement with select to get all rows, sorted by variables column and direction 
	$statement->execute();//run statement
	$results = 	$statement->fetchAll(PDO::FETCH_ASSOC); // associative array as result
	return $results; //return result
	
}


function addCorp($db, $corp ,$incorp_dt, $email, $zipcode, $owner, $phone){
	
	$sql = "INSERT INTO corps (corp, incorp_dt, email, zipcode, owner, phone) VALUES (:corp, NOW(), :email, :zipcode, :owner, :phone)"; //statement to insert new corp
	$statement = $db->prepare($sql); //create statement 
	$statement->bindParam(':corp', $corp);
	//$statement->bindParam(':incorp_dt', $incorp_dt);//add all parameters
	$statement->bindParam(':email', $email);
	$statement->bindParam(':zipcode', $zipcode);
	$statement->bindParam(':owner', $owner);
	$statement->bindParam(':phone', $phone);
	$result = $statement->execute();//add data store if it failed or succeeded into result
    if($result == 1)
    {
        echo "Added successfully!";
    }
    else
    {
        echo "Insertion failed";
    }
	
}

function updateCorp($db, $id, $corp, $incorp_dt, $email, $zipcode, $owner, $phone)
{
	$sql = "UPDATE corps SET corp = :corp, incorp_dt = :incorp_dt, email = :email, zipcode = :zipcode, owner = :owner, phone = :phone WHERE id = :id"; //statement to insert new corp
	$statement = $db->prepare($sql); //create statement 
	$statement->bindParam(':corp', $corp);
	$statement->bindParam(':incorp_dt', $incorp_dt);//add all parameters
	$statement->bindParam(':email', $email);
	$statement->bindParam(':zipcode', $zipcode);
	$statement->bindParam(':owner', $owner);
	$statement->bindParam(':phone', $phone);
    $statement->bindParam(':id', $id);
	$result = $statement->execute();//add data
    if($result == 1)
    {
        echo "Updated successfully!";
    }
    else
    {
        echo "Update failed";
    }
}

function deleteCorp($db, $id)
{
    $sql = "DELETE FROM corps WHERE id = :id";
    $statement = $db->prepare($sql);
    $statement->bindParam(':id', $id);
    $result = $statement->execute();
    if($result == 1)
    {
        echo "Deleted successfully!";
    }
    else
    {
        echo "Deletion failed";
    }
}

function searchCorp($db, $col, $term){
	
	$sql = "SELECT * FROM corps WHERE $col LIKE '%$term%'"; //search for corp where term is like a value in a column
	$statement = $db->prepare($sql);
	$statement->execute();
	$results = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $results;
}
?>

