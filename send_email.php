<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "stengellucaspro@gmail.com"; // Remplacez par l'adresse email souhaitée
    $subject = "Nouveau message de contact";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $email_body = "Nom: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Message:\n$message\n";

    if (mail($to, $subject, $email_body, $headers)) {
        echo "Merci pour votre message. Nous vous répondrons bientôt.";
    } else {
        echo "Une erreur s'est produite, veuillez réessayer.";
    }
} else {
    echo "Accès non autorisé.";
}
?>
