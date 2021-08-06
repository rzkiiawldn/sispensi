<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keluhan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    belum_login_admin();
  }

  public function index()
  {
    $data = [
      'judul'    => 'Keluhan',
      'user'     => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'     => $this->db->query("SELECT * FROM keluhan AS sp JOIN warga ON sp.id_warga = warga.id")
    ];
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/navbar');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/keluhan/index');
    $this->load->view('admin/template/footer');
  }

  public function delete($id)
  {
    $this->db->where('id_keluhan', $id);
    $this->db->delete('keluhan');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">keluhan dihapus</div>');
    redirect('admin/keluhan');
  }

  public function cetak_seluruh_data()
  {
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT * FROM keluhan")->result_array()
    ];

    $this->load->view('admin/keluhan/cetak_seluruh', $data);

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
