<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Array</title>
</head>
<body>
	<h1>Array</h1>
	<?php
		$coworkers = array('egoing', 'leezche', 'duru', 'taeho');
		//문자열을 담고있는 배열의 표현식
		//변수로 배열의 이름을 지정
		echo $coworkers[1].'<br>';
		echo $coworkers[3].'<br>';
		var_dump(count($coworkers));//배열 원소의 데이터 타입(배열의 총 개수(배열명))
		array_push($coworkers, 'graphittie');
		//배열의 맨 끝에 값(원소) 추가
		var_dump($coworkers);
		array_unshift($coworkers, 'fruits');
		//배열의 시작 부분에 요소 추가
		//var_dump($coworkers);
		print_r($coworkers);
		echo "<p>";
		
		$list = scandir('./data');
		print_r($list);
	?>
</body>
</html>