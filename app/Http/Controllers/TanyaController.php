<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanya;
use App\Models\Kategori;
use App\Models\Jawab;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class TanyaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanya = Tanya::where('users_id', Auth::id())->first();
        $tanya = Tanya::all();
        return view('tanya.index', compact('tanya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $kategori = Kategori::all();
        return view('tanya.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'pertanyaan' => 'required',
                'kategori_id' => 'required',
                'gambar' => 'required | mimes:jpeg,jpg,png|max:2200',
            ],
            [
                'pertanyaan.required' => 'Tolong Isi',
                'kategori_id' => 'Tolong Isi',
                'gambar.required' => 'Tolong Isi sesuai format',
            ]
        );
        $gambar = $request->gambar;
        $new_gambar = time() . '-' . $gambar->getClientOriginalName();

        $tanya =  new Tanya;
        $tanya->pertanyaan = $request->pertanyaan;
        $tanya->kategori_id = $request->kategori_id;
        $tanya->gambar = $new_gambar;
        $tanya->users_id = Auth::id();
        $tanya->save();
        $gambar->move('gambar/', $new_gambar);

        return redirect('/tanya');
        Tanya::create([
            'pertanyaan' => $request->pertanyaan,

        ]);



        Alert::success('Success Title', 'Success Message');
        return redirect('/tanya');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tanya = Tanya::findOrfail($id);
        return view('tanya.show', compact('tanya'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tanya = Tanya::findOrfail($id);
        $kategori = Kategori::all();
        return view('tanya.edit', compact('tanya', 'kategori'));
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
        $this->validate(
            $request,
            [
                'pertanyaan' => 'required',
                'kategori_id' => 'required',
                'gambar' => 'required | mimes:jpeg,jpg,png|max:2200',
            ],
            [
                'pertanyaan.required' => 'Tolong Isi',
                'kategori_id' => 'Tolong Isi',
                'gambar.required' => 'Tolong Isi sesuai format',
            ]
        );

        $tanya = Tanya::find($id);
        if ($request->has('gambar')) {
            $path = "gambar/";
            File::delete($path . $tanya->gambar);
            $gambar = $request->gambar;
            $new_gambar = time() . '-' . $gambar->getClientOriginalName();
            $gambar->move('gambar/', $new_gambar);

            $tanya->gambar = $new_gambar;
        }
        $tanya->pertanyaan = $request->pertanyaan;

        $tanya->kategori_id = $request->kategori_id;

        $tanya->save();
        return redirect('/tanya');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tanya = Tanya::find($id);
        $path = "gambar/";
        File::delete($path . $tanya->gambar);
        $tanya->delete();
        return redirect('/tanya');
    }
}
