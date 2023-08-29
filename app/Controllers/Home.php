<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct()
    {

        helper('sm');
        $this->session = service('session');
        $this->auth   = service('authentication');
    }

    public function index()
    {
        //jika belum login, user tidak memiliki akses
        if (!$this->auth->check()) {
            $redirectURL = session('redirect_url') ?? '/login';
            unset($_SESSION['redirect_url']);

            return redirect()
                ->to($redirectURL);
        }

        $data = [
            'judul' => 'Homepage'
        ];

        tampilan('home/index', $data);
    }
}
