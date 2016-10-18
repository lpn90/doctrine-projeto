<?php

namespace Code\Sistema\Service\Interfaces;

/**
 * User: Leonardo
 * Date: 14/10/2016
 * Time: 10:58
 */

use \Code\Sistema\Entity\Interfaces\ProdutoInterface;
use \Code\Sistema\Mapper\Interfaces\MapperInterface;

interface ProdutoServiceInterface
{
    /**
     * ProdutoServiceInterface constructor.
     * @param ProdutoInterface $produto
     * @param MapperInterface $mapper
     */
    public function __construct(ProdutoInterface $produto, MapperInterface $mapper);
    public function insert(array $data);
    public function update(array $data);
    public function delete($id);
    public function findAll();
    public function findById($id);
}