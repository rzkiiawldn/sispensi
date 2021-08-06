<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        // jika user sudah login, tampilan halaman login tidak bisa di akses
        if ($this->session->userdata('nik')) {
            redirect('user');
        }
        $this->form_validation->set_rules('nik', 'nik', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['judul']  = 'Halaman Login';
            $this->load->view('auth/login', $data);
        } else {
            // validasi login berhasil
            $this->_login();
        }
    }

    public function administrator()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['judul']  = 'Login Administrator';
            $this->load->view('auth/login_admin', $data);
        } else {
            // validasi login berhasil
            $this->_loginAdmin();
        }
    }

    public function _login()
    {
        $nik        = $this->input->post('nik');
        $password   = $this->input->post('password');
        $user       = $this->db->get_where('warga', ['nik' => $nik])->row_array();
        if ($user) {
            // jika nik benar, di cek passwordnya
            if (password_verify($password, $user['password'])) {
                // jika password benar siapkan data
                $data = [
                    'nama_lengkap'      => $user['nama_lengkap'],
                    'nik'               => $user['nik'],
                    'id'                => $user['id'],
                ];
                // kemudian simpan data kedalam session
                $this->session->set_userdata($data);
                redirect('user');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password yang anda masukan salah</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">NIK tidak terdaftar, silahkan registrasi terlebih dahulu</div>');
            redirect('auth');
        }
    }

    public function _loginAdmin()
    {
        $email        = $this->input->post('email');
        $password   = $this->input->post('password');
        $user       = $this->db->get_where('users', ['email' => $email])->row_array();
        if ($user) {
            // jika email benar, di cek passwordnya
            if (password_verify($password, $user['password'])) {
                // jika password benar siapkan data
                $data = [
                    'nama_lengkap'      => $user['nama_lengkap'],
                    'email'             => $user['email'],
                ];
                // kemudian simpan data kedalam session
                $this->session->set_userdata($data);
                redirect('admin/dashboard');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password yang anda masukan salah</div>');
                redirect('auth/administrator');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Email salah</div>');
            redirect('auth/administrator');
        }
    }

    public function register()
    {
        if ($this->session->userdata('email')) {
            redirect('welcome');
        }
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim|is_unique[warga.nik]', [
            'is_unique'     => 'nik sudah digunakan'
        ]);
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        $this->form_validation->set_rules('no_tlp', 'No Telepon', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[warga.email]', [
            'is_unique'     => 'email sudah digunakan',
            'valid_email'   => 'email tidak valid'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'min_length' => 'password terlalu lemah',
            'matches'    => 'password tidak sama'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['judul']  = 'Halaman Registrasi';
            $this->load->view('auth/register', $data);
        } else {

            $data = [
                'nik'               => htmlspecialchars($this->input->post('nik', TRUE)),
                'nama_lengkap'      => htmlspecialchars($this->input->post('nama_lengkap', TRUE)),
                'tempat_lahir'      => htmlspecialchars($this->input->post('tempat_lahir', TRUE)),
                'tanggal_lahir'     => htmlspecialchars($this->input->post('tanggal_lahir', TRUE)),
                'no_tlp'            => htmlspecialchars($this->input->post('no_tlp', TRUE)),
                'email'             => htmlspecialchars($this->input->post('email', TRUE)),
                'alamat'            => htmlspecialchars($this->input->post('alamat', TRUE)),
                'jenis_kelamin'     => htmlspecialchars($this->input->post('jenis_kelamin', TRUE)),
                'password'          => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            ];

            $this->db->insert('warga', $data);
            // pesan dengan flash_data
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Registrasi berhasil, silahkan login</div>');
            redirect('auth');
        }
    }

    public function blocked()
    {
        $data['judul']  = 'Akses dilarang';
        $this->load->view('template/header', $data);
        $this->load->view('auth/blocked');
        $this->load->view('template/footer');
    }

    public function logout()
    {
        $this->session->unset_userdata('nik');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Anda berhasil keluar</div>');
        redirect('auth');
    }

    public function logout_admin()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Anda berhasil keluar</div>');
        redirect('auth/administrator');
    }
}
