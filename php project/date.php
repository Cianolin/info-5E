<?php

// Creare un oggetto DateTime
$date = new DateTime();

// Formattare la data
echo $date->format('Y-m-d H:i:s');

// Impostare una data specifica
$date->setDate(2025, 12, 31);
echo $date->format('Y-m-d');

// Impostare un'ora specifica
$date->setTime(23, 59, 59);
echo $date->format('H:i:s');

// Aggiungere un intervallo di tempo
$date->add(new DateInterval('P1D')); // Aggiunge 1 giorno
echo $date->format('Y-m-d');

// Sottrarre un intervallo di tempo
$date->sub(new DateInterval('P1M')); // Sottrae 1 mese
echo $date->format('Y-m-d');

// Differenza tra date
$date1 = new DateTime('2025-12-31');
$date2 = new DateTime('2026-01-01');
$interval = $date1->diff($date2);
echo $interval->format('%R%a giorni');

// Modificare una data
$date->modify('+1 month');
echo $date->format('Y-m-d');

// Creare un intervallo di date
$interval = new DateInterval('P1D'); // Intervallo di 1 giorno
