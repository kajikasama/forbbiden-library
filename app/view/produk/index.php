<div style="background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.5)), url('http://localhost/2019/forbbiden-library/img/kosuzu2.jpg') center;
  background-size: top;
  color: #fff !important;" class="jumbotron jumbotron-fluid ">
  <div class="container">
    <h1 class="display-4"><?= $data['TeksH1'] ?></h1>
  </div>
</div>

<section class="tabel <?=BgColor; ?>">
  <div class="container">
    <!-- Button trigger modal -->
    <div class="row">
      <div class="col">
        <?php Flasher::flash(); ?>
      </div>
    </div>
    <button type="button" class="btn btn-dark tombolTambahData" data-toggle="modal" data-target="#exampleModalScrollable">
      Tambah Data Produk
    </button>
    <table class="table table-dark mt-4">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Kode</th>
          <th scope="col">Judul</th>
          <th scope="col">Penerbit</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data['produk'] as $produk) : ?>
          <tr>
            <th scope="row"><?= $produk['KodeProduk'] ?></th>
            <td><?= $produk['Judul']; ?></td>
            <td><?= $produk['Penerbit']; ?></td>
            <td>
              <a href="<?=BaseUrl ?>/produk/detail/<?=$produk['KodeProduk']; ?>" class="badge badge-info">Lihat</a>
              <a data-toggle="modal" data-target="#exampleModalScrollable" href="" class="badge badge-warning tampilUbah" data-id="<?=$produk['KodeProduk']; ?>">Edit</a>
              <a onclick="return confirm('yakun ingin menghapus ?');" href="<?=BaseUrl ?>/produk/hapusdata/<?=$produk['KodeProduk']; ?>" class="badge badge-danger">Hapus</a>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>


<!-- MODAL BOX -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?=BaseUrl ?>/produk/tambahdata">
            <input type="hidden" name="KodeProduk" id="KodeProduk">
          <div class="form-group">
            <label for="Judul">Judul</label>
            <input required name="Judul" type="text" class="form-control" id="Judul" aria-describedby="Judul" placeholder="Judul Buku">
            
          </div>
          <div class="form-group">
            <label for="Tahun">Tahun</label>
            <input required name="Tahun" type="text" class="form-control" id="Tahun" aria-describedby="Tahun" placeholder="Tahun Buku">
            
          </div>
          <div class="form-group">
            <label for="Penerbit">Penerbit</label>
            <input required name="Penerbit" type="text" class="form-control" id="Penerbit" aria-describedby="Penerbit" placeholder="Penerbit Buku">
            
          </div>
          <div class="form-group">
            <label for="Pengarang">Pengarang</label>
            <input required name="Pengarang" type="text" class="form-control" id="Pengarang" aria-describedby="Pengarang" placeholder="Pengarang Buku">
            
          </div>
          <div class="form-group">
            <label for="Halaman">Halaman</label>
            <input required name="Halaman" type="text" class="form-control" id="Halaman" aria-describedby="Halaman" placeholder="Halaman Buku">
            
          </div>
          <div class="form-group">
            <label for="Harga">Harga</label>
            <input required name="Harga" type="text" class="form-control" id="Harga" aria-describedby="Harga" placeholder="Harga Buku">
            <small id="Harga" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="reset" class="btn btn-danger">
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
      </form>
    </div>
  </div>
</div>