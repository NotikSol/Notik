<?php
	session_name("Tasha");
	session_start();

	/*if(!isset($_SESSION['start']))
		$_SESSION['start'] = time();
	$time_limit = 10;
	if (time() > $_SESSION['start']+$time_limit)
	{
		session_destroy();
	}
	else
	{
		//вот это глуповато, это значит,
		//что пользователь будет много раз обновлять,
		//а ничего не изменится
		//$_SESSION['start'] = time();
	}

	//error_reporting(0);*/
?>

<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html>

  <head>
      <meta charset="utf-8" />
      <title>Лабораторная работа №1</title>
      <link rel="stylesheet" href="styles.css" />
  </head>

  <body>

<header class="mainH">
       <h1>Регистрация</h1>
</header>

<quote>
	"Неученость не есть недостаток ума, 
	а знание не есть признак гения"
</quote>

<author>
	<p><em>Люк де Клапье Вовенарг </em></p>
</author> 

<!-- Форма, данные будут передаватся методом POST. В этой работе ничего не передается -->
<?php
	/*if (isset($_SESSION['block']))
	{
		echo "<p style='margin-left:20%;
				padding-left:5%;
				border: 1px solid black;
				border-radius: 20px;
				width: 55%;
				background-color: red;'>
				Вы слишком часто создаете пользователя</p>";
	}*/
?>
		
<form name="Tasha" action="index2.php" method="POST">
	<fieldset>
	<legend><fon>Контактная информация</fon></legend>
		<label for="login">Логин * </label>
		<input name="login" placeholder="Notik" size="25" pattern="([a-zA-Zа-яА-Я]{3,25}$)+" required>

		<label for="sname">Фамилия </label>
		<input name="sname" placeholder="Соловьева" size="25" pattern="([a-zA-Zа-яА-Я])+">

		<label for="name">Имя </label> 
		<input name="name" placeholder="Наталья" size="25" "([a-zA-Zа-яА-Я])+"> 

		<label for="mname">Отчество </label>
		<input name="mname" placeholder="Вячеславовна" size="25" "([a-zA-Zа-яА-Я])+">

		<label for="ps">Пароль * </label>
		<input type="password" maxlength="25" size="25" name="password" pattern="([a-zA-Zа-яА-Я@]{5,25}$)+" required >

		<label for="email">Email * </label>
		<input name="email" type="email" placeholder="Soloveva92@yandex.ru" size="25" required>
		
		<label for="phone"> Телефон </label>	
		<input name="phone" placeholder="89504652022" size="25" pattern="^\d{11}$" maxlength={11}>

		<?php
		//Генерируем и запоминаем id страницы отправляемой 
			$_SESSION['key']=md5(time());
			echo "<input type='hidden' id='identif' value='".$_SESSION['key']."'>";
		?>
	</fieldset>

	<p>
		<label for "age">Дата рождения</label>
		<input name="age" type="date" min="1920-01-01" max="2999-12-31">
	</p>

	<p>
		<label for "sex">Укажите пол</label>
		<label for="men">
		<input name="sex" type="radio" value=1> М 
		</label>

	<label for="women">
		<input name="sex" type="radio" value=2> Ж 
	</label>
	</p>

		<p>Выберите страну

		 <datalist name="myCountry">
			<span class="country">Выберите из списка:</span>
			<select name="myCountry">
			   <option label="Россия" value="Russian">
			   <option label="Великобритания" value="UK">
			   <option label="Германия" value="Germany">
			   <option label="Китай" value="China">
			   <option label="Франция" value="France">
			</select>
		 </datalist>
		 
		 <input name="myCountry" list="myCountry">
		</p>
		
	<p><textarea> Немного о себе </textarea></p>
	<?php
		if(!isset($_SESSION['block']))
		{
			echo "<input type='submit' name='sub' value='Отправить данные'' class='last'>";
		}				
	?>
	<!--<input type="submit"></input>-->
</form>

<p>На нашем сайте зарегестрировано 10 000 пользователей <meter max="50000" value="10000"></meter></p>

<fieldset>
<video controls="controls">
	<source src="Shadow.mp4" type="video/mp4" /> 
</video>
</fieldset>

<footer>
	<p>&copy; 2016, Соловьева Наталья Вячеславовна, ЭВТ-13-1б</p>
</footer>

</body>
</html>