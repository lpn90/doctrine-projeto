<?php

namespace Code\Sistema\Mapper;

use \Code\Sistema\Mapper\Interfaces\MapperInterface;
use \Code\Sistema\Entity\Interfaces\ProdutoInterface;

class ProdutoMapper implements MapperInterface
{
        private $pdo;

        public function __construct(\PDO $pdo)
        {
            $this->pdo = $pdo;
        }

        public function insert(ProdutoInterface $produto)
        {
            $stmt = $this->pdo->prepare("INSERT INTO produtos ( nome, descricao, valor ) VALUES ( :nome,:descricao,:valor )");
            $stmt->bindValue(':nome', $produto->getNome());
            $stmt->bindValue(':descricao', $produto->getDescricao());
            $stmt->bindValue(':valor', $produto->getValor());

            if($stmt->execute())
                return true;

            return false;
        }

        public function update(ProdutoInterface $produto)
        {
            $stmt = $this->pdo->prepare("UPDATE produtos SET nome = :nome, descricao = :descricao, valor = :valor WHERE id = :id");
            $stmt->bindValue(':nome', $produto->getNome());
            $stmt->bindValue(':descricao', $produto->getDescricao());
            $stmt->bindValue(':valor', $produto->getValor());
            $stmt->bindValue(':id', $produto->getId());

            if($stmt->execute())
                return true;

            return false;
        }

        public function delete(ProdutoInterface $produto)
        {
            $stmt = $this->pdo->prepare("DELETE FROM produtos WHERE id = :id");
            $stmt->bindValue('id', $produto->getId());
            return $stmt->execute();
        }

        public function findAll()
        {
            $stmt = $this->pdo->prepare("SELECT * FROM produtos");
            $stmt->execute();

            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }

        public function findById($id)
        {
            $stmt = $this->pdo->prepare("SELECT * FROM produtos WHERE id = :id LIMIT 1");
            $stmt->bindValue('id', $id);
            $stmt->execute();

            return $stmt->fetch(\PDO::FETCH_ASSOC);
        }
} 