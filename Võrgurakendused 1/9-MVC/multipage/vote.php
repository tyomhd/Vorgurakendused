<?php require_once('head.html'); ?>
<div id="wrap">
	<h3>Vali oma lemmik :)</h3>
	<form action="tulemus.php" method="GET">
		<?php
		$dir = 'pildid/';
		$images = glob($dir . '*.jpg');
		$nr=1;
		foreach ($images as $i) {
			echo("<p><label for='p".$nr."'><img src='".$i."' alt='nimetu ".$nr."' height='100' /></label><input type='radio' value='".$nr."' id='p".$nr."' name='pilt'/></p>");
			$nr++;
		}
		?>
		<br/>
		<input type="submit" value="Valin!"/>
	</form>
</div>
<?php require_once('foot.html'); ?>
