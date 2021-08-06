<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function index()
	{
		$data = [
			'judul'			=> 'Beranda',
			'user'      => $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array(),
			'campaignn'	=> $this->db->query("SELECT * FROM campaign ORDER BY id DESC"),
			'campaign'	=> $this->db->query("SELECT * FROM campaign ORDER BY id DESC LIMIT 2")
		];
		$this->load->view('user/index', $data);
	}

	public function informasi()
	{
		$data = [
			'judul'			=> 'Informasi',
			'user'      => $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array(),
			'campaign'	=> $this->db->query("SELECT * FROM campaign ORDER BY id DESC")
		];
		$this->load->view('user/template/header', $data);
		$this->load->view('user/informasi');
		$this->load->view('user/template/footer');
	}

	public function surat_kematian()
	{
		belum_login();
		$data = [
			'judul'			=> 'Surat Kematian',
			'user'      => $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array()
		];
		$this->load->view('user/template/header', $data);
		$this->load->view('user/surat_kematian');
		$this->load->view('user/template/footer');
	}
	public function surat_kematian_lainnya()
	{
		belum_login();
		$data = [
			'judul'			=> 'Surat Kematian',
			'user'      => $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array()
		];
		$this->load->view('user/template/header', $data);
		$this->load->view('user/surat_kematian_lainnya');
		$this->load->view('user/template/footer');
	}

	public function akte_kelahiran()
	{
		belum_login();
		$data = [
			'judul'			=> 'Surat Kematian',
			'user'      => $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array()
		];
		$this->load->view('user/template/header', $data);
		$this->load->view('user/akte_kelahiran');
		$this->load->view('user/template/footer');
	}

	public function akte_kelahiran_lainnya()
	{
		belum_login();
		$data = [
			'judul'			=> 'Surat Kematian',
			'user'      => $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array()
		];
		$this->load->view('user/template/header', $data);
		$this->load->view('user/akte_kelahiran_lainnya');
		$this->load->view('user/template/footer');
	}

	public function kk_baru()
	{
		belum_login();
		$data = [
			'judul'			=> 'Pengajuan KK',
			'user'      => $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array()
		];
		$this->load->view('user/template/header', $data);
		$this->load->view('user/kk_baru');
		$this->load->view('user/template/footer');
	}
	public function kk_baru_lainnya()
	{
		belum_login();
		$data = [
			'judul'			=> 'Pengajuan KK',
			'user'      => $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array()
		];
		$this->load->view('user/template/header', $data);
		$this->load->view('user/kk_baru_lainnya');
		$this->load->view('user/template/footer');
	}

	public function tempat_tinggal()
	{
		belum_login();
		$data = [
			'judul'			=> 'Surat Kematian',
			'user'      => $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array()
		];
		$this->load->view('user/template/header', $data);
		$this->load->view('user/keterangan_tempat_tinggal');
		$this->load->view('user/template/footer');
	}
	public function tempat_tinggal_lainnya()
	{
		belum_login();
		$data = [
			'judul'			=> 'Surat Kematian',
			'user'      => $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array()
		];
		$this->load->view('user/template/header', $data);
		$this->load->view('user/keterangan_tempat_tinggal_lainnya');
		$this->load->view('user/template/footer');
	}

	public function kritik_saran()
	{
		belum_login();
		$data = [
			'judul'			=> 'Kritik & Saran',
			'user'      => $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array()
		];
		$this->load->view('user/template/header', $data);
		$this->load->view('user/kritik_saran');
		$this->load->view('user/template/footer');
	}

	public function keluhan()
	{
		belum_login();
		$data = [
			'judul'			=> 'Keluhan',
			'user'      => $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array(),
			'keluhan'		=> $this->db->get_where('keluhan', ['id_warga' => $this->session->userdata('id')])
		];
		$this->load->view('user/template/header', $data);
		$this->load->view('user/keluhan_list');
		$this->load->view('user/template/footer');
	}

	public function tambah_keluhan()
	{
		belum_login();
		$data = [
			'judul'			=> 'Keluhan',
			'user'      => $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array()
		];
		$this->load->view('user/template/header', $data);
		$this->load->view('user/keluhan');
		$this->load->view('user/template/footer');
	}

	public function hapus_keluhan($id_keluhan)
	{
		$this->db->where('id_keluhan', $id_keluhan);
		$this->db->delete('keluhan');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Keluhan dibatalkan</div>');
		redirect('user/keluhan');
	}

	public function riwayat_pengajuan()
	{
		belum_login();
		$user = $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array();
		$id = $user['id'];
		$data = [
			'judul'								=> 'riwayat',
			'user'      					=> $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array(),
			'data_kematian' 			=> $this->db->query("SELECT * FROM sk_kematian WHERE id_warga = $id"),
			'data_akte' 					=> $this->db->query("SELECT * FROM sp_akte_lahir WHERE id_warga = $id"),
			'data_kk'	 						=> $this->db->query("SELECT * FROM kk_baru WHERE id_warga = $id"),
			'data_tempat_tinggal' => $this->db->query("SELECT * FROM sk_tempat_tinggal WHERE id_warga = $id"),
		];
		$this->load->view('user/template/header', $data);
		$this->load->view('user/riwayat');
		$this->load->view('user/template/footer');
	}

	public function informasi_kependudukan()
	{
		$user = $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array();
		$id = $user['id'];
		$data = [
			'judul'					=> 'Informasi Kependudukan',
			'user'      		=> $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array()
		];
		$this->load->view('user/template/header', $data);
		$this->load->view('user/informasi_kependudukan');
		$this->load->view('user/template/footer');
	}

	public function profile()
	{
		belum_login();
		$user = $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array();

		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim', [
			'required' => 'Nama tidak boleh kosong'
		]);
		$this->form_validation->set_rules('no_tlp', 'No Telepon', 'required|trim', [
			'required' => 'No Telepon tidak boleh kosong'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required|trim', [
			'required' => 'Alamat tidak boleh kosong'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'trim|min_length[6]|matches[password2]', [
			'min_length' => 'password terlalu lemah',
			'matches'    => 'password tidak sama'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data = [
				'judul'	=> 'Edit Profile',
				'user'	=> $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array()
			];
			$this->load->view('user/template/header', $data);
			$this->load->view('user/profile');
			$this->load->view('user/template/footer');
		} else {
			$tempat_lahir 		= htmlspecialchars($this->input->post('tempat_lahir', TRUE));
			$tanggal_lahir 		= htmlspecialchars($this->input->post('tanggal_lahir', TRUE));
			$jenis_kelamin 		= htmlspecialchars($this->input->post('jenis_kelamin', TRUE));
			$nama_lengkap 		= htmlspecialchars($this->input->post('nama_lengkap', TRUE));
			$email 						= htmlspecialchars($this->input->post('email', TRUE));
			$id_warga 				= htmlspecialchars($this->input->post('id_warga', TRUE));
			$no_tlp 					= htmlspecialchars($this->input->post('no_tlp', TRUE));
			$alamat 					= htmlspecialchars($this->input->post('alamat', TRUE));
			$password 				= $this->input->post('password1');


			$this->db->set('nama_lengkap', $nama_lengkap);
			$this->db->set('no_tlp', $no_tlp);
			$this->db->set('email', $email);
			$this->db->set('tempat_lahir', $tempat_lahir);
			$this->db->set('tanggal_lahir', $tanggal_lahir);
			$this->db->set('jenis_kelamin', $jenis_kelamin);
			$this->db->set('alamat', $alamat);
			if (!empty($password)) {
				$this->db->set('password', password_hash($this->input->post('password1'), PASSWORD_DEFAULT));
			}
			$this->db->where('id', $id_warga);
			$this->db->update('warga');

			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat profil Surat berhasil di ubah</div>');
			redirect('user/profile');
		}
	}


	public function add_akte()
	{

		$config['allowed_types']    = 'jpg|PNG|png|jpeg|JPG|JPEG';
		$config['max_size']         = '2048';
		$config['upload_path']      = './assets/img/sp_akte_lahir/';

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('pengantar')) {
			$pengantar   = $this->upload->data('file_name');
		}

		if ($this->upload->do_upload('foto_kk')) {
			$kk   = $this->upload->data('file_name');
		}

		if ($this->upload->do_upload('foto_ktp')) {
			$ktp   = $this->upload->data('file_name');
		}

		if ($this->upload->do_upload('surat_nikah')) {
			$surat_nikah   = $this->upload->data('file_name');
		}

		if ($this->upload->do_upload('sk_lahir')) {
			$sk_lahir   = $this->upload->data('file_name');
		}
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$lahir  		= date_create($tanggal_lahir);
		$sekarang 	= date_create(); // waktu sekarang
		$selisih  	= date_diff($lahir, $sekarang);

		$data = [
			'id_warga'          => htmlspecialchars($this->input->post('id_warga', TRUE)),
			'nik'								=> $this->input->post('nik'),
			'nama'							=> $this->input->post('nama'),
			'tempat_lahir'			=> $this->input->post('tempat_lahir'),
			'tanggal_lahir'			=> $this->input->post('tanggal_lahir'),
			'umur'							=> $selisih->y,
			'jenis_kelamin'			=> $this->input->post('jenis_kelamin'),
			'tgl_permohonan'		=> date('Y-m-d'),
			'tgl_pengambilan'		=> $this->input->post('tgl_pengambilan'),
			'pengantar'         => $pengantar,
			'foto_ktp'         	=> $ktp,
			'foto_kk'         	=> $kk,
			'surat_nikah'       => $surat_nikah,
			'sk_lahir'         	=> $sk_lahir,
			'status'						=> 0
		];

		$this->db->insert('sp_akte_lahir', $data);
		// pesan dengan flash_data
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Surat berhasil dibuat, silahkan tunggu</div>');
		redirect('user/riwayat_pengajuan');
	}

	public function add_kk()
	{

		$config['allowed_types']    = 'jpg|PNG|png|jpeg|JPG|JPEG';
		$config['max_size']         = '2048';
		$config['upload_path']      = './assets/img/kk/';

		$this->load->library('upload', $config);


		if ($this->upload->do_upload('pengantar')) {
			$pengantar   = $this->upload->data('file_name');
		}

		if ($this->upload->do_upload('surat_nikah')) {
			$surat_nikah   = $this->upload->data('file_name');
		}

		if ($this->upload->do_upload('sk_pindah')) {
			$sk_pindah   = $this->upload->data('file_name');
		}

		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$lahir  		= date_create($tanggal_lahir);
		$sekarang 	= date_create(); // waktu sekarang
		$selisih  	= date_diff($lahir, $sekarang);

		$data = [
			'id_warga'          => htmlspecialchars($this->input->post('id_warga', TRUE)),
			'nik'								=> $this->input->post('nik'),
			'nama'							=> $this->input->post('nama'),
			'tempat_lahir'			=> $this->input->post('tempat_lahir'),
			'tanggal_lahir'			=> $this->input->post('tanggal_lahir'),
			'umur'							=> $selisih->y,
			'jenis_kelamin'			=> $this->input->post('jenis_kelamin'),
			'tgl_permohonan'		=> date('Y-m-d'),
			'tgl_pengambilan'		=> $this->input->post('tgl_pengambilan'),
			'pengantar'         => $pengantar,
			'surat_nikah'       => $surat_nikah,
			'sk_pindah'         => $sk_pindah,
			'status'						=> 0
		];

		$this->db->insert('kk_baru', $data);
		// pesan dengan flash_data
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Surat berhasil dibuat, silahkan tunggu</div>');
		redirect('user/riwayat_pengajuan');
	}

	public function add_kritik_saran()
	{
		$data = [
			'id_warga'  => htmlspecialchars($this->input->post('id_warga', TRUE)),
			'kritik'		=> $this->input->post('kritik'),
			'saran'			=> $this->input->post('saran')
		];

		$this->db->insert('kritik_saran', $data);
		// pesan dengan flash_data
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Surat berhasil dibuat, silahkan tunggu</div>');
		redirect('user/kritik_saran');
	}

	public function add_keluhan()
	{
		$data = [
			'id_warga'  => htmlspecialchars($this->input->post('id_warga', TRUE)),
			'keluhan'		=> $this->input->post('keluhan')
		];

		$this->db->insert('keluhan', $data);
		// pesan dengan flash_data
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Terimakasih, anda telah menambahkan keluhan</div>');
		redirect('user/keluhan');
	}

	public function add_tempat_tinggal()
	{

		$config['allowed_types']    = 'jpg|PNG|png|jpeg|JPG|JPEG';
		$config['max_size']         = '2048';
		$config['upload_path']      = './assets/img/tempat_tinggal/';

		$this->load->library('upload', $config);


		if ($this->upload->do_upload('foto_kk')) {
			$kk   = $this->upload->data('file_name');
		}

		if ($this->upload->do_upload('foto_ktp')) {
			$ktp   = $this->upload->data('file_name');
		}

		if ($this->upload->do_upload('pengantar')) {
			$pengantar   = $this->upload->data('file_name');
		}

		if ($this->upload->do_upload('surat_penjamin')) {
			$surat_penjamin   = $this->upload->data('file_name');
		}

		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$lahir  		= date_create($tanggal_lahir);
		$sekarang 	= date_create(); // waktu sekarang
		$selisih  	= date_diff($lahir, $sekarang);

		$data = [
			'id_warga'          => htmlspecialchars($this->input->post('id_warga', TRUE)),
			'nik'								=> $this->input->post('nik'),
			'nama'							=> $this->input->post('nama'),
			'tempat_lahir'			=> $this->input->post('tempat_lahir'),
			'tanggal_lahir'			=> $this->input->post('tanggal_lahir'),
			'umur'							=> $selisih->y,
			'jenis_kelamin'			=> $this->input->post('jenis_kelamin'),
			'tgl_permohonan'		=> date('Y-m-d'),
			'tgl_pengambilan'		=> $this->input->post('tgl_pengambilan'),
			'pengantar'         => $pengantar,
			'foto_ktp'         	=> $ktp,
			'foto_kk'         	=> $kk,
			'surat_penjamin'    => $surat_penjamin,
			'status'						=> 0
		];

		$this->db->insert('sk_tempat_tinggal', $data);
		// pesan dengan flash_data
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Surat berhasil dibuat, silahkan tunggu</div>');
		redirect('user/riwayat_pengajuan');
	}

	public function add_kematian()
	{

		$config['allowed_types']    = 'jpg|PNG|png|jpeg|JPG|JPEG';
		$config['max_size']         = '2048';
		$config['upload_path']      = './assets/img/sk_kematian/';

		$this->load->library('upload', $config);


		if ($this->upload->do_upload('foto_ktp')) {
			$ktp   = $this->upload->data('file_name');
		}

		if ($this->upload->do_upload('surat_nikah')) {
			$surat_nikah   = $this->upload->data('file_name');
		}

		if ($this->upload->do_upload('sk_lahir')) {
			$sk_lahir   = $this->upload->data('file_name');
		}

		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$lahir  		= date_create($tanggal_lahir);
		$sekarang 	= date_create(); // waktu sekarang
		$selisih  	= date_diff($lahir, $sekarang);

		$data = [
			'id_warga'          => htmlspecialchars($this->input->post('id_warga', TRUE)),
			'nik'								=> $this->input->post('nik'),
			'nama'							=> $this->input->post('nama'),
			'tempat_lahir'			=> $this->input->post('tempat_lahir'),
			'tanggal_lahir'			=> $this->input->post('tanggal_lahir'),
			'umur'							=> $selisih->y,
			'jenis_kelamin'			=> $this->input->post('jenis_kelamin'),
			'pekerjaan'					=> $this->input->post('pekerjaan'),
			'tanggal_kematian'	=> $this->input->post('tanggal_kematian'),
			'tgl_permohonan'		=> date('Y-m-d'),
			'tgl_pengambilan'		=> $this->input->post('tgl_pengambilan'),
			'foto_ktp'         	=> $ktp,
			'surat_nikah'       => $surat_nikah,
			'sk_lahir'         	=> $sk_lahir,
			'status'						=> 0
		];

		$this->db->insert('sk_kematian', $data);
		// pesan dengan flash_data
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Surat berhasil dibuat, silahkan tunggu</div>');
		redirect('user/riwayat_pengajuan');
	}

	public function detail_riwayat_kk($id)
	{
		belum_login();
		$data = [
			'judul'			=> 'Pembuatan KK',
			'hal'				=> 'kk',
			'user'      => $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array(),
			'riwayat'		=> $this->db->query("SELECT rw.nik AS nik_pemohon, rw.nama AS nama_pemohon, rw.tempat_lahir AS tempat_lahir_pemohon, rw.tanggal_lahir AS tanggal_lahir_pemohon, rw.jenis_kelamin AS jenis_kelamin_pemohon, rw.* FROM kk_baru AS rw JOIN warga ON warga.id = rw.id_warga WHERE rw.id = $id ")->row_array()
		];
		$this->load->view('user/template/header', $data);
		$this->load->view('user/detail_riwayat');
		$this->load->view('user/template/footer');
	}

	public function detail_riwayat_akte($id)
	{
		belum_login();
		$data = [
			'judul'			=> 'Pembuatan Akte',
			'hal'				=> 'akte',
			'user'      => $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array(),
			'riwayat'		=> $this->db->query("SELECT rw.nik AS nik_pemohon, rw.nama AS nama_pemohon, rw.tempat_lahir AS tempat_lahir_pemohon, rw.tanggal_lahir AS tanggal_lahir_pemohon, rw.jenis_kelamin AS jenis_kelamin_pemohon, rw.* FROM sp_akte_lahir AS rw JOIN warga ON warga.id = rw.id_warga WHERE rw.id = $id ")->row_array()
		];
		$this->load->view('user/template/header', $data);
		$this->load->view('user/detail_riwayat');
		$this->load->view('user/template/footer');
	}

	public function detail_riwayat_kematian($id)
	{
		belum_login();
		$data = [
			'judul'			=> 'Pembuatan Surat Kematian',
			'hal'				=> 'kematian',
			'user'      => $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array(),
			'riwayat'		=> $this->db->query("SELECT rw.nik AS nik_pemohon, rw.nama AS nama_pemohon, rw.tempat_lahir AS tempat_lahir_pemohon, rw.tanggal_lahir AS tanggal_lahir_pemohon, rw.jenis_kelamin AS jenis_kelamin_pemohon, rw.* FROM sk_kematian AS rw JOIN warga ON warga.id = rw.id_warga WHERE rw.id = $id ")->row_array()
		];
		$this->load->view('user/template/header', $data);
		$this->load->view('user/detail_riwayat');
		$this->load->view('user/template/footer');
	}

	public function detail_riwayat_tempat_tinggal($id)
	{
		belum_login();
		$data = [
			'judul'			=> 'Pembuatan Tempat Tinggal',
			'hal'				=> 'tempat_tinggal',
			'user'      => $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array(),
			'riwayat'		=> $this->db->query("SELECT rw.nik AS nik_pemohon, rw.nama AS nama_pemohon, rw.tempat_lahir AS tempat_lahir_pemohon, rw.tanggal_lahir AS tanggal_lahir_pemohon, rw.jenis_kelamin AS jenis_kelamin_pemohon, rw.* FROM sk_tempat_tinggal AS rw JOIN warga ON warga.id = rw.id_warga WHERE rw.id = $id ")->row_array()
		];
		$this->load->view('user/template/header', $data);
		$this->load->view('user/detail_riwayat');
		$this->load->view('user/template/footer');
	}

	// CETAK PERMOHONAN

	public function cetak_biodata()
	{
		$this->load->library('dompdf_gen');
		$data = [
			'judul'            => 'Laporan',
			'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
			'data'             => $this->db->get_where('warga', ['id' => $this->session->userdata('id')])->row_array(),
		];

		$this->load->view('user/cetak/biodata', $data);

		$paper_size         = 'A4';
		$orientation        = 'potrait';
		$html               = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		ob_end_clean();
		$this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
	}

	public function cetak_kependudukan()
	{
		$this->load->library('dompdf_gen');
		$data = [
			'judul'            => 'Laporan',
			'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
			'data'             => $this->db->get_where('warga', ['id' => $this->session->userdata('id')])->row_array(),
		];

		$this->load->view('user/cetak/cetak_kependudukan', $data);

		$paper_size         = 'A4';
		$orientation        = 'potrait';
		$html               = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		ob_end_clean();
		$this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
	}

	public function cetak_kk($id)
	{
		$this->load->library('dompdf_gen');
		$data = [
			'judul'            => 'Laporan',
			'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
			'data'             => $this->db->query("SELECT * FROM kk_baru WHERE id = $id")->row_array()
		];

		$this->load->view('user/cetak/kk', $data);

		$paper_size         = 'A4';
		$orientation        = 'potrait';
		$html               = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		ob_end_clean();
		$this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
	}

	public function cetak_akte($id)
	{
		$this->load->library('dompdf_gen');
		$data = [
			'judul'            => 'Laporan',
			'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
			'data'             => $this->db->query("SELECT * FROM sp_akte_lahir WHERE id = $id")->row_array()
		];

		$this->load->view('user/cetak/akte', $data);

		$paper_size         = 'A4';
		$orientation        = 'potrait';
		$html               = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		ob_end_clean();
		$this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
	}

	public function cetak_tempat_tinggal($id)
	{
		$this->load->library('dompdf_gen');
		$data = [
			'judul'            => 'Laporan',
			'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
			'data'             => $this->db->query("SELECT * FROM sk_tempat_tinggal WHERE id = $id")->row_array()
		];

		$this->load->view('user/cetak/tempat_tinggal', $data);

		$paper_size         = 'A4';
		$orientation        = 'potrait';
		$html               = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		ob_end_clean();
		$this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
	}

	public function cetak_kematian($id)
	{
		$this->load->library('dompdf_gen');
		$data = [
			'judul'            => 'Laporan',
			'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
			'data'             => $this->db->query("SELECT * FROM sk_kematian WHERE id = $id")->row_array()
		];

		$this->load->view('user/cetak/kematian', $data);

		$paper_size         = 'A4';
		$orientation        = 'potrait';
		$html               = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		ob_end_clean();
		$this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
	}
}
