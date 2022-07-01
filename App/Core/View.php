<?php

namespace Reschit\App\Core;
use Jenssegers\Blade\Blade;

class View
{
    public static function run(string $name, array $data = []){
        Session::start();
        $blade = new Blade(getenv('DIR') . '/Public/Views/', getenv('DIR') . '/Public/Cache/');
        $name = str_replace('.','/',$name);
        return $blade->render($name, $data);
        /**
        extract($data);
        ob_start();
        Session::start();
        require getenv(name: 'DIR') . "/Public/Views/" . $name . ".blade.php";
        return ob_get_clean();
         */

    }

}