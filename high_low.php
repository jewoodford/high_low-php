<?php
	$randomNumber = rand(1, 100);
	do {
		fwrite(STDOUT, 'Guess ');
		$guess = fgets(STDIN);
		if ($randomNumber > $guess) {
			fwrite(STDOUT, 'Higher' . PHP_EOL);
		}
		if ($randomNumber < $guess) {
			fwrite(STDOUT, 'Lower' . PHP_EOL);
		}
		if ($randomNumber == $guess) {
			fwrite(STDOUT, 'Correct' . PHP_EOL);
		}
	} while ($guess != $randomNumber);
?>