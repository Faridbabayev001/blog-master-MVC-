<?php

include 'app/config/config.php';
include 'system/baseModel.php';
include 'system/baseController.php';

/**
 *
 */
class Loader
{
    private $url;
    private $controller;
    private $method;

    public function run()
    {
      if (isset($_GET['url'])) {
        $this->url = $_GET['url'];
          $this->url = explode('/',$this->url);
            if (file_exists('app/controllers/'.$this->url[0].'.php')) {
              require_once 'app/controllers/'.$this->url[0].'.php';
              $this->controller = new $this->url[0]();
              unset($this->url[0]);
                if (isset($this->url[1])) {
                  $this->method = $this->url[1];
                  unset($this->url[1]);
                    if (method_exists($this->controller,$this->method)) {
                        if (isset($this->url[2])) {
                            call_user_func_array(array($this->controller,$this->method),$this->url);
                        }else {
                          call_user_func_array(array($this->controller, $this->method), $this->url);
                        }
                    }else {
                        echo $this->method.'not found';
                    }
                }else {
                  $this->controller->index();
                }
            }else {
              echo $this->url[0]."not found";
            }
      }else {
        require_once 'app/controllers/Home.php';
        $home = new Home();
        $home->index();
      }
    }
}
