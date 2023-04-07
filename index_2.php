<?php
	require_once('lib/print.php');
	require('view/top.php');
?>

	<a href="create.php">create</a>
	<?php if(isset($_GET['id'])){ ?>	<!-- 현재 페이지에 대한 id값이 있을때 활성화 -->
	<a href="update.php?id=<?=$_GET['id']?>">update</a>
	<a href="delete_process.php?id=<?=$_GET['id']?>">delete</a>
	<form action="delete_process.php?" method="post">
		<input type="hidden" name="id" value="<?=$_GET['id']?>">
		<input type="submit" value="delete">
	</form>
	<?php } ?>
	<h2>
		<!-- 링크 제목을 표현하는 코드 -->
		<?php
			print_title();		
		?>
	</h2>
		<!-- 본문을 표현하는 코드 -->
		<?php
			print_description();
		?>
<?php
	require('view/bottom.php');
?>