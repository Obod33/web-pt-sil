<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\M_Pegawai;

class Datapegawai extends Controller
{
    public function __construct()
    {
        $this->model = new M_Pegawai;
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
            'judul' => 'Data Pegawai',
            'pegawai' => $this->model->getAllData()

        ];

        //load view
        tampilan('datapegawai/pegawai', $data);
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
                    'judul' => 'Data Pegawai',
                    'pegawai' => $this->model->getAllData()
                ];

                //load view
                tampilan('datapegawai/pegawai', $data);
            } else {
                // // $id=$this->input->post('id');
                // $aset=$this->input->post('aset');
                // $nama=$this->input->post('nama');
                // $tipe=$this->input->post('tipe');
                // $vendor=$this->input->post('vendor');
                // $lokasi=$this->input->post('lokasi');
                // $unit_pemakaian=$this->input->post('unit_pemakaian');
 
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
                    return redirect()->to(base_url('/datapegawai'));
                }
            }
        } else {
            return redirect()->to(base_url('/datapegawai'));
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
        return redirect()->to(base_url('/datapegawai'));
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
                    'judul' => 'Data Pegawai',
                    'masterdata' => $this->model->getAllData()
                ];

                //load view
                tampilan('datapegawai/pegawai', $data);
            } else {
                $id = $this->request->getPost('id');

                $data = [
                    'aset' => $this->request->getPost('aset'),
                    'nama' => $this->request->getPost('nama'),
                    'tipe' => $this->request->getPost('tipe'),
                    'vendor' => $this->request->getPost('vendor'),
                    'lokasi' => $this->request->getPost('lokasi'),
                    'unit_pemakai' => $this->request->getPost('unit_pemakai'),
                ];

                // Update data
                $success = $this->model->ubah($data, $id);
                if ($success) {
                    session()->setFlashdata('message', 'Diubah!');
                    return redirect()->to(base_url('/datapegawai'));
                }
            }
        } else {
            return redirect()->to(base_url('/datapegawai'));
        }
    }

    public function excel()
    {
        $data = [
            'pegawai' => $this->model->getAllData()
        ];

        echo view('datapegawai/pegawai', $data);
    }
}
