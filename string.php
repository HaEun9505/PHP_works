<!doctype html>
<html>
<body>
	<?php
		echo 'Hello world'."<p>";
	?>
	
	<!-- 큰 따옴표 안에 큰 따옴표 사용하고 싶을 때 - 이스케이프(\) 사용-->
	<?php
		echo "Hello \"w\"orld";
	?>
	
	<h2>concatenation operator</h2>
	<!-- 문자열 결합 연산자 -->
	<?php
		echo "Hello"."world";
	?>
	
	<h2>String length function</h2>
	<!-- 문자열 개수 -->
	<?php
		echo strlen("Hello world");	//11
		
		$str = ' ab cd ';
		echo strlen($str);	//7
	?>
	
</body>
</html>