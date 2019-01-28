<?php
$field_name = $_POST['nome'];
$field_email = $_POST['email'];
$field_message = $_POST['mensagem'];

$mail_to = 'catiucianr@hotmail.com,canilcao@hotmail.com';
$subject = 'CanilCaopesino: Mensagem de: '.$field_name;

$body_message = 'De: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Mensagem: '.$field_message;

$headers = 'De: '.$field_email."\r\n";
$headers .= 'Responder Para: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Obrigado pelo contato, iremos retornar em breve.');
		window.location = 'contato.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Erro no envio. Recarregue a página e se o erro persistir, por favor envie um email para canilcao@hotmail.com.');
		window.location = 'contato.html';
	</script>
<?php
}
?>