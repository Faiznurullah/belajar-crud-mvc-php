<?php


 class Mahasiswa extends Controller {
    

  public function index(){


   $data['judul'] = 'Daftar Mahasiswa';
   $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
   $this->view('templates/header', $data);
   $this->view('mahasiswa/index', $data);
   $this->view('templates/footer');


  }

  public function detail($id){


   $data['judul'] = 'Detail Mahasiswa';
   $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
   $this->view('templates/header', $data);
   $this->view('mahasiswa/detail', $data);
   $this->view('templates/footer');


   
  }


  public function edit($id){


   $data['judul'] = 'Edit Mahasiswa';
   $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
   $this->view('templates/header', $data);
   $this->view('mahasiswa/edit', $data);
   $this->view('templates/footer');


   
  }

  public function editMahasiswa(){	
   if( $this->model('Mahasiswa_model')->updateMahasiswa($_POST) > 0 ) {
      Flasher::setFlash('Berhasil','diupdate','success');
      header('location: '. BASE . '/mahasiswa');
      exit;			
   }else{
      Flasher::setFlash('Gagal','diupdate','danger');
      header('location: '. BASE . '/mahasiswa');
      exit;	
   }
}


  public function tambah(){
     if( $this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0){
     Flasher::setFlash('Berhasil', 'Ditambahkan', 'primary');
     header('Location: ' . BASE . '/mahasiswa');
     exit;
     }else{
      Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
      header('Location: ' . BASE . '/mahasiswa');
      exit;
     }
  }

  public function hapus($id){
   if( $this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0){
   Flasher::setFlash('Berhasil', 'Dihapus', 'primary');
   header('Location: ' . BASE . '/mahasiswa');
   exit;
   }else{
    Flasher::setFlash('Gagal', 'Dihapus', 'danger');
    header('Location: ' . BASE . '/mahasiswa');
    exit;
   }
}







 }


 ?>
