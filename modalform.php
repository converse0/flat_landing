<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$mes=mail("Message frome user:" $name, "Users email:" $email, "His message:" $message);

if ($mes=='true') {
	echo "<h1>Success</h1> <br>;
	<a href=index.html >Вернуться назад </a> </p>";
}

else
{
echo "<p>Сообщение не отправлено<br /><br />
<a href=index.html >Вернуться назад </a> </p>";
}


?>