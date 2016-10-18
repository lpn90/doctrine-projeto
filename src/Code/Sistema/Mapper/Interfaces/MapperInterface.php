<?php
/**
 * Created by PhpStorm.
 * User: rogerio
 * Date: 27/11/14
 * Time: 20:17
 */

namespace Code\Sistema\Mapper\Interfaces;

use \Code\Sistema\Entity\Interfaces\ProdutoInterface;

interface MapperInterface
{
    public function __construct(\PDO $pdo);
    public function insert(ProdutoInterface $produto);
    public function update(ProdutoInterface $produto);
    public function delete(ProdutoInterface $produto);
    public function findAll();
    public function findById($id);
}