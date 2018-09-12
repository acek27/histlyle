<?php
	session_start();
	session_destroy();

	if(!isset($_GET['page'])){
		include('home.php');
	}elseif($_GET['page'] == 'signup'){
		include('signup.php');
	}
?>