<?php
//starting session
	session_start();
	session_destroy();
//return view
	if(!isset($_GET['page'])){
		include('home.php');
	}elseif($_GET['page'] == 'signup'){
		include('signup.php');
	}
?>
