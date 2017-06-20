<?php

class tictactoe{
	private $player;		//Current Turn
	private $board;			//Tic Tac Toe board
	private $totalMoves;	//Number of moves made
	private $isDone;

	function __construct($player){
		$this->player = $player;
		$this->totalMoves = 0;
		$this->board = array(0,1,2,3,4,5,6,7,8);
		$this->isDone = false;
	}

	public function move($cord){
		$this->board[$cord] = $this->player;
		$this->player = ($this->player == "X" ? "O" : "X");
		$this->totalMoves++;
		if ($this->checkGame() != null){
			$this->isDone = true;
		}
	}
	private function checkGame(){
		$possSolutions = array(
			array(0,1,2),array(3,4,5),array(6,7,8),
			array(0,3,6),array(1,4,7),array(2,5,8),
			array(0,4,8),array(2,4,6));
		foreach($possSolutions as $point){
			if ($this->board[$point[0]] == $this->board[$point[1]] && $this->board[$point[1]] == $this->board[$point[2]]){
				return $this->board[$point[0]];
			}
		}
		if ($this->totalMoves >= 9){
			return "Tie";
		}
	}
	public function __toString(){
		if (!$this->isDone){
			echo "<table><div class='table'>";
			for ($x = 0; $x < 9; $x++) {
				if ($x == 3 || $x == 6) {
					echo "</tr>";
				}
				if ($x == 0 || $x == 3) {
					echo "<tr>";
				}
				if (!is_int($this->board[$x])) {
					$img = $this->board[$x];
					echo "<td><img src='img/$img.jpg' alt='$img' title='$img' /></td>";
				} else {
					//It's not? Let them choose this position
					echo "<td><button id=radio type='submit' method='post' name='cords' value='{$x}'></button><style>button:hover {background-image: url('img/$this->player.jpg')}</style></td>";
				}
			}
            return "</table></div>";
		} else {
			//Decide if there was a winner or not.
			if ($this->checkGame() != "Tie") {
                if ($this->checkGame() == "O") {
                    echo "<h2>O has won the match!</h2><br/>";
                }
                else {
                    echo "<h2>X has won the match!</h2><br/>";
                }
			} elseif ($this->checkGame() == "Tie") {
				echo "<h2>TIED MATCH</h2>";
			} else {
				echo "Something went wrong....";
			}
			return "<br /><input type='submit' name='newgame' value='New Game' />";
		}
	}
}
?>
