<?php
require_once('tictactoe.php');
require_once('config.inc.php');

session_start();
?>
<html>
<head>
  <title>TIC TAC TOE</title>
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
  <meta content="with=device-width, initial-scale=1.0" name="viewport">
</head>
<body class='body1'> <!-- body class for no scrolling mode on mobile -->
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
	<aside><p>Boter-kaas-en-eieren, ook wel "oo maal oo" of "kruisje rondje", is een eenvoudig spel voor twee spelers. Boter-kaas-en-eieren is in het Nederlands verreweg de meest gebruikte naam voor het spel.[bron?] Het spel wordt met een potlood of met een pen op papier gespeeld. Het spel is ook op een computer te spelen, soms zelfs bij een chatprogramma, zoals MSN Messenger. Bordspellen bestaan ook, maar deze hebben vaak meer een decoratief doel.
Boter-kaas-en-eieren wordt gespeeld op 3 bij 3 velden. Bij het begin zijn alle velden leeg. De ene speler zet een 'kruis' en de andere speler een 'rondje'. Degene die drie van zijn eigen tekens op een rij heeft (diagonaal, verticaal of horizontaal), heeft gewonnen.
Iemand die het spel goed genoeg kent, kan ieder spel in een gelijkspel (of gunstiger) laten eindigen, ongeacht wat de tegenstander doet. Zeker voor beginners is het veld in het midden het belangrijkste veld.</p></aside>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/menu.js" type="text/javascript"></script>
  <div id="main">
    <h1>TIC TAC TOE</h1>
      <form action="game.php" method="POST">
          <?php
          if(isset($_SESSION['game'])){
              echo unserialize($_SESSION['game']);
          } else {
          ?>
          <div class="table">
          <h3>Do you want to play with X or O?</h3>
          <input type="radio" name="player" value="X" id="x" />
          <label for="x"><img src="img/X.jpg" /></label>
          <input type="radio" name="player" value="O" id="o" />
          <label for="o"><img src="img/O.jpg" /></label>

          <tr><td colspan="2"><input type="submit" value="submit" name="submit"/></td></tr>
          </div>
      </form>
      <?php } ?>
  </div>
</body>
</html>
