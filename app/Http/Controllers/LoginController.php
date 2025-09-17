<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Walas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    public function loginWalas(Request $request){
        $walas = Walas::where('nig', $request->txt_nig)->first();

        if(!$walas || !Hash::check($request->txt_pass, $walas->password)){
            return redirect()->back()->with('error', 'NIG atau Password salah');
        }
        $kelas = Kelas::where('id', $walas->kelas_id)->first();

        session([
            'role' => 'Walas',
            'id' => $walas->id,
            'nig' => $walas->nig,
            'nama' => $walas->nama_walas,
            'kelas_id' => $walas->kelas_id,
            'nama_kelas' => $kelas ? $kelas->nama_kelas : "Kelas Belum ditentukan",
        ]);
        return redirect('nilai-raport/index');
    }

    public function loginSiswa(Request $request){
        $siswa = Siswa::where('nis', $request->txt_nis)->first();

        if (!$siswa || !Hash::check($request->txt_pass, $siswa->password)){
           return redirect()->back()->with('error', 'NIS atau Password salah');
        }

        $kelas = Kelas::where('id', $siswa->kelas_id)->first();
        session([
            'role' => 'Siswa',
            'id' => $siswa->id,
            'nis' => $siswa->nis,
            'nama' => $siswa->nama_siswa,
            'kelas_id' => $siswa->kelas_id,
            'nama_kelas' => $kelas ? $kelas->nama_kelas : "Kelas Belum ditentukan",
        ]);
        return redirect('nilai-raport/show');


    }

    public function logout(){
        session()->flush();
        return redirect('/');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
