<?php

class DBController {
    // Database Connection Properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password='';
    protected $database='ecomws1';

    // Connection Property
    public $con = null;

    // call constructor
    public function __construct()
    {
        $this->con=mysqli_connect($this->host,$this->user,$this->password,$this->database);
    }
}

