<?php



 class About extends Controller{

  public function index($nama = 'Faiz'){


  $data['judul'] = 'About Index';
  $data['nama']  = $nama;
  $this->view('templates/header', $data);
  $this->view('about/index', $data);
  $this->view('templates/footer');

  }

   public function page(){

$data['judul'] = 'About Page';
$this->view('templates/header', $data);
$this->view('about/page');
$this->view('templates/footer');
   }


 }

 ?>
