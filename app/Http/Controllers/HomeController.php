<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $request->validate([
            'riwayat' => 'required|mimes:pdf|max:10240',
            'profil' => 'required|mimes:pdf|max:10240',
            'lagu' => 'required|mimes:zip,rar|max:10240',
            'logo' => 'required|image|mimes:jpeg,png|max:5120',
        ]);

        if($request->hasFile('riwayat')) {
            $riwayat = $request->file('riwayat');
            $riwayat_name = "riwayat_" . Auth::user()->id . '.' . $riwayat->extension();
            $destinationPath = 'riwayats';
            $request->riwayat->move($destinationPath, $riwayat_name);
        }

        if($request->hasFile('profil')) {
            $profil = $request->file('profil');
            $profil_name = "profil_" . Auth::user()->id . '.' . $profil->extension();
            $destinationPath = 'profils';
            $request->profil->move($destinationPath, $profil_name);
        }

        if($request->hasFile('lagu')) {
            $lagu = $request->file('lagu');
            $lagu_name = "lagu_" . Auth::user()->id . '.' . $lagu->extension();
            $destinationPath = 'lagu';
            $request->lagu->move($destinationPath, $lagu_name);
        }

        if($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logo_name = "logo_" . Auth::user()->id . '.' . $logo->extension();
            $destinationPath = 'logo';
            $request->logo->move($destinationPath, $logo_name);
        }
        
        $id=Auth::user()->id;
        $user=User::find($id);
        $user->riwayat=$riwayat_name;
        $user->profil=$profil_name;
        $user->lagu=$lagu_name;
        $user->link=$request->get('link');
        $user->logo=$logo_name;
        $user->save();
        
        return view('home', compact('user'));
    }
    
    public function upload()
    {
        $user = Auth::user();
        return view('upload', compact('user'));
    }
}
