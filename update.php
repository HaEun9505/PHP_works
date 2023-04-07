<?php
	require('lib/print.php');
	require('view/top.php');
?>

	<a href="create.php">create</a>
	<?php if(isset($_GET['id'])){ ?>	<!-- id 값이 있다면 수정 페이지 보이게 -->
	<a href="update.php?id=<?=$_GET['id']?>">update</a>
	<?php } ?>
		
		<form action="update_process.php" method="post">
		<input type="hidden" name="old_title" value="<?=$_GET['id']?>">
		<p>	<!-- value - 기본값을 설정 -->
			<input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
			<!-- title - 수정될 파일명, 이전 파일명은 별도로 서버에 전달 -->
		</p>
		<p>
			<textarea name="description" placeholder="Description"><?php print_description(); ?></textarea>
		</p>
		<p>
			<input type="submit" value="Submit">
		</p>
	</form>
<?php
	require('view/bottom.php');
?>