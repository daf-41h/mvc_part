<?php

class BaseController extends Filter {
  public function view($view, $data = []) {
    if(count($data)){
      extract($data);
    }
    require_once '../src/views/'.$view.'.php';
  }

  public function redirect($url) {
    header('Location: '.$url);
    exit;
  }

  public function model($model) {
    require_once '../src/models/'.$model.'.php';
    return new $model;
  }
}