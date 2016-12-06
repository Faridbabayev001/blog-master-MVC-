
<?php

/**
 *
 */
class Home extends baseController
{

  public function __construct()
  {
    $this->model = $this->model('home_model');
  }

 public function index()
 {
   $data['news'] = $this->model->getAllNews();
   $this->view('/pages/index',$data);
 }

 public function single()
 {
   $this->view('pages/single');
 }
}
