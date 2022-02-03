<?php
// config for Monowarfs/PorichoyBD
return [
    'is_live' => env('PORICHOY_GOV_BD_SERVICE_PROD', false),
    'api'=> [
        'key' => env('PORICHOY_GOV_BD_API_KEY', ''),
        'endpoints' =>[
            'live' => [
                'basic' => 'https://api.porichoybd.com/api/Kyc/nid-person-values',
                'basic_n_photo' => 'https://api.porichoybd.com/api/kyc/nid-person',
                'basic_n_signature' => 'https://api.porichoybd.com/api/kyc/nid-person',
                'autofill' => 'https://api.porichoybd.com/api/kyc/nid-person-values',
                'fatchmatch' => 'https://api.porichoybd.com/api/kyc/nid-person-values-image-match',
                'birth_registration' => 'https://api.porichoybd.com/api/kyc/verify-birth-registration'
            ],
            'test' => [
                'basic' => 'https://api.porichoybd.com/api/kyc/test-nid-person',
                'basic_n_photo' => 'https://api.porichoybd.com/api/kyc/test-nid-person',
                'basic_n_signature' => 'https://api.porichoybd.com/api/kyc/test-nid-person',
                'autofill' => 'https://api.porichoybd.com/api/kyc/test-nid-person-values',
                'fatchmatch' => 'https://api.porichoybd.com/api/kyc/test-nid-person-values-image-match',
            ]
        ]
    ],
];
