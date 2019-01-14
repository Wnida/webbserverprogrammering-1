<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
hej,
<?php
header(Content-type: text/html; charset=utf-8");
if (empty($_GET['name'])) {
	echo '<h1>hej du okände</h1>';
}else{
	echo '<h1>Hej ', filter_input('INPUT_GET', 'name',
		FILTER_SANITIZE_SPECIAL_CHARS), '</h1>';
}
?>
</body>

</html>