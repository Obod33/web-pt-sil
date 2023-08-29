<?php
function tampilan($halaman, $data = [])
{
    echo view('templates/header', $data);
    echo view('templates/sidebar');
    echo view('templates/topbar');
    echo view($halaman, $data);
    echo view('templates/footer');
}
