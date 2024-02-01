<?php
session_start();

// Recuperare i dati dalla variabile di sessione
$user_data = isset($_SESSION['user_data']) ? $_SESSION['user_data'] : [];

// Cancella la variabile di sessione dopo aver recuperato i dati
unset($_SESSION['user_data']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
<?php if (empty($user_data)): ?>
    <div class="container">
        <form class="form-horizontal container d-flex justify-content-center flex-wrap" action="gestione.php" method="post" id="contact_form">
            <fieldset>
                <div class="input-group m-3">
                    <span class="input-group-text bg-secondary text-white"><i class="bi bi-person-fill me-2"></i>First and last name</span>
                    <input type="text" name="name" aria-label="First name" class="form-control border border-2">
                    <input type="text" name="surname" aria-label="Last name" class="form-control border border-2">
                </div>

                <div class="input-group flex-nowrap m-3">
                    <span class="input-group-text bg-secondary text-white"><i class="bi bi-envelope-at-fill me-2"></i>E-mail Address</span>
                    <input type="text" name="email" class="form-control border border-2" aria-label="email" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap m-3">
                    <span class="input-group-text bg-secondary text-white"><i class="bi bi-telephone-fill me-2"></i> +39</span>
                    <input name="phone" placeholder="123 4567890" class="form-control border border-2" type="text" aria-label='telefono' aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap m-3">
                    <span class="input-group-text bg-secondary text-white"><i class="bi bi-house-fill me-2"></i>Address</span>
                    <input name="address" class="form-control border border-2" type="text" aria-label='indirizzo' aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap m-3">
                    <span class="input-group-text bg-secondary text-white"><i class="bi bi-building-fill me-2"></i>City</span>
                    <input name="city" class="form-control border border-2" type="text" aria-label='indirizzo' aria-describedby=" addon-wrapping">
                </div>

                <div class="input-group flex-nowrap m-3">
                    <span class="input-group-text bg-secondary text-white"><i class="bi bi-border-width"></i></span>
                    <select name="state" class="form-control border border-2 selectpicker">
                        <option value=" ">Please select your region</option>
                        <option>Abruzzo</option>
                        <option>Basilicata</option>
                        <option>Calabria</option>
                        <option>Campania</option>
                        <option>Emilia-Romagna</option>
                        <option>Friuli-Venezia Giulia</option>
                        <option>Lazio</option>
                        <option>Liguria</option>
                        <option>Lombardia</option>
                        <option>Marche</option>
                        <option>Molise</option>
                        <option>Piemonte</option>
                        <option>Puglia</option>
                        <option>Sardegna</option>
                        <option>Sicilia</option>
                        <option>Toscana</option>
                        <option>Trentino-Alto Adige</option>
                        <option>Umbria</option>
                        <option>Valle d'Aosta</option>
                        <option>Veneto</option>
                    </select>
                </div>
                <div class="input-group flex-nowrap m-3">
                    <span class="input-group-text bg-secondary text-white"><i class="bi bi-building-fill me-2"></i>Zip Code</span>
                    <input name="zip" class="form-control border border-2" type="text" aria-label='indirizzo' aria-describedby=" addon-wrapping">
                </div>
                <div class="input-group flex-nowrap m-3">
                    <span class="input-group-text bg-secondary text-white"><i class="bi bi-calendar"></i></span>
                    <input name="compleanno" class="form-control border border-2" type="date" aria-label='compleanno' aria-describedby=" addon-wrapping">
                </div>
                <div class="input-group flex-nowrap m-3">
                    <span class="input-group-text bg-secondary text-white"><i class="bi bi-gender-ambiguous"></i></span>
                    <select class="form-control border border-2" name="sesso">
                        <option value=" ">Please select your gender</option>
                        <option value="maschio">Maschio</option>
                        <option value="femmina">Femmina</option>
                        <option value="altro">Altro</option>
                    </select>
                </div>
                <div class="container d-flex justify-content-center">
                    <button type="submit" class="btn btn-dark px-5">Send <i class="bi bi-send-fill ms-2"></i></button>
                </div>
            </fieldset>
        </form>
    </div>
<?php else: ?>
<h2 class="mt-3">Dati Utente:</h2>
<ul>
    <li><strong>Nome:</strong> <?php echo $user_data['name']; ?></li>
    <li><strong>Cognome:</strong> <?php echo $user_data['surname']; ?></li>
    <li><strong>Email:</strong> <?php echo $user_data['email']; ?></li>
    <li><strong>Telefono:</strong> <?php echo $user_data['phone']; ?></li>
    <li><strong>Indirizzo:</strong> <?php echo $user_data['address']; ?></li>
    <li><strong>Città:</strong> <?php echo $user_data['city']; ?></li>
    <li><strong>Regione:</strong> <?php echo $user_data['state']; ?></li>
    <li><strong>Cap:</strong> <?php echo $user_data['zip']; ?></li>
    <li><strong>Compleanno:</strong> <?php echo $user_data['birthday']; ?></li>
    <li><strong>Genere:</strong> <?php echo $user_data['gender']; ?></li>
</ul>
<?php endif;?>

</body>

</html>