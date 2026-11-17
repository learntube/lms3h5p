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
    'version' => '4.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'php' => '8.2.0-8.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
