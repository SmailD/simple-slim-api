<?php

namespace App\Action\Employees;

final class DeleteAction extends \App\ActionAbstract
{
    public function __invoke($request, $response, $args)
    {
        var_dump($request);die();
    }
}
