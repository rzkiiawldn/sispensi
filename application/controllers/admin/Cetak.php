<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    belum_login_admin();
  }

  public function index()
  {
    $data = [
      'judul'    => 'Cetak Data',
      'user'     => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'     => $this->db->query("SELECT sp.id AS id_kk, sp.*, warga.* FROM kk_baru AS sp JOIN warga ON sp.id_warga = warga.id")
    ];
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/navbar');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/cetak/index');
    $this->load->view('admin/template/footer');
  }

  public function kartu_keluarga()
  {
    $data = [
      'judul'    => 'Cetak Data',
      'user'     => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'     => $this->db->query("SELECT sp.id AS id_kk, sp.*, warga.* FROM kk_baru AS sp JOIN warga ON sp.id_warga = warga.id")
    ];
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/navbar');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/cetak/kartu_keluarga');
    $this->load->view('admin/template/footer');
  }

  public function akte_kelahiran()
  {
    $data = [
      'judul'    => 'Cetak Data',
      'user'     => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'     => $this->db->query("SELECT sp.id AS id_kk, sp.*, warga.* FROM kk_baru AS sp JOIN warga ON sp.id_warga = warga.id")
    ];
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/navbar');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/cetak/akte_kelahiran');
    $this->load->view('admin/template/footer');
  }

  public function kematian()
  {
    $data = [
      'judul'    => 'Cetak Data',
      'user'     => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'     => $this->db->query("SELECT sp.id AS id_kk, sp.*, warga.* FROM kk_baru AS sp JOIN warga ON sp.id_warga = warga.id")
    ];
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/navbar');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/cetak/kematian');
    $this->load->view('admin/template/footer');
  }

  public function tempat_tinggal()
  {
    $data = [
      'judul'    => 'Cetak Data',
      'user'     => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'     => $this->db->query("SELECT sp.id AS id_kk, sp.*, warga.* FROM kk_baru AS sp JOIN warga ON sp.id_warga = warga.id")
    ];
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/navbar');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/cetak/tempat_tinggal');
    $this->load->view('admin/template/footer');
  }

  // CETAK

  public function akte_kelahiran_seluruh_data_bulanan()
  {

    $bulan      = $this->input->post('bulan');
    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM sp_akte_lahir AS sp JOIN warga ON sp.id_warga = warga.id WHERE MONTH(tgl_permohonan) = '$bulan' AND YEAR(tgl_permohonan) = '$tahun'")->result_array()
    ];

    $this->load->view('admin/akte_kelahiran/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  public function akte_kelahiran_seluruh_data_tahunan()
  {

    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM sp_akte_lahir AS sp JOIN warga ON sp.id_warga = warga.id WHERE YEAR(tgl_permohonan) = '$tahun'")->result_array()
    ];

    $this->load->view('admin/akte_kelahiran/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  public function akte_kelahiran_disetujui_bulanan()
  {

    $bulan      = $this->input->post('bulan');
    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM sp_akte_lahir AS sp JOIN warga ON sp.id_warga = warga.id WHERE MONTH(tgl_permohonan) = '$bulan' AND YEAR(tgl_permohonan) = '$tahun' AND status = 1")->result_array()
    ];

    $this->load->view('admin/akte_kelahiran/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  public function akte_kelahiran_disetujui_tahunan()
  {

    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM sp_akte_lahir AS sp JOIN warga ON sp.id_warga = warga.id WHERE YEAR(tgl_permohonan) = '$tahun' AND status = 1")->result_array()
    ];

    $this->load->view('admin/akte_kelahiran/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  public function akte_kelahiran_ditolak_bulanan()
  {

    $bulan      = $this->input->post('bulan');
    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM sp_akte_lahir AS sp JOIN warga ON sp.id_warga = warga.id WHERE MONTH(tgl_permohonan) = '$bulan' AND YEAR(tgl_permohonan) = '$tahun' AND status = 2")->result_array()
    ];

    $this->load->view('admin/akte_kelahiran/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  public function akte_kelahiran_ditolak_tahunan()
  {

    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM sp_akte_lahir AS sp JOIN warga ON sp.id_warga = warga.id WHERE YEAR(tgl_permohonan) = '$tahun' AND status = 2")->result_array()
    ];

    $this->load->view('admin/akte_kelahiran/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  // TEMPAT TINGGAL

  public function tempat_tinggal_seluruh_data_bulanan()
  {

    $bulan      = $this->input->post('bulan');
    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM sk_tempat_tinggal AS sp JOIN warga ON sp.id_warga = warga.id WHERE MONTH(tgl_permohonan) = '$bulan' AND YEAR(tgl_permohonan) = '$tahun'")->result_array()
    ];

    $this->load->view('admin/tempat_tinggal/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  public function tempat_tinggal_seluruh_data_tahunan()
  {

    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM sk_tempat_tinggal AS sp JOIN warga ON sp.id_warga = warga.id WHERE YEAR(tgl_permohonan) = '$tahun'")->result_array()
    ];

    $this->load->view('admin/tempat_tinggal/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  public function tempat_tinggal_disetujui_bulanan()
  {

    $bulan      = $this->input->post('bulan');
    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM sk_tempat_tinggal AS sp JOIN warga ON sp.id_warga = warga.id WHERE MONTH(tgl_permohonan) = '$bulan' AND YEAR(tgl_permohonan) = '$tahun' AND status = 1")->result_array()
    ];

    $this->load->view('admin/tempat_tinggal/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  public function tempat_tinggal_disetujui_tahunan()
  {

    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM sk_tempat_tinggal AS sp JOIN warga ON sp.id_warga = warga.id WHERE YEAR(tgl_permohonan) = '$tahun' AND status = 1")->result_array()
    ];

    $this->load->view('admin/tempat_tinggal/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  public function tempat_tinggal_ditolak_bulanan()
  {

    $bulan      = $this->input->post('bulan');
    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM sk_tempat_tinggal AS sp JOIN warga ON sp.id_warga = warga.id WHERE MONTH(tgl_permohonan) = '$bulan' AND YEAR(tgl_permohonan) = '$tahun' AND status = 2")->result_array()
    ];

    $this->load->view('admin/tempat_tinggal/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  public function tempat_tinggal_ditolak_tahunan()
  {

    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM sk_tempat_tinggal AS sp JOIN warga ON sp.id_warga = warga.id WHERE YEAR(tgl_permohonan) = '$tahun' AND status = 2")->result_array()
    ];

    $this->load->view('admin/tempat_tinggal/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  // KK

  public function kartu_keluarga_seluruh_data_bulanan()
  {

    $bulan      = $this->input->post('bulan');
    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM kk_baru AS sp JOIN warga ON sp.id_warga = warga.id WHERE MONTH(tgl_permohonan) = '$bulan' AND YEAR(tgl_permohonan) = '$tahun'")->result_array()
    ];

    $this->load->view('admin/kartu_keluarga/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  public function kartu_keluarga_seluruh_data_tahunan()
  {

    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM kk_baru AS sp JOIN warga ON sp.id_warga = warga.id WHERE YEAR(tgl_permohonan) = '$tahun'")->result_array()
    ];

    $this->load->view('admin/kartu_keluarga/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  public function kartu_keluarga_disetujui_bulanan()
  {

    $bulan      = $this->input->post('bulan');
    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM kk_baru AS sp JOIN warga ON sp.id_warga = warga.id WHERE MONTH(tgl_permohonan) = '$bulan' AND YEAR(tgl_permohonan) = '$tahun' AND status = 1")->result_array()
    ];

    $this->load->view('admin/kartu_keluarga/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  public function kartu_keluarga_disetujui_tahunan()
  {

    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM kk_baru AS sp JOIN warga ON sp.id_warga = warga.id WHERE YEAR(tgl_permohonan) = '$tahun' AND status = 1")->result_array()
    ];

    $this->load->view('admin/kartu_keluarga/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  public function kartu_keluarga_ditolak_bulanan()
  {

    $bulan      = $this->input->post('bulan');
    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM kk_baru AS sp JOIN warga ON sp.id_warga = warga.id WHERE MONTH(tgl_permohonan) = '$bulan' AND YEAR(tgl_permohonan) = '$tahun' AND status = 2")->result_array()
    ];

    $this->load->view('admin/kartu_keluarga/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  public function kartu_keluarga_ditolak_tahunan()
  {

    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM kk_baru AS sp JOIN warga ON sp.id_warga = warga.id WHERE YEAR(tgl_permohonan) = '$tahun' AND status = 2")->result_array()
    ];

    $this->load->view('admin/kartu_keluarga/cetak_seluruh', $data);

    $paper_size         = 'A4';
    $orientation        = 'potrait';
    $html               = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    ob_end_clean();
    $this->dompdf->stream("laporan.pdf", array('Attachment' => 0));
  }

  // KEMATIAN

  public function kematian_seluruh_data_bulanan()
  {

    $bulan      = $this->input->post('bulan');
    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM sk_kematian AS sp JOIN warga ON sp.id_warga = warga.id WHERE MONTH(tgl_permohonan) = '$bulan' AND YEAR(tgl_permohonan) = '$tahun'")->result_array()
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

  public function kematian_seluruh_data_tahunan()
  {

    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM sk_kematian AS sp JOIN warga ON sp.id_warga = warga.id WHERE YEAR(tgl_permohonan) = '$tahun'")->result_array()
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

  public function kematian_disetujui_bulanan()
  {

    $bulan      = $this->input->post('bulan');
    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM sk_kematian AS sp JOIN warga ON sp.id_warga = warga.id WHERE MONTH(tgl_permohonan) = '$bulan' AND YEAR(tgl_permohonan) = '$tahun' AND status = 1")->result_array()
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

  public function kematian_disetujui_tahunan()
  {

    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM sk_kematian AS sp JOIN warga ON sp.id_warga = warga.id WHERE YEAR(tgl_permohonan) = '$tahun' AND status = 1")->result_array()
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

  public function kematian_ditolak_bulanan()
  {

    $bulan      = $this->input->post('bulan');
    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM sk_kematian AS sp JOIN warga ON sp.id_warga = warga.id WHERE MONTH(tgl_permohonan) = '$bulan' AND YEAR(tgl_permohonan) = '$tahun' AND status = 2")->result_array()
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

  public function kematian_ditolak_tahunan()
  {

    $tahun      = $this->input->post('tahun');
    $this->load->library('dompdf_gen');
    $data = [
      'judul'            => 'Laporan',
      'gambar'           => FCPATH . 'assets/img/jakarta.jpeg',
      'user'             => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'data'             => $this->db->query("SELECT sp.id AS id_akte, sp.*, warga.* FROM sk_kematian AS sp JOIN warga ON sp.id_warga = warga.id WHERE YEAR(tgl_permohonan) = '$tahun' AND status = 2")->result_array()
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
}
