<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = htmlspecialchars($_POST["naam"]);
    $email = htmlspecialchars($_POST["email"]);
    $onderwerp = htmlspecialchars($_POST["onderwerp"]);
    $bericht = htmlspecialchars($_POST["bericht"]);

    $ontvanger_email = "jouw@email.com";
    $onderwerp_email = "Nieuw Contactformulier - $onderwerp";
    $bericht_email = "Naam: $naam\nE-Mail: $email\nOnderwerp: $onderwerp\nBericht: $bericht";

    mail($ontvanger_email, $onderwerp_email, $bericht_email);

    header("Location: bedankpagina.php");
    exit();
}
?>