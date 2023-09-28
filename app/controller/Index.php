<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        dump(opcache_reset());
        dump(opcache_get_configuration());
        dump(opcache_get_status());
    }

    public function hello($name = 'ThinkPHP8')
    {
        return 'hello,' . $name;
    }

    public function phpInfo()
    {
        echo phpinfo();
    }
}
