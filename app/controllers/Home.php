
<?php


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

 public function single($id)
 {
   $data['single'] = $this->model->getById($id);
   if ($data['single']['id'] = $id) {
    //  var_dump($data['single']);
     print_r('<pre>');
     print_r($data['single']['id']);
     print_r('</pre>');
    //  $this->view('pages/single',$data);
   }else {
    //  var_dump($data['single']);
     $this->view('errors/404');
   }
 }
}
