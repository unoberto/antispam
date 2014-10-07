<html>
<head>
<title>antispam</title>
</head>

<body>

<form action="number.php" method="post">
	Номер телефона: <input type="int" name="tel_numbers" /><br />
	Сообщение которое пришло как спам: <input type="text" name="message" /><br />
	<input type="submit" value="Отправить форму" />
</form>

<?php
$tel_numbers = $_POST['tel_numbers'];
$message = $_POST['message'];


$hostname="localhost\xamp\mysql\data\callphone\"; 

$username = "user";
$password="123456"; 
$dbName="callphone"; 
$usertable="numbers_spam"; 


MYSQL_CONNECT($hostname,$username,$password) 
OR DIE("Не могу подсоединиться"); 


MYSQL_SELECT_DB($dbName) or die("Не могу выбрать БД"); 

$query="INSERT INTO $usertable VALUES ('$tel_numbers','$message')"; 
$result=MYSQL_QUERY($query); 

MYSQL_CLOSE(); 
print "Запись введена в БД! <br>"; 


?> 

</body>
</html>
