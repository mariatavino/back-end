<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "esempi";

// Stabilisce una connessione con il database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connessione fallita: " . $conn->connect_error);
}

// Seleziona i dati dalla tabella utenti
$sql = "SELECT * FROM utenti";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Apri un file CSV per la scrittura
    $file_csv = fopen('utenti.csv', 'w');
    
    // Apri un secondo file CSV per la scrittura
    $file_csv_non_delimited = fopen('utenti_non_delimited.csv', 'w');

    // Scrive i dati nei file
    while ($row = $result->fetch_assoc()) {
        // Scrive una riga nel file CSV
        fputcsv($file_csv, $row);
        
        // Scrive una riga nel secondo file CSV senza delimitatori
        $line = implode("    ", $row); // Aggiunge 4 spazi tra i campi
        fwrite($file_csv_non_delimited, $line . "\n");
    }

    // Chiude i file
    fclose($file_csv);
    fclose($file_csv_non_delimited);

    echo "I dati sono stati esportati con successo nei file utenti.csv e utenti_non_delimited.csv.";
} else {
    echo "La tabella utenti non contiene dati.";
}

// Chiude la connessione al database
$conn->close();
