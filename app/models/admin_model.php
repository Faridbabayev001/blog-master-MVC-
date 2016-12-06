<?php

/**
 *
 */
class admin_model extends baseModel
{

  function __construct()
  {
    parent::__construct();
  }

  public function getAllData()
  {
    $this->db->select('news');
    return $this->db->getResult();
  }
}
