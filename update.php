<?php
require_once("dbconn.php");
global $db;
$id = $_GET['id'];
$statement =  $db->prepare("SELECT * FROM corps WHERE id='".$id."'"); //create statement with select to get all rows
$statement->execute();//run statement
$result = 	$statement->fetchAll(PDO::FETCH_ASSOC);


?> 

<form method = 'post' action = 'index.php'>
<label for = 'corp'> Corp</label><input type='text' name = 'corp' id = 'corp' value ='<?php foreach($result as $row){ echo $row["corp"]; }?>'></input> <br />
<label for = 'incorp_dt'>Incorp DT: <?php $time = strtotime($row['incorp_dt']); $formattedTime = date("m/d/y g:i A", $time); echo $formattedTime ?> </label><input type='hidden' name = 'incorp_dt' id = 'incorp_dt' value ='<?php echo $row["incorp_dt"];?>'></input> <br />
<label for = 'email'>Email: </label><input type='text' name = 'email' id = 'email' value ='<?php echo $row["email"];?>'></input><br />
<label for = 'zipcode'> Zipcode</label><input type='text' name = 'zipcode' id = 'zipcode' value ='<?php echo $row["zipcode"];?>'></input> <br />
<label for = 'owner'> Owner </label><input type='text' name = 'owner' id = 'owner' value ='<?php echo $row["owner"];?>'></input> <br />
<label for = 'phone'> Phone</label><input type='text' name = 'phone' id = 'phone' value ='<?php echo $row["phone"];?>'></input> <br />
<label for = 'id'> ID: <?php echo $row['id'] ?></label><input type ='hidden' name = 'id' id = 'id' value ='<?php echo $row["id"];?>'></input> <br />
<input class='btn btn-warning' type= 'submit' name = 'action' value = 'Update'> </input>
<input class='btn btn-danger' type= 'submit' name = 'action' value = 'Delete'> </input>
<a href="index.php"> Return To View </a>
</form>


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
</html

