<?php
echo '
<form action="" method="post">
<input type="text" name="name" /><br/>
<input type="text" name="lastname" /><br/>
<input type="text" name="mail" /><br/>
<input type="submit" name="submit" value="Отправить" />
</form>
';
$name = $_Post['name'];
$lastname = $_Post['lastname'];
$mail = $_Post['mail'];

$to = "antonnosov95@gmail.com";
$subject = $name."/n".$lastname."/n".$mail;
$header = @header("Content_type: text/html; chareset = uft8");

if(isset($_Post['submit'])){
	if (!empty($name) AND !empty($lastname) AND !empty($mail)){
		$send_mail = mail($to, $subject, $header)
		if($send_mail){
			echo "<font color = 'green'> Ваше сообщение успешно отправленно!<font/>";
			}
		else{
			echo "<font color = 'red'> Ваше сообщение НЕ отправленно!<font/>";
			}	
		}
		else{
			echo "Пожалуйста, заполните все поля";
		}
}
?>