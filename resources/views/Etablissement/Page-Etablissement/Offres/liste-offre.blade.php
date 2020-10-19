
@extends('layouts.Accueil.liens')
@extends('home')
@section('dashboard')

<div class="bg-light index-1 intro-full-next">
    <div class="wrap bg-warning color-dark">
      <div class="container" id="intro-next">
        <h1 class="text-center color-white mb-2 wow text-uppercase fadeInDown animation-delay-4" style="visibility: visible; animation-name: fadeInDown;">Géreer les Offres de votre Etablissement Ici!</h1>
        {{-- <p class="lead text-center color-white wow fadeInDown animation-delay-5 mw-800 center-block mb-4" style="visibility: visible; animation-name: fadeInDown;"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor alias provident excepturi eligendi, nam numquam iusto eum illum, ea quisquam.</p> --}}
        <div class="row">

              {{-- cette carte est la premierère qui contient l'icone plus. elle permet 'appeler le formulaire d'enregistrements --}}
            <div class="ms-feature col-xl-4 col-lg-4 col-md-7 col-sm-7 card wow fadeInUp animation-delay-6" style="visibility: visible; animation-name: fadeInUp;">
              <div class="text-center card-body">
                <span class="ms-icon ms-icon-circle ms-icon-xxlg  color-primary"><i class="fa fa-home"></i></span>
                <h4 class="color-danger">AJOUTER UNE OFFRE</h4>
                    <div>
                       <H3><a href="" data-target="#myModal" data-toggle="modal"><i class="fa fa-plus-circle fa-4x"></i></a></H3>
                    </div>
              </div>
            </div>
            {{-- cette est carte la deuxiemme qui retourne la liste des offres --}}
             @foreach ($offre as $offres)
            <div class="ms-feature col-xl-4 col-lg-4 col-md-7 col-sm-7 card wow fadeInUp animation-delay-6" style="visibility: visible; animation-name: fadeInUp;">
                <div class="text-center card-body">
                <a href="#"><span class="ms-icon ms-icon-circle ms-icon-xxlg  color-success"><i class="fa fa-eye"></i></span></a>
                <h4 class="color-danger">{{ $offres->titre}}</h4>
                  <p class="">{{ $offres->description}}</p>
                  <div class="btn-group btn-group-raised">
                  <a href="" class="btn btn-success"><i class="fa fa-eye"></i></a>
                  <a href="{{ url('modifier-offre?id=', $offres->id)}}"  class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                  <a href="{{ url('supprimer-offre?id=' .$offres->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
              </div>
            @endforeach
        </div>
      </div><!-- container -->
    </div>
</div>

{{-- le formulaire pour l'enregistrements des offres il s'agit d'un modal juste en dessous de la liste--}}
<div class="modal modal-warning" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog animated zoomIn animated-3x" role="document">
    <div class="modal-content">
        <div class="modal-header text-center">
            <h3 class="modal-title color-primary text-uppercase" id="myModalLabel">Ajouter une offre</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
        </div>
        <div class="modal-body">
        <div class="tab-content">
                <form  method="POST" action="{{ url('ajouter-offre') }}" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <input type="hidden" class="form-control" name="etablissement_id" required autocomplete="titre" autofocus id="titre" value=""/>

                    <div class="form-group label-floating">
                        <label class="control-label" for="titre">Titre</label>
                        <input type="text" class="form-control" name="titre" required autocomplete="titre" autofocus id="titre" value=""/>
                    </div>

                    <div class="form-group label-floating">
                        <label class="control-label" for="contenu">Description</label>
                        <input type="text" class="form-control" required autocomplete="t" autofocus id="contenu" name="description" value=""/>
                    </div>
            </div>
            <div>
                    <button class="btn btn-raised btn-block btn-primary" type="submit" >Enregistrer</button>
                    <button class="btn btn-raised btn-block btn-danger" type="reset">Annuler</button>
            </div>
                </form>
        </div>
        </div>

    </div>
</div>
</div>




@endsection
