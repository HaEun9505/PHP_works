<?php
function print_title(){	//링크 제목
	if(isset($_GET['id'])){//만약에 id값이 있다면
		echo htmlspecialchars($_GET['id']);
	}else {//없다면
		echo "Welcome";
	}
}
function print_description(){
	if(isset($_GET['id'])){
		$basename = basename($_GET['id']);
		echo htmlspecialchars(file_get_contents("data/".$basename));
								//data/id 값에 해당하는 파일의 내용
	}else{
		echo "Hello, PHP";
	}
}
function print_list(){
	//data 디렉터리에 있는 파일의 목록 가져오기
	// -> 파일의 목록 하나 하나를 li와 a 태그를 이용해서 글 목록 만들기
	$list = scandir('./data');
	$i = 0;
	
	while($i<count($list)){
		$title = htmlspecialchars($list[$i]);
		if($list[$i] != '.'){
			if($list[$i] != '..'){
				echo "<li><a href=\"index_2.php?id=$title\">$title</a></li>\n";
			}
		}
		$i = $i + 1;
	}
}
?>