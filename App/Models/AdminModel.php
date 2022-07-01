<?php

namespace Reschit\App\Models;

use Reschit\App\Core\Session;

/**
 * Class AdminModel
 * @package Reschit\App\Models
 * @author Reşit Çiçek
 * @mail <me@resitcicek.com>
 * @github <github.com/resitcicek>
 * @website <resitcicek.com>
 */
class AdminModel
{
    protected $db;
    public static $adminuser = [];

    public function __construct()
    {
        global $db, $_SESSION;
        $this->db = &$db;
    }

    public function signIn($username, $password)
    {
        $user = $this->db->table('users')
            ->select('*')
            ->where('username', $username)
            ->where('password', md5($password))
            ->getAll();
        if (count($user) > 0) {
            Session::write('logged', true);
            Session::write('user', $user[0]);
            return true;
        } else {
            return false;
        }

    }

    public function addUser($data = [])
    {
        $user = $this->db->table('users')
            ->select('*')
            ->where('username', $data['username'])
            ->orwhere('email', $data['email'])
            ->getAll();
        if (count($user) > 0) {
            return false;
        }
        $query = $this->db->table('users')->insert($data);
        if ($query) {
            return true;
        } else {
            return false;
        }

    }
    public function addCategory($data = [])
    {

        $query = $this->db->table('categories')->insert($data);
        if ($query) {
            return true;
        } else {
            return false;
        }

    }
    public function addFood($data = [])
    {

        $query = $this->db->table('foods')->insert($data);
        if ($query) {
            return true;
        } else {
            return false;
        }

    }

    public function getUsers()
    {
        $records = $this->db->table('users')->getAll();
        return $records;

    }

    public function getCategories($id)
    {
        $records = $this->db->table('categories')->where('userid',$id)->getAll();
        return $records;

    }
    public function getFoods($id)
    {

        $records = $this->db->table('foods')->where('categoryid',$id)->getAll();
        return $records;

    }

    public function isLogin()
    {
        if (@$_SESSION["relog"]) {
            return true;
        } else {
            return false;
        }
    }

    public function updateUser(array $data)
    {
        $query = $this->db->table('users')->where('username',$data['username'])->update($data);
        if ($query === false) {
            return false;
        } else {
            return true;
        }
    }

    public function updateCategory(array $data)
    {
        $query = $this->db->table('categories')->where('id',$data['id'])->update($data);
        if ($query === false) {
            return false;
        } else {
            return true;
        }
    }
    public function updateFood(array $data)
    {
        $query = $this->db->table('foods')->where('id',$data['id'])->update($data);
        if ($query === false) {
            return false;
        } else {
            return true;
        }
    }
    public function updateSettings($id, array $data)
    {
        $query = $this->db->table('users')->where('id',$id)->update($data);
        if ($query === false) {
            return false;
        } else {
            return true;
        }
    }
    public function delete($table, $id){
        $query = $this->db->table($table)->where('id',$id)->delete();
        if($query)
            return true;
        return false;
    }

    public function getIndexData()
    {
        return $data = [
            'userCount' => count($records = $this->db->table('users')->getAll()),
            ];
    }

}