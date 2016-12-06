<?php

/**
 *
 */
class Admin extends baseController
{
  private $model;
  function __construct()
  {
    $this->model = $this->model('admin_model');
    $this->session = $this->loadLibrary('Session');
  }

  public function index()
  {
    $data['views'] = $this->model->getAllData();
    $this->view('admin/index',$data);
  }

  public function create()
  {
    $this->view('admin/create');
  }

  public function create_data()
  {
    if (isset($_POST['submit'])) {
      $target_dir = url."public/uploads/";
        $target_file = date('dmYGis'). basename($_FILES["image"]["name"]);
           move_uploaded_file($_FILES["image"]["tmp_name"],url."public/uploads/".$target_file);
           $this->session->setSession('createErrorMsj','Bosluq buraxmayin');
           print_r($_FILES["image"]['name']);
          //  header('location:'.url.'Admin/create');
    }else {
      header('location:'.url.'Admin/create');
    }
  }
}
