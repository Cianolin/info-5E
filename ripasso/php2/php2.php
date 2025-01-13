<?php
$materie = [
    'Informatica' => [
        'C:\Utenti\Sam\Documenti\Argomento_1' => ['argomento' => 'DBMS', 'mese' => 'settembre'],
        'C:\Utenti\Sam\Documenti\Argomento_2' => ['argomento' => 'PHP', 'mese' => 'dicembre'],
    ],
    'TPSIT' => [
        'C:\Utenti\Bob\Documenti\Argomento_1' => ['argomento' => 'SOCKET', 'mese' => 'settembre']
    ],
    'Sistemi' => [
        'C:\Utenti\Joe\Documenti\Argomento_1' => ['argomento' => 'VLAN', 'mese' => 'settembre'],
        'C:\Utenti\Joe\Documenti\Argomento_2' => ['argomento' => 'ROAS', 'mese' => 'ottobre'],
        'C:\Utenti\Joe\Documenti\Argomento_3' => ['argomento' => 'ACL', 'mese' => 'dicembre'],
    ]
];

function getMaterie($materie, $materia, $path)
{
    if (isset($materie[$materia])) {
        if (isset($materie[$materia][$path])) {
            return [
                $materia => $materia,
                'mese' => $materie[$materia][$path]['mese'],
                'argomento' => $materie[$materia][$path]['argomento'],
            ];
        } else {
            return [
                'errore' => 'Percorso inesistente'
            ];
        }
    } else {
        return [
            'errore' => 'Materia non trovata'
        ];
    }
}

$result = getMaterie($materie, 'Sistemi', 'C:\Utenti\Joe\Documenti\Argomento_1');
print_r($result);