<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetsController extends Controller
{
    public function index()
    {
        return view('pets');
    }

    public function tutorAnimal()
    {
        $user = Auth::user();

        $animal = $user->animais;
        $tutor = \DB::table('tutor')->where('user_id', $user->id)->first();
        $animal = \DB::table('animais')->where('tutor_id', $tutor->id)->get();

        dd($animal);

        return view('pets', ['animal' => $animal]);
    }
}
