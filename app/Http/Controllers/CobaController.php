<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    // funsi index
    public function index(){
        $mahasiswa=array(
            array(
                'no' => 1,
                'nama' => 'joko',
                'alamat' => 'ciputat',
            ),
            array(
                'no' => 2,
                'nama' => 'didin',
                'alamat' => 'jakarta',
            ),
            array(
                'no' => 3,
                'nama' => 'wahyu',
                'alamat' => 'bogor',
            ),
            array(
                'no' => 4,
                'nama' => 'yuni',
                'alamat' => 'cimahi',
            )
        );
        return view('siswaview',[
            'siswakey' => $mahasiswa
        ]);

    }
}
