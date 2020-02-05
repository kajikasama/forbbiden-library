<?php

class Produk extends Controller
{
  public function index()
  {
    $data['judul'] = 'Frobbiden Library :: Produk';

    $data['TeksH1'] = 'Produk / Table Produk';
    $data['TeksSub'] = 'Membeli buku berarti sudah berdonasi di kuil hakurei';
    
    $data['produk'] = $this->model('ProdukModel')->GetAllProduk();

    $this->view('template/header',$data);
    $this->view('template/navbar');
    $this->view('produk/index',$data);
    $this->view('template/footer');
  }
  public function detail($kode)
  {
    $data['judul'] = 'Frobbiden Library :: Detail';

    $data['TeksH1'] = 'Detail Produk';
    $data['TeksSub'] = 'Membeli buku berarti sudah berdonasi di kuil hakurei';

    $data['produk'] = $this->model('ProdukModel')->GetProdukByKode($kode);

    $this->view('template/header',$data);
    $this->view('template/navbar');
    $this->view('produk/detail',$data);
    $this->view('template/footer');
  }
  public function tambahdata()
  {
    if($this->model('ProdukModel')->TambahProduk($_POST) > 0)
    {
      Flasher::SetFlash('Berhasil','Ditambahkan','success');
      header('Location: '.BaseUrl.'/produk');
      exit;
    }
    else
    {
      header('Location: '.BaseUrl.'/produk');
      Flasher::SetFlash('Gagal','Ditambahkan','danger');
    }
  }
  public function hapusdata($kode)
  {
    if($this->model('ProdukModel')->DeleteProdukByKode($kode) > 0)
    {
      Flasher::SetFlash('Berhasil','Dihapus','warning');
      header('Location: '.BaseUrl.'/produk');
      exit;
    }
    else
    {
      Flasher::SetFlash('Gagal','Dihapus','danger');
      header('Location: '.BaseUrl.'/produk');
    }
  }
  public function updateproduk($data)
  {
    $data['judul'] = 'Frobbiden Library :: Detail';

    $data['TeksH1'] = 'Detail Produk';
    $data['TeksSub'] = 'Membeli buku berarti sudah berdonasi di kuil hakurei';

    $this->view('template/header',$data);
    $this->view('template/navbar');
    $this->view('produk/update',$data);
    $this->view('template/footer');
  }
  public function updatedata($kode)
  {
    if($this->model('ProdukModel')->UpdateProdukByKode($kode) > 0)
    {
      header('Location: '.BaseUrl.'/produk');
      exit;
    }
    else
    {
      echo 'no u';
    }
  }
  public function getubah()
  {
    echo json_encode($this->model('ProdukModel')->GetProdukByKode($_POST['id']));
    
  }
  public function ubah()
  {
    if($this->model('ProdukModel')->UbahProduk($_POST) > 0)
    {
      Flasher::SetFlash('Berhasil','Diubah','success');
      header('Location: '.BaseUrl.'/produk');
      exit;
    }
    else
    {
      header('Location: '.BaseUrl.'/produk');
      Flasher::SetFlash('Gagal','Diubah','danger');
    }
  }
}