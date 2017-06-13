<!DOCTYPE html>
<html>
<head>
	<title>CHECKERS</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin" rel="stylesheet" type="text/css">
	<meta charset="utf-8">
	<meta content="with=device-width, initial-scale=1.0" name="viewport">
</head>
<body class="body1"> <!-- body class for no scrolling mode on mobile -->
	<header>
		<nav>
			<ul>
				<li id="index">
					<a href="index.php">TIC TAC TOE</a>
				</li>
				<li id="checkers">
					<a href="checkers.php">CHECKERS</a>
				</li>
				<li style="list-style: none; display: inline">
					<div id='sidebar-btn'>
						<i aria-hidden="true" class="fa fa-bars fa-2x"></i>
					</div>
				</li>
			</ul>
		</nav>
	</header>
	<section id="icons">
		<div id='help'><a href="#">
            <i aria-hidden="true" class="fa fa-question-circle fa-2x"></i></a>
        </div> 
	</section><!-- icons -->
	<aside><p>Dammen is een bordspel. Het bord bestaat uit 100 vakjes, velden genaamd, in 10 rijen van 10, waarbij de velden afwisselend wit en zwart zijn. Er wordt gespeeld met damschijven. Dit zijn ronde schijven (meestal van hout). Voor het spel worden 20 witte en 20 zwarte damschijven gebruikt. Als oorsprong voor dammen geldt het bordspel Alquerque.</p>
    </aside>
    <section id='scoreboard1'>
        <section><p>Player 1</p><p>0</p>
        </section>
    </section>
    <section id='scoreboard2'>
        <section><p>Player 2</p><p>0</p>
        </section>
    </section>
    <section id='scoreboard3'>
        <div><a href="#">
            <i aria-hidden="true" class="fa fa-repeat fa-2x">
            </i></a>
        </div>
    </section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
	</script> 
	<script src="js/menu.js" type="text/javascript">
	</script>  
</body>
</html>