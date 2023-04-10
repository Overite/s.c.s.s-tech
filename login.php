<!DOCTYPE html>
<html>
<head>
		
</head>
<body>
<?php
$locoa = "lagos";
$camoa = "echo#nigeria2023";

$locob = $_POST['loco'];
$camob = $_POST['camo'];
if ($camob == $camoa) {
// Redirect to another web page
header("Location: access-granted.html");
exit();
} else {
    // Redirect to another web page
header("Location: access-denied.html");
exit();
}


?>

</body>
</html>
