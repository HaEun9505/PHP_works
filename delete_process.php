<?php
	unlink('data/'.basename($_POST['id']));	//파일명만 들어갈 수 있도록 나머지 정보를 쳐냄.
	header('Location: /php/index_2.php');	//홈으로 돌려보냄
?>