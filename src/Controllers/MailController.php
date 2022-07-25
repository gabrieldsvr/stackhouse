<?php

namespace Source\Controllers;

use PHPMailer\PHPMailer\PHPMailer;

class MailController
{

    public function send($data)
    {


        try {
            $this->sendEmailRecebimento($data);
            $callback["message"] = "Sucesso!";
            echo json_encode($callback);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

    }

    public function sendEmailRecebimento($data)
    {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.titan.email';
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPAuth = true;
        $mail->Username = 'contato@gsvweb.com.br';
        $mail->Password = 'G4RhS5mJIa';

        $mail->setFrom('contato@gsvweb.com.br', 'NoReply');
//        contato@starkhouse.com.br
        $mail->addAddress('gabrieldossantosvargas@gmail.com', 'Contato');
        $mail->Subject = 'Contato pelo site';

        $mail->Charset = 'UTF-8';
        $mail->msgHTML('<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700&display=swap");

    p {
        font-family: "Poppins", sans-serif !important;
        font-weight: 400;
        font-size: 0.875rem;
        color: #58585e;
        letter-spacing: 0.015rem;
        margin-bottom: 10px;
    }</style><div>
    <table style="width: 550px;height: 100%;margin: 0 auto" cellpadding="0" cellspacing="0" border="0">
        <tbody>
        <tr>
            <td>Nome</td>
            <td>' . $data['nome'] . '</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>' . $data['email'] . '</td>
        </tr>
        <tr>
            <td>Telefone</td>
            <td>' . $data['telefone'] . '</td>
        </tr>
        <tr>
            <td>Mensagem</td>
            <td>' . $data['body'] . '</td>
        </tr>
        </tbody>
    </table>
</div>');
        $mail->AltBody = ('Mensagem de boas-vindas');

        if (!$mail->send()) {
            die ("Erro no envio do e-mail: {$mail -> ErrorInfo}");
        }
//        echo 'Mensagem enviada com sucesso';
    }

}