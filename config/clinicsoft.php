<?php

return [

    // L'instance publique est la destination unique de tous les appels à la démo.
    'demo_url' => env('CLINICSOFT_DEMO_URL', 'https://demo.clinicsoft.tech/'),

    // Adresse recevant les demandes de démo soumises via le formulaire.
    'demo_request_recipient' => env('CLINICSOFT_DEMO_EMAIL', 'info@clinicsoft.tech'),

];
