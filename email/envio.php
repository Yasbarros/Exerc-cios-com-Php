<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';

if(isset($_POST['enviar'])){
    $mail = new PHPMailer(true);

    try {

        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                    
        $mail->SMTPAuth   = true;                                  
        $mail->Username   = 'barrosyas123@gmail.com
        ';                    
        $mail->Password   = 'vdoy mgwr kurp wxmk';                               
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
        $mail->Port       = 465;                                    

        
        $mail->setFrom('barrosyas123@gmail.com
        ', 'Mailer');
        $mail->addAddress('barrosyas123@gmail.com
        ', 'Yasmim');                   
        $mail->addReplyTo('barrosyas123@gmail.com
        ', 'Information');  

        $mail->isHTML(true);                                  
        $mail->Subject = 'Enviando email com php - Aluna Yasmim ';
        $body = "Mensagem de email enviada utilizando comandos da linguagem php. Segue informações abaixo: <br>
        Nome: " . $_POST['nome'] . "<br>
        Email: " . $_POST['email'] . " <br>
        Mensagem: <br>" .
        $_POST['msg'] . "<br>";


        $mail->Body    = $body;
        $mail->send();
        echo 'Email enviado com sucesso!';
    } catch (Exception $e) {
        echo "Erro ao enviar o email: {$mail->ErrorInfo}";
    }
}else{
    echo "Erro ao enviar email. Acesso não foi via formulário.";
}
