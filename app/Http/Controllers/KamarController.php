<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use DB;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
     

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kamar = Kamar::all();
        // $kamar = Kamar::orderBy('id_kamar','asc')->paginate();
        return view('kamar.index', compact('kamar'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kamar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_kamar' => 'required',
            'tipe' => 'required',
            'fasilitas' => 'required',
            'harga' => 'required', 
            'status' => 'required', 
        ]);

        //fungsi eloquent untuk menambah data
        Kamar::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('kamar.index')
            ->with('success', 'Kamar Berhasil Ditambahkan');
    }
    public function search(request $request){
        $keyword=$request->search;
        $kamar=Kamar::where('no_kamar','like','%'.$keyword.'%')
                    ->orwhere('tipe','like','%'.$keyword.'%')
                    ->orwhere('tipe','like','%'.$keyword.'%')
                    ->orwhere('tipe','like','%'.$keyword.'%');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($no_kamar)
    {
        $kamar = Kamar::where('no_kamar', $no_kamar)->first();
        return view('kamar.detail', compact('kamar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $no_kamar
     * @return \Illuminate\Http\Response
     */
    public function edit($no_kamar)
    {
        $kamar = Kamar::where('no_kamar', $no_kamar)->first();
        return view('kamar.edit', compact('kamar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $no_kamar)
    {
        $request->validate([
            'no_kamar' => 'required',
            'tipe' => 'required',
            'fasilitas' => 'required',
            'harga' => 'required', 
            'status' => 'required', 
        ]);

        Kamar::where('no_kamar', $no_kamar)
        ->update([
            'no_kamar'=>$request->no_kamar,
            'tipe'=>$request->tipe,
            'fasilitas'=>$request->fasilitas,
            'harga'=>$request->harga,
            'status'=>$request->status,
    ]);
    return redirect()->route('kamar.index')
            -> with('success', 'kamar Berhasil DiUpdate');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $no_kamar
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_kamar)
    {
        Kamar::where('no_kamar', $no_kamar)->delete();
        return redirect()->route('kamar.index')
            -> with('success', 'kamar Berhasil Dihapus');
    }
}
