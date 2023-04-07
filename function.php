<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h1>function</h1>
	<?php 
		$str = "Lorem ipsum dolor sit amet,
		consectetur adipisicing elit.

		sed do eiusmod tempor incididunt ut labore et
		dolore magna aliqua.";
		echo $str;
	?>
	
	<h2>strlen()</h2>
	<?php
		echo strlen($str);	//strlen - 문자열 개수
	?>
	<h2>nl2br</h2>
	<?php
		echo nl2br($str); //줄바꿈
	?>
	
</body>
</html>