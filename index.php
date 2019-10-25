<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Latihan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700&display=swap&subset=greek-ext" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
  </head>
  <body class="background fontnya">

      <!-- status bar -->
      <div>
<nav class="navbar navbar-expand-lg navbar-dark warna-biru">
  <a class="navbar-brand text-judul" href="#">LOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Lainnya
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="">Kelas</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="">Data Karyawan/Guru</a>
        </div>
      </li>
    </ul> -->
  </div>
</nav>
<!-- akhir -->


<div class="d-flex justify-content-around mt-4 text-biru">
  <h2></h2>
  <h1 class="text-judul">Data Barang</h1> 
  <button type="button" id="tombol-tambahcoba" data-toggle="modal" data-target="#ModalTambah" class="btn btn-outline-primary btn-tambah">Tambah</button>
</div>

<hr class="border">
    

<div class="container">
  <div>
    <table class="table">
      <thead class="warna-biru text-white">
        <tr class="text-center">
          <th scope="col">Nama</th>
          <th scope="col">Kode</th>
          <th scope="col">Harga (Rp.)</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody id="list-daftar" class="text-biru">
          
      </tbody>
    </table>
  </div>
</div>
<hr class="border">
 
  </div>
</div>
<!-- modal tambah -->
<div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-biru font-weight-bold" id="exampleModalLabel">Tambah Barang</h5>
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-biru font-weight-bold" id="BodyTambah">
            <div class="container-fluid">
                <div class="modal-body">
                  <div class="d-flex flex-column">
                    <div class="row">
                        <div class="form-group ket-nya">
                            <label for="usr" >kode:</label>
                        </div>

                        <input type="text" class="form-control kotak-isi text-biru input-khusus" id="tambah-kode">
                    </div>
                    <div class="row">
                        <div class="form-group ket-nya">
                            <label for="usr" >Nama:</label>
                        </div>

                        <input type="text" class="form-control kotak-isi text-biru" id="tambah-nama">
                    </div>
                    <div class="row">
                        <div class="form-group ket-nya">
                            <label for="usr" >Deskripsi:</label>
                        </div>

                        <textarea class="form-control kotak-isi text-biru" id="tambah-deskripsi"></textarea>
                    </div>
                    <div class="row">
                        <div class="form-group ket-nya">
                            <label for="usr" >Stok:</label>
                        </div>

                        <input type="text" class="form-control kotak-isi text-biru input-khusus" id="tambah-stok">
                    </div>
                    <div class="row">
                        <div class="form-group ket-nya">
                            <label for="usr" >Harga:</label>
                        </div>

                        
                        <div class="input-group input-khusus">
                            <div class="input-group-append ">
                                <span class="input-group-text text-biru rounded-left">Rp.</span>
                            </div>
                            <input type="text" class="form-control kotak-isi text-biru" aria-label="Amount (to the nearest dollar)" id="tambah-harga">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group ket-nya">
                            <label for="usr" >Berat:</label>
                        </div>

                        
                        <div class="input-group input-khusus">
                          <input type="text" class="form-control kotak-isi text-biru" aria-label="Amount (to the nearest dollar)" id="tambah-berat">
                            <div class="input-group-append">
                              <span class="input-group-text text-biru">gram</span>
                            </div>
                        </div>
                        
                    </div>
                  </div>
                </div>
        </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="#" role="button" data-dismiss="modal" id="hasil-tambahnya">Simpan</a>
        </div>
      </div>
    </div>
  </div>

<!--  -->
  
<!-- modal edit -->
    <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-biru font-weight-bold" id="exampleModalLabel">Edit Data Barang</h5>
            
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-biru font-weight-bold" id="BodyEdit">
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button class="btn btn-primary" type="button" data-dismiss="modal" onclick='simpanDatanya()'id="simpan-putnya">Simpan</button>
          </div>
        </div>
      </div>
    </div>
<!-- akhir modal -->


<!-- modal hapus -->
<div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-biru font-weight-bold" id="exampleModalCenterTitle">Hapus Biodata</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="BodyHapus">
       <h5 class="text-center text-danger  font-weight-bold">Apakah Data Ingin di Hapus ?</h5> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <button type="button" class="btn btn-primary hapus-ya" data-dismiss="modal" id="tombolHapusData">Ya</button>
      </div>
    </div>
  </div>
</div>
<!-- akhir modal -->

<!-- javascript -->
<script type="text/javascript">
  DatadanHasil();

function DatadanHasil() { 
    $.ajax({
        url: 'ambilData.php',
        type: "get",
        data: {
            
        },
        success: function(result){
             console.log(result);
              var objResult=JSON.parse(result);
                $.each(objResult, function(i, data) {
                    $('#list-daftar').append(`
                    <tr class="text-center">
                        <td class="text-capitalize font-weight-bold">`+data.nama+`</td>
                        <td>`+data.kode+`</td>
                        <td>`+data.harga+`</td>
                        <td class="informasinya ">
                            <a href="#" class="card-link text-success font-weight-bold" data-toggle="modal" data-target="#ModalEdit" data-id="`+data.id+`" id="tombol-ubah" onclick='pilihData("`+data.id+`")'>Ubah</a>
                            <a href="#" class="card-link text-danger font-weight-bold" data-toggle="modal"  data-id="`+data.id+`"  onclick='hapusData("`+data.id+`")'>Hapus</a>
                        </td>
                    </tr>
                    `);
                }); 
                
                
            // }
        },
        
    });
}


$('#hasil-tambahnya').on('click', function(){
    $('#list-daftar').html('');
    $('#informasi-hasil').html('');
    
    $.ajax({
        url: 'tambahData.php',
        type: "post",
        dataType: "json",
        data: {
            'nama': $('#tambah-nama').val(),
            'kode': $('#tambah-kode').val(),
            'deskripsi':$('#tambah-deskripsi').val(),
            'stok': $('#tambah-stok').val(),
            'harga': $('#tambah-harga').val(),
            'berat': $('#tambah-berat').val(),
        },
        success: function(result){
            console.log(result);
           
                let pesan = result.message;
                $('#informasi-hasil').append('<h4 class="text-capitalize">add success</h4>')

                
                DatadanHasil();
                
            }
            
        })
})
$('#tombol-tambahcoba').on('click', function(){
    $('#tambah-id').val('');
    $('#tambah-nama').val('');
    $('#tambah-kode').val('');
    $('#tambah-deskripsi').val('');
    $('#tambah-stok').val('');
    $('#tambah-harga').val('');
    $('#tambah-berat').val('');    
})

function pilihData(idx){
  var id=idx;
  $.ajax({
    type: "POST",
    data: "id="+id,
    url: "ubahData.php",
    success : function(result){
      var objResult= JSON.parse(result);
      let isi = objResult;
      
      $('#BodyEdit').html(`

                      <div class="container-fluid">
                <div class="modal-body">
                  <div class="d-flex flex-column">

                    <div class="d-flex flex-row-reverse "> 
                        <input type="text" class="form-control text-biru kotak-idnya position-absolute" id="hasil-id-edit" disabled value="`+isi.id+`">
                    </div>
                    <div class="row">
                        <div class="form-group ket-nya">
                            <label for="usr" >kode:</label>
                        </div>

                        <input type="text" class="form-control kotak-isi text-biru input-khusus" id="hasil-kode" value="`+isi.kode+`">
                    </div>
                    <div class="row">
                        <div class="form-group ket-nya">
                            <label for="usr" >Nama:</label>
                        </div>

                        <input type="text" class="form-control kotak-isi text-biru" id="hasil-nama" value="`+isi.nama+`">
                    </div>
                    <div class="row">
                        <div class="form-group ket-nya">
                            <label for="usr" >Deskripsi:</label>
                        </div>

                        <textarea class="form-control kotak-isi text-biru" id="hasil-deskripsi" >`+isi.deskripsi+`</textarea>
                    </div>
                    <div class="row">
                        <div class="form-group ket-nya">
                            <label for="usr" >Stok:</label>
                        </div>

                        <input type="text" class="form-control kotak-isi text-biru input-khusus" id="hasil-stok" value="`+isi.stok+`">
                    </div>
                    <div class="row">
                        <div class="form-group ket-nya">
                            <label for="usr" >Harga:</label>
                        </div>

                        
                        <div class="input-group input-khusus">
                            <div class="input-group-append ">
                                <span class="input-group-text text-biru rounded-left">Rp.</span>
                            </div>
                            <input type="text" class="form-control kotak-isi text-biru" aria-label="Amount (to the nearest dollar)" id="hasil-harga" value="`+isi.harga+`">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group ket-nya">
                            <label for="usr" >Berat:</label>
                        </div>

                        
                        <div class="input-group input-khusus">
                          <input type="text" class="form-control kotak-isi text-biru" aria-label="Amount (to the nearest dollar)" id="hasil-berat" value="`+isi.berat+`">
                            <div class="input-group-append">
                              <span class="input-group-text text-biru">gram</span>
                            </div>
                        </div>
                        
                    </div>
                  </div>
                </div>
                    `);
    }
  })
}

// update data
 
function simpanDatanya(){
  $('#list-daftar').html('');
  $.ajax({
        type: "POST",
        url: 'updateData.php',
        data: {
            'id': $('#hasil-id-edit').val(),
            'nama': $('#hasil-nama').val(),
            'kode': $('#hasil-kode').val(),
            'deskripsi':$('#hasil-deskripsi').val(),
            'stok': $('#hasil-stok').val(),
            'harga': $('#hasil-harga').val(),
            'berat': $('#hasil-berat').val(),
        },
        
        success: function(result){
          console.log(result);
           
                let pesan = result.message;
                $('#informasi-hasil').append('<h4 class="text-capitalize">add success</h4>')


                DatadanHasil();
                
            }
            
        })
  
}
// $('#simpan-putnya').on('click',function(){
    
//     $('#informasi-hasil').html('');
    
            
//     })

// disable button tambah
$(function () {
    $('#tambah-kode' && '#tambah-nama' && '#tambah-stok' && '#tambah-harga' && '#tambah-berat').on("change", function() {
        if ($(this).val() == '') {
            $('#hasil-tambahnya').prop('disabled', true);
        } else {
            $('#hasil-tambahnya').prop('disabled', false);
        }
    });
});
// tutup disable button tambah


// hapus data
function hapusData(id){
  $('#list-daftar').html('');
  var tanya = confirm("Apakah anda yakin akan mengubah data ini ? ")
  if(tanya){
    $.ajax({
        type:"POST",
        data: "id="+id,
        url: 'hapus.php',
        success: function(respon){
          console.log(respon);
            let pesan = respon.message;
            $('#informasi-hasil').append('<h4 class="text-capitalize">'+pesan+'</h4>')

            DatadanHasil();
        }
   })

  }else{
    DatadanHasil();
  }
}
// hapus data





</script>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
    src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>