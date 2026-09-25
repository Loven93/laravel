<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('datadiri');
    }

    public function listDataDiri()
    {
        $daftarMahasiswa = [
            [
                'nim' => '2405001',
                'nama' => 'Marthin',
                'prodi' => 'Informatika',
                'status' => 'Aktif'
            ],
            [
                'nim' => '2405002',
                'nama' => 'Raditya',
                'prodi' => 'Informatika',
                'status' => 'Aktif'
            ]
        ];

        return view('listdatadiri', [
            'mahasiswa' => $daftarMahasiswa
        ]);
    }
}