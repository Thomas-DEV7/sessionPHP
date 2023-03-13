<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.<br><br>";
print_r($_SESSION);

echo "<br><br>";
//remove sess
session_unset();
// destroy the session
session_destroy();
//retorna array da sessão
print_r($_SESSION);
?>

</body>
</html>