<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    /**
    * Affiche la liste des Personne
    *
    * @return \Illuminate\Http\Response
    */
    
    public function index(){
    
    // $personnes = Personne::all();
    $data['personnes'] = Personne::orderBy('nomComplet', 'ASC')->paginate(5);
    
    return view(['personne.index'],$data);
    
    
    }

    
        /**
    * Formulaire de cretaion d'une Personne
    *
    * @return \Illuminate\Http\Response
    */

    
    public function create(){
    
    return view('personne.create');
    
    }
    
    
    
        /**
        * Enregistrer  d'une Personne dans la base de donnnee
        *
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
        */
    
    public function store(Request $request){
        
        $request->validate([
        
            'nomComplet'=>'required',
            'email'=>'required',
            'telephone'=>'required',
            'salaires'=>'required',
            
        ]);
        
        $personne = new Personne;
           $personne->nomComplet = $request->nomComplet;
           $personne->email = $request->email;
           $personne->telephone = $request->telephone;
           $personne->salaires = $request->salaires;
         
        ;
        
        $personne->save();
        return redirect()
            ->route('personne.index')
            ->with("success",'Personne Ajouté avec succès');
    
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
    
    public function edit(Personne $personne){
    
        
        
        return view('personne.edit',compact('personne'));
    
    }
    
    /**
     *  Enregistre la modification dans la base de données
     
    */
    
    public function update(Request $request,$id){
    
    $request->validate([
    
        'nomComplet' => 'required',
        'email' => 'required',
        'telephone' => 'required',
        'salaires'=>'required',
    ]);
    
    $personne = Personne::find($id);
    $personne->nomComplet = $request ->nomComplet;
    $personne ->email = $request ->email;
    $personne ->telephone = $request ->telephone;
    $personne ->salaires = $request->salaires;
    

    $personne->save();
    return redirect()
    ->route('personne.index')
    ->with('success','Personne Modifié avec succes');
    
    
    
    }
    
    
    /**
     * Suppression
     */
     
     public function destroy(Personne $personne) {
     
        $personne=Personne::find($personne->id);
        $personne->delete();
        
        return redirect()->route('personne.index')
        ->with('success',"Personne Supprimer avec succes");
        
     }
     
     

    
}
