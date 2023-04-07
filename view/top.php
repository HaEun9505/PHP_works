<?php
	require_once('lib/print.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--본문 링크의 제목과 같은 제목으로 적용-->
	<title>
		<?php
		print_title();
		?>
	</title>
	<style>
		print_title(){color:rgb(255, 153, 153);}
	</style>
</head>
<body>
	<h1><a href="index_2.php">WEB</a></h1>
	<ol>
		<!-- 목록을 표현하는 코드 -->
		<?php
			print_list();
		?>
		<!--?php
			//data 디렉터리에 있는 파일의 목록 가져오기
			// -> 파일의 목록 하나 하나를 li와 a 태그를 이용해서 글 목록 만들기
			$list = scandir('./data');
			$i = 0;
			
			while($i<count($list)){
				if($list[$i] != '.'){
					if($list[$i] != '..'){
						?>
						
						<li><a href="index_2.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
						<!--?php
					}
				}
				$i = $i + 1;
			}
			
			
			/*
			while($i<count($list)){	//디렉터리안에 파일의 숫자만큼 반복문 실행됨
				echo "<li><a href=\"index_2.php?id=$list[$i]\">$list[$i]</a></li>\n";
				$i = $i + 1;
			}
			*/
			
			/*
			echo "<li>$list[0]</li>\n";	//현재 디렉터리
			echo "<li>$list[1]</li>\n";	//부모 디렉터리
			echo "<li>$list[2]</li>\n";
			echo "<li>$list[3]</li>\n";
			echo "<li>$list[4]</li>\n";
			echo "<li>$list[5]</li>\n";
			*/
		?-->
	</ol>