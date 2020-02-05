<?php

class Kosuzu extends Controller
{
  public function index()
  {
    $data['judul'] = 'Frobbiden Library :: Kosuzu';

    $data['TeksH1'] = 'Suzunaan Kosuzu';
    $this->view('template/header',$data);
    $this->view('template/navbar');
    $this->view('produk/update',$data);
    $this->view('template/footer');
  }
}