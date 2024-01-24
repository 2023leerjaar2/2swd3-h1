<!DOCTYPE html>
<html>
<head>
    <title>Registratiepagina</title>
</head>
<body>
    <h2>Registratie</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="gebruikersnaam">Gebruikersnaam:</label>
        <input type="text" id="gebruikersnaam" name="gebruikersnaam"><br><br>
        
        <label for="wachtwoord">Wachtwoord:</label>
        <input type="password" id="wachtwoord" name="wachtwoord"><br><br>
        
        <input type="submit" value="Registreren">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verkrijg de waarden van het formulier
        $gebruikersnaam = $_POST['gebruikersnaam'];
        $wachtwoord = $_POST['wachtwoord'];
        
        // Voer hier je validatie en database invoeging uit
        // Voorbeeld: controleer of de velden niet leeg zijn
        if (!empty($gebruikersnaam) && !empty($wachtwoord)) {
            // Voer hier je logica uit om de gegevens naar de database te sturen
            // Bijvoorbeeld: maak een verbinding met de database en voeg de gegevens toe
            // In een echt project zou je ook wachtwoordhashing moeten toepassen voor de veiligheid
            // Bijvoorbeeld:
            // $hashed_password = password_hash($wachtwoord, PASSWORD_DEFAULT);
            
            // Voorbeeld: een eenvoudige uitvoer van de ingevoerde gegevens
            echo "<br><br>Registratie succesvol!<br>";
            echo "Gebruikersnaam: " . $gebruikersnaam . "<br>";
            echo "Wachtwoord: " . $wachtwoord . "<br>";
        } else {
            echo "<br><br>Vul alle velden in!";
        }
    }
    ?>
</body>
</html>
