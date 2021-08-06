<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    belum_login_admin();
  }

  public function index()
  {
    $kk_1   = $this->db->query("SELECT * FROM kk_baru WHERE MONTH(tgl_permohonan) = '01' ")->num_rows();
    $kk_2   = $this->db->query("SELECT * FROM kk_baru WHERE MONTH(tgl_permohonan) = '02' ")->num_rows();
    $kk_3   = $this->db->query("SELECT * FROM kk_baru WHERE MONTH(tgl_permohonan) = '03' ")->num_rows();
    $kk_4   = $this->db->query("SELECT * FROM kk_baru WHERE MONTH(tgl_permohonan) = '04' ")->num_rows();
    $kk_5   = $this->db->query("SELECT * FROM kk_baru WHERE MONTH(tgl_permohonan) = '05' ")->num_rows();
    $kk_6   = $this->db->query("SELECT * FROM kk_baru WHERE MONTH(tgl_permohonan) = '06' ")->num_rows();
    $kk_7   = $this->db->query("SELECT * FROM kk_baru WHERE MONTH(tgl_permohonan) = '07' ")->num_rows();
    $kk_8   = $this->db->query("SELECT * FROM kk_baru WHERE MONTH(tgl_permohonan) = '08' ")->num_rows();
    $kk_9   = $this->db->query("SELECT * FROM kk_baru WHERE MONTH(tgl_permohonan) = '09' ")->num_rows();
    $kk_10  = $this->db->query("SELECT * FROM kk_baru WHERE MONTH(tgl_permohonan) = '10' ")->num_rows();
    $kk_11  = $this->db->query("SELECT * FROM kk_baru WHERE MONTH(tgl_permohonan) = '11' ")->num_rows();
    $kk_12  = $this->db->query("SELECT * FROM kk_baru WHERE MONTH(tgl_permohonan) = '12' ")->num_rows();
    // Akte
    $akte_1   = $this->db->query("SELECT * FROM sp_akte_lahir WHERE MONTH(tgl_permohonan) = '01' ")->num_rows();
    $akte_2   = $this->db->query("SELECT * FROM sp_akte_lahir WHERE MONTH(tgl_permohonan) = '02' ")->num_rows();
    $akte_3   = $this->db->query("SELECT * FROM sp_akte_lahir WHERE MONTH(tgl_permohonan) = '03' ")->num_rows();
    $akte_4   = $this->db->query("SELECT * FROM sp_akte_lahir WHERE MONTH(tgl_permohonan) = '04' ")->num_rows();
    $akte_5   = $this->db->query("SELECT * FROM sp_akte_lahir WHERE MONTH(tgl_permohonan) = '05' ")->num_rows();
    $akte_6   = $this->db->query("SELECT * FROM sp_akte_lahir WHERE MONTH(tgl_permohonan) = '06' ")->num_rows();
    $akte_7   = $this->db->query("SELECT * FROM sp_akte_lahir WHERE MONTH(tgl_permohonan) = '07' ")->num_rows();
    $akte_8   = $this->db->query("SELECT * FROM sp_akte_lahir WHERE MONTH(tgl_permohonan) = '08' ")->num_rows();
    $akte_9   = $this->db->query("SELECT * FROM sp_akte_lahir WHERE MONTH(tgl_permohonan) = '09' ")->num_rows();
    $akte_10  = $this->db->query("SELECT * FROM sp_akte_lahir WHERE MONTH(tgl_permohonan) = '10' ")->num_rows();
    $akte_11  = $this->db->query("SELECT * FROM sp_akte_lahir WHERE MONTH(tgl_permohonan) = '11' ")->num_rows();
    $akte_12  = $this->db->query("SELECT * FROM sp_akte_lahir WHERE MONTH(tgl_permohonan) = '12' ")->num_rows();
    // Kematian
    $kematian_1   = $this->db->query("SELECT * FROM sk_kematian WHERE MONTH(tgl_permohonan) = '01' ")->num_rows();
    $kematian_2   = $this->db->query("SELECT * FROM sk_kematian WHERE MONTH(tgl_permohonan) = '02' ")->num_rows();
    $kematian_3   = $this->db->query("SELECT * FROM sk_kematian WHERE MONTH(tgl_permohonan) = '03' ")->num_rows();
    $kematian_4   = $this->db->query("SELECT * FROM sk_kematian WHERE MONTH(tgl_permohonan) = '04' ")->num_rows();
    $kematian_5   = $this->db->query("SELECT * FROM sk_kematian WHERE MONTH(tgl_permohonan) = '05' ")->num_rows();
    $kematian_6   = $this->db->query("SELECT * FROM sk_kematian WHERE MONTH(tgl_permohonan) = '06' ")->num_rows();
    $kematian_7   = $this->db->query("SELECT * FROM sk_kematian WHERE MONTH(tgl_permohonan) = '07' ")->num_rows();
    $kematian_8   = $this->db->query("SELECT * FROM sk_kematian WHERE MONTH(tgl_permohonan) = '08' ")->num_rows();
    $kematian_9   = $this->db->query("SELECT * FROM sk_kematian WHERE MONTH(tgl_permohonan) = '09' ")->num_rows();
    $kematian_10  = $this->db->query("SELECT * FROM sk_kematian WHERE MONTH(tgl_permohonan) = '10' ")->num_rows();
    $kematian_11  = $this->db->query("SELECT * FROM sk_kematian WHERE MONTH(tgl_permohonan) = '11' ")->num_rows();
    $kematian_12  = $this->db->query("SELECT * FROM sk_kematian WHERE MONTH(tgl_permohonan) = '12' ")->num_rows();
    // Kematian
    $tt_1   = $this->db->query("SELECT * FROM sk_tempat_tinggal WHERE MONTH(tgl_permohonan) = '01' ")->num_rows();
    $tt_2   = $this->db->query("SELECT * FROM sk_tempat_tinggal WHERE MONTH(tgl_permohonan) = '02' ")->num_rows();
    $tt_3   = $this->db->query("SELECT * FROM sk_tempat_tinggal WHERE MONTH(tgl_permohonan) = '03' ")->num_rows();
    $tt_4   = $this->db->query("SELECT * FROM sk_tempat_tinggal WHERE MONTH(tgl_permohonan) = '04' ")->num_rows();
    $tt_5   = $this->db->query("SELECT * FROM sk_tempat_tinggal WHERE MONTH(tgl_permohonan) = '05' ")->num_rows();
    $tt_6   = $this->db->query("SELECT * FROM sk_tempat_tinggal WHERE MONTH(tgl_permohonan) = '06' ")->num_rows();
    $tt_7   = $this->db->query("SELECT * FROM sk_tempat_tinggal WHERE MONTH(tgl_permohonan) = '07' ")->num_rows();
    $tt_8   = $this->db->query("SELECT * FROM sk_tempat_tinggal WHERE MONTH(tgl_permohonan) = '08' ")->num_rows();
    $tt_9   = $this->db->query("SELECT * FROM sk_tempat_tinggal WHERE MONTH(tgl_permohonan) = '09' ")->num_rows();
    $tt_10  = $this->db->query("SELECT * FROM sk_tempat_tinggal WHERE MONTH(tgl_permohonan) = '10' ")->num_rows();
    $tt_11  = $this->db->query("SELECT * FROM sk_tempat_tinggal WHERE MONTH(tgl_permohonan) = '11' ")->num_rows();
    $tt_12  = $this->db->query("SELECT * FROM sk_tempat_tinggal WHERE MONTH(tgl_permohonan) = '12' ")->num_rows();
    $data = [
      'judul'           => 'Dashboard',
      'user'            => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'akte'            => $this->db->get_where('sp_akte_lahir', ['status' => 0]),
      'kk'              => $this->db->get_where('kk_baru', ['status' => 0]),
      'kematian'        => $this->db->get_where('sk_kematian', ['status' => 0]),
      'tempat_tinggal'  => $this->db->get_where('sk_tempat_tinggal', ['status' => 0]),
      'Jan'        => $kk_1 + $akte_1 + $kematian_1 + $tt_1,
      'Feb'        => $kk_2 + $akte_2 + $kematian_2 + $tt_2,
      'Mar'        => $kk_3 + $akte_3 + $kematian_3 + $tt_3,
      'Apr'        => $kk_4 + $akte_4 + $kematian_4 + $tt_4,
      'May'        => $kk_5 + $akte_5 + $kematian_5 + $tt_5,
      'Jun'        => $kk_6 + $akte_6 + $kematian_6 + $tt_6,
      'Jul'        => $kk_7 + $akte_7 + $kematian_7 + $tt_7,
      'Aug'        => $kk_8 + $akte_8 + $kematian_8 + $tt_8,
      'Sep'        => $kk_9 + $akte_9 + $kematian_9 + $tt_9,
      'Oct'        => $kk_10 + $akte_10 + $kematian_10 + $tt_10,
      'Nov'        => $kk_11 + $akte_11 + $kematian_11 + $tt_11,
      'Dec'        => $kk_12 + $akte_12 + $kematian_12 + $tt_12,
      // kematian
      'Jan_kematian'        => $kematian_1,
      'Feb_kematian'        => $kematian_2,
      'Mar_kematian'        => $kematian_3,
      'Apr_kematian'        => $kematian_4,
      'May_kematian'        => $kematian_5,
      'Jun_kematian'        => $kematian_6,
      'Jul_kematian'        => $kematian_7,
      'Aug_kematian'        => $kematian_8,
      'Sep_kematian'        => $kematian_9,
      'Oct_kematian'        => $kematian_10,
      'Nov_kematian'        => $kematian_11,
      'Dec_kematian'        => $kematian_12,
      // kk
      'Jan_kk'        => $kk_1,
      'Feb_kk'        => $kk_2,
      'Mar_kk'        => $kk_3,
      'Apr_kk'        => $kk_4,
      'May_kk'        => $kk_5,
      'Jun_kk'        => $kk_6,
      'Jul_kk'        => $kk_7,
      'Aug_kk'        => $kk_8,
      'Sep_kk'        => $kk_9,
      'Oct_kk'        => $kk_10,
      'Nov_kk'        => $kk_11,
      'Dec_kk'        => $kk_12,
      // akte
      'Jan_akte'        => $akte_1,
      'Feb_akte'        => $akte_2,
      'Mar_akte'        => $akte_3,
      'Apr_akte'        => $akte_4,
      'May_akte'        => $akte_5,
      'Jun_akte'        => $akte_6,
      'Jul_akte'        => $akte_7,
      'Aug_akte'        => $akte_8,
      'Sep_akte'        => $akte_9,
      'Oct_akte'        => $akte_10,
      'Nov_akte'        => $akte_11,
      'Dec_akte'        => $akte_12,
      // tt
      'Jan_tt'        => $tt_1,
      'Feb_tt'        => $tt_2,
      'Mar_tt'        => $tt_3,
      'Apr_tt'        => $tt_4,
      'May_tt'        => $tt_5,
      'Jun_tt'        => $tt_6,
      'Jul_tt'        => $tt_7,
      'Aug_tt'        => $tt_8,
      'Sep_tt'        => $tt_9,
      'Oct_tt'        => $tt_10,
      'Nov_tt'        => $tt_11,
      'Dec_tt'        => $tt_12,
    ];
    $this->load->view('admin/template/header', $data);
    $this->load->view('admin/template/navbar');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/index');
    $this->load->view('admin/template/footer');
  }
}
