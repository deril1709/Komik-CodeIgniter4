<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WebProgramingUNHAS',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Home | About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Sulawesi No.184',
                    'kota' => 'Makassar'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl.  Sulawesi No.30',
                    'kota' => 'Makassar'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
