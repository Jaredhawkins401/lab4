<?php
$conn=mysqli_connect("localhost","PHPClassSpring2018","se266","phpclassspring2018"); //connection 

if (mysqli_connect_errno()) { //error if you can't connect
echo "Could not connect: " . mysqli_connect_error();
}

$id = $_GET['id']; //grab ID that was in link



mysqli_query($conn,"DELETE FROM corps WHERE id='".$id."'"); //DELETE id 
mysqli_close($conn);
header("Location: index.php");//redirection to index.php
?> 