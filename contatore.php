<?php
// Percorso del file JSON
$file = 'visite.json';

// Controlla se il file esiste
if (file_exists($file)) {
    // Leggi il contenuto del file
    $data = file_get_contents($file);
    $json = json_decode($data, true);

    // Incrementa il conteggio delle visite
    $json['visite'] += 1;

    // Salva il nuovo conteggio nel file JSON
    file_put_contents($file, json_encode($json));

    // Restituisci il conteggio aggiornato come JSON
    header('Content-Type: application/json');
    echo json_encode($json);
} else {
    // In caso di errore (file non trovato), restituisci un errore
    header('Content-Type: application/json');
    echo json_encode(["error" => "File JSON non trovato"]);
}
?>
