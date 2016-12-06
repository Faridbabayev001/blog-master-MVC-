<?php

/**
 *
 */
class home_model extends baseModel
{

  function __construct()
  {
    parent::__construct();
  }

  public function getAllNews()
  {
    $this->db->select('news');
     return $this->db->getResult();
  }
}
