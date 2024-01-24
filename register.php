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

    <label for="naam">Gebruikersnaam:</label>
    <input type="text" id="naam" name="naam" required>
    <br><br><br>


    <label for="wachtwoord">Wachtwoord:</label>
<input type="text" id="wachtwoord" name="wachtwoord">

    <br><br><br>

    <input type="submit" value="Registreren">
</form>

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

        $check_user_sql = "SELECT * FROM gebruikers WHERE Gebruikersnaam='$naam'";
        $result = $conn->query($check_user_sql);

        if ($result->num_rows > 0) {
            echo "<p>Deze gebruikersnaam bestaat al. Kies een andere.</p>";
        } else {
            $insert_user_sql = "INSERT INTO gebruikers (Gebruikersnaam, Wachtwoord) VALUES ('$naam', '$wachtwoord')";

            if ($conn->query($insert_user_sql) === TRUE) {
                header('Location: index.html');
                exit;
            } else {
                echo "Fout bij het aanmaken van het account: " . $conn->error;
            }
        }
    }

    $conn->close();
    ?>
</body>
</html>



<style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: black;
        }

        html {
            font-size: 18px;
            height: 100%;
            overflow: hidden;
        }

        .container {
            display: block;
            text-align: center;
            margin-top: 20px;
        }

        .container img {
            height: 10px;
        }

        form {
            width: 400px;
            margin: 100px auto;
            padding: 40px;
            border: 7px solid black;
            border-radius: 20px;
            background-color: lightblue;
            background-image: url(./Images/Barbeque.JPEG);
            background-size: cover;
            overflow: hidden;
        }

        label {
            color: white;
            font-size: 20px;
            margin-bottom: 10px;
            display: block;
        }

        input[type="text"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            width: calc(100% - 20px);
            border: 4px solid black;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 18px;
        }

        input[type="submit"] {
            padding: 15px 30px;
            font-size: 20px;
            background-color: blue;
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
    </style>