<?php

/* * *************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2019 LEARNTUBE! GmbH - Contact: mail@learntube.de
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use LMS3\Lms3h5p\Controller\ContentEmbedController;
use LMS3\Lms3h5p\Form\Element\H5PContentElement;

defined('TYPO3') or die();

ExtensionManagementUtility::addTypoScriptConstants(
    "@import 'EXT:lms3h5p/Configuration/TypoScript/constants.typoscript'"
);

ExtensionManagementUtility::addTypoScriptSetup(
    "@import 'EXT:lms3h5p/Configuration/TypoScript/setup.typoscript'"
);


ExtensionUtility::configurePlugin(
    'Lms3h5p',
    'Pi1',
    [
        ContentEmbedController::class => 'index',
    ],
    [
        ContentEmbedController::class => 'index',
    ]
);

// Include base TSconfig setup
ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:lms3h5p/Configuration/TSconfig/Page/Mod/Wizards/NewContentElement.tsconfig">'
);
ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:lms3h5p/Configuration/TSconfig/Page/Mod/HideTables.tsconfig">'
);

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1539019571] = [
    'nodeName' => 'lms3h5pContentElement',
    'priority' => 40,
    'class' => H5PContentElement::class,
];

$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['lms3h5p_libraries'] ??= [];
