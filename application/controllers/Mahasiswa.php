<?php


class Mahasiswa extends CI_Controller

{

	public function index()

{


// 	$data['mahasiswa'] = [
// [
// 		'nama' => 'Lukman Hidayah',
// 		'nrp' => '143040116',
// 		'email' => 'lukmandong@gmail.com',
// 		'jurusan' => 'Teknik Planologi'

// ],

// [

// 		'nama' => 'Adam Madut',
// 		'nrp' => '143040666',
// 		'email' => 'madutisdead666g@gmail.com',
// 		'jurusan' => 'Teknik Informatika'

// ]

// 	];
	$this->load->model('Mahasiswa_model');
	$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
	$this->load->view('mahasiswa/index', $data);

}
}





?>