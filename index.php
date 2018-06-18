<?php  
	function greet($name='Гость', $dayWeek=0) {
		if ($dayWeek > 0 && $dayWeek < 6) {
			echo "<h1>Привет $name! Хорошего и продуктивного рабочего дня!<h1>";
		} elseif ($dayWeek >= 6  && $dayWeek <= 7) {
			echo "<h1>Привет $name! Желаю вам хорошо отдохнуть в этот день!<h1>";
		} else {
			echo "<h1>Привет $name! Необходимо ввести Ваше имя и номер дня недели от 1 до 7!<h1>";
		}
	}

	greet("Константин", 1);
	greet("Константин", 6);
	greet();

?>