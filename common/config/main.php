<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language'=> 'es',
    'sourceLanguage' => 'en',
    'components' => [

    	'i18n' => [
        'translations' => [
            'frontend*' => [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@common/messages',
            ],
            'backend*' => [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@common/messages',
	            ],
	        ],
	    ],

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
