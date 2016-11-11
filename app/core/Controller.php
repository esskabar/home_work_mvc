<?php
/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 09/11/2016
 * Time: 16:53
 */

class Controller {

    public function model($model){
        require_once'../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = []){
        require_once '../app/views/' . $view . '.php';
    }
}