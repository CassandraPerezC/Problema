<?php

namespace Crud\Model;

use Zend\Db\TableGateway\TableGatewayInterface;

/**
 * 
 */
class CrudTable
{
	protected $tableGateway;

	   function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

     public function fetchAll()
    {
        return $this->tableGateway->select();
    }

 }


?>