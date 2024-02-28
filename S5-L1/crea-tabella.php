<?php
$servername = "localhost"; // sostituisci con il tuo servername
$username = "root"; // sostituisci con il tuo username del DB
$password = ""; // sostituisci con la tua password del DB
$dbname = "esempi"; // sostituisci con il nome del tuo database

// Crea una connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Controlla la connessione
if ($conn->connect_error) {
  die("Connessione fallita: " . $conn->connect_error);
}

// Il tuo codice per creare la tabella
$sql = "CREATE TABLE utenti (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(30) NOT NULL,
email VARCHAR(50),
password VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabella utenti creata con successo";
} else {
  echo "Errore nella creazione della tabella: " . $conn->error;
}

// Inserisci dati nella tabella utenti
$sql = "INSERT INTO utenti (nome, email, password) 
VALUES ('Mario', 'mario@example.com', 'password1'), 
('Luca', 'luca@example.com', 'password2'), 
('Giovanni', 'giovanni@example.com', 'password3'),
('Francesca', 'francesca@example.com', 'password4'),
('Giulia', 'giulia@example.com','password5')";


if ($conn->query($sql) === TRUE) {
  echo "Record inseriti con successo";
} else {
  echo "Errore nell'inserimento dei record: " . $conn->error;
}

$conn->close(); // Chiude la connessione al database

