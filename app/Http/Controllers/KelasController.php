<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table("kelas")
            ->select("siswa.nama as siswa", "guru.nama as guru", "guru.mengajar as pelajaran")
            ->join("siswa", "siswa.id", "kelas.id_siswa")
            ->join("guru", "guru.id", "kelas.id_guru")
            ->orderBy("kelas.id", "desc")
            ->paginate(10);

        return view('master.kelas.index-0011', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = DB::table('kelas')->get();
        $guru = DB::table("guru")->whereNotIn("id", $kelas->pluck('id_guru'))->get();
        $siswa = DB::table("siswa")->whereNotIn("id", $kelas->pluck('id_siswa'))->get();

        return view('master.kelas.create-0011', ['guru' => $guru, 'siswa'=> $siswa]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table("kelas")->insert([
            "id_siswa" => $request->siswa,
            "id_guru" => $request->guru,
        ]);

        return redirect()->route('kelas.index');
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
        //
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
        //
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
