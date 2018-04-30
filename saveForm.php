<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
     <link rel = "stylesheet"
   type = "text/css"
   href = "css/bootstrap.min.css" />
</head>
<body>


<form method = 'post' action = 'index.php'>
<label for = 'corp'> Corp</label><input type='text' name = 'corp' id = 'corp' value =''></input> <br />
<label for = 'email'>Email: </label><input type='text' name = 'email' id = 'email' value =''></input><br />
<label for = 'zipcode'> Zipcode</label><input type='text' name = 'zipcode' id = 'zipcode' value =''></input> <br />
<label for = 'owner'> Owner </label><input type='text' name = 'owner' id = 'owner' value =''></input> <br />
<label for = 'phone'> Phone</label><input type='text' name = 'phone' id = 'phone' value =''></input> <br />
<input class='btn btn-primary' type= 'submit' name = 'action' value = 'Save'> </input>
<a href="index.php"> Return To View </a>
</form>

</body>
</html>