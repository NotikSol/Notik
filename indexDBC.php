<?php
class indexDBC{
	//Атрибуты
	public $login; //string
	public $sname; //string 
	public $name; //string 
	public $mname; //string 
	public $ps; //string 
	public $email; //string 
	public $phone; //string 
	public $age; //date 
	public $sex; //string 
	public $my_country; //string 

	//Конструктор
	public function __construct($args){
		$mass = explode(";", $args);
		$l = $mass[0];
		$s = $mass[1];
		$n = $mass[2];
		$m = $mass[3];
		$p = $mass[4];
		$e = $mass[5];
		$ph = $mass[6];
		$a = $mass[7];
		$sx = $mass[8];
		$mc = $mass[9];
		
		if(indexDBC::Tlogin($l)) $this->login = $l;
		else $this->login = "NULL";
		
		if(indexDBC::Tsname($s)) $this->sname = $s;
		else $this->sname = "NULL";
		
		if(indexDBC::Tname($n)) $this->name = $n;
		else $this->name = "NULL";
		
		if(indexDBC::Tmname($m)) $this->mname = $m;
		else $this->mname = "NULL";
		
		if(indexDBC::Tps($p)) $this->ps = $p;
		else $this->ps = "NULL";
		
		if(indexDBC::Temail($e)) $this->email = $e;
		else $this->email = "NULL";
		
		if(indexDBC::Tphone($ph)) $this->phone = $ph;
		else $this->phone = "NULL";
		
		if(indexDBC::Tage($a)) $this->age = $a;
		else $this->age = "NULL";
		
		if(indexDBC::Tsex($sx)) $this->sex = $sx;
		else $this->sex = "NULL";
		
		if(indexDBC::Tmy_country($mc)) $this->my_country = $mc;
		else $this->my_country = "NULL";
		
	}
	
	//Геттеры
	public function getString(){
		echo "<br>".$this->login."; ".$this->sname."; ".$this->name."; ".$this->mname."; ".$this->ps."; ".$this->email."; ".$this->phone."; ".$this->age."; ".$this->sex."; ".$this->my_country.";";
	}
	
	public function getLogin(){
		if(isset($this->login)) 
		{
			return $this->login;
		}
		else return "NULL";
	}
	
	public function getSname(){
		if(isset($this->sname)) 
		{
			return $this->sname;
		}
		else return "NULL";	}
	
	public function getName(){
		if(isset($this->name)) 
		{
			return $this->name;
		}
		else return "NULL";	
}
	
	public function getMname(){
		if(isset($this->mname)) 
		{
			return $this->mname;
		}
		else return "NULL";	
}
	
	public function getPs(){
		if(isset($this->ps)) 
		{
			return $this->ps;
		}
		else return "NULL";
	}
	
	public function getEmail(){
		if(isset($this->email)) 
		{
			return $this->email;
		}
		else return "NULL";
	}
	
	public function getPhone(){
		if(isset($this->phone)) 
		{
			return $this->phone;
		}
		else return "NULL";
	}
	
	public function getAge(){
		if(isset($this->age)) 
		{
			return $this->age;
		}
		else return "NULL";
	}
	
	public function getSex(){
		if(isset($this->sex)) 
		{
			return $this->sex;
		}
		else return "NULL";
	}
	
	public function getMy_country(){
		if(isset($this->my_country)) 
		{
			return $this->my_country;
		}
		else return "NULL";
	}
	
	//Сеттеры
	public function setLogin(){
		if(indexDBC::Tlogin($login)) 
			$this->login=$login;
	}
	
	public function setSname(){
		if(indexDBC::Tsname($sname)) 
			$this->sname=$sname;
	}
	
	public function setName(){
		if(indexDBC::Tname($name)) 
			$this->name=$name;
	}
	
	public function setMname(){
		if(indexDBC::Tmname($mname)) 
			$this->mname=$mname;
	}
	
	public function setPs(){
		if(indexDBC::Tps($ps)) 
			$this->ps=$ps;
	}
	
	public function setEmail(){
		if(indexDBC::Temail($email)) 
			$this->email=$email;
	}
	
	public function setPhone(){
		if(indexDBC::Tphone($phone)) 
			$this->phone=$phone;
	}
	
	public function setAge(){
		if(indexDBC::Tage($age)) 
			$this->age=$age;
	}
	
	public function setSex(){
		if(indexDBC::Tsex($sex)) 
			$this->sex=$sex;
	}
	
	public function setMy_country(){
		if(indexDBC::Tmy_country($my_country)) 
			$this->my_country=$my_country;
	}
	
	//Валидация 
	public static function Tlogin($login){//Проверка логина
		$options = array("options"=>array('regexp'=>'/[A-z]{3}/'));
		if(filter_var($login, FILTER_VALIDATE_REGEXP,  $options))
			return true;
		else 
			return false;
	}
	
	public static function Tsname($sname){//Проверка
	$options = array("options"=>array('regexp'=>'([a-zA-Zа-яА-Я])'));
		if(filter_var($sname, FILTER_VALIDATE_REGEXP, $options))
			return true;
		else 
			return false;
	}
	
	public static function Tname($name){//Проверка имени
	$options = array("options"=>array('regexp'=>'([a-zA-Zа-яА-Я])'));
		if(filter_var($name, FILTER_VALIDATE_REGEXP, $options))
			return true;
		else 
			return false;
	}
	
	public static function Tmname($mname){//Проверка отчества
	$options = array("options"=>array('regexp'=>'([a-zA-Zа-яА-Я])'));
		if(filter_var($mname, FILTER_VALIDATE_REGEXP, $options))
			return true;
		else 
			return false;
	}
	
	public static function Tps($ps){//Проверка пароля
	$options = array("options"=>array('regexp'=>'/[a-zA-Zа-яА-Я0-9]{5,25}/'));
		if(filter_var($ps, FILTER_VALIDATE_REGEXP, $options))
			return true;
		else 
			return false;
	}
	
	public static function Temail($email){//Проверка email
		if (filter_var($email, FILTER_VALIDATE_EMAIL))
			return true;
		else
			return false;
	}
	
	public static function Tphone($phone){//Проверка телефона
	$options = array("options"=>array('regexp'=>'/[0-9]{0,11}/'));
		if(filter_var($phone, FILTER_VALIDATE_REGEXP, $options))
			return true;
		else 
			return false;
	}
	
	public static function Tage($age){
		
	}
	
	public static function Tsex($sex){
		
	}
	
	public static function Tmy_country($my_country){
		
	}
	
	//Методы
	public function conDB($sql){//Подключение к БД $sql - запрос передаваемы
		/*$this->conn = new mysqli("localhost", "Notik", "N@t@shech]{@");
		if(mysql_connect_errno()){
			$conErr = "Ошибка соединения к БД".mysqli_connect_error();
		}
			else{
				$conErr = "";
			}
			return $conErr;*/
		$conn = mysql_connect("localhost", "Notik", "N@t@shech]{@")
			or die ("<br/>Не могу подсоедениться к серверу");
		mysql_select_db("db_test",$conn)
			or die ("<br/>Не могу найти БД");
		$result = mysql_query($query)
			or die('<br>В данный момент нельзя добавить пользователя:<br>');
		return $conn;
	}

	public function closeConDB(){//Отключение от БД
		mysql_close($conn);
	}
		
	public function insert($login, $sname, $name, $mname, $ps, $email, $phone, $age, $sex, $my_country){
			$this->login=$login;
			$this->sname=$sname;
			$this->name=$name;
			$this->mname=$mname;
			$this->ps=$ps;
			$this->email=$email;
			$this->phone=$phone;
			$this->age=$age;
			$this->sex=$sex;
			$this->my_country=$my_country;
		
		
		
		
		$db=mysql_connect("localhost", "Notik", "N@t@shech]{@")
			or die("<br>Ошибка подключения к БД! ".mysql_error()."</br>");
		mysql_select_db("db_test",$db)	
			or die("<br>Ошибка выбора БД!".mysql_error()."</p>");
			$sql="INSERT INTO web(login, sname, name, mname, ps, email, phone, age, sex, my_country)
					VALUES ('%s','%s', '%s', '%s', '%s','%s','%s', '%s', '%s', '%s')";
			$query = sprintf($sql, mysql_real_escape_string($login),
								   mysql_real_escape_string($sname), 
								   mysql_real_escape_string($name), 
								   mysql_real_escape_string($mname), 
								   mysql_real_escape_string($ps), 
								   mysql_real_escape_string($email), 
								   mysql_real_escape_string($phone),
								   mysql_real_escape_string($age),
								   mysql_real_escape_string($sex),
								   mysql_real_escape_string($my_country));
			echo "<br>".$query."<br>";
		$result = mysql_query($query)
			or die('<br>В данный момент нельзя добавить пользователя:<br>');
		mysql_close($db);

			if($result)
				echo "<br>Данные пользователя добавлены<br>";
			else
				echo "<br>Данные пользователя отклонены<br>";
		}
		
	public function del($login){//Удаление по логину
		$tjis->login=$login;
		$query = $this->conn->prepeare("DELETE FROM web WHERE login = ?");
		$query->bind_param("s",$this->login);
		$query->execute();
		$query->close();
	}

	public function select($login){//Выборка по логину
		$this->login = $login;
		$query = $this->conn->prepeare("SELECT * FROM web WHERE login = ?");
		$query->bind_param("s", $this->login);
		$query->execute();
		$query->close();
		return $query;
	}

	public function Tselect($login){//Выборка по всей таблице
		$query = $this->conn->prepeare("SELECT * FROM web");
		return $query;
	}
	
	
}
	



	
	
	
	
	
	
	
	
	
	
?>