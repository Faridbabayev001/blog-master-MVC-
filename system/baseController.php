<?php

/**
 *
 */
class baseController
{

  function __construct()
  {

  }

  public function view($pagename,$data =NULL)
  {
    if (file_exists('app/views/'.$pagename.'.php')) {
      if ($data != NULL) {
        extract($data);
      }
      include 'app/views/'.$pagename.'.php';
    }else {
      echo $pagename."page not found";
    }
  }

  public function model($name)
  {
    if (file_exists('app/models/'.$name.'.php')) {
      include 'app/models/'.$name.'.php';
        return new $name();
    }else {
      echo $name. " model not found";
    }
  }

  public function loadLibrary($lib_name)
  {
    if (file_exists('app/libraries/'.$lib_name.'.php')) {
      include 'app/libraries/'.$lib_name.'.php';
        return  new $lib_name();
    }else {
      echo $lib_name." library not found";
    }
  }
}
