<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
		$query = "SELECT * FROM `questions`";
		//get result
		$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
		$total = $results->num_rows;

	//set question_number
	$number = (int) $_GET['n'];
	/*	
	* Get Question
	*/
	$query = "SELECT * FROM questions 
				WHERE question_number = $number";
	$querys = "SELECT * FROM choice 
				WHERE question_number = $number";
	//Get result
	$choices = $mysqli->query($querys) or die($mysqli->error.__LINE__);
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

	$question = $result->fetch_assoc();


?>

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
						<div class="current"> Question <?php echo $question['question_number']; ?> of <?php echo $total ?> </div>
						<p class="question">
							<?php echo $question['text']; ?>
						</p>
						<form method="post" action="process.php">
							<ul class="choices">
							<?php while($row = $choices->fetch_assoc()): ?>
								<li> <input name="choice" type="radio" value="<?php echo $row['id']; ?>" /> <?php echo $row['text'] ?>
								 <?php endwhile; ?>
								</li>
							</ul>
							<input type="submit" value="submit" />
							<input type="hidden" name="number" value="<?php echo $number; ?> " />
						</form>
					</div>
				</main>
				<footer>
					<div class="container">
						Copyright &copy; 2016, PHP quizzer
					</div>
				</footer>
			
		</body>
	</html>