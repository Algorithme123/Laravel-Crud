@extends('layouts.app')

@section('content')

        <div class="row">
        
                <div class="col-lg-11">
                        <h2>Gestion des Personnes</h2>
                
                </div>
                <div class="col-lg-1">
                
                        <a class="btn btn-success" href="{{ url('personne/create') }}"> Ajouter</a>
                </div>
                
                
        
        </div>
        
        @if ($message =Session::get('success'))
        
                <div class="alert alert-success">
                        <p>{{ message }}</p>
                
                </div>
                
        @endif
        
        <table class="table table-striped table">
                
                <tr>
                        <th>No</th>
                        <th>Nom Complet</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Salaire</th>
                        <th>Actions</th>
                </tr>
                
                @foreach ($personnes as $index=>$personne)
                
                        <td>{{$index}}</td>
                        <td>{{$personne->nomComplet}}</td>
                        <td>{{$personne->email}}</td>
                        <td>{{$personne->telephone}}</td>
                        <td>{{$personne->salaires}}</td>
                        <td>
                                <form action="{{url('personne/'.$personne->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-info"href="{{url('personne/'.$personne->id)}}">Voir</a>
                                        <a class="btn btn-primary"href="{{url('personne/'.$personne->id.'/edit')}}">Modifier</a>
                                        
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                        </td>
                        
                        
                        
                @endforeach
        
        </table>
        
        @endsection