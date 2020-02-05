<?php

class TamuModel
{
  private $tb = 'tamu';
  private $db;

  public function __construct()
  {
    $this->db = new Databases;
  }
  public function GetAllTamu()
  {
    $this->db->query('SELECT * FROM '.$this->tb);
    return $this->db->ResultSet();
  }
  public function GetTamuByKode($kode)
  {
    $this->db->query('SELECT * FROM '.$this->tb.' WHERE KodeTamu=:kode');
    $this->db->bind('kode',$kode);
    return $this->db->Single();
  }
  public function 
}