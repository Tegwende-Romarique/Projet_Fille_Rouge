@extends('layouts.include')
    @section('content')
    <div class="card card-primary">
        <div class="card-header text-center">
            <h3 class="card-title"><i class="fa fa-graduation-cap"></i>Modification des informations de votre Etablissement</h3>
        </div>
        <div class="card-tabs">
            <ul class="nav nav-tabs nav-tabs-full indicator-dark nav-tabs-inverse nav-tabs-3" role="tablist">
                <li class="nav-item current"><a href="#home4" aria-controls="home4" role="tab" data-toggle="tab" class="active withoutripple nav-link "><i class="fa fa-home"></i> <span class="d-none d-sm-inline">Home</span></a></li>
                <li class="nav-item"><a href="#profile4" aria-controls="profile4" role="tab" data-toggle="tab" class="withoutripple nav-link "><i class="fa fa-male"></i> <span class="d-none d-sm-inline">Profile</span></a></li>
                <li class="nav-item"><a href="#messages4" aria-controls="messages4" role="tab" data-toggle="tab" class="withoutripple nav-link "><i class="fa fa-envelop"></i> <span class="d-none d-sm-inline">Mail</span></a></li>
                <span id="i6" class="ms-tabs-indicator" style="left: 0px; width: 259.984px;"></span></ul>
        </div> 
        <div> <!-- script pour la gestion des erreurs sur la validation du formulaire    -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                         @endforeach
                    </ul>
                 </div><br />
            @endif
        </div>
        <div class=""> <!-- script pour l'affichage du flash message ou message de confirmation    -->
            @if(session()->get('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
            {{ session()->get('success') }}  
        </div>
            @endif
        </div>  
        <div class="card-body">
            <div class="tab-content">
                <form  method="POST" action="{{ url('update-Etablissement', $etablissements->id) }}" autocomplete="off" enctype="multipart/form-data">
                @csrf
                    <div class="form-group label-floating">
                        <label class="control-label" for="nom">Nom de l'Etablissement</label>
                        <input type="text" class="form-control" name="nom" required autocomplete="nom" autofocus id="nom" value="{{ $etablissements->nom }}"/>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label" for="telephone">Contact de l'Etablissement</label>
                        <input type="number" class="form-control" required autocomplete="telephone" autofocus id="telephone" name="telephone" value="{{ $etablissements->telephone }}"/>
                    </div>

                    <div class="form-group label-floating">
                        <label class="control-label" for="email">Adresse email de l'Etablissement</label>
                        <input type="email" class="form-control" required autocomplete="email" autofocus id="email" name="email" value="{{ $etablissements->email }}"/>
                    </div>
                    <div class="form-group label-floating">
                        <label for="description" class="control-label">Description de l'Etablissement</label>
                    <textarea rows="3" id="description" class="form-control" name="description" value="{{ $etablissements->description }}" autocomplete="description" autofocus id="description">{{$etablissements->description}}</textarea>
                    </div>

                    <div>
                    <button class="btn btn-raised btn-block btn-primary" type="submit" >Enregistrer</button>
                    <button class="btn btn-raised btn-block btn-danger" type="reset">Annuler</button>
                    </div>   
                </form>
            </div>
        </div>
    </div>
     
 @endsection 

      