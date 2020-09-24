@extends('layouts.Accueil.include')


@section('content')


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
     <!-- script pour l'affichage du flash message ou message de confirmation    -->
    <div class="">
        @if(session()->get('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session()->get('success') }}  
            </div>
        @endif
    </div>  
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="card card-primary">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fa fa-graduation-cap"></i> Card Title</h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-lg-push-6">
                            <div class="withripple zoom-img">
                                <a href="javascript:void(0);">
                                    <img src="Images/Accueil/formulaire.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-lg-pull-6">
                        <form  method="POST" action="{{ url('creer-Etablissement') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                                <input class="form-control" name="user_id" value="{{ old('nom') }}" required autocomplete="nom" autofocus id="nom" type="text">

                            <div class="form-group label-floating">
                                <label class="control-label" for="nom">Nom de l'Etablissement</label>
                                <input class="form-control" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus id="nom" type="text">
                            </div>

                            <div class="form-group label-floating">
                                <label class="control-label" for="ville">Ville ou Region</label>
                                <input class="form-control" id="ville" type="text" name="ville" value="{{ old('ville') }}" required autocomplete="ville" autofocus id="ville">
                            </div>

                            <div class="form-group label-floating">
                                <label for="select111" class="control-label"></label>  
                                <div class="">
                                <select id="select111" class="form-control selectpicker" data-dropup-auto="false" name="type"  required autocomplete="type" autofocus>
                                    <option>Choisir le type</option>
                                    <option>Public</option>
                                    <option>Privé</option>
                                </select>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-raised btn-block btn-success" type="submit" >Enregistrer</button>
                                <button class="btn btn-raised btn-block btn-danger" type="reset">Annuler</button>
                            </div>
                        </form>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
      @endsection 

      