<?php
require_once('tictactoe.php');

// This will make sure that the session will be saved when the page is reloaded.
session_start();

// If there is not a session in use, a new one is started.
if (!isset($_SESSION['tictactoe']))
	$_SESSION['tictactoe'] = new tictactoe();

?>

<html>
	<head>
		<title>Tic Tac Toe</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<div id="content">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<h2>Tic Tac Toe!</h2>
		<?php
			$_SESSION['tictactoe']->playGame($_POST);
		?>
		</form>
		</div>
	</body>
</html>
