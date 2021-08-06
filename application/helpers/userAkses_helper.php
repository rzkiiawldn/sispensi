<?php

function belum_login()
{
    // buat instansiasi, karena kita tidak bisa membuat this begitu saja
    $ci = get_instance();
    // jika user belum login maka arahkan ke halaman login
    if (!$ci->session->userdata('nik')) {
        redirect('auth');
    }
}

function belum_login_admin()
{
    // buat instansiasi, karena kita tidak bisa membuat this begitu saja
    $ci = get_instance();
    // jika user belum login maka arahkan ke halaman login
    if (!$ci->session->userdata('email')) {
        redirect('auth/administrator');
    }
}
