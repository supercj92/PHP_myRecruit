<?php

	session_start();
	$_SESSION['member']=null;
	header("Location:indexUI.php");