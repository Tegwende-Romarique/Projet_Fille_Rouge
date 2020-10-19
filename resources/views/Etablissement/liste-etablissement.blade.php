@extends('layouts.Accueil.liens')
@extends('home')
@section('dashboard')
       <!-- <div class="material-background"></div>  -->
        <div class="container container-full">
          <!-- <div class="row"> -->
            <section class="ms-component-section">
              <div class="wrap-light">
                <h1 class="section-title text-center">Liste des Etablissement</h1>
                <!-- <p class="lead text-center">Just a few examples, the combinations are limitless.</p> -->

              <div class="row mt-4">

                <div class="col-md-6">
                    <div class="card card-warning-inverse">

                      <div class="card-body overflow-hidden text-center">
                         <span class="ms-icon ms-icon-circle ms-icon-xxlg mb-4 color-success"><i class="fa fa-graduation-cap"></i></span>
                      <h3 class="color-light"><a href="{{ url('formulaire-Etablissement')}}"><i class="fa fa-plus-circle fa-4x"></i></a></h3>
                       <h1>Ajouter Un Etablissement</h1>
                      </div>

                    </div>
                  </div>

              @foreach ($etablissements as $etablissement)
                  <div class="col-md-6">
                    <div class="card card-royal-inverse">

                      <div class="card-body overflow-hidden text-center">
                         <span class="ms-icon ms-icon-circle ms-icon-xxlg mb-4 color-warning"><i class="fa fa-graduation-cap"></i></span>
                        <h3 class="color-light">{{$etablissement->nom}}</h3>
                       <p>Lieu: {{$etablissement->ville}}</p>
                       <p>Type: {{$etablissement->type}}</p>
                        <div class="btn-group btn-group-raised">
                        <a href="{{ url('detaille-Etablissement?id='.$etablissement->id)}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                          <a href="{{ url('supprimer-Etablissement?id='.$etablissement->id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                          <a href="{{ url('supprimer-Etablissement?id='.$etablissement->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                      </div>
                      </div>

                    </div>
                  </div>
                  @endforeach
               </div>
               </div>
            </section>
          </div> <!-- ms-paper-content -->
        </div> <!-- col-lg-9 -->

@endsection



