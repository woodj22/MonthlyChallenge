<?php
/**
 * Created by PhpStorm.
 * User: JoeWood
 * Date: 01/11/2016
 * Time: 20:11
 */


class Index {



    public function __construct()
    {

        var_dump($_SERVER['REQUEST_URI']);


    }

}

$I = new Index();
