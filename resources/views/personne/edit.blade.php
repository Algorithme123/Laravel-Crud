@extends('layouts.app')

@section('content')

<h1> Modifier un Personne</h1>


        @if ($errors->any())
        
                <div class="alert alert-danger">
                
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                
                </div>
                
        @endif
        
        <form method="post" action="{{url('personne/'.$personne->id)}}">
        
        
                @method('PATCH')
                @csrf
                
                <div class="form-group mb-3">
                        <label for="nomComplet"> Nom Complet</label>
                        <input type="text" class="form-control" id="nomComplet" placeholder="Entrez un Nom" name="nomComplet" value="{{$personne->nomComplet}}">
                </div>
                <div class="form-group mb-3">
                        <label for="telephone"> Telephome </label>
                        <input type="telephone" class="form-control" name='telephone' id="telephone" placeholder="228 88899898" value="{{$personne->telephone}}">
                </div>
                <div class="form-group mb-3">
                        <label for="email"> Email </label>
                        <input type="email" class="form-control" name='email' id="email" placeholder="abc@gmail.com" value="{{$personne->email}}">
                </div>
                <div class="form-group mb-3">
                        <label for="salaires"> Salaire ($):</label>
                        <input type="salaires" class="form-control" name='salaires' id="salaires" placeholder="$ 2229899089.00" value="{{$personne->salaires}}">
                </div>
                
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                
        
        </form>





@endsection