<?php
require_once 'class/Calculator.php';

if (isset($_POST['value1']) && isset($_POST['value2'])) {
    $calc = new Calculator;
    $answer = $calc->add((int)$_POST['value1'], (int)$_POST['value2']);
}
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Selenium Test</title>
</head>
<body>
    
	<form name="selenium_test" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<fieldset id="name">
            <input type="text" name="value1"> + <input type="text" name="value2">
		</fieldset>
		<input type="submit">
	</form>

    <div style="font-size:10rem;">
    <?php echo isset($answer) ? $answer : ''; ?>
    </div>

</body>
</html>