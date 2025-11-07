<?php
return [
    'host' => getenv('MYSQLHOST') ?: 'containers-us-west-54.railway.app',
    'port' => getenv('MYSQLPORT') ?: '3306',
    'dbname' => getenv('MYSQLDATABASE') ?: 'railway',
    'username' => getenv('MYSQLUSER') ?: 'root',
    'password' => getenv('MYSQLPASSWORD') ?: '2GyzxM9yDsgvLp2ff4Qk',
    'charset' => 'utf8mb4'
];
