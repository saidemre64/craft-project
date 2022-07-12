<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\helpers\App;

$isDev = App::env('CRAFT_ENVIRONMENT') === 'dev';
$isProd = App::env('CRAFT_ENVIRONMENT') === 'production';

return [
    'allowAdminChanges' => $isDev,
    'defaultCpLanguage' => 'en_GB',
    'defaultSearchTermOptions' => [
        'subLeft' => true,
        'subRight' => true
    ],
    'defaultTokenDuration' => 'P10D',
    'defaultWeekStartDay' => 1,
    'devMode' => $isDev,
    'disallowRobots' => !$isProd,
    'elevatedSessionDuration' => 360000,
    'enableCsrfProtection' => true,
    'enableGql' => false,
    'enableTemplateCaching' => false,
    'maxRevisions' => 5,
    'maxUploadFileSize' => 16777216,
    'omitScriptNameInUrls' => true,
    'postCpLoginRedirect' => 'entries',
    'securityKey' => App::env('SECURITY_KEY'),
    'useEmailAsUsername' => true,
    'verificationCodeDuration' => 'P3W',
];
