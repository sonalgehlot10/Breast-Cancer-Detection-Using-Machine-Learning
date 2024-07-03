<?php
	session_start();
	session_destroy();
	header("Location:pgPatientLogin.php");
?>