<?php

namespace App\Action\Employees;

use Addiks\PHPSQL\PDO\PDO;
use \App\ActionAbstract;

final class FindAction extends ActionAbstract
{
    public function index($request, $response, $args)
    {   
        $rows = $this->database->query("SELECT id, name FROM employee WHERE id =".$args['id']);
        $employee = $rows->fetchAll(PDO::FETCH_ASSOC);
        return $this->renderJson($response, $employee);
    }
}
