<?php

class ProdukModel
{
  private $tb = 'produk';
  private $db;
  
  public function __construct()
  {
    $this->db = new Databases;
  }
  public function GetAllProduk()
  {
    $this->db->query('SELECT * FROM '.$this->tb);
    return $this->db->ResultSet();
  }
  public function GetProdukByKode($kode)
  {
    $this->db->query('SELECT * FROM '.$this->tb.' WHERE KodeProduk=:kode');
    $this->db->bind('kode',$kode);
    return $this->db->Single();
  }
  public function TambahProduk($data)
  {
    $query = "INSERT INTO ".$this->tb." VALUES('',:Judul,:Tahun,:Penerbit,:Pengarang,:Halaman,:Harga)";
    $this->db->query($query);
    $this->db->bind('Judul',$data['Judul']);
    $this->db->bind('Tahun',$data['Tahun']);
    $this->db->bind('Penerbit',$data['Penerbit']);
    $this->db->bind('Pengarang',$data['Pengarang']);
    $this->db->bind('Halaman',$data['Halaman']);
    $this->db->bind('Harga',$data['Harga']);
    
    $this->db->execute();
    return $this->db->RowCount();
  }
  public function DeleteProdukbyKode($kode)
  {
    $query = "DELETE FROM ".$this->tb." WHERE KodeProduk=:kode";
    $this->db->query($query);
    $this->db->bind('kode',$kode);
    $this->db->execute();
    return $this->db->RowCount();
  } 
  public function UbahProduk($kode)
  {
    $query = "UPDATE ".$this->tb." SET Judul=:judul, Tahun=:tahun,Penerbit=:penerbit,Pengarang=:pengarang,Halaman=:halaman,Harga=:harga WHERE KodeProduk=:kode ";
    $this->db->query($query);

    $this->db->bind('judul',$kode['Judul']);
    $this->db->bind('tahun',$kode['Tahun']);
    $this->db->bind('penerbit',$kode['Penerbit']);
    $this->db->bind('pengarang',$kode['Pengarang']);
    $this->db->bind('halaman',$kode['Halaman']);
    $this->db->bind('harga',$kode['Harga']);
    $this->db->bind('kode',$kode['KodeProduk']);

    $this->db->execute();
    return $this->db->RowCount();
  }
}
