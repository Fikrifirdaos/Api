<?php

namespace App\Http\Controllers;
use App\Http\Libraries\BaseAPI;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
   public function index(){

    $data = (new BaseApi)->index('/api/siswa');
    $siswas = $data->json();

    return view ('index')->with(['siswas' => $siswas['data']]);
   }

   public function create()
   {
    return view ('form');

   }

   public function store (Request $request)
   {
    $data = [
        'nis' => $request->nis,
        'nama' => $request->nama,
        'rombel' => $request->rombel,
    ];
    
    $proses = (new BaseApi)->store('/api/siswa/create',$data);
    if ($proses->failed()){
        $errors = $proses->json('data');
        return redirect()->back()->with(['errors'=> $errors]);

    }else {
        return redirect('/')->with('berhasil','selamat anda telah terdaftar');
    }
   }
}
