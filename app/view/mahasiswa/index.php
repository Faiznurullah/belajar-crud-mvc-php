
 <div class="container">


 <div class="row mt-5">
      <div class="col-lg-6">


      <?=  Flasher::flash(); ?>

</div>
</div>





  <div class="row mt-5">
      <div class="col-lg-6">

      <button type="button" class="btn btn-primary TombolTambahData" data-bs-toggle="modal" data-bs-target="#exampleModal">
       Tambah Data
      </button>

       <p class="mt-1">Data Mahasiswa</p>

     <ul class="list-group">
   <?php foreach ($data['mhs'] as $mhs) : ?>
      <li class="list-group-item">
        <?= $mhs['nama']; ?>

      <a href="<?= BASE; ?>/mahasiswa/edit/<?= $mhs['id']; ?>" class="badge text-bg-success float-end">Edit</a>
       <a href="<?= BASE; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge text-bg-danger float-end" onclick="return confirm('Yakin Menghapus Data ?')">Hapus</a> &nbsp;
       <a href="<?= BASE; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary float-end">Detail</a>
       
      </li>
  <?php endforeach; ?>
    </ul>



      </div>
    </div>


</div>






<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelTeks">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


      <form action="<?= BASE; ?>/mahasiswa/tambah" method="post">

      <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama Mahasiswa</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name='nama'>
    </div>

    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Alamat</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name='alamat'>
    </div>


    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Umur</label>
  <input type="number" class="form-control" id="exampleFormControlInput1" name='umur'>
    </div>

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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Kirim</button>
   </form>

      </div>
    </div>
  </div>
</div>



