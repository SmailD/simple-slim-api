<?php

namespace App;

use Psr\Http\Message\ResponseInterface;

class ActionAbstract
{
    protected $logger;
    
    protected $database;
    
    protected $router;

    public function __construct($logger, $database, $router)
    {
        $this->logger = $logger;
        $this->database = $database;
        $this->router = $router;
    }
    
    public function renderJson($response, $body, $code=200)
    {
        return $response
                ->withHeader(
                    'Content-Type',
                    'application/json')
                ->withStatus($code)
                ->withJson($body);
    }
}