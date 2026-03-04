<?php

use JetBrains\PhpStorm\NoReturn;

if (! function_exists('dd')) {
    #[NoReturn]
    function dd(...$vars): void
    {
        foreach ($vars as $var) {
            var_dump($var);
            echo PHP_EOL;
        }
        exit();
    }
}

if (! function_exists('env')) {
    function env(string $key, $default = null): mixed
    {
        return $_ENV[$key] ?? $default;
    }
}

if (! function_exists('db_connexion')) {
    function db_connexion(): ?PDO
    {
        $connection = $_ENV['DB_CONNECTION'];
        $host = $_ENV['DB_HOST'];
        $db_name = $_ENV['DB_DATABASE'];
        $user = $_ENV['DB_USERNAME'];
        $pass = $_ENV['DB_PASSWORD'];
        $charset = $_ENV['DB_CHARSET'];
        $collation = $_ENV['DB_COLLATION'];
        $dsn = "$connection:host=$host;dbname=$db_name;charset=$charset;collation=$collation";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            return new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            echo 'Erreur de connexion : '.$e->getMessage();
        }

    }
}

if (! function_exists('view')) {
    function view(string $name = '', array $data = []): void
    {
        $name = str_replace('.', '/', $name);
        extract($data);
        include VIEWS_PATH.'/'.$name.'.blade.php';

    }
}
