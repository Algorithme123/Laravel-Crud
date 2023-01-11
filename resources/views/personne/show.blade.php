@extends('layouts.app')

@section('content')


        <h1>Gestion des Personne</h1>
        
        <table class="table table-bordered">
        <tr>
                <th>Nom complet : </th>
                <td>{{ $personne->nomComplet}}</td>
        </tr>
        
        <tr>
                <th>Telephone :  </th>
                <td>{{ $personne->telephone}}</td>
        </tr>
        
        <tr>
                <th>Email : </th>
                <td>{{ $personne->email}}</td>
        </tr>
        <tr>
                <th>Salaire : </th>
                <td>{{ $personne->salaires}}</td>
        </tr>
        
        </table>

@endsection