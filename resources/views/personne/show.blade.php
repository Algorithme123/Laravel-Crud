@extends('layouts.app')

@section('content')


        <h1>Gestion des Contacts</h1>
        
        <table class="table table-bordered">
        <tr>
                <th>Nom complet : </th>
                <td>{{ $contact->nomComplet}}</td>
        </tr>
        
        <tr>
                <th>Telephone :  </th>
                <td>{{ $contact->telephone}}</td>
        </tr>
        
        <tr>
                <th>Email : </th>
                <td>{{ $contact->email}}</td>
        </tr>
        <tr>
                <th>Salaire : </th>
                <td>{{ $contact->salaire}}</td>
        </tr>
        
        </table>

@endsection