<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class PersonneController extends Controller
{
    // Affiche la liste des Contacts
    
    public function index(){
    
    $personnes = Personne::all();
    
    return view('personne.index',compact('personnes'));
    
    
    }
    
    /*
    Formulaire de cretaion d'une Personne
    
    */
    
    public function create(){
    
    return view('personne.create');
    
    }
    
    /** 
    
    *Enregistrer  d'une Personne dans la base de donnnee
    
    */
    
    public function store(Request $request){
        
        $request->validate([
        
            'nomComplet'=>'required',
            'email'=>'required',
            'telephone'=>'required',
            'salaire'=>'required',
            
        ]);
        
        $personne = new Personne([
            'nomComplet'=>$request->get('nomComplet'),
            'email'=>$request->get('email'),
            'telephone'=>$request->get('telephone'),
            'salaire'=>$request->get('salaire'),
        ]);
        
        $personne->save();
        return redirect('/')->with("Success","Personne Ajouté avec succès");
    
    }
    
    /**
        
        * Affiche les details d'une Personne
    
    */
    
    public function show($id){
    
        $personne = Personne::findOrFail($id);
        
        return view ('personne.show',compact('personne'));
    }
    
    /**  
    
        * retour du formulaire de Modification
        
    
    */
    
    public function edit($id){
    
        $personne = Personne::findOrFail($id);
        
        return view('personne.edit',compact('personne'));
    
    }
    
    /**
     *  Enregistre la modification dans la base de données
     
    */
    
    
    
}
