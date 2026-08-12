<?php

return [

    // Tant qu'aucune instance de démonstration réelle n'est en ligne, laisser
    // à null : les boutons "Voir la démo" / "Demander une démo" pointent vers
    // le formulaire de la section #demo. Renseigner cette variable dans .env
    // (CLINICSOFT_DEMO_URL) suffira à les faire pointer directement vers la
    // démo réelle (vidéo ou instance), sans toucher au code des vues.
    'demo_url' => env('CLINICSOFT_DEMO_URL'),

    // Adresse recevant les demandes de démo soumises via le formulaire.
    'demo_request_recipient' => env('CLINICSOFT_DEMO_EMAIL', 'info@clinicsoft.tech'),

];
