<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SuratMasuk extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Surat Masuk'
        ];
        return view('surat_masuk/index', $data);
    }
}
