<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>XSS</title>
</head>
<body>
	<h1>Cross Site Scripting</h1>
	<?php
		//echo htmlspecialchars('<script>alert("hello");</script>');
		//htmlspecialchars : script 함수가 그대로 출력됨
		$string = '<html><body>Convert special characters to HTML entities
					<br>Convert special characters to HTML entities</body></html>';
		echo strip_tags($string,'<br>');	//문자열에서 HTML 및 PHP 태그 제거(특정 태그 허용하도록 옵션 지정)
	?>
</body>
</html>