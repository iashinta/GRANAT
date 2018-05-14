<?php

namespace App\Http\Controllers;
use App\User;
use App\Pengumuman;
use Datatables;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumumans= pengumuman::all();
        return view('admindashboard', compact('pengumumans'));
    }
    

    public function peserta()
    {   
        $users= user::join('kabupatens','users.asal','=','kabupatens.id')
         ->select('users.*','kabupatens.name as nama_kabupaten')
         ->get();

        return view('datapeserta', compact('users'));
    }

    public function anyData()
    {
        return Datatables::of(user::query())->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->status="Sudah Lunas";
        $users->save();
        return redirect('/admin/peserta');
    }

    public function cancel(Request $request, $id)
    {
        $users = User::find($id);
        $users->status="Belum Lunas";
        $users->save();
        return redirect('/admin/peserta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
