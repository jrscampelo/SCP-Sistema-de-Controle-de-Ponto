<?php
use kartik\datecontrol\Module;

return [

    'adminEmail' => 'suporte@ctiti.com.br',
    'maskMoneyOptions'=>[
    	'prefix'=> 'R$ ',
    	'suffix'=> '',
    	'affixesStay'=> true,
    	'thousands'=> '.',
    	'decimal'=> ',',
    	'precision'=> 2,
    	'allowZero'=> true,
    	'allowNegative'=> false,
    ],
    'dateControlDisplay'=>[
        Module::FORMAT_DATE=> 'dd-MM-yyyy',
        Module::FORMAT_TIME=> 'HH:mm:ss a',
        Module::FORMAT_DATETIME=> 'dd-MM-yyyy HH:mm:ss a',
    ],
    'dateControlSave'=>[
        Module::FORMAT_DATE=> 'php:Y-m-d',
        Module::FORMAT_TIME=> 'php:H:i:s',
        Module::FORMAT_DATETIME=> 'php:Y-m-d H:i:s',
    ],
];