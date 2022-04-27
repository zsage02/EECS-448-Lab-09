<!DOCTYPE html>
<html>
<head></head>
<body>
<p>
	"Question 1: What is the name of the Emporer?:"
	<br>
	You Answered: <?php echo $_POST['em']; ?>
	<br>
	Correct Answer: Karl Franz
	<br>
</p>
<p>
	Question 2: Who is the founder of the Empire?:
	<br>
	You Answered: <?php echo $_POST['fo']; ?>
	<br>
	Correct Answer: Sigmar
	<br>
</p>
<p>
	Question 3: What is the continent the Empire is in?:
	<br>
	You Answered: <?php echo $_POST['co']; ?>
	<br>
	Correct Answer: The Old World
	<br>
</p>
<p>
	Question 4: What is the warhammer on the Empire's flag?:
	<br>
	You Answered: <?php echo $_POST['wa']; ?>
	<br>
	Correct Answer: Heldenhammer
	<br>
</p>
<p>
	Question 5: What nation from history is the Empire based on?
	<br>
	You Answered: <?php echo $_POST['hi']; ?>
	<br>
	Correct Answer: Holy Roman Empire
	<br>
</p>
<p>
	Final Grade:
    <br>
    Total Correct:
<?php 
	$em = $_POST["em"];
	$fo = $_POST["fo"];   
	$co = $_POST["co"];
	$wa = $_POST["wa"];
	$hi = $_POST["hi"];
    $cor = 0;
    $total = 5;
    $grade = 0;
    $one = 0;
    $two = 0;
    $three = 0;
    $four = 0;
    $five = 0;
    if($em == "Karl Franz")
    {
    	$one = 1;
    }
    if($fo == "Sigmar")
    {
    	$two = 1;
    }
    if($co == "The Old World")
    {
    	$three = 1;
    }
    if($wa == "Heldenhammer")
    {
    	$four = 1;
    }
    if($hi == "Holy Roman Empire")
    {
    	$five = 1;
    }
    $cor = $one + $two +$three + $four + $five;
    $grade = ($cor / $total)*100;
    echo $cor;
?>
	<br>
	Final Grade: <?php echo $grade ?>%
</p>
</body>
</html>
