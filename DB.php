<?php declare(strict_types=1);


class DB
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;

    }
    final public function run(string $sql, array $args = NULL): object
    {
        if (!$args)
        {
            return $this->pdo->query($sql);
        }
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }
}
