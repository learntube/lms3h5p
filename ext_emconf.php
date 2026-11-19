<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'LMS3 H5P',
    'description' => 'H5P Platform Integration Plugin for TYPO3 CMS.',
    'category' => 'misc',
    'author' => 'Sagar Desai',
    'author_email' => 'sagardesai1990@gmail.com',
    'author_company' => 'LEARNTUBE! GmbH',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '5.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '14.0.0-14.99.99',
            'php' => '8.2.0-8.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
