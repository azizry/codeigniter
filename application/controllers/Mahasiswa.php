<?php 

class Mahasiswa extends CI_Controller
{
	public function index()
	{
		// $data['mahasiswa'] = [
		// 	[
		// 		'nama' => 'Aziz Luqman Hidayat',
		// 		'nrp' => '173040070',
		// 		'email' => 'azizluqmanhidayat@gmail.com',
		// 		'jurusan' => 'Teknik Informatika'
		// 	],

		// 	[
		// 		'nama' => 'Ardiana Juniawan Salim',
		// 		'nrp' => '173040116',
		// 		'email' => 'ardiyana14@gmail.com',
		// 		'jurusan' => 'Teknik Mesin'
		// 	],
		// ];

		$this->load->model('Mahasiswa_model', 'mhs');
		$data['mahasiswa'] = $this->mhs->getAllMahasiswa();
		$this->load->view('mahasiswa/index', $data);
	}
}