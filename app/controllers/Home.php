
<?php

/**
 *
 */
class Home extends baseController
{
 public function index()
 {
   $this->view('/pages/index');
 }

 public function single()
 {
   $this->view('pages/single');
 }
}
