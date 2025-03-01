<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "hubert.kuchejda07@gmail.com"; // Twój adres e-mail
    $subject = "Nowa wiadomość z formularza kontaktowego";
    $message_body = "Imię i nazwisko: $name\nEmail: $email\nWiadomość:\n$message";

    // Nagłówki wiadomości
    $headers = "From: $email";

    // Wysyłanie wiadomości
    if (mail($to, $subject, $message_body, $headers)) {
        echo "Wiadomość została wysłana!";
    } else {
        echo "Wystąpił błąd podczas wysyłania wiadomości.";
    }
}
?>