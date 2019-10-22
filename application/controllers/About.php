<?php 


class About extends CI_Controller {

	public function index($nama = 'Rian', $pekerjaan = 'Ngoding Terus Sampe mampus', $umur = 21) {

		// echo "Halo, nama saya $nama, saya adalah $pekerjaan";
		$data ['nama'] = $nama;
		$data ['pekerjaan'] = $pekerjaan;
		$data ['umur'] = $umur;
		$data['judul'] = 'About Me';
		$this->load->view('templates/header', $data);
		$this->load->view('about/index', $data);
		$this->load->view('templates/footer');
	}



	public function page() {
		$data['judul'] = 'Pages';
		$this->load->view('templates/header', $data);
		$this->load->view('about/page');
		$this->load->view('templates/footer');
	

	}
 
	

}



 ?>