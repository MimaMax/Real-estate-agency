<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
$checkbox_phone = $_POST['accept-phone'];
$check = $_POST['second_name'];
$phone = $_POST['inp_phone1'];
if ($check != "") {
 	exit();
 }
 if (!$checkbox_phone) {
	echo "<script>alert(\"Для отправки телефона необходимо согласие на обработку персональных данных\");
	location.replace(\"index.php\");
	</script>";
	exit();
}

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'warthunder1717@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'AsMaX26621999'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('warthunder1717@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('maksim.mingaev.99@gmail.com');
// Кому будет уходить письмо kucherov_s@mail.ru
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Потенциальный клиент';
$mail->Body    = ' Клиент интересуется услугами нашего агентства и хочет уточнить детали, его телефон ' .$phone;
$mail->AltBody = '';

	if(!$mail->send()) {
    echo 'Error';
	} else {	
	echo "<script>alert(\"Ваша заявка успешно отправлена.\");
	location.replace(\"index.php\");
	</script>";	
	}

?>