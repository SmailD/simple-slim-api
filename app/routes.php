<?php

$app->group('/api', function() {
    
    $this->group('/employees', function() {
        
        $this->get('[/]',   'App\Action\Employees\ListAction:index')->setName('employees_all');
        
        $this->get('/{id}', 'App\Action\Employees\FindAction:index')->setName('employees_get');
        
        $this->patch('/{id}', 'App\Action\Employees\EditAction:index');
        
        $this->post('/{id}', 'App\Action\Employees\CreateAction:index');
        
        $this->delete('/{id}', 'App\Action\Employees\DeleteAction:index');
        
    });
    
});
