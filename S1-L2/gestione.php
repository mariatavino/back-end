<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati dal form
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $surname = isset($_POST['surname']) ? $_POST['surname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';
    $state = isset($_POST['state']) ? $_POST['state'] : '';
    $zip = isset($_POST['zip']) ? $_POST['zip'] : '';
    $birthday = isset($_POST['compleanno']) ? $_POST['compleanno'] : '';
    $gender = isset($_POST['sesso']) ? $_POST['sesso'] : '';

    // Creare l'array associativo con i dati del form
    $user_data = [
        'name' => $name,
        'surname' => $surname,
        'email' => $email,
        'phone' => $phone,
        'address' => $address,
        'city' => $city,
        'state' => $state,
        'zip' => $zip,
        'birthday' => $birthday,
        'gender' => $gender,
    ];

    // Salvare i dati nella variabile di sessione
    $_SESSION['user_data'] = $user_data;

    // Redirect alla pagina principale (index.php)
    header("Location: index.php");
    exit();
}


