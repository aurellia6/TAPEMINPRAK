<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Matakuliah;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MahasiswaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function allmhs(){
        
        $mahasiswa = Mahasiswa::get();
            return response()->json([
                'mahasiswa' => $mahasiswa,
              ], 200);

    }

    public function profile(Request $request){
        $mahasiswa = $request->user;
        return response()->json([
            'success' => true,
            'mahasiswa' => $mahasiswa,
            'token' => $mahasiswa->token,
        ]);
    }

    public function nimprofile(Request $request){
        $mahasiswa = Mahasiswa::with('matakuliah')->find($request->nim);

        return response()->json([
            'mahasiswa' => $mahasiswa,
        ]);
    }

    public function addmatkul(Request $request){
        $mahasiswa = Mahasiswa::find($request->nim);
        $mahasiswa->matakuliah()->syncWithoutDetaching($request->mkId);

        return response()->json([
            'success' => true,
            'message' => 'Matkul added to mahasiswa',
        ]);
    }

    public function delmatkul(Request $request){
        $mahasiswa = Mahasiswa::with('matakuliah')->find($request->nim);
        // $matakuliah = Matakuliah::with('mahasiswa')->find($request->matakuliahId);
        $mahasiswa->matakuliah()->detach($request->mkId);

        return response()->json([
            'success' => true,
            'message' => 'Matkul deleted',
        ]);
    }
}
