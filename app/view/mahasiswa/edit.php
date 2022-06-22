  
  
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 d-flex justify-content-evenly">
          <div class="col-sm-6 mt-2">
            <h1>Halaman Edit Mahasiswa</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



    <!-- Main content -->
    <section class="content">
    
              
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= BASE; ?>/mahasiswa/editMahasiswa" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['mhs']['id']; ?>">
                <div class="row d-flex justify-content-center">
    <div class="col-lg-8">

                <div class="card">
                <div class="card-body">

                  <div class="form-group">
                    <label >Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama" value="<?= $data['mhs']['nama'];?>">
                  </div>

                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $data['mhs']['alamat'];?>">
                  </div>

                  <div class="form-group">
                    <label >Umur</label>
                    <input type="number" class="form-control"  name="umur" value="<?= $data['mhs']['umur'];?>">
                  </div>


                  <div class="form-group">

                  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
  <select class="form-select" aria-label="Default select example" name='jurusan'>
  <option selected>pilih jurusan</option>
  <option value="RPL">RPL</option>
  <option value="TKJ">TKJ</option>
  <option value="Multimedia">Multimedia</option>
</select>
   </div>
</div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="<?= BASE; ?>/mahasiswa" type="button" class="btn btn-info">Kembali</a>
                </div>
              </form>


         

</div>
</div>
</div>
</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->