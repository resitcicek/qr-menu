<?php

namespace Reschit\App\Helpers;
/**
 * Class User
 * @package Reschit\App\Helpers
 * @author Reşit Çiçek
 * @mail <me@resitcicek.com>
 * @github <github.com/resitcicek>
 * @website <resitcicek.com>
 */
class User
{
    protected $db;

    public function __construct()
    {
        global $db, $_SESSION;
        $this->db = &$db;
    }

    public function getUser($username)
    {
        $user = $this->db->table('users')
            ->select('*')
            ->where('username', $username)
            ->get();
        return json_decode(json_encode($user),true);
    }
    public function getCategory($id)
    {
        $cat = $this->db->table('categories')
            ->select('*')
            ->where('id', $id)
            ->get();
        return json_decode(json_encode($cat),true);
    }
    public function getFood($id)
    {
        $cat = $this->db->table('foods')
            ->select('*')
            ->where('id', $id)
            ->get();
        return json_decode(json_encode($cat),true);
    }

}