<?php
if (!empty($_POST)) {
	$message = "Вам пришло сообщение от пользователя: \n" 
	. "Имя отправителя: " . $_POST ['userName'] . "\n"
	. "Почта отправителя: " . $_POST ['userMail'] . "\n"
	. "Сообщение отправителя: \n " . $_POST ['message'];

	$headers = "From: johnconan@mail.ru";

	$resultMail = mail("link@johnconan.ru","Сообщение с сайта", $message, $headers );

	if ($resultMail) {
		print "Сообщение отправлено успешно!";
	} else {
		print "Сообщение не отправлено!";
	}
}
?>

<h1>POST - Отправка формы</h1>
<form action="index.php" method="post">
	<input type="text" name="userName" placeholder="Ваше имя"><br><br>
	<input type="email" name="userMail" placeholder="Ваш email"><br><br>
	<textarea name="message" id="" cols="30" rows="10" placeholder="Введите сообщение"></textarea><br><br>
	<input type="submit" value="Отправить">
</form>


