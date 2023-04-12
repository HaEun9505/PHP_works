<?php
	require_once('lib/print.php');
	require_once('view/top.php');
?>  

	<button><a href="create.php" style="text-decoration: none; color:#2F4F4F">create</a></button>
	<?php if(isset($_GET['id'])){ ?>	<!-- 현재 페이지에 대한 id값이 있을때 활성화 -->
	<button><a href="update.php?id=<?=$_GET['id']?>" style="text-decoration: none; color:#2F4F4F">update</a></button>
	<form action="delete_process.php" method="post" style="display:inline">
		<input type="hidden" name="id" value="<?=$_GET['id']?>">
		<input type="submit" value="delete" style="color:#2F4F4F">
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
	require_once('view/bottom.php');
?>