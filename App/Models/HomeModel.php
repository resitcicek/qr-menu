<?php

namespace Reschit\App\Models;

class HomeModel
{
    protected $db;

    public function __construct()
    {
        global $db, $_SESSION;
        $this->db = &$db;
    }

    public function getCategories($id){
        $categories = $this->db->table('categories')->where('userid',$id)->getAll();
        return $categories;
    }


    public function isUser($username){
        $users = $this->db->table('users')->where('username',$username)->getAll();
        if(count($users) > 0)
            return $users[0];
        return false;
    }

}