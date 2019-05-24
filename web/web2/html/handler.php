<?php 
	if(isset($_GET['path'])){
		@include($_GET['path'].'.php');
	}
	else {
		header('Location: index.php');
	}
?>