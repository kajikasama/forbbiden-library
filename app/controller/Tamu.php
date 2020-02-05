<?php

class Tamu extends Controller
{
  public function index()
  {
    $data['judul'] = 'Frobbiden Library :: Tamu';

    $data['TeksH1'] = 'Tamu';
    $data['TeksSub'] = 'Orang-Orang Yang Ada Di Suzunaan';

    $this->view('template/header',$data);
    $this->view('template/navbar');
    $this->view('about/index',$data);
    $this->view('template/footer');
  }
}