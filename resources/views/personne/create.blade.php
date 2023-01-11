@extends('layouts.app')

@section('content')


        <h1> Ajouter un Contact</h1>
        
        @if ($errors->any())
        
                <div class="alert alert-danger">
                
                        <ul>
                                @foreach ($errors->all() as $error)
                                        <li>{{ $error}}</li>
                                        
                                @endforeach
                        </ul>
                </div>
                
        @endif
        
        <form action="{{url('personne')}}" method="POST"> 
                @csrf
                
                <div class="form-group mb-3">
                        <label for="nomComplet"> Nom Complet</label>
                        <input type="text" class="form-control" id="nomComplet" placeholder="Entrez un Nom" name="nomComplet">
                </div>
                <div class="form-group mb-3">
                        <label for="telephone"> Telephome </label>
                        <input type="telephone" class="form-control" name='telephone' id="telephone" placeholder="228 88899898">
                </div>
                <div class="form-group mb-3">
                        <label for="email"> Email </label>
                        <input type="email" class="form-control" name='email' id="email" placeholder="abc@gmail.com">
                </div>
                <div class="form-group mb-3">
                        <label for="salaire"> Salaire ($):</label>
                        <input type="salaire" class="form-control" name='salaire' id="salaire" placeholder="$ 2229899089.00">
                </div>
                
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                
        
        </form>

@endsection