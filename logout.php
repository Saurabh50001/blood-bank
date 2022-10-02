<?php session_start(); ?>



<?php
$_SESSION['usernamesess'] = null;
 $_SESSION['passwordsess'] = null;
 $_SESSION['useremailsess'] = null;
 $_SESSION['userrolesess'] = null;
 header("Location: ../home.php");
?>
