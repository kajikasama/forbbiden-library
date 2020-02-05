<?php

class Home extends Controller
{
  public function index()
  {
    $data['judul'] = 'Frobbiden Library :: Home';

    $data['TeksH1'] = 'Buku Dengan Kekuatan Magis';
    $data['TeksSub'] = 'Bagi Mereka Yang Berani Membacanya';

    $this->view('template/header',$data);
    $this->view('template/navbar');
    $this->view('home/index',$data);
    $this->view('template/footer');
  }
}