<?php

class About extends Controller
{
  public function index()
  {
    $data['judul'] = 'Frobbiden Library :: About';

    $data['TeksH1'] = 'About Me';
    $data['TeksSub'] = 'Bagi Mereka Yang Berani Membacanya';

    $this->view('template/header',$data);
    $this->view('template/navbar');
    $this->view('about/index',$data);
    $this->view('template/footer');
  }
}