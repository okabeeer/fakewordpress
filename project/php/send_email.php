<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:/xampp/htdocs/project/php/phpmailer/src/Exception.php';
require 'C:/xampp/htdocs/project/php/phpmailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/project/php/phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    try {
        // Paramètres SMTP de Gmail
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'salikandoussi@gmail.com';
        $mail->Password   = 'durkmyptchddufzo'; // Utilisez ici un mot de passe d'application sécurisé
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Paramètres de l'email
        $mail->setFrom($_POST["email"], 'Dawm Agency');
        $mail->addAddress('salikandoussi@gmail.com'); // Destinataire

        $mail->isHTML(true);
        $mail->Subject = $_POST["subject"];
        $mail->Body    = "De: " . $_POST["email"] . "<br>Message: " .$_POST["message"];

        // Envoi de l'email
        $mail->send();
        echo "
        <script>
            alert('Message sent successfully');
             window.location.href = '../index.html';
        </script>
        ";
    } catch (Exception $e) {
        echo "Erreur : Le message n'a pas pu être envoyé. Erreur de Mailer : {$mail->ErrorInfo}";
    }
}

?>
