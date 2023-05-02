<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public $costumer;
    // membuat instance dari model artikel
    public function __construct()
    {
        $this->costumer = new Costumer();
    }

    public function index()
    {
        $data = Costumer::all();
        return view('kategori.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Costumer::all();
        return view('kategori.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_custumer' => 'required|min:3|max:20',
            'alamat' => 'required|min:3|max:20',
            'kota' => 'required|min:3|max:20',
            'email' => 'required|min:3|max:20',
            'hp' => 'required|min:3|max:20',
            'perusahaan' => 'required|min:3|max:20'

        ];

        $messages = [
            'required' => ":attribute wajib di isi",

        ];

        $this->validate($request, $rules, $messages);

        $this->costumer->Nama_customer = $request->nama_custumer;
        $this->costumer->Alamat = $request->alamat;
        $this->costumer->Kota = $request->kota;
        $this->costumer->Email = $request->email;
        $this->costumer->Hp = $request->hp;
        $this->costumer->Perusahaan = $request->perusahaan;
        $this->costumer->save();
        return redirect()->route('kategori')->with('status', 'Data artikel berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Costumer::findOrFail($id);
        return view('kategori.show', compact('show'));

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
