$(function() 
{
  $('.tombolTambahData').on('click', function() {
    $('#formModalLabel').html('Tambah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Tambah Data');
    $('#Judul').val('');
    $('#Tahun').val('');
    $('#Penerbit').val('');
    $('#Pengarang').val('');
    $('#Halaman').val('');
    $('#Harga').val('');
    $('#KodeProduk').val('');
  });

  $('.tampilUbah').on('click', function() 
  {
    $('#formModalLabel').html('Ubah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/2019/forbbiden-library/produk/ubah');

    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost/2019/forbbiden-library/produk/getubah',
      data: {id : id},
      method: 'post',
      dataType: 'json',
      success: function(data){
        $('#Judul').val(data.Judul);
        $('#Tahun').val(data.Tahun);
        $('#Penerbit').val(data.Penerbit);
        $('#Pengarang').val(data.Pengarang);
        $('#Halaman').val(data.Halaman);
        $('#Harga').val(data.Harga);
        $('#KodeProduk').val(data.KodeProduk);
      }
    });
    
  });

});