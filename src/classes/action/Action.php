<?php

namespace touiteur\action;

abstract class Action {

    protected ?string $http_method;
    protected ?string $hostname;
    protected ?string $script_name;
   
    public function __construct(){
        
        $this->http_method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $this->hostname = $_SERVER['HTTP_HOST'];
        $this->script_name = $_SERVER['SCRIPT_NAME'];
    }
    
    public abstract function execute(): string;
}