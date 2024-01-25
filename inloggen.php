<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kamadoing";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST['naam'];
    $wachtwoord = $_POST['wachtwoord']; 

    $sql = "SELECT * FROM gebruikers WHERE Gebruikersnaam = '$naam' AND Wachtwoord = '$wachtwoord'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        if ($naam === 'Simon Pek' && $wachtwoord === '123456') { 
            header('Location: index.php');
            exit;
        } else {
            header('Location: klantindex.php');
            exit;
        }
    } else {
        echo "Ongeldige inloggegevens";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom bij Kamadoing!</title>
    <link rel="icon" href="images/Logo.png" type="image/icon">

</head>
<body>

    <form action="" method="POST">
        
    <a href="register.php" class="accountmaken">Nog geen account? Klik hier</a>
    <br><br>

        <label for="naam">Gebruikersnaam:</label>
        <input type="text" id="naam" name="naam" required>
        <br><br>

        <label for="wachtwoord">Wachtwoord:</label>
<input type="text" id="wachtwoord" name="wachtwoord" required>

        <br><br>

        <input type="submit" value="Inloggen">
    </form>
</body>
</html>

<style>
        html, body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        html {
            background-color: black;
        }

        body {
            font-family: 'Trebuchet MS', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        label{
            color: white;
        }
        form {
            width: 500px;
            padding: 40px;
            border: 7px solid black;
            border-radius: 15px;
            background-color: lightblue;
            background-image: url(./Images/barbeque.JPEG);
            background-size: cover;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 15px 30px;
            font-size: 20px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: block;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: black;
        }

        .accountmaken {
            text-decoration: none;
            color: red;
        }

        input[type="text"],
        input[type="password"] {
            padding: 15px;
            margin-bottom: 20px;
            width: 100%;
            border: 4px solid black;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 18px;
        }
    </style>