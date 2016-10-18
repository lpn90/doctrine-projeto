<?php

namespace Code\Sistema\Service;

use Code\Sistema\Entity\Interfaces\ProdutoInterface;
use Code\Sistema\Mapper\Interfaces\MapperInterface;
use Code\Sistema\Service\Interfaces\ProdutoServiceInterface;

class ProdutoService implements ProdutoServiceInterface
{
        private $produto;
        private $mapper;

        public function __construct(ProdutoInterface $produto, MapperInterface $mapper)
        {
            $this->produto = $produto;
            $this->mapper = $mapper;
        }

        public function insert(array $data)
        {
            $this->produto->setNome($data['nome']);
            $this->produto->setDescricao($data['descricao']);
            $this->produto->setValor($data['valor']);

            return $this->mapper->insert($this->produto);
        }

        public function update(array $data)
        {
            $this->produto->setId($data['id']);
            $this->produto->setNome($data['nome']);
            $this->produto->setDescricao($data['descricao']);
            $this->produto->setValor($data['valor']);

            return $this->mapper->update($this->produto);
        }

        public function delete($id)
        {
            $this->produto->setId($id);

            return $this->mapper->delete($this->produto);
        }

        public function findAll()
        {
            return $this->mapper->findAll();
        }

        public function findById($id)
        {
            return $this->mapper->findById($id);
        }

} 