<?php
namespace Controllers;

class HomeController
{
    public function index()
    {
        echo "<h1>Hello World from ". getenv('APP_ENV') ." environment</h1>";
    }
}
