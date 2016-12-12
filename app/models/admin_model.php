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

  public function getAllData($id = Null)
  {
      $this->db->select('news');
      return $this->db->getResult();
  }

  public function getSelectDataByID($id)
  {
    $this->db->select('news','id='.$id);
    return $this->db->getResult();
  }

  public function getDeleteData($id)
  {
    $this->db->delete('news','id='.$id);
    return $this->db->getResult();
  }

  public function getCreateData($data)  {
    $this->db->insert('news',$data);
      return $this->db->getResult();
  }

}
