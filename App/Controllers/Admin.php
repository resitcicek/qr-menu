<?php
/**
 * @Author: Reschit
 * @Website: http://www.resitcicek.com
 * @E-Mail: me@resitcicek.com
 * @Github: github.com/resitcicek
 */

namespace Reschit\App\Controllers;

use Reschit\App\Core\Session;
use Reschit\App\Helpers\Redirect;
use Reschit\App\Helpers\Uploader;
use Reschit\App\Helpers\User;
use Reschit\App\Models\AdminModel;

class Admin
{
    protected $user;

    public function __construct()
    {
        global $db, $_SESSION;
        $this->db = &$db;
        $UserHelper = new User();
        if (Session::read('logged')) {
            $crrnt = $user = Session::read('user');
            $this->user = $UserHelper->getUser($crrnt->username);
        }
    }

    public function Index()
    {
        if (!Session::read('logged')) {
            return view('Admin/login');
        }
        $AdminModel = new AdminModel();
        $user = Session::read('user');
        $data = ['currentuser' => $this->user, 'data' => $AdminModel->getIndexData()];
        return view('Admin/index', $data);

    }

    public function AddUser()
    {
        if (!Session::read('logged')) {
            return view('Admin/login');
        }
        $user = Session::read('user');
        $data = ['currentuser' => $this->user];
        return view('Admin/add-user', $data);

    }

    public function EditUser($username)
    {
        if (!Session::read('logged')) {
            return view('Admin/login');
        }
        $user = Session::read('user');
        $UserHelper = new User();
        $data = ['currentuser' => $this->user, 'data' => $UserHelper->getUser($username)];
        return view('Admin/edit-user', $data);

    }

    public function Users()
    {
        $AdminModel = new AdminModel();
        if (!Session::read('logged')) {
            return view('Admin/login');
        }
        $user = Session::read('user');
        $data2 = $AdminModel->getUsers();
        $data = ['currentuser' => $this->user, 'data' => $data2];
        return view('Admin/Users', $data);

    }

    public function Categories()
    {
        $AdminModel = new AdminModel();
        if (!Session::read('logged')) {
            return view('Admin/login');
        }
        $user = Session::read('user');
        $data2 = $AdminModel->getCategories($this->user['id']);
        $data = ['currentuser' => $this->user, 'data' => $data2];
        return view('Admin/Categories', $data);

    }

    public function Foods()
    {
        $AdminModel = new AdminModel();
        if (!Session::read('logged')) {
            return view('Admin/login');
        }
        $user = Session::read('user');
        $data2 = $AdminModel->getCategories($this->user['id']);
        $id = 0;
        foreach($data2 as $cat){
            $categories[$id] = ['title'=>$cat->title, 'food'=>json_decode(json_encode($AdminModel->getFoods($cat->id)),true)];
            $id++;
        }
        $data = ['currentuser' => $this->user, 'data' => $categories];

        return view('Admin/Foods', $data);

    }

    public function AddCategory()
    {
        if (!Session::read('logged')) {
            return view('Admin/login');
        }
        $user = Session::read('user');
        $data = ['currentuser' => $this->user];
        return view('Admin/add-category', $data);

    }

    public function AddFood()
    {
        if (!Session::read('logged')) {
            return view('Admin/login');
        }
        $AdminModel = new AdminModel();
        $user = Session::read('user');
        $data = ['currentuser' => $this->user, 'categories'=>$AdminModel->getCategories($this->user['id'])];
        return view('Admin/add-food', $data);

    }

    public function EditCategory($id)
    {
        $UserHelper = new User();
        if (!Session::read('logged')) {
            return view('Admin/login');
        }
        $user = Session::read('user');
        $data = ['currentuser' => $this->user, 'data' => $UserHelper->getCategory($id)];
        return view('Admin/edit-category', $data);

    }

    public function EditFood($id)
    {
        $UserHelper = new User();
        $AdminModel = new AdminModel();
        if (!Session::read('logged')) {
            return view('Admin/login');
        }
        $user = Session::read('user');
        $data = ['currentuser' => $this->user, 'data' => $UserHelper->getFood($id), 'categories' => $AdminModel->getCategories($this->user['id'])];
        return view('Admin/edit-food', $data);

    }

    public function DeleteCategory($id)
    {
        if (!Session::read('logged')) {
            return view('Admin/login');
        }
        $user = Session::read('user');
        $AdminModel = new AdminModel();
        $delete = $AdminModel->delete('categories',$id);
        if($delete)
            Redirect::to('../../admin/categories', 302);
        return false;

    }
    public function DeleteFood($id)
    {
        if (!Session::read('logged')) {
            return view('Admin/login');
        }
        $user = Session::read('user');
        $AdminModel = new AdminModel();
        $delete = $AdminModel->delete('foods',$id);
        if($delete)
            Redirect::to('../../admin/foods', 302);
        return false;

    }

    public function DeleteUser($id)
    {
        if (!Session::read('logged')) {
            return view('Admin/login');
        }
        $user = Session::read('user');
        $AdminModel = new AdminModel();
        $delete = $AdminModel->delete('users',$id);
        if($delete)
            Redirect::to('../../admin/users', 302);
        return false;

    }

    public function Profile()
    {
        if (!Session::read('logged')) {
            return view('Admin/login');
        }
        $user = Session::read('user');
        $data = ['currentuser' => $this->user];
        return view('Admin/Profile', $data);

    }
    public function Settings()
    {
        if (!Session::read('logged')) {
            return view('Admin/login');
        }
        $user = Session::read('user');
        $data = ['currentuser' => $this->user, 'settings' => json_decode($this->user['settings'])];
        return view('Admin/Settings', $data);

    }

    public function api()
    {
        $AdminModel = new AdminModel();
        if (@$_POST['action'] == 'signin') {
            $users = $AdminModel->signIn($_POST['username'], $_POST['password']);
            return json_encode(['status' => $users]);
        } elseif (@$_POST['action'] == 'addUser') {
            $data = [
                'username' => $_POST['username'],
                'password' => md5($_POST['password']),
                'email' => $_POST['email'],
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'phone' => $_POST['phone'],
                'type' => 0,
                'settings' => ''
            ];
            $add = $AdminModel->addUser($data);
            return json_encode(['status' => $add]);
        } elseif (@$_POST['action'] == 'updateUser') {
            $data = [
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'phone' => $_POST['phone'],
                'settings' => ''
            ];
            $add = $AdminModel->updateUser($data);
            return json_encode(['status' => $add]);
        }elseif (@$_POST['action'] == 'updateSettings') {
            unset($_POST['action']);
            $data = ['settings'=>json_encode($_POST)];
            $add = $AdminModel->updateSettings($this->user['id'],$data);
            return json_encode(['status' => $add]);
        } elseif (@$_POST['action'] == 'addCategory') {
            if(strlen($_POST['title']) < 1 or strlen($_POST['description']) < 1 or strlen($_FILES['image']['name']) < 1 )
                return json_encode(['status' => false]);
            $uploader = new Uploader();
            $uploader->setDir('../Public/Images/');
            $uploader->setExtensions(array('jpg', 'jpeg', 'png', 'gif', 'webp'));  //allowed extensions list//
            $uploader->setMaxSize(10);                          //set max file size to be allowed in MB//

            if ($uploader->uploadFile("image")) {
                $data['image'] = $uploader->getUploadName();
                $data['userid'] = $this->user['id'];
                foreach($_POST as $key => $value){
                    if($key == 'action') continue;
                    $data[$key] = $value;
                }
                $add = $AdminModel->addCategory($data);
                return json_encode(['status' => $add]);


            } else {//upload failed
                return $uploader->getMessage(); //get upload error message
            }
        }elseif (@$_POST['action'] == 'addFood') {
            if(strlen($_POST['title']) < 1 or strlen($_POST['description']) < 1 or strlen($_POST['price']) < 1 or strlen($_FILES['image']['name']) < 1 )
                return json_encode(['status' => false]);
            $uploader = new Uploader();
            $uploader->setDir('../Public/Images/');
            $uploader->setExtensions(array('jpg', 'jpeg', 'png', 'gif', 'webp'));  //allowed extensions list//
            $uploader->setMaxSize(10);                          //set max file size to be allowed in MB//

            if ($uploader->uploadFile("image")) {
                $data['image'] = $uploader->getUploadName();
                foreach($_POST as $key => $value){
                    if($key == 'action') continue;
                    $data[$key] = $value;
                }
                $add = $AdminModel->addFood($data);
                return json_encode(['status' => $add]);


            } else {//upload failed
                return $uploader->getMessage(); //get upload error message
            }
        }elseif (@$_POST['action'] == 'updateCategory') {

            if(strlen($_POST['title']) < 1 or strlen($_POST['description']) < 1)
                return json_encode(['status' => false]);
            if(strlen($_FILES['image']['name']) > 0) {
                $uploader = new Uploader();
                $uploader->setDir('../Public/Images/');
                $uploader->setExtensions(array('jpg', 'jpeg', 'png', 'gif', 'webp'));  //allowed extensions list//
                $uploader->setMaxSize(10);                          //set max file size to be allowed in MB//

                if ($uploader->uploadFile("image")) {
                    $data['image'] = $uploader->getUploadName();

                    foreach ($_POST as $key => $value) {
                        if ($key == 'action') continue;
                        $data[$key] = $value;
                    }
                    $add = $AdminModel->updateCategory($data);
                    return json_encode(['status' => $add]);


                } else {//upload failed
                    return $uploader->getMessage(); //get upload error message
                }
            }
            else{
                foreach ($_POST as $key => $value) {
                    if ($key == 'action') continue;
                    $data[$key] = $value;
                }

                $add = $AdminModel->updateCategory($data);
                return json_encode(['status' => $add]);
            }
        }elseif (@$_POST['action'] == 'updateFood') {

            if(strlen($_POST['title']) < 1 or strlen($_POST['description']) < 1)
                return json_encode(['status' => false]);
            if(strlen($_FILES['image']['name']) > 0) {
                $uploader = new Uploader();
                $uploader->setDir('../Public/Images/');
                $uploader->setExtensions(array('jpg', 'jpeg', 'png', 'gif', 'webp'));  //allowed extensions list//
                $uploader->setMaxSize(10);                          //set max file size to be allowed in MB//

                if ($uploader->uploadFile("image")) {
                    $data['image'] = $uploader->getUploadName();

                    foreach ($_POST as $key => $value) {
                        if ($key == 'action') continue;
                        $data[$key] = $value;
                    }
                    $add = $AdminModel->updateFood($data);
                    return json_encode(['status' => $add]);


                } else {//upload failed
                    return $uploader->getMessage(); //get upload error message
                }
            }
            else{
                foreach ($_POST as $key => $value) {
                    if ($key == 'action') continue;
                    $data[$key] = $value;
                }

                $add = $AdminModel->updateFood($data);
                return json_encode(['status' => $add]);
            }
        }
    }

}