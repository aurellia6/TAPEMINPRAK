<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Matakuliah;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        // $this->middleware('jwt.auth');
    }

    public function index(){

    }

    public function home(Request $request)
    {
        $user = $request->user;

        return response()->json([
            'status' => 'Success',
            'message' => 'selamat datang ' . $user->nama,
        ],200);
    }

    public function matkul(){
        $matakuliah = Matakuliah::get();
        return response()->json([
            'matakuliah' => $matakuliah,
          ], 200);
    }

    public function addmatkul(){

    }


}
