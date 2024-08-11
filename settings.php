<?php
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

$time_now = time();
$time_now_Y = date( 'Y' , $time_now );
$time_now_m = date( 'm' , $time_now );
$time_now_d = date( 'd' , $time_now );

// Email's
const EMAIL = [
    'sender' => [
        'address' => 'sex@mining.sex',
        'name' => 'MINING SEX'
    ],
    'recipients' => [
        'sex@mining.sex'
    ]
];

const SMTP_HOST = 'us2.smtp.mailhostbox.com';
const SMTP_PORT = 25;
const SMTP_LOGIN = 'sex@mining.sex';
const SMTP_PASSWORD = '!IHVvs(5';

// Урл сайта
const SITE_URL = 'https://ru.mining.sex/';

// База данных
const DB_DRIVER = 'json';

const DB_HOSTNAME = '';
const DB_DATABASE = '';
const DB_USERNAME = '';
const DB_PASSWORD = '';

const DIR_JSON = '../data/';
const JSON_FILE_NAME = 'questionnaire';

// Админская часть приложения
const LOGIN = 'admin';
const PASSWORD = 'password';
const ADMIN_HREF = '/admin-dt/';

?>