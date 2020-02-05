<?php

class Controller
{
  public function view($view, $data = [])
  {
    include 'app/view/'.$view.'.php';
  }
  public function model($model)
  {
    include 'app/model/'.$model.'.php';
    return new $model;
  }
}