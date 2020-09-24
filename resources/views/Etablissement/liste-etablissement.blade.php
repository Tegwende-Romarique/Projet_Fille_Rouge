@extends('layouts.include')
@section('content')
<div class="card card-primary">

<div class=""> <!-- script pour l'affichage du flash message ou message de confirmation    -->
            @if(session()->get('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
            {{ session()->get('success') }}  
        </div>
            @endif
        </div>
          
                    <div class="card-header">
                      <h3 class="card-title"><i class="fa fa-graduation-cap"></i> Card Title</h3>
                    </div>
                    <table class="table table-no-border table-striped">
                      <thead>
                        <tr>
                          <th>Nom </th>
                          <th>Email</th>
                          <th>Telephone</th>
                          <th>Modifier</th>
                          <th>Supprimer</th>
                        </tr>
                      </thead>

                      
                      <tbody>
                      @foreach($etablissements as $ecole)
                        <tr>
                          <td>{{$ecole->nom}}</td>
                          <td>{{$ecole->email}}</td>
                          <td>{{$ecole->telephone}}</td>
                          <td>
                          <a href="{{ url('editer-Etablissement', $ecole->id)}} " class="btn btn-raised color-white btn-warning"> <i class="fa fa-pencil"></i> Modifier</a>
                          </td> 
                          <td>
                          <!-- <form action="{{ url('supprimer-Etablissement', $ecole->id) }}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE') -->
                          <a href="{{ url('supprimer-Etablissement?id=' .$ecole->id) }}" class="btn btn-raised color-white btn-danger"> <i class="fa fa-trash-o"></i>Supprimer</a>
                          <!-- <button class="btn btn-danger btn-sm" type="submit">Delete</button> -->
                          <!-- </form> -->
                          </td> 
                        </tr>
                        @endforeach
                      </tbody>
                      
                    </table>
                  </div>
@endsection


                    
                   