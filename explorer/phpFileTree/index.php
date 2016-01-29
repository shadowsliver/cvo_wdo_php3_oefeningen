<?php
// PHP File Tree Demo
// For documentation and updates, visit http://abeautifulsite.net/notebook.php?article=21

// Main function file
include("php_file_tree.php");
date_default_timezone_set("Europe/Brussels");
$root = getcwd();
$action = "javascript:window.open('[link]');";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>PHP File Tree Demo</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<link href="styles/default/default.css" rel="stylesheet" type="text/css" media="screen" />
		
		<!-- Makes the file tree(s) expand/collapsae dynamically -->
		<script src="php_file_tree.js" type="text/javascript"></script>
	</head>

	<body>
		<?php echo php_file_tree("./php3/", $action); ?>
		<script src="jquery.js" type="text/javascript"></script>
		<script src="php_file_tree_jquery.js" type="text/javascript"></script>
	</body>
	
</html>
