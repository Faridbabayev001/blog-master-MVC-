<?php

/**
 *
 */
class baseModel
{
  public $db;
  function __construct()
  {
    include 'Database.php';
    $this->db = new Database(host,username,password,dbname);
    $this->db->connect();
  }
}
