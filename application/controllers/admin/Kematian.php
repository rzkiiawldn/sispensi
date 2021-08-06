<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kematian extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    belum_login_admin();
  }

  public function index()
  {
    $data = [
      'judul'    => 'Kematian',
      'user'     => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'     => $this->db->query("SELECT sp.id AS id_kematian, sp.*, warga.* FROM sk_kematian AS sp JOIN warga ON sp.id_warga = warga.id")
    ];
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/navbar');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/kematian/index');
    $this->load->view('admin/template/footer');
  }

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('sk_kematian');
    redirect('admin/kematian');
  }

  public function detail($id)
  {
    $data = [
      'judul'    => 'Kematian',
      'user'     => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'     => $this->db->query("SELECT sp.id AS id_kematian, sp.*, warga.* FROM sk_kematian AS sp JOIN warga ON sp.id_warga = warga.id WHERE sp.id = $id")->row_array()
    ];
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/navbar');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/kematian/detail');
    $this->load->view('admin/template/footer');
  }

  public function ubah_status()
  {
    $id = $this->input->post('id');
    $status = $this->input->post('status');

    $this->db->set('status', $status);
    $this->db->where('id', $id);
    $this->db->update('sk_kematian');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">status berhasil diubah</div>');
    redirect('admin/kematian');
  }

  public function cetak_seluruh_data()
  {
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_kematian, sp.*, warga.* FROM sk_kematian AS sp JOIN warga ON sp.id_warga = warga.id")->result_array()
    ];

    $this->load->view('admin/kematian/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  public function disetujui()
  {
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_kematian, sp.*, warga.* FROM sk_kematian AS sp JOIN warga ON sp.id_warga = warga.id WHERE status = 1")->result_array()
    ];

    $this->load->view('admin/kematian/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  public function ditolak()
  {
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_kematian, sp.*, warga.* FROM sk_kematian AS sp JOIN warga ON sp.id_warga = warga.id WHERE status = 2")->result_array()
    ];

    $this->load->view('admin/kematian/cetak_seluruh', $data);

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
      'data'             => $this->db->query("SELECT sp.id AS id_kematian, sp.*, warga.* FROM sk_kematian AS sp JOIN warga ON sp.id_warga = warga.id WHERE sp.id = $id")->row_array()
    ];

    $this->load->view('admin/kematian/cetak_individu', $data);

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
