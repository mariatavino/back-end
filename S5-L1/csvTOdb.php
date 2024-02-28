<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "esempi";

// Crea una connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Controlla la connessione
if ($conn->connect_error) {
  die("Connessione fallita: " . $conn->connect_error);
}

// Apri il file CSV per la lettura
$file = fopen('utenti.csv', 'r');

// Legge i dati dal file CSV
while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
    $sql = "INSERT INTO utenti (nome, email, password) VALUES ('$data[1]', '$data[2]', '$data[3]')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inseriti con successo";
    } else {
        echo "Errore nell'inserimento dei record: " . $conn->error;
    }
}

// Chiude il file
fclose($file);

// Chiude la connessione al database
$conn->close();

