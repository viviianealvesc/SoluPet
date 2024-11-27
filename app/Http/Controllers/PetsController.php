<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Aplicacao;
use App\Models\Prontuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Barryvdh\DomPDF\Facade\Pdf;


class PetsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $animais = $user->animais;
        
        return view('dashboard', compact('animais'));
    }

    public function tutorAnimal()
    {
       $user = Auth::user();
        $animais = $user->animais;

   
       return view('pets', compact('animais'));
    }

    public function perfilPet()
    {
        $user = Auth::user();
        $animais = $user->animais;

       return view('perfil', compact('animais'));
    }

    
    public function vacinas()
    {
        $user = Auth::user();
        $animais = $user->animais;

        $aplicacoes = collect();
        foreach ($animais as $animal) {
            $animalId = $animal->id;
            $animalAplicacoes = Aplicacao::where('id_animal', $animalId)->get();
            $aplicacoes = $aplicacoes->merge($animalAplicacoes);
        }
        
       
       return view('vacinas', compact('aplicacoes'));
    }

    public function prontuario()
    {
        $user = Auth::user();
        $animais = $user->animais;
   
        $prontuarios = collect();
        foreach($animais as $animal) {
            $animalId = $animal->id;
            $animalProntuarios = Prontuario::where('id_animal', $animalId)->get();
            $prontuarios = $prontuarios->merge($animalProntuarios);
        }
       
       return view('prontuario', compact('prontuarios'));
    }


    public function downloadAnimalInfo($id)
    {
        $animal = Animal::findOrFail($id);

        $pdf = Pdf::loadView('pdf', compact('animal'));
        return $pdf->download('perfil_animal.pdf');
    }
}

