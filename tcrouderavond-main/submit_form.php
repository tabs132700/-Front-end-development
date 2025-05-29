<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone'])); 
    $message = htmlspecialchars(trim($_POST['message']));

    
    $to = "info@tcrmbo.com"; 
    $subject = "Nieuw bericht van: $name";
    $body = "Naam: $name\nEmail: $email\nTelefoonnummer: $phone\n\nBericht:\n$message";
    $headers = "From: $email";

    
    if (mail($to, $subject, $body, $headers)) {
        echo "Bericht succesvol verstuurd!";
    } else {
        echo "Er is een probleem opgetreden bij het verzenden van uw bericht. Probeer het opnieuw.";
    }
} else {
    echo "Ongeldige verzoekmethode.";
}
?>
