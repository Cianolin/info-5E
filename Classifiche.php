<?php

class Classifiche
{
 private $query = '
    SELECT 
        p.nome,
        p.cognome,
        p.nazionalita,
        p.numero,
        SUM(g.punteggio) AS totale_punti
    FROM 
        campionato.pilota p
    LEFT JOIN 
        campionato.gareggia g ON p.numero = g.n_pilota
    GROUP BY 
        p.nome,
        p.cognome,
        p.nazionalita,
        p.numero
    ORDER BY 
        totale_punti DESC
';
 private $query1= 'SELECT p.nome, p.cognome, p.nazionalita, gr.circuito
FROM campionato.pilota p
JOIN campionato.gareggia gr ON p.numero = gr.n_pilota
WHERE gr.circuito =:Circuito;

}