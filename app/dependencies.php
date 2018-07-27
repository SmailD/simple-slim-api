<?php
// DIC configuration

$container = $app->getContainer();

// -----------------------------------------------------------------------------
// Services
// -----------------------------------------------------------------------------
// monolog
$container['logger'] = function ($c) {
    $settings = $c['settings']['logger'];
    $logger = new \Monolog\Logger($settings['name']);
    $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
    $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], \Monolog\Logger::DEBUG));
    return $logger;
};
//in memory database
$container['database'] = function () {
    $db = new Data\EmployeeDatabase();
    $db->init();
    return $db->getPdo();
};


// -----------------------------------------------------------------------------
// Action factories - created via an AbstractFactory
// -----------------------------------------------------------------------------
$container->addAbstractFactory(new App\ActionAbstractFactory());
