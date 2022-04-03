<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jawab;
use App\Models\Tanya;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class JawabController extends Controller
{
    public function edit($id)
    {
        $jawab = Jawab::findOrfail($id);
        $tanya = Tanya::all();
        return view('jawab.edit', compact('jawab', 'tanya'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'jawaban' => 'required',


            ],

        );
        $jawab =  new Jawab;
        $jawab->jawaban = $request->jawaban;

        $jawab->tanya_id = $request->tanya_id;
        $jawab->users_id = Auth::id();
        $jawab->save();

        return redirect('/tanya/' . $request->tanya_id);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate(
            [
                'jawaban' => 'required',

            ],
            [
                'jawaban.required' => 'Tolong isi',

            ]
        );
        DB::table('jawab')->where('id', $id)->update(
            [
                'jawaban' => $request['jawaban'],

            ]
        );
        return redirect('/tanya');
    }

    public function destroy($id)
    {
        $jawab = Jawab::find($id);

        $jawab->delete();
        return redirect('/tanya');
    }
}
