<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get ALL</title>
</head>
<body>
	<div>
		<ul>
			<?php
				print_r($data['username']);die;
				foreach ($data as $row) { ?>
					<li> <?php echo $row['username'] ?></li>
				<?php }
			?>
		</ul>
	</div>
</body>
</html>