<?php

namespace App\Action\Employees;

use App\ActionAbstract;
use Addiks\PHPSQL\PDO\PDO;

final class ListAction extends ActionAbstract
{
    public function index($request, $response, $args)
    {   
        $rows = $this->database->query("SELECT id, name FROM employee");
        $employess = $rows->fetchAll(PDO::FETCH_ASSOC);
        $result = $this->HEATOS($employess);
        return $this->renderJson($response, $result);
    }
    
    public function HEATOS($result)
    {
        foreach ($result as &$row) 
        {
            //TODO: HEATOS 
        }
        return $result;
    }
}
