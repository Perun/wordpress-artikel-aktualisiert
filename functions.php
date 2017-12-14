<?php

// Artikel-Aktualisierung anzeigen
function aktualisierung()
{
    $artikel_erstellt = get_the_date('U');
    $artikel_aktualisiert = get_post_modified_time('U');

    if (($artikel_aktualisiert - $artikel_erstellt ) > 43200) {
        echo ' &ndash; Aktualisiert: ' . get_the_modified_date('d. F Y');
    }
}
