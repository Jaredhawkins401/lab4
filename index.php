

<?php 
require_once("dbconn.php");//check if files are included, if not include them
require_once("corpFunctions.php");
$action = ''; 
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING) ??
	filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING) ?? NULL;
$corp = filter_input(INPUT_POST, 'corp', FILTER_SANITIZE_STRING) ?? NULL;;//set all variables to the data that will be posted 
$incorp_dt = filter_input(INPUT_POST, 'incorp_dt', FILTER_SANITIZE_STRING) ?? NULL;
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING) ?? NULL;
$zipcode = filter_input(INPUT_POST, 'zipcode', FILTER_SANITIZE_STRING) ?? NULL;
$owner = filter_input(INPUT_POST, 'owner', FILTER_SANITIZE_STRING) ?? NULL;
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING) ?? NULL;
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING) ?? NULL;
$col = filter_input(INPUT_GET, 'col', FILTER_SANITIZE_STRING) ?? NULL;
$dir = filter_input(INPUT_GET, 'dir', FILTER_SANITIZE_STRING) ?? NULL;
$term = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING) ?? NULL;

switch($action){ 
	
    case "Read":
        $corp = returnRows();
        include_once("corpEchoFull.php");
        break;
    
    
	case "Add":
		include_once("saveForm.php"); //go to form if add is clicked
		break;
	
	case "Save":
		addCorp($db, $corp, $incorp_dt, $email, $zipcode, $owner, $phone); //save is clicked, add data from variables
		$corp = returnRows();//grab rows and store in variable
		include_once("corpEcho.php");//make tables with data
		break;
	
    case "Update":
        updateCorp($db, $id, $corp, $incorp_dt, $email, $zipcode, $owner, $phone);
        $corp = returnRows();
        include_once("corpEcho.php");
        break;
        
    case "Delete":
        deleteCorp($db, $id);
        $corp = returnRows();
        include_once("corpEcho.php");
        break;
		
	case "Sort":
		$corp = returnSort($db, $col, $dir);
		include_once("corpEcho.php");
		break;
		
	case "Search":
		$corp = searchCorp($db, $col, $term);
		include_once("corpEcho.php");
		break;
	
	default:
		$corp = returnRows();
		include_once("corpEcho.php");
        


}
?>

<html lang="en">
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