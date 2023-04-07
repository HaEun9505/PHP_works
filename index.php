<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Index</title>
</head>
<body>
	<?php
		echo date('Y-m-d H:i:s'); 
	?>
	<h1><a href="index.php">WEB</a></h1>
	<ol>
		<li><a href="index.php?id=HTML">HTML</a></li>
		<li><a href="index.php?id=CSS">CSS</a></li>
		<li><a href="index.php?id=JavaScript">JavaScript</a></li>
		<li><a href="index.php?id=PHP">PHP</a></li>
	</ol>
	<h2>
		<?php
			if(isset($_GET['id'])){//만약에 id값이 있다면
				echo $_GET['id'];
			}else {//없다면
				echo "Welcome";
			}
		?>
	</h2>
	<?php
		if(isset($_GET['id'])){
		echo file_get_contents("data/".$_GET['id']);
								//data/id 값에 해당하는 파일의 내용
		}else{
			echo "Hello, PHP";
		}
	?>
</body>
</html>