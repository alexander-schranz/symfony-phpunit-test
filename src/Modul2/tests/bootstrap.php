<?php

require(__DIR__ . '/../../../vendor/autoload.php');

putenv('BOOTSTRAP_ENV_VAR=BOOTSTRAP_ENV_VAR_MODUL_2');
$_SERVER['BOOTSTRAP_SERVER_VAR'] = 'BOOTSTRAP_SERVER_VAR_MODUL_2';
ini_set('serialize_precision', 11);
