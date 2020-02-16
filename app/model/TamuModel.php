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
  public function TambahTamu($data)
  {
    $query = "INSERT INTO ".$this->tb." VALUES('',':Username',':Password',':KodeRole')";
    $this->db->query($query);

    $this->db->bind('Username',$data['Username']);
    $this->db->bind('Password',$data['Password']);
    $this->db->bind('KodeRole',$data['KodeRole']);

    $this->db->execute();
    return $this->db->RowCount();
  }
  public function UbahTamu($kode)
  {
    $query = "UPDATE ".$this->db." SET Username=:Username,Password=:Password,KodeRole=:KodeRole WHERE KodeUser=:Kode";
    $this->db->query($query);
    // $this->db->bind(''.$kode['Judul']);
    public function HapusTamu()
    {
      $query = "DELETE * FROM KodeUser";
    }
  }
}