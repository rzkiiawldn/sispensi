<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Warga extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    belum_login_admin();
  }

  public function index()
  {
    $data = [
      'judul'    => 'Data Warga',
      'user'     => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'     => $this->db->query("SELECT * FROM warga")
    ];
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/navbar');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/warga/index');
    $this->load->view('admin/template/footer');
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('warga');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">berhasil dihapus</div>');
    redirect('admin/warga');
  }

  public function detail($id)
  {
    $data = [
      'judul'    => 'Detail Warga',
      'user'     => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'     => $this->db->query("SELECT * FROM warga WHERE id = $id")->row_array()
    ];
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/navbar');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/warga/detail');
    $this->load->view('admin/template/footer');
  }

  public function cetak_seluruh_data()
  {
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT * FROM warga")->result_array()
    ];

    $this->load->view('admin/warga/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  public function cetak_individu($id)
  {
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT * FROM warga WHERE id = $id")->row_array()
    ];

    $this->load->view('admin/warga/cetak_individu', $data);

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
