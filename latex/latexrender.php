<?php
	include_once("latex.php");

	if (isset($_POST['latex_text'])) {
		$text = $_POST['latex_text'];
		$density = (int)$_POST['density'];

		echo RenderLatex($text,$density);
	}

?>
