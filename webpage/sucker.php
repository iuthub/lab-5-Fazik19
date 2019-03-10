<!DOCTYPE html>
<html>
<head>
	<title>Buy Your Way to a Better Education!</title>
	<link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<?php
	if ((isset($_POST['name'])) && (isset($_POST['section'])) && (isset($_POST['cardname']) && 
		($_POST['card'])!="") ){
		file_put_contents("suckers.txt", $_POST['name'].';'.$_POST['section'].';'.$_POST['cardname'].';'.$_POST['card'].";<br>", FILE_APPEND);
		?>
		<h1>Thanks, sucker</h1>
		<p>Name<br>
			&nbsp;&nbsp;&nbsp;&nbsp;<?=$_POST['name']?>
		</p>
		<p>Section<br>
			&nbsp;&nbsp;&nbsp;&nbsp;<?=$_POST['section']?>
		</p>
		<p>Credit Card<br>
			&nbsp;&nbsp;&nbsp;&nbsp;<?=$_POST['cardname']?> (<?=$_POST['card']?>)
		</p>
		<p>Here are suckers:<br><br>

			<?php
			echo file_get_contents("suckers.txt");
		} else {
			
			?>
			<h1>Sorry</h1>
			<p>You didn't fill out the form completely.  <a href="buyagrade.html">Try again?</a></p>
			<?php
		}
		?>

		
	</body>
	</html>