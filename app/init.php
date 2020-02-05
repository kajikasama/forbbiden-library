<?php

//autoload semua class biar nggak ribet
spl_autoload_register(function ($class)
{
  include 'app/core/'.$class.'.php';
});

//sisa file yg kaga bisa di include bisa ditaruh disini ..

include 'app/config/config.php';