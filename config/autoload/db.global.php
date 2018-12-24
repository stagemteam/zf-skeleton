<?php
$params = include(__DIR__ . '/../parameters.local.php');

return [
    'db' => [
        'driver' => 'pdo',
        'options' => [
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . $params['db']['charset'],
            \PDO::MYSQL_ATTR_FOUND_ROWS => true,
        ],
        'dsn' => sprintf('mysql:dbname=%s;host=%s', $params['db']['database'], $params['db']['hostname']),
        'username' => $params['db']['username'],
        'password' => $params['db']['password'],
        'database' => $params['db']['database'],
        'hostname' => $params['db']['hostname'],
        'port' => $params['db']['port'],
    ],
];
