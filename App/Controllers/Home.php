<?php

namespace Reschit\App\Controllers;

use Reschit\App\Models\HomeModel;

class Home
{
    public function Index()
    {
        return view('index');
    }

    public function Menu($username)
    {
        $Model = new HomeModel();
        $User = $Model->isUser($username);
        if ($User === false)
            return '404 Page Not Found Error';
        $categories = $Model->getCategories($User->id);
        $data = ['user' => $User, 'settings' => json_decode($User->settings), 'categories' => $categories];
        return view('menu', $data);
    }

    public function Category($username, $id)
    {
        $Model = new HomeModel();
        $User = $Model->isUser($username);
        if ($User === false)
            return '404 Page Not Found Error';
        $category = $Model->getCategory($User->id);
        $foods = $Model->getFoods($id);
        $data = ['user' => $User, 'settings' => json_decode($User->settings), 'category' => $category, 'foods' => $foods];
        return view('category', $data);
    }

}