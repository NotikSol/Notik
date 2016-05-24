<?php
	$massive[]=array($n = '"login"',
				 $t = '"text"',
				 $r = 'required',
				 $ps= '"[A-z]{3,}"',
				 $pl= '"NotikSol"',
				 $text = 'Логин'
	);
	$massive[]=array($n = '"ps"',
				 $t = '"password"',
				 $r = 'required',
				 $ps= '"[A-z]{5,}"',
				 $pl= '"NataEVT13"',
				 $text = 'Пароль'
	);
	$massive[]=array($n = '"email"',
				 $t = '"email"',
				 $r = 'required',
				 $ps= '"^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$"',
				 $pl= '"Soloveva92@yandex.ru"',
				 $text = 'Почта'
	);
	$massive[]=array($n = '"phone"',
				 $t = '"tel"',
				 $r = '',
				 $ps= '"[0-9]{11}"',
				 $pl= '"89504652022"',
				 $text = 'Телефон'
	);
	$massive[]=array($n = '"sex"',
				 $t = '"radio"',
				 $r = "",
				 $ps= "",
				 $pl= "",
				 $text = "М",
				 $v = '"value = 0"'
	);
	$massive[]=array($n = '"sex"',
				 $t = '"radio"',
				 $r = "",
				 $ps= "",
				 $pl= "",
				 $text = "Ж",
				 $v = '"value = 1"'
	);
	
	
	
	
	
	
	
?>






