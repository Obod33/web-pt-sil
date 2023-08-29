<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\M_Data;

class Assetusage extends Controller
{
    public function __construct()
    {
        $this->model = new M_Data;
        helper('sm');
        $this->session = service('session');
        $this->auth   = service('authentication');
    }

    public function index()
    {
        //jika belum login, tidak memiliki akses
        if (!$this->auth->check()) {
            $redirectURL = session('redirect_url') ?? '/login';
            unset($_SESSION['redirect_url']);

            return redirect()
                ->to($redirectURL);
        }

        $data = [
            'judul' => 'Penggunaan Aset',
            'masterdata' => $this->model->getAllData()
        ];

        //load view
        tampilan('assetusage/index', $data);
    }

    public function tambah()
    {
        //jika belum login, tidak memiliki akses
        if (!$this->auth->check()) {
            $redirectURL = session('redirect_url') ?? '/login';
            unset($_SESSION['redirect_url']);

            return redirect()
                ->to($redirectURL);
        }

        if (isset($_POST['tambah'])) {
            $val = $this->validate([
                'aset' => [
                    'label' => 'Nama Asset',
                    'rules' =>  'required'
                ],
                'nama' => [
                    'label' => 'Nama Merk',
                    'rules' =>  'required'
                ],
                'tipe' => [
                    'label' => 'Kategori',
                    'rules' =>  'required'
                ],
                'vendor' => [
                    'label' => 'PIC',
                    'rules' =>  'required'
                ],
                'lokasi' => [
                    'label' => 'Penanggung Jawab',
                    'rules' =>  'required'
                ],
                'unit_pemakai' => [
                    'label' => 'Tahun Perolehan',
                    'rules' =>  'required'
                ]
            ]);

            if (!$val) {
                session()->setFlashdata('err', \config\services::validation()->listErrors());

                $data = [
                    'judul' => 'Penggunaan Aset',
                    'masterdata' => $this->model->getAllData()
                ];

                //load view
                tampilan('assetusage/index', $data);
            } else {

                $data = [
                    'aset' => $this->request->getPost('aset'),
                    'nama' => $this->request->getPost('nama'),
                    'tipe' => $this->request->getPost('tipe'),
                    'vendor' => $this->request->getPost('vendor'),
                    'lokasi' => $this->request->getPost('lokasi'),
                    'unit_pemakai' => $this->request->getPost('unit_pemakai')
                ];

                // insert data
                $success = $this->model->tambah($data);
                if ($success) {
                    session()->setFlashdata('message', 'Ditambahkan');
                    return redirect()->to(base_url('/masterdata'));
                }
            }
        } else {
            return redirect()->to(base_url('/masterdata'));
        }
    }

    public function hapus($id)
    {
        //jika belum login, tidak memiliki akses
        if (!$this->auth->check()) {
            $redirectURL = session('redirect_url') ?? '/login';
            unset($_SESSION['redirect_url']);

            return redirect()
                ->to($redirectURL);
        }

        $this->model->hapus($id);

        session()->setFlashdata('message', 'Dihapus!');
        return redirect()->to(base_url('/masterdata'));
    }

    public function ubah()
    {
        //jika belum login, tidak memiliki akses
        if (!$this->auth->check()) {
            $redirectURL = session('redirect_url') ?? '/login';
            unset($_SESSION['redirect_url']);

            return redirect()
                ->to($redirectURL);
        }

        if (isset($_POST['ubah'])) {

            $val = $this->validate([
                'aset' => [
                    'label' => 'Nama Asset',
                    'rules' =>  'required'
                ],
                'nama' => [
                    'label' => 'Nama Merk',
                    'rules' =>  'required'
                ],
                'tipe' => [
                    'label' => 'Kategori',
                    'rules' =>  'required'
                ],
                'vendor' => [
                    'label' => 'Nama PIC',
                    'rules' =>  'required'
                ],
                'lokasi' => [
                    'label' => 'Penanggung Jawab',
                    'rules' =>  'required'
                ],
                'unit_pemakai' => [
                    'label' => 'Tahun Perolehan',
                    'rules' =>  'required'
                ]
            ]);



            if (!$val) {
                session()->setFlashdata('err', \Config\Services::validation()->listErrors());

                $data = [
                    'judul' => 'Penggunaan Aset',
                    'masterdata' => $this->model->getAllData()
                ];

                //load view
                tampilan('assetusage/index', $data);
            } else {
                $id = $this->request->getPost('id');

                $data = [
                    'aset' => $this->request->getPost('aset'),
                    'nama' => $this->request->getPost('nama'),
                    'tipe' => $this->request->getPost('tipe'),
                    'vendor' => $this->request->getPost('vendor'),
                    'lokasi' => $this->request->getPost('lokasi'),
                    'unit_pemakai' => $this->request->getPost('unit_pemakai')
                ];

                // Update data
                $success = $this->model->ubah($data, $id);
                if ($success) {
                    session()->setFlashdata('message', 'Diubah!');
                    return redirect()->to(base_url('/masterdata'));
                }
            }
        } else {
            return redirect()->to(base_url('/masterdata'));
        }
    }

    public function excel()
    {
        $data = [
            'masterdata' => $this->model->getAllData()
        ];

        echo view('assetusage/excel', $data);
    }

    public function pengajuan()
    {
        $data = [
            'masterdata' => $this->model->getAllData()
        ];

        tampilan('assetusage/pengajuan', $data);
    }
}
