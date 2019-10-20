<?php 

class About extends CI_Controller {
    public function index($nama = '')
    {
        $data['judul'] = 'Halaman About';
        $data['nama'] = 'Riangembira';
         $data['umur'] = '21';
          $data['pekerjaan'] = 'Santuy Dude';
        $this->load->view('templates/header', $data);
        $this->load->view('about/index', $data);
        $this->load->view('templates/footer');
    }
}