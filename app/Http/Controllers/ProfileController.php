<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index()
    {
        $profile = Profile::where('users_id', Auth::id())->first();

        return view('profile.edit', compact('profile'));
    }



    public function update(Request $request, $id)
    {
        $validated = $request->validate(
            [
                'bio' => 'required',

                'umur' => 'required',
                'alamat' => 'required',

            ],
            [
                'bio.required' => 'Tolong isi ',

                'umur.required' => 'Tolong isi ',
                'alamat.required' => 'Tolong isi',
            ]
        );
        $profile = Profile::find($id);
        $profile->bio = $request->bio;

        $profile->umur = $request->umur;
        $profile->alamat = $request->alamat;

        $profile->save();

        return redirect('/profile');
    }
}
