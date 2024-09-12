<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function login(){

        return view('login');
    }

    public function proseslogin(Request $request){

        $api = new \GuzzleHttp\Client();
        $response = $api->request('POST', 'https://jakpreneur.jakarta.go.id/api/login', [
            'json' => [
                'username' => $request->nip,
                'password' => $request->password
            ]
        ]);

        $get = $response->getBody()->getContents();
        $get = json_decode($get, true);
        if($get['status'] == 'success') {
            return response("Login Berhasil", 200);

        };

    }

    public function rekrumentindex(){
        return view('rekrument');
    }

    public function prosesrekrument(Request $request){

        $api = new \GuzzleHttp\Client();
        $response = $api->request('POST', 'https://disppkukmdev.jakarta.go.id/pelatihan/api/submit-pengumuman', [
            'json' => [
                'nama_pengumuman' => $request->nama_pengumuman,
                'kouta' => $request->kouta,
                'deskripsi' => $request->deskripsi,
                'kouta' => $request->kouta,
                'tanggal_batas_pendaftaran' => $request->tanggalbatas,
                'penyelenggara' => $request->penyelenggara

            ]
        ]);

        $get = $response->getBody()->getContents();
        $get = json_decode($get, true);

        return response($get, 200);
    }
}
