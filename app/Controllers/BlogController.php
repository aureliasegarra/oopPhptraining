<?php

namespace App\Controllers;

class BlogController {
    public function index()
    {
        echo "Je suis la HomePage";
    }

    public function show(int $id) 
    {
        echo "Je suis le poste" . $id;
    }


}