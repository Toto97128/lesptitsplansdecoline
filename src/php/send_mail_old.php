<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer et assainir les entrées
    $prenom = strip_tags(trim($_POST["prenom"]));
    $nom = strip_tags(trim($_POST["nom"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Vérifier les données
    if (empty($prenom) || empty($nom) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($message)) {
        // Gérer l'erreur ici
        echo "Veuillez remplir tous les champs correctement.";
        exit;
    }

    // Destinataire de l'email
    $to = "tom_tesson@hotmail.com"; // Remplacez par votre adresse e-mail

    // Sujet de l'email
    $subject = "Nouveau message de $prenom $nom";

    // Contenu de l'email
    $email_content = "Nom: $nom\n";
    $email_content .= "Prénom: $prenom\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message\n";

    // Entêtes de l'email
    $headers = "From: $nom <$email>";

    // Envoi de l'email
    if (mail($to, $subject, $email_content, $headers)) {
        // Rediriger vers une page de remerciement
        header("Location: merci.html");
    } else {
        echo "Oops! Quelque chose s'est mal passé et nous n'avons pas pu envoyer votre message.";
    }
} else {
    // Requête non-POST
    echo "Il y a eu un problème avec votre soumission, veuillez réessayer.";
}
?>
