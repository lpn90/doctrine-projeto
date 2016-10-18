<?php


namespace CODE\Sistema\Fixtures;


class Fixtures {

    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function init()
    {
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS produtos ( id INTEGER PRIMARY KEY,
                                                            nome VARCHAR(50),
                                                            descricao VARCHAR(255),
                                                            valor FLOAT(10,2))");
    }

    public function end()
    {
        $this->pdo->exec("DROP TABLE IF EXISTS produtos");
    }

} 