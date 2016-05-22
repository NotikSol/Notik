<?php
/*session_start();
$_SESSION['name']="Наташа";*/
	session_name("Tasha");
	session_start();

//Функция очистки данных от HTML и PHP тегов
function check($value){
	//$value=trim($value);//Удаление символов пробела из начала и конца строки
	$value=stripslashes($value);//Удаление экранированных символов, таких как "\"	
	$value=strip_tags($value);//Удаление HTML и PHP тегов
	$value=htmlspecialchars($value);//Преобразование спец символов в HTML-сущности
	return $value;
}

//Проверка длины строки
function len($value,$min,$max){
	$result=(mb_strlen($value)<$min||mb_strlen>$max);
	return !$result;
}

//Проверка почты
function email_valid($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL))
			return true;
		else
			return false;
	}
	
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
					/*else {
						if($_POST['myCountry']==" ") $country = '===';
						else $country = '===';
					}*/
				}
			}
		}
	}
	/*//Вывод полученных данных в страницу обработчика//
	echo $_POST['login'].'<br />'.$_POST['sname'].'<br />'.$_POST['name'].'<br />'.$_POST['mname'].'<br />'.$_POST['password'].'<br />';
	echo $_POST['email'].'<br />'.$_POST['phone'].'<br />'.$_POST['age'].'<br />'.$sex.'<br />'.$_POST['myCountry'].'<br />';
*/
	$login=check($_POST['login']);
	$sname=check($_POST['sname']);
	$name=check($_POST['name']);
	$mname=check($_POST['mname']);
	$ps=check($_POST['password']);
	$email=check($_POST['email']);
	$phone=check($_POST['phone']);
	
	$sname=trim($sname);
	$name=trim($name);
	$mname=trim($mname);
	$email=trim($email);
	$phone=trim($phone);

	if(!empty($login)&&!empty($ps)&&!empty($email)){
		//Проверка длинны вводимых данных
		if(len($login,3,25)&&len($sname,0,255)&&len($name,0,255)&&len($mname,0,255)&&len($ps,5,255)&&len($phone,0,11)&&email_valid($email)){
			echo "<br>Заявка принята";
		}else {
			echo "<br>Введены некорректрыне данные!";
			}
	}else {
		echo "<br>Заполните пустые поля";
		}
}else{header("<br>Location: index.php");
}

$db=mysql_connect("localhost", "Notik", "N@t@shech]{@")
	or die("<br>Ошибка подключения к БД! ".mysql_error()."</br>");
mysql_select_db("db_test",$db)	
	or die("<br>Ошибка выбора БД!".mysql_error()."</p>");
$insertSQL="INSERT INTO web(login, sname, name, mname, ps, email, phone, age, sex, my_country)
			VALUES ('".$login."','".$sname."','".$name."','".$mname."','".$ps."','".$email."','".$phone."','".$_POST['age']."','".$sex."','".$_POST['myCountry']."');";
$result = mysql_query($insertSQL)
	or die('<br>В данный момент нельзя добавить пользователя:<br>');
mysql_close($db);

	if($result)
		echo "<br>Данные пользователя добавлены<br>";
	else
		echo "<br>Данные пользователя отклонены<br>";
		
/*$db=mysql_connect("localhost", "Notik", "N@t@shech]{@")
	or die("<br>Ошибка подключения к БД! ".mysql_error()."</br>");
mysql_select_db("db_test",$db)	
	or die("<br>Ошибка выбора БД!".mysql_error()."</p>");
	$sql = "SELECT (login) FROM web WHER login='$login'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
echo printf("<br />Привет! ".$row);
	if($result==0){
		echo printf("<br />Привет! ".$row);
		$insertSQL="INSERT INTO web(login, sname, name, mname, ps, email, phone, age, sex, my_country)
			VALUES ('".$login."','".$sname."','".$name."','".$mname."','".$ps."','".$email."','".$phone."','".$_POST['age']."','".$sex."','".$_POST['myCountry']."');";
	}else{echo "Выбраный логин уже существует";}
$result = mysql_query($insertSQL)
	or die('<br>В данный момент нельзя добавить пользователя:<br>');
mysql_close($db);	*/
?>






