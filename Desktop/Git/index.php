<?php

	/*
	* include the Class "Board".
	*/
	require_once("Board.php");
	/*
	* include the Class "Player".
	*/
	require_once("Player.php");
	/*
	* include the Class "TicTacToe".
	*/
	require_once("TicTacToe.php");
	
	/*
	* instantiated an instance of the Class "Player".
	*/
	$Player1 = new Player ( "John" , "X" );
	/*
	* instantiated an instance of the Class "Player".
	*/
	$Player2 = new Player ( "Jack" , "0" );
	$Board = new Board();
	//print_r($Board);
	$field = $_GET;
	$currentPlayer = $TicTacToe->currentPlayer
	$currentSymbol = $currentSymbol->getSymbol();
	if ($field != "")
	{
		
	}	
	
	$output = '
		<!DOCTYPE html> <!--damit der Browser dies als HTML erkennt, HTMl Version 5-->
		<head> <!-- Kopfbereich -->
			<meta charset="utf-8"> <!--Browser soll möglicherweise von seinen Standardeinstellungen abweichen, um utf-8 zu benutzen. Meta informationen = -->
			<title>Tic-Tac-Toe. This is the title. It is displayed in the titlebar of the window in most browsers.</title>
			<meta name="description" content="Tic-Tac-Toe-Game. Here is a short description for the page. This text is displayed e. g. in search engine result listings."> <!-- Beschreibung der Seite -->
			<style>
				table.tic td {
					border: 1px solid #333; /* grey cell borders */
					width: 8rem;
					height: 8rem;
					vertical-align: middle;
					text-align: center;
					font-size: 4rem;
					font-family: Arial;
				}
				table { margin-bottom: 2rem; }
				input.field {
					border: 0;
					background-color: white;
					color: white; /* make the value invisible (white) */
					height: 8rem;
					width: 8rem !important; <!-- "!important" = macht dieses Element wichtiger als ein gleiches inline Element, aufpassen, dass es nicht doppelt vorkommt -->
					font-family: Arial;
					font-size: 4rem;
					font-weight: normal;
					cursor: pointer;
				}
				input.field:hover { <!-- hover = pseudo element -->
					border: 0;
					color: #c81657; /* red on hover */
				}
				.colorX { color: #e77; } /* X is light red */ /* .Klasse */
				.colorO { color: #77e; } /* O is light blue */
				table.tic { border-collapse: collapse; }
			</style>
		</head>
		<body>
			<section>
				<h1>Tic-Tac-Toe</h1>
				<article id="mainContent">
					<h2>Your free browsergame!</h2>
					<p>Type your game instructions here...</p>
					<form method="get" action="index.php">
						<table class="tic">
				';
				$content=$Board->getBoard();
				$i1 = 0;
				$i2 = 0;
				foreach($content AS $nothing){
					$i2 = 0;
					$output .= "<tr>";
					foreach($nothing AS $nothing2){
						if($nothing2!=""){
							$output .="<td><span class=\"color$nothing2\">$nothing2</span></td>";
						}else{
							$output .='<td><input type="submit" class="reset field" name="cell-'.$i1.'-'.$i2.'" value="X" /></td>';
						}
					$i2++;	
					}
					$output .= "</tr>";	
					$i1++;
				};
				$output .= '			
						</table>
					</form>
				</article>
			</section>
		</body>
		</html>	
		';	
	echo ($output);
	var_dump($field);
	
?>