<?php

namespace App\Controllers;


use App\Models\M_Data;
use CodeIgniter\Controller;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\ValidationException;
use Zxing\QrReader;



class User extends Controller
{
    public function __construct()
    {
        
        $this->model = new M_Data;
        helper('sm');
        $this->session = service('session');
        $this->auth = service('authentication');
    }

    public function index()
    {

        $data = [
            'judul' => 'Aset Manajemen',
            'masterdata' => $this->model->getAllData(),
        ];

        //load view
        tampilan('user/index', $data);
    }

    public function detail($id)
    {

        $data = [
            'judul' => 'Detail Aset',
            'asset' => $this->model->detail($id)
        ];

        //load view
        tampilan('user/detail', $data);
    }

    public function rafli()
    {
        return view('user/rafli');
    }

    public function qrcode($id){

        
        $writer = new PngWriter();
        
        $url = 'http://localhost:8080/user/detail/'.$id;

        // Create QR code
        $qrCode = QrCode::create($url)
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

            
        // Create generic logo
        $logo = Logo::create(__DIR__.'/assets/symfony.png')
            ->setResizeToWidth(50);

        // Create generic label
        $label = Label::create($url)
            ->setTextColor(new Color(255, 0, 0));

        $result = $writer->write($qrCode);

        // Validate the result
        $writer->validateResult($result, $url);

        // Directly output the QR code
        header('Content-Type: '.$result->getMimeType());
        echo $result->getString();

        // Save it to a file
        $result->saveToFile(__DIR__.'/qrcode.png');

        // Generate a data URI to include image data inline (i.e. inside an <img> tag)
        $dataUri = $result->getDataUri();

        $qrcode = new QrReader('path/to_image');
        $text = $qrcode->text(); //return decoded text from QR Code

    }

   
}