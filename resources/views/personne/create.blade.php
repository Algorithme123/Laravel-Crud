@extends('layouts.app')

@section('content')


        <h1> Ajouter Personne</h1>
        
        @if ($errors->any())
        
                <div class="alert alert-danger">
                
                        <ul>
                                @foreach ($errors->all() as $error)
                                        <li>{{ $error}}</li>
                                        
                                @endforeach
                        </ul>
                </div>
                
        @endif
        
        <form action="{{url('personne')}}" method="POST" enctype="multipart/form-data"> 
                @csrf
                
                <div class="form-group mb-3">
                        <label for="nomComplet"> Nom Complet</label>
                        <input type="text" class="form-control" id='nomComplet' placeholder="Entrez un Nom" name='nomComplet'>
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                </div>
                <div class="form-group mb-3">
                        <label for="telephone"> Telephome </label>
                        <input type="telephone" class="form-control" name='telephone' id="telephone" placeholder="228 88899898">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                </div>
                <div class="form-group mb-3">
                        <label for="email"> Email </label>
                        <input type="email" class="form-control" name='email' id="email" placeholder="abc@gmail.com">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                </div>
                <div class="form-group mb-3">
                        <label for="salaires"> Salaires ($):</label>
                        <input type="text" class="form-control" name='salaires' id='salaires' placeholder="$ 2229899089.00">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                
        
        </form>

@endsection