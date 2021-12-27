<?php

namespace App\Controllers;

use Database\DBconnection;

class BlogController extends Controller{
    public function index()
    {
        return $this->view('blog.index');
    }

    public function show(int $id) 
    {
        $db = new DBconnection('blogPhp', 'localhost', 'root', 'root');
        $req = $db->getPDO()->query('SELECT * FROM posts');
        $posts = $req->fetchAll();

        foreach ($posts as $post) {
            echo $post['title'];
        }
        return $this->view('blog.show', compact('id'));
    }


}