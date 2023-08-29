<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Endroid\QrCode\QrCode;

class QrController extends Controller
{
    public function detail($id)
    {
        // Ambil data detail dari database
        // ...

        // URL detail yang akan ditampilkan di dalam QR Code
        $url = base_url('form/detail/'.$id);

        // Buat QR Code
        $qrCode = new QrCode($url);

        // Tampilkan QR Code di browser
        header('Content-Type: '.$qrCode->getContentType());
        echo $qrCode->writeString();
    }
}