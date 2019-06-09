<?php 

	if (!isset($_SESSION['level'])){
		$_SESSION['level'] = 'level1';
	}

	if ($_SESSION['level'] == 'level1'){
		if ($_SERVER['REQUEST_METHOD'] === 'POST'){
			$_SESSION['level'] = 'level2';
		}
		else if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
			echo '<h1>Try again with POST request</h1>';
		}
	}

	if ($_SESSION['level'] == 'level2'){
		if ($_SERVER['HTTP_USER_AGENT']==='FUCTF Browser'){
			$_SESSION['level'] = 'level3';
		}
		else if (!strpos($_SERVER['HTTP_USER_AGENT'],'FUCTF Browser')){
			echo '<h1>You need to use our browser (FUCTF Browser) to pass this step, agent! </h1>';
		}
	
	}

	if ($_SESSION['level'] == 'level3'){
		if ($_SERVER['HTTP_REFERER'] == '127.0.0.1'){
			$_SESSION['level'] = 'level4';
		}
		else if ($_SERVER['HTTP_REFERER'] != '127.0.0.1'){
			echo '<h1>This place don\'t accept external connection, please try again from 127.0.0.1!</h1>';
		}
	
	}

	if ($_SESSION['level'] == 'level4'){
		if (!isset($_COOKIE['privilege'])){
			setcookie('privilege','guest');
		}
		if ($_COOKIE['privilege'] == 'admin' ){
			$flag = "ZnVjdGZ7dzNsY29tM190MF93M2JfdzBybGQhISF9";
			echo "GG! You know all the basic thing. Good luck in w3b w0rld\n";
			echo "Here is your flag champion!!!!\n";
			echo $flag;
		}
		else if ($_COOKIE['privilege'] !== 'admin'){
			echo "Only admin is allowed to see the secret of web world!!!";
			
		}
	
	}


?>
