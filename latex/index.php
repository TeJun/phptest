<html>
<head>
<SCRIPT src="latex2img.js" language="javascript"></SCRIPT>
<script language="JavaScript" type="text/javascript">
function addtags() {
  va = document.getElementById('latex_formula');
  if (va.value != '') {
 	va.value = '[tex]'+va.value+'[/tex]';
  }
}//-->

function sendLatex(){
  va = document.getElementById('latex_input');
  size = document.getElementById('size');
  document.getElementById('text1').innerHTML = convertLatexToImage(va.value,size.value);
}
</script>
</head>
<body>
<center>
  <h3>LatexRender Demo</h3>
	<form method='post'>
	<h5>Convert Latex to PNG by php</h5>
	<textarea id='latex_formula' name='latex_formula' rows=8 cols=50></textarea>
	<br><br>
	<input type='submit' value='Render'><br/><br />
<?php
include_once("latex.php");

if (isset($_POST['latex_formula'])) {
	$text = $_POST['latex_formula'];
	echo RenderLatex($text);
}
?>

	<h5>Convert Latex to PNG by JavaScript</h5>

	<textarea id="latex_input" rows=10 cols=50></textarea><br/>
	<input id='size' type='text' value='120' size='5'>
	<input onclick="sendLatex();" type='button' value='Render'><br/>
	<div id="text1"></div>
	</form>
</center>
</body>
</html>
