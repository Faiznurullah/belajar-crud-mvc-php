
 <div class="container">





  <div class="row">
      <div class="col-6">
       <p class="mt-5">Data Mahasiswa</p>



     <ul class="list-group">
   <?php foreach ($data['mhs'] as $mhs) : ?>
      <li class="list-group-item d-flex justify-content-between">
        <?= $mhs['nama']; ?>
       <a href="<?= BASE; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary">Detail</a>
      </li>
  <?php endforeach; ?>
    </ul>



      </div>
    </div>


</div>
