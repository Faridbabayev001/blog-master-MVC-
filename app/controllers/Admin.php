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
      $name = $_FILES['image']['name'];
      $size = $_FILES['image']['size'];
      $type = $_FILES['image']['type'];
      $tmp_name = $_FILES['image']['tmp_name'];
      $error = $_FILES['image']['error'];
        if ($type == 'image/jpg' || $type == 'image/jpeg'|| $type == 'image/png' || $type == 'image/JPG' ||  $type == 'image/JPEG'|| $type == 'image/PNG' && $size < 200000000) {
            if ($error == 0) {
                  $target_dir = "public/uploads/";
                    $target_file = date('dmYGis'). basename($_FILES["image"]["name"]);
                       move_uploaded_file($_FILES["image"]["tmp_name"],$target_dir.$target_file);
                       $data['author'] = $_POST['author'];
                       $data['title'] = $_POST['title'];
                       $data['about'] = $_POST['news'];
                       $data['image'] = $target_file;
                       $this->model->getCreateData($data);
                        $this->session->setSession('SuccessImgFile','Data uğurla əlavə olundu');
                       header('location:'.url.'Admin/create');
              }else {
                  $this->session->setSession('ImgFileError',$type.' adlı xəta baş verdi xahiş olunur yenidən cəhd edəsiniz');
                }
          }else {
            $this->session->setSession('ImgTypeError','Düzgün formatda səkil və həcmi 2 kilobaytdan az olan səkil yükləməyiniz xahiş olunur');
              header('location:'.url.'Admin/create');
            }
    }else {
      header('location:'.url.'Admin/create');
    }
  }

  public function delete($id)
  {
    $id = (int)$id;
    $this->model->getDeleteData($id);
    $this->session->setSession('delteMsj','Data uğurla silindi');
      header('Location:'.url.'Admin');
  }
}
