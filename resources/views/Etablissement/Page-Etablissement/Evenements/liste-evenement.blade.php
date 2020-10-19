
@extends('layouts.Accueil.liens')
@extends('home')
@section('dashboard')

{{-- carte n°2 pour les evenements --}}
<div class="container-fluid">
    <div class="row">
      <div class="col-xl-12">
        <h1 class="text-center text-uppercase">Listes des évènements</h1>
        <div class="card ms-feature wow fadeInUp animation-delay-6" style="visibility: visible; animation-name: fadeInUp;" >
          <div class="row">
            <div class="col-lg-6">
              <div class="card-body overflow-hidden text-center">
                <h2 class="color-royal text-center text-uppercase">Ajouter un évènement</h2>
              <H2><a href="{{ url('formulaire-evenement')}}" class=" wow zoomInDown" style="visibility: visible; animation-name: zoomInDown;"><i class="fa fa-plus-circle fa-4x"></i></a></H2>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="withripple zoom-img">
                  <a href="javascript:void(0);">
                      <img src="Images/Accueil/port8.jpg" alt="" class="img-fluid">
                  </a>
                  <div class="ripple-container"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  {{-- carte n°2 pour les evenements --}}
  @foreach ($evenement as $evenements)
  <div class="container-fluid">
  <div class="row">
    <div class="col-xl-12">
      <h3 class="text-center"></h3>
      <div class="card ms-feature wow fadeInUp animation-delay-6" style="visibility: visible; animation-name: fadeInUp;">
        <div class="row">
          <div class="col-lg-6">
            <div class="withripple zoom-img">
                <a href="javascript:void(0);">
                    <img src="{{asset('storage') .'/'.$evenements->photo}}" alt="" class="img-fluid">
                </a>
                <div class="ripple-container"></div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card-body overflow-hidden text-center">
            <h4 class="color-royal">{{$evenements->titre}}</h4>
              <p>{{$evenements->description}}</p>
              <div class="btn-group btn-group-raised">
                <a href="" class="btn btn-success"><i class="fa fa-eye"></i></a>
                <a href="{{ url('modifier-evenement?id=',$evenements->id)}}"  class="btn btn-warning"><i class="fa fa-pencil"></i></a>
              <a href="{{ url('supprimer-evenement?id=' .$evenements->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection
