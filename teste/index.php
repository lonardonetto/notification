<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email("2", "smtp.live.com", "contato.lvg@hotmail.com", "Lvg@2015", "tls", "587", "contato.lvg@hotmail.com", "4MoveBrasil");
$novoEmail->sendMail("Assunto de email", "<p><b>email de teste</b></p>", "contato.lvg@hotmail.com", "Leonardo Netto", "4move2017@gmail.com", "Leonardo");

var_dump($novoEmail);

