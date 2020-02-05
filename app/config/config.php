<?php

define('BaseUrl','http://localhost/2019/forbbiden-library');

define('DbHost','localhost');
define('DbUser','root');
define('DbPass','');
define('DbName','buku-mvc');


//MISC

//acak-acak warna boostraps sampe mampus
  $pagar = rand(1,4);
  if($pagar == 1)
  {
    $background = "bg-primary";
  }
  else if($pagar == 2)
  {
    $background = "bg-success";
  }
  else if($pagar == 3)
  {
    $background = "bg-info";
  }
  else
  {
    $background = "bg-danger";
  }
  define('BgColor',$background);

  //acak parah rbgnya sampe mampus
  $r = rand(0,255);
  $g = rand(0,255);
  $b = rand(0,255);

  define('Red',$r);
  define('Green',$g);
  define('Blue',$b);