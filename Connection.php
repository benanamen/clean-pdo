<?php declare(strict_types=1);


class Connection
{
    final public function connect(array $config): PDO
    {
        $dsn = "mysql:host={$config['host']};dbname={$config['name']};charset={$config['charset']}";
        return new PDO($dsn, $config['username'], $config['password'], $config['options']);
    }
}
