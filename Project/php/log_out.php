<?php
session_unset();
session_destroy();
header("Location: http://localhost/project/php/SignIn.php");
exit();
?>