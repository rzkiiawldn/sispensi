<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Campaign extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    belum_login_admin();
  }

  public function index()
  {
    $data = [
      'judul'    => 'Daftar Informasi',
      'user'     => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'campaign' => $this->db->get('campaign')
    ];
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/navbar');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/campaign/index');
    $this->load->view('admin/template/footer');
  }

  public function tambah()
  {
    $data = [
      'judul'    => 'Tambah Informasi',
      'user'     => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array()
    ];
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/navbar');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/campaign/tambah');
    $this->load->view('admin/template/footer');
  }

  public function edit($id)
  {
    $data = [
      'judul'    => 'Edit Informasi',
      'user'     => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'campaign' => $this->db->get_where('campaign', ['id' => $id])->row_array()
    ];
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/navbar');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/campaign/edit');
    $this->load->view('admin/template/footer');
  }

  public function add()
  {

    $config['allowed_types']    = 'jpg|PNG|png|jpeg|JPG|JPEG';
    $config['max_size']         = '2048';
    $config['upload_path']      = './assets/img/campaign/';

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar_campaign')) {
      $gambar_campaign   = $this->upload->data('file_name');
    }

    $data = [
      'nama_campaign'       => $this->input->post('nama_campaign'),
      'gambar_campaign'     => $gambar_campaign,
      'deskripsi_campaign'  => $this->input->post('deskripsi_campaign'),
    ];

    $this->db->insert('campaign', $data);
    // pesan dengan flash_data
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Informasi berhasil ditambahkan</div>');
    redirect('admin/campaign');
  }

  public function edit_data()
  {
    $id                   = $this->input->post('id');
    $nama_campaign        = $this->input->post('nama_campaign');
    $deskripsi_campaign   = $this->input->post('deskripsi_campaign');
    $gambar_campaign = $_FILES['gambar_campaign'];
    if ($gambar_campaign = '') {
    } else {
      $config['allowed_types']    = 'jpg|PNG|png|jpeg|JPG|JPEG';
      $config['max_size']         = '2048';
      $config['upload_path']      = './assets/img/campaign/';
      $this->load->library('upload', $config);
      if ($this->upload->do_upload('gambar_campaign')) {
        $gambar_campaign   = $this->upload->data('file_name');
        $this->db->set('gambar_campaign', $gambar_campaign);
      } else {
        $this->db->set('nama_campaign', $nama_campaign);
        $this->db->set('deskripsi_campaign', $deskripsi_campaign);
        $this->db->where('id', $id);
        $this->db->update('campaign');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Edit data berhasil</div>');
        redirect('admin/campaign');
      }
    }
    $this->db->set('nama_campaign', $nama_campaign);
    $this->db->set('deskripsi_campaign', $deskripsi_campaign);
    $this->db->where('id', $id);
    $this->db->update('campaign');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">edit data berhasil</div>');
    redirect('admin/campaign');
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('campaign');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Informasi dihapus </div>');
    redirect('admin/campaign');
  }
}
