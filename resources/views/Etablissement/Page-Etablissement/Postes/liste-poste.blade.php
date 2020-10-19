
@extends('layouts.Accueil.liens')
@extends('home')
@section('dashboard')

<div class="bg-light index-1 intro-full-next">
    <div class="wrap bg-primary color-dark">
      <div class="container" id="intro-next">
        <h1 class="text-center color-white mb-2 wow text-uppercase fadeInDown animation-delay-4" style="visibility: visible; animation-name: fadeInDown;">Géreer les Postes de votre Etablissement Ici!</h1>
        {{-- <p class="lead text-center color-white wow fadeInDown animation-delay-5 mw-800 center-block mb-4" style="visibility: visible; animation-name: fadeInDown;"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor alias provident excepturi eligendi, nam numquam iusto eum illum, ea quisquam.</p> --}}
        <div class="row">

            {{-- ceci est la carte qui contient le formulaire pour l'ajout des diffrérentes postes --}}

            <div class="col-md-6">
                <div class="card ms-feature wow flipInX animation-delay-4" style="visibility: visible; animation-name: flipInX;">
                  <div class="withripple zoom-img">
                    <a href="javascript:void(0);">
                      <img src="Images/Accueil/port3.jpg" alt="" class="img-fluid">
                    </a>
                  </div>
                  <div class="card-body overflow-hidden text-center">
                    <a href="javascript:void(0)" class="btn-circle btn-circle-primary btn-circle-raised btn-card-float wow zoomInDown" style="visibility: visible; animation-name: zoomInDown;"><i class="fa fa-home"></i></a>
                    <h3 class="color-primary text-uppercase">Ajouter un poste</h3>
                        <H3><a href="" class=" wow zoomInDown" style="visibility: visible; animation-name: zoomInDown;"  data-target="#myModal" data-toggle="modal"><i class="fa fa-plus-circle fa-4x"></i></a></H3>
                  </div>
                </div>
              </div>

            @foreach ($poste as $postes)

              <div class="col-md-6">
                <div class="card ms-feature wow flipInX animation-delay-4" style="visibility: visible; animation-name: flipInX;">
                  <div class="withripple zoom-img">
                    <a href="javascript:void(0);">
                      <img src="{{asset('storage') .'/'.$postes->photo}}" alt="" class="img-fluid">
                    </a>
                  </div>
                  <div class="card-body overflow-hidden text-center">
                    <a href="javascript:void(0)" class="btn-circle btn-circle-primary btn-circle-raised btn-card-float wow zoomInDown" style="visibility: visible; animation-name: zoomInDown;"><i class="fa fa-star"></i></a>
                  <h4 class="color-primary">{{$postes->titre}}</h4>
                    <p>{{$postes->description}}</p>
                    <div class="btn-group btn-group-raised">
                        <a href="" class="btn btn-success"><i class="fa fa-eye"></i></a>
                        <a href="{{ url('modifier-poste?id=', $postes->id)}}"  class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                        <a href="{{ url('supprimer-poste?id=' .$postes->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

            </div>
        </div>
    </div>
</div>






{{-- le formulaire pour l'enregistrements des offres il s'agit d'un modal juste en dessous de la liste--}}
<div class="modal modal-primary" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog animated zoomIn animated-3x" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h3 class="modal-title color-primary text-uppercase" id="myModalLabel">Enregistrer un nouveau poste</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
            </div>
                <div class="modal-body">
                    <div class="tab-content">
                        <form  method="POST" action="{{ url('ajouter-poste') }}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            {{-- <input type="hidden" class="form-control" name="etablissement_id" required autocomplete="titre" autofocus id="titre"/> --}}

                            <div class="form-group label-floating">
                                <label class="control-label" for="titre">Titre</label>
                                <input type="text" class="form-control" name="titre" required autocomplete="titre" autofocus id="titre" />
                            </div>

                            <div class="form-group label-floating">
                                <label class="control-label" for="contenu">Description</label>
                                <input type="text" class="form-control" required autocomplete="t" autofocus id="contenu" name="description"/>
                            </div>

                            <div class="form-group label-floating">
                                <label class="form-control" for="photo">Photo</label>
                                <input type="file" class="form-control" required autocomplete="t" autofocus id="photo" name="photo"/>
                            </div>

                                <button class="btn btn-raised btn-block btn-primary" type="submit" >Enregistrer</button>
                                <button class="btn btn-raised btn-block btn-danger" type="reset">Annuler</button>

                        </form>
                    </div>
               <div>
        </div>
    </div>


        </div>
    </div>
</div>
</div>

@endsection
