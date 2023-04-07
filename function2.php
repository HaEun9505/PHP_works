<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>function</title>
</head>
<body>
	<h1>Function</h1>
	<h2>Basic</h2>
	<?php
		function basic(){
			print("Lorem ipsum dolor1<br>");
			print("Lorem ipsum dolor2<br>");
		}
		
		basic();
	?>
	<h2>parameter &amp; argument</h2>
	
	<?php
		function sum($left, $right){	//파라미터(매개변수)
			print($left+$right)."<br>";	//인자를 전달하면 파라미터가 함수 안에서만 사용됨
		}
		sum(2,4);
		sum(4,6);
	?>
	
	<h2>return</h2>	
	<?php
		function sum2($left, $right){	//결과값을 출력하지 않고 리턴
			return $left+$right;
		}
		//print(sum2(2,4));
		file_put_contents('result.txt', sum2(2,4));
	?>
	
</body>
</html>