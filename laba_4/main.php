<body>
<?php

	if (!isset($_GET['add'])) {
		echo "<form>
		Name: <input type=text name=login>
		<input type=submit name=add value=Input>
		</form>";
	}
	else {
		SetCookie("log",$_GET['login']);
		echo "<a href='page2.php'>Page2</a>";
	}
?>
</body>