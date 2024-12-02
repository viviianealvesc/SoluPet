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

       $aplicacoes = collect();
       foreach ($animais as $animal) {
           $animalId = $animal->id;
           $animalAplicacoes = Aplicacao::where('id_animal', $animalId)->get();
           $aplicacoes = $aplicacoes->merge($animalAplicacoes);
       }

       $prontuarios = collect();
       foreach($animais as $animal) {
           $animalId = $animal->id;
           $animalProntuarios = Prontuario::where('id_animal', $animalId)->get();
           $prontuarios = $prontuarios->merge($animalProntuarios);
       }
    
       return view('pets', compact('aplicacoes', 'animais', 'prontuarios'));
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
        $animais = $user->animais()->with('aplicacoes.veterinario', 'aplicacoes.material')->get();
    
        return view('vacinas', compact('animais'));
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
        $animal = Animal::with('aplicacoes.veterinario', 'aplicacoes.material')->findOrFail($id);

        $pdf = Pdf::loadView('pdfPerfil', compact('animal'));
        return $pdf->download('vacinas_animal.pdf');
    }

    public function downloadProntuario($id)
    {
        $prontuario = Prontuario::findOrFail($id);

        $pdf = Pdf::loadView('pdf', compact('prontuario'));
        return $pdf->download('prontuario_animal.pdf');
    }
}

