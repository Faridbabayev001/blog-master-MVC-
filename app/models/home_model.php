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

  public function getById($id)
  {
    $this->db->select('news','id='.$id);
      return $this->db->getResult();
  }
}
