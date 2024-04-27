use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/src/Exception.php';
require 'vendor/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/src/SMTP.php';

$mail = new PHPMailer(true); // Passez `true` pour activer les exceptions

try {
    // Configurations du serveur SMTP
    $mail->isSMTP();                                      // Utiliser SMTP
    $mail->Host       = 'smtp.gmail.com';                 // Serveur SMTP de Gmail
    $mail->SMTPAuth   = true;                             // Activer l'authentification SMTP
    $mail->Username   = 'tom.tesson971@gmail.com';           // Votre adresse email Gmail
    $mail->Password   = 'v%^%iS5m5a';                // Votre mot de passe Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   // Activer le chiffrement TLS; `PHPMailer::ENCRYPTION_SMTPS` encouragé
    $mail->Port       = 587;                              // Port TCP pour se connecter

    // Destinataires
    $mail->setFrom('tom.tesson971@gmail.com', 'LesPtitsPlansdeColine');
    $mail->addAddress('destinataire@example.com');     // Ajoutez un destinataire

    // Contenu de l'e-mail
    $mail->isHTML(true);                                  // Définir le format de l'email en HTML
    $mail->Subject = 'Sujet de votre e-mail';
    $mail->Body    = 'Ceci est le corps de votre message HTML';
    $mail->AltBody = 'Ceci est le corps du message pour les clients mail qui ne supportent pas le HTML';

    $mail->send();
    echo 'Le message a été envoyé';
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Erreur de PHPMailer: {$mail->ErrorInfo}";
}
