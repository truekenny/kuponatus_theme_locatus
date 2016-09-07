<?
require_once 'classes/PHPMailer/PHPMailerAutoload.php';
require_once 'web/mail/_fields.php';

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';

// $mail->SMTPDebug = 3;

$mail->isSMTP();
$mail->Host = '192.168.144.16';
$mail->SMTPAuth = false;
//$mail->Username = 'user@example.com';
//$mail->Password = 'secret';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('sasha@yaroslavtsev.net', 'Sasha Yaroslavtsev');
$mail->addAddress('sasha@yaroslavtsev.net', 'Sasha Yaroslavtsev');
//$mail->addAddress('sasha@yaroslavtsev.net', 'Sasha Yaroslavtsev');

foreach ($_FILES['fields']['name'] as $name => $filename) {
    $mail->addAttachment($_FILES['fields']['tmp_name'][$name], $filename);
}
$mail->isHTML(false);

$mail->Subject = 'Новая организация';
$mail->Body = '';
foreach ($_POST['fields'] as $name => $value) {
    $mail->Body .= $fields[$name][0] . ": " . $value . "\n";
}

if (!$mail->send()) {
    echo "Message could not be sent.";
    // echo 'Mailer Error: ' . $mail->ErrorInfo;
}
else {
    echo "<script>alert('Спасибо, ваше сообщение отправлено!');location = '/';</script>";
}
