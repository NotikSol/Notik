<?php
	session_name("Tasha");
	session_start();
	include "indexDBC.php";
	
if($_SERVER['REQUEST_METHOD']=='POST'){
	//Получение данных из формы клиента//
	if($_POST['sex']==1)
		$sex = 'М';
	else
	{
		if($_POST['sex']==2)
			$sex = 'Ж';
		else
			$sex = '---';
	}
	
	if($_POST['myCountry']==Russian) $country = 'Россия';
	else {
		if($_POST['myCountry']==UK) $country = 'Великобритания';
		else {
			if($_POST['myCountry']==Germany) $country = 'Германия';
			else {
				if($_POST['myCountry']==China) $country = 'Китай';
				else {
					if($_POST['myCountry']==France) $country = 'Франция';
					else {
						$country = '===';
					}
				}
			}
		}
	} 

	function len($value,$min,$max){
	$result=(mb_strlen($value)<$min||mb_strlen>$max);
	return !$result;
}
	
	if(!empty($_POST['login'])&&!empty($_POST['password'])&&!empty($_POST['email'])){
		//Проверка длинны вводимых данных
		if(len($_POST['login'],3,25)&&len($_POST['sname'],0,255)&&len($$_POST['name'],0,255)&&len($_POST['mname'],0,255)&&len($_POST['password'],5,255)&&len($phone,0,11)){
			echo "<br>Заявка принята";
		}else {
			echo "<br>Введены некорректрыне данные!";
			}
	}else {
		echo "<br>Заполните пустые поля";
		}
		
}else{header("<br>Location: index.php");
}

$u = new indexDBC($_POST['login'].";".$_POST['sname'].";".$_POST['name'].";".$_POST['mname'].";".$_POST['password'].";".$_POST['email'].";".$_POST['phone'].";".$_POST['age'].";".$sex.";".$country.";");
					
$u->getString();

$u->insert($_POST['login'],$_POST['sname'],$_POST['name'],$_POST['mname'],$_POST['password'],$_POST['email'],$_POST['phone'],$_POST['age'],$sex,$country)


?>






