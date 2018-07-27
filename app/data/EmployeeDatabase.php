<?php

namespace Data;

use Addiks\PHPSQL\PDO\PDO;
use Data\InMemoryDatabaseInterface;

class EmployeeDatabase implements InMemoryDatabaseInterface
{
    private $pdo;
    
    public function __construct()
    {
        $this->pdo = new PDO('inmemory:employee_database');
    }
    
    public function init()
    {
        $this->pdo->query("
            CREATE TABLE employee(
                id INT PRIMARY KEY,
                name VARCHAR(100),
                stats boolean
            )"
        );
        
        $this->pdo->query("INSERT INTO employee (id, name, stats) VALUES (?, ?, ?)", [1, 'foo', 1]);
        $this->pdo->query("INSERT INTO employee (id, name, stats) VALUES (?, ?, ?)", [2, 'bar', 1]);
        $this->pdo->query("INSERT INTO employee (id, name, stats) VALUES (?, ?, ?)", [3, 'joe', 1]);
        $this->pdo->query("INSERT INTO employee (id, name, stats) VALUES (?, ?, ?)", [4, 'doe', 1]);
    }
    
    public function getPdo()
    {
        return $this->pdo;
    }
}