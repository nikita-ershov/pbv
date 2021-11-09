<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'assetsAutoCompress'],

    'language' => 'ru-RU',
    'sourceLanguage' => 'ru-RU',

    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'iqboHF_nVCLDhPztDvpA7MsD_MvF2gVh',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_MailTransport',
            ]
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'seller' => 'site/seller',
                'product/<id:\d+>' => 'site/product'
            ],
        ],
        'assetsAutoCompress' =>
            [
                'class'         => '\skeeks\yii2\assetsAuto\AssetsAutoCompressComponent',
                'enabled'                       => false,

                'readFileTimeout'               => 3,           //Time in seconds for reading each asset file

                'jsCompress'                    => true,        //Enable minification js in html code
                'jsCompressFlaggedComments'     => true,        //Cut comments during processing js

                'cssCompress'                   => true,        //Enable minification css in html code

                'cssFileCompile'                => true,        //Turning association css files
                'cssFileRemouteCompile'         => false,       //Trying to get css files to which the specified path as the remote file, skchat him to her.
                'cssFileCompress'               => true,        //Enable compression and processing before being stored in the css file
                'cssFileBottom'                 => false,       //Moving down the page css files
                'cssFileBottomLoadOnJs'         => false,       //Transfer css file down the page and uploading them using js

                'jsFileCompile'                 => true,        //Turning association js files
                'jsFileRemouteCompile'          => false,       //Trying to get a js files to which the specified path as the remote file, skchat him to her.
                'jsFileCompress'                => true,        //Enable compression and processing js before saving a file
                'jsFileCompressFlaggedComments' => true,        //Cut comments during processing js

                'htmlCompress'                  => false,        //Enable compression html
                'noIncludeJsFilesOnPjax'        => true,        //Do not connect the js files when all pjax requests
                'htmlCompressOptions'           =>              //options for compressing output result
                    [
                        'extra' => false,        //use more compact algorithm
                        'no-comments' => true   //cut all the html comments
                    ],
            ],

    ],
    'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\PathController',
            'access' => ['@'],
            'root' => [
                'path' => 'uploads',
                'name' => 'Файлы'
            ],
        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        'allowedIPs' => ['*', '127.0.0.1', '::1'],
    ];
}

return $config;
