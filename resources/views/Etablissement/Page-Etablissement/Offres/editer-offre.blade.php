
    @extends('layouts.Accueil.liens')
    @extends('home')
    @section('dashboard')
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
          <div class="col-xl-8 col-lg-6">
            <div class="card card-primary animated fadeInUp animation-delay-7">
              <div class="ms-hero-bg-primary ms-hero-img-mountain">
                <h3 class="text-center no-m pt-4 pb-4 color-white index-1">Modification de l'offre {{$offre->titre}}
                    <a href="" class=""> <button class=" btn btn-success btn-raised"><i class="fa fa-eye"></i></button></a>
                </h3>
                {{-- <div class="btn-group btn-group-raised"> --}}
                    {{-- <a href="{{ url('liste-etablissement')}}" class="btn btn-danger"><i class="fa fa-eye"></i></a> --}}
                  {{-- </div> --}}
              </div>
              <div class="card-body">
              <form class="form-horizontal" action="{{ url('update-offre?id=', $offre->id)}}" method="POST">
                @csrf
                  <fieldset class="container">
                    <div class="form-group row is-empty">
                      <label for="nom" autocomplete="false" class="col-lg-2 control-label">Titre</label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" id="titre" name="titre" required autocomplete="off" value="{{$offre->titre}}" placeholder="Titre de l'offre">
                      </div>
                    </div>
                    <div class="form-group row is-empty">
                      <label for="ville" autocomplete="false" class="col-lg-2 control-label">Description</label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" id="description" name="description" autocomplete="off" value="{{$offre->description}}" placeholder="description de l'offre">
                      </div>
                    </div>

                    {{-- <div class="form-group row is-empty">
                      <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Subject</label>
                      <div class="col-lg-9">
                        <input type="text" class="form-control" id="inputSubject" placeholder="Subject">
                      </div>
                    </div> --}}

                    <div class="form-group row justify-content-end">
                      <div class="col-lg-10">
                        <button type="submit" class="btn btn-raised btn-success">Enregistrer</button>
                        <button type="reset" class="btn btn-raised btn-danger">Annuler</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endsection



