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

    public function getCategories($id)
    {
        $categories = $this->db->table('categories')->where('userid', $id)->getAll();
        return $categories;
    }


    public function isUser($username)
    {
        $users = $this->db->table('users')->where('username', $username)->getAll();
        if (count($users) > 0)
            return $users[0];
        return false;
    }

    public function getCategory($id)
    {
        $categories = $this->db->table('categories')->where('id', $id)->getAll();
        return $categories[0];
    }

    public function getFoods($id)
    {
        $foods = $this->db->table('foods')->where('categoryid', $id)->getAll();
        return $foods;
    }

}