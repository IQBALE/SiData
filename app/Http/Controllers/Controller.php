<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Diagnosa;
use App\Models\Penyakit;
use App\Models\Gejala;
use App\Models\Pasien;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $penyakit = Penyakit::all();
        return view('beranda', compact('penyakit'));
    }

    public function login(){
        return view('login');
    }

    public function login_aksi(Request $request){
        $message = [
            'required' => 'Kolom harus di isi !',
        ];
        
        $this->validate($request,[
            'username' =>  'required',
            'password' => 'required',
        ], $message);

        if(\Auth::attempt(['username' => $request->username, 'password'=> $request->password]))
        {
            session(['login'=> true]);  
            return redirect('/index');
        }else{
            return redirect()->back()->with('error', 'Username dan Password Salah');
        }
    }

    public function diagnosa(){
        $user= Pasien::orderBy('created_at', 'desc')->first();
        $gejala = Gejala::all();
        return view('diagnosa', compact('gejala'), compact('user'));
    }

    public function riwayat(){
           $riwayat = Diagnosa::join('pasiens', 'pasiens.id', '=', 'diagnosas.id_user')
           ->get(['pasiens.id','pasiens.nama_lengkap','pasiens.jenis_kelamin','pasiens.usia', 'diagnosas.hasil','diagnosas.persentase', 'diagnosas.diagnosa']);
        return view('riwayat', compact('riwayat'));
    }

    public function datadiri(){
        return view('datadiri');
    }

    public function tentang(){
        return view('tentang');
    }

    public function datauser(){
        return view('datauser');
    }

    // act  
    public function CF(){
        $data = Diagnosa::orderBy('created_at', 'desc')->first();
        $dt = $data->toArray();

        $data_penyakit = Penyakit::all();
        $data_gejala = Gejala::all();

        $diag = $this->diagnosa_data($dt);
        
        $hasil_penyakit = [];
        foreach($data_penyakit as $penyakit){
            $hasil_penyakit[$penyakit->kode_penyakit] = $penyakit->nama_penyakit;
        }
 
        $hasil_gejala = array();
        foreach($data_gejala as $gejala ){
            array_push($hasil_gejala, $gejala->cf);
        }

        $hasil_diagnosa = [];
        $split = array_values($diag);
        if($diag['data_1'] != 0 && $diag['data_2'] != 0 || $diag['data_3'] != 0 || $diag['data_4'] != 0 || $diag['data_5'] != 0 || $diag['data_6'] != 0 && $diag['data_7'] != 0){         
            $hasil_diagnosa['nilai'] = $this->countCF($split, $hasil_gejala);
            $hasil_diagnosa['persentase'] = $this->convert($hasil_diagnosa['nilai']);          
            $hasil_diagnosa['diagnosa'] = $hasil_penyakit['P01'];
        }else if($diag['data_7'] != 0 && $diag['data_8'] != 0 || $diag['data_9'] != 0 || $diag['data_10'] != 0 || $diag['data_11'] != 0 || $diag['data_12'] != 0 || $diag['data_13'] != 0){
            $hasil_diagnosa['nilai'] = $this->countCF($split, $hasil_gejala);
            $hasil_diagnosa['persentase'] = $this->convert($hasil_diagnosa['nilai']); 
            $hasil_diagnosa['diagnosa'] = $hasil_penyakit['P02'];
        }else if($diag['data_1'] != 0 && $diag['data_9'] != 0 && $diag['data_14'] != 0 || $diag['data_15'] != 0 || $diag['data_16'] != 0 || $diag['data_17'] != 0 || $diag['data_18'] != 0 ){
            $hasil_diagnosa['nilai'] = $this->countCF($split, $hasil_gejala);
            $hasil_diagnosa['persentase'] = $this->convert($hasil_diagnosa['nilai']); 
            $hasil_diagnosa['diagnosa'] = $hasil_penyakit['P03'];
        }else if($diag['data_2'] != 0 && $diag['data_19'] != 0 || $diag['data_20'] != 0 || $diag['data_21'] != 0 || $diag['data_22'] != 0 || $diag['data_23'] != 0 || $diag['data_24']){
            $hasil_diagnosa['nilai'] = $this->countCF($split, $hasil_gejala);
            $hasil_diagnosa['persentase'] = $this->convert($hasil_diagnosa['nilai']); 
            $hasil_diagnosa['diagnosa'] = $hasil_penyakit['P04'];
        }else{
            return redirect()->back()->with('error', 'Inputan Harus Lebih dari 1');
        }     
        return $hasil_diagnosa;    
    }

    public function countCF($diagnosa, $gejala){ 
        $res = [];
        for($i = 0; $i < count($diagnosa); $i++) {
            $res[$i] = $diagnosa[$i]*$gejala[$i];
        }
        $get_val = array_values($res);
        $combine_old = 0;
        foreach($res as $key => $value){
            if($key === 0){
                $combine_old = $value;
            }else{
                $combine_old = $combine_old + $value*(1-$combine_old); 
            }
        }
        return $combine_old;
    }

    public function diagnosa_data($data){
        $nilai = [];
        for($i=1; $i<count($data)-7; $i++){
            $nilai["data_".$i] = $data["skor_$i"];
        }
        return $nilai;
    }

    public function save($id){
        $data = $this->CF();
        Diagnosa::where('id_user', $id)
        ->update([
            'hasil' => $data['nilai'],
            'persentase' => $data['persentase'],
            'diagnosa' =>$data['diagnosa'],
        ]);
    }

    public function diagnosa_add(Request $request){ 
        //butuh validasi
        Diagnosa::create([
            'skor_1' => $request->data_1,
            'skor_2' => $request->data_2,
            'skor_3' => $request->data_3,
            'skor_4' => $request->data_4,
            'skor_5' => $request->data_5,
            'skor_6' => $request->data_6,
            'skor_7' => $request->data_7,
            'skor_8' => $request->data_8,
            'skor_9' => $request->data_9,
            'skor_10' => $request->data_10,
            'skor_11' => $request->data_11,
            'skor_12' => $request->data_12,
            'skor_13' => $request->data_13,
            'skor_14' => $request->data_14,
            'skor_15' => $request->data_15,
            'skor_16' => $request->data_16,
            'skor_17' => $request->data_17,
            'skor_18' => $request->data_18,
            'skor_19' => $request->data_19,
            'skor_20' => $request->data_20,
            'skor_21' => $request->data_21,
            'skor_22' => $request->data_22,
            'skor_23' => $request->data_23,
            'skor_24' => $request->data_24,
            'id_user' => $request->id,
        ]);

        $this->save($request->id);

        return redirect('/Riwayat');
    }

    public function user_add(Request $request){
        $message = [
            'required' => 'Kolom harus di isi !',
        ];
        
        $this->validate($request,[
            'nama' =>  'required',
            'jenkel' => 'required',
            'usia' =>  'required',
            'alamat' => 'required',
        ], $message);

        Pasien::create([
            'nama_lengkap' => $request->nama,
            'jenis_kelamin' => $request->jenkel,
            'usia' => $request->usia,
            'alamat' => $request->alamat,
        ]);
        return redirect('/Diagnosa');
    }

    public function convert($data){
        $convert = number_format((double)$data, 3, '.', '');  
        $persentase = $convert*100;

        return $persentase;
    }

    public function logout(Request $request){   
        $request->session()->flush();
        \Auth::logout();
        return redirect('/');
    }
    
}
