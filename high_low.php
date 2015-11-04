<?php
	$randomNumber = rand(1, 100);
	do {
		fwrite(STDOUT, 'Guess ');
		$guess = fgets(STDIN);
		if ($randomNumber > $guess) {
			fwrite(STDOUT, Higher)
		}
		if ($randomNumber < $guess) {
			fwrite(STDOUT, Lower)
		}
		if ($randomNumber == $guess) {
			fwrite(STDOUT, Correct)
		}
	} while ($guess != $randomNumber)
?>