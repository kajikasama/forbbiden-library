<div style="background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.5)), url('http://localhost/2019/forbbiden-library/public/img/kosuzu2.jpg') center;
  background-size: top;
  color: #fff !important;" class="jumbotron jumbotron-fluid ">
  <div class="container">
    <h1 class="display-4"><?= $data['TeksH1'] ?></h1>
  </div>
</div>
    <!-- Button trigger modal -->
    
<section class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?=BaseUrl ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="<?=BaseUrl ?>/produk">Produk</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detail <?=$data['produk']['Judul']; ?></li>
  </ol>
</nav>
  <div class="row mt-4 mb-2">
    <div class="col-md">
      <div class="card text-white bg-primary mb-3">
        <div class="card-header">Produk Buku</div>
        <div class="card-body">
          <h5 class="card-title"><?=$data['produk']['Judul'] ?></h5>
          <p class="card-text">KodeProduk : <?=$data['produk']['KodeProduk'] ?></p>
          <p class="card-text">Judul : <?=$data['produk']['Judul'] ?></p>
          <p class="card-text">Tahun : <?=$data['produk']['Tahun'] ?></p>
          <p class="card-text">Penerbit : <?=$data['produk']['Penerbit'] ?></p>
          <p class="card-text">Pengarang : <?=$data['produk']['Pengarang'] ?></p>
          <p class="card-text">Halaman : <?=$data['produk']['Halaman'] ?></p>
          <p class="card-text">Harga : <?=$data['produk']['Harga'] ?></p>
          <a href="<?=BaseUrl ?>/produk" class="btn btn-info">Kembali</a>
        </div>
        <div class="card-body">
          <form action="<?=BaseUrl ?>/updatedata.php" method="post">
            <input type="text" value="">
          </form>
        </div>
      </div>
    </div>
</section>
