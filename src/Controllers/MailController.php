<?php

namespace Source\Controllers;

use PHPMailer\PHPMailer\PHPMailer;

class MailController
{

    public function send()
    {

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.titan.email';
        $mail->Port = 465;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = 'contato@gsvweb.com.br';
        $mail->Password = 'G4RhS5mJIa';

        $mail->setFrom('contato@gsvweb.com.br', 'Meu Nome');
        $mail->addAddress('gabrieldossantosvargas@gmail.com', 'Moraes');
        $mail->Subject = 'Envio de email';

        $mail->Charset = 'UTF-8';
        $mail->msgHTML("< p >Mensagem de < b >boas-vindas< /b >!< /p >");
        $mail->AltBody = ('Mensagem de boas-vindas');

        if (!$mail->send()) {
            die ("Erro no envio do e-mail: {$mail -> ErrorInfo}");
        }
        echo 'Mensagem enviada com sucesso';
    }

}