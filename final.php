<?php session_start(); ?>

<!DOCTYPE html>
	<html> 
		<head>
			<meta charset="utf-8"/>
			<title> PHP quizzer </title>
			<link rel="stylesheet" href="css/style.css" type="text/css"/>
		</head>
		<body>
			 
				<header>
					<div class="container">
						<h1> PHP Quizzer </h1>
					</div>
				</header>
				</main>
					<div class="container">
						<h2> You're Done! </h2>
							<p> Congrats! You have completed the test </p>
							<p> Final Score: <?php echo $_SESSION['score']; ?> </p>
							<a href="question.php?n=1" class="start"> Take Again 
							</a>
							<?php
								if(!$_POST){
									$_SESSION['score'] = 0;
								}
							?>
					</div>
				</main>
				<footer>
					<div class="container">
						Copyright &copy; 2016, PHP quizzer
					</div>
				</footer>
			
		</body>
	</html>