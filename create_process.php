<?php
	file_put_contents('data/'.$_POST['title'], $_POST['description']);
	header('Location: /index_2.php?id='.$_POST['title']);//다른 페이지로 보냄(redirection)
?>