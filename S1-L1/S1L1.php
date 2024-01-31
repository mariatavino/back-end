<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <!-- ESERCIZIO 1 -->
        <?php
        $oggi = new DateTime();
        $giorni = array(
            'Monday' => 'Lunedì',
            'Tuesday' => 'Martedì',
            'Wednesday' => 'Mercoledì',
            'Thursday' => 'Giovedì',
            'Friday' => 'Venerdì',
            'Saturday' => 'Sabato',
            'Sunday' => 'Domenica'
        );

        $mesi = array(
            'January' => 'Gennaio',
            'February' => 'Febbraio',
            'March' => 'Marzo',
            'April' => 'Aprile',
            'May' => 'Maggio',
            'June' => 'Giugno',
            'July' => 'Luglio',
            'August' => 'Agosto',
            'September' => 'Settembre',
            'October' => 'Ottobre',
            'November' => 'Novembre',
            'December' => 'Dicembre'
        );

        $giorno = $giorni[$oggi->format("l")];
        $mese = $mesi[$oggi->format("F")];

        $data = $giorno . ',' . $oggi->format("d ") . $mese . $oggi->format(" Y");

        echo '<p>' . "Data e ora correnti: " . $data . '</p>';
        ?>
    </div>

    <div>
        <!-- ESERCIZIO 2 -->
        <?php
        $squadre_serie_a = array(
            'Juventus' => array('Buffon', 'Bonucci', 'Chiellini', 'Danilo', 'Alex Sandro', 'Arthur', 'Bentancur', 'McKennie', 'Chiesa', 'Dybala', 'Ronaldo'),
            'Inter' => array('Handanović', 'De Vrij', 'Bastoni', 'Hakimi', 'Perišić', 'Barella', 'Brozović', 'Vidal', 'Eriksen', 'Lukaku', 'Martínez'),
            'Milan' => array('Donnarumma', 'Calabria', 'Kjaer', 'Tomori', 'Hernández', 'Kessié', 'Bennacer', 'Çalhanoğlu', 'Díaz', 'Leão', 'Ibrahimović'),
        );

        $squadre = array_keys($squadre_serie_a);
        foreach ($squadre_serie_a as $squadra => $formazione) {
            echo "<h3> Squadra: $squadra </h3>";
            echo "<p> Formazione: ";

            for ($j = 0; $j < count($formazione); $j++) {
                echo $formazione[$j];
                if ($j < count($formazione) - 1) {
                    echo ', ';
                }
            }

            echo "</p>";
        }

        $juventus_formazione = $squadre_serie_a['Juventus'];
        echo "Formazione della Juventus: " . implode(', ', $juventus_formazione);
        foreach ($squadre_serie_a as $squadra => $formazione) {
            echo "<h3> Squadra: $squadra </h3>";
            echo "<p> Formazione: " . implode(', ', $formazione) . "</p>";
        }
        ?>
    </div>

    <div>
        <!-- ESERCIZIO 3 -->
        <?php

        $partite_serie_a = array(
            array(
                'squadra_casa' => 'Juventus',
                'squadra_ospite' => 'Milan',
                'formazione_casa' => array('Buffon', 'Bonucci', 'Chiellini', 'Danilo', 'Alex Sandro', 'Arthur', 'Bentancur', 'McKennie', 'Chiesa', 'Dybala', 'Ronaldo'),
                'formazione_ospite' => array('Donnarumma', 'Calabria', 'Kjaer', 'Tomori', 'Hernández', 'Kessié', 'Bennacer', 'Çalhanoğlu', 'Díaz', 'Leão', 'Ibrahimović'),
            ),
            array(
                'squadra_casa' => 'Inter',
                'squadra_ospite' => 'Napoli',
                'formazione_casa' => array('Handanović', 'De Vrij', 'Bastoni', 'Hakimi', 'Perišić', 'Barella', 'Brozović', 'Vidal', 'Eriksen', 'Lukaku', 'Martínez'),
                'formazione_ospite' => array('Meret', 'Di Lorenzo', 'Koulibaly', 'Rui', 'Zielinski', 'Ruiz', 'Demme', 'Osimhen', 'Insigne', 'Politano', 'Mertens'),
            ),
        );


        for ($i = 0; $i < count($partite_serie_a); $i++) {
            $partita = $partite_serie_a[$i];

            echo "<h2> Partita: {$partita['squadra_casa']} vs {$partita['squadra_ospite']}</h2>";
            echo "<p>" . "<h4>Formazione {$partita['squadra_casa']}: </h4>" . implode(', ', $partita['formazione_casa']) . "</p>";
            echo "<p>" . "<h4>Formazione {$partita['squadra_ospite']}: </h4>" . implode(', ', $partita['formazione_ospite']) . "</p>";
        }
        ?>
    </div>
</body>
</html>