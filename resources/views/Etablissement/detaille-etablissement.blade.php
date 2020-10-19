@extends('layouts.Accueil.liens')
@extends('home')
@section('dashboard')

<div class="wrap ms-hero-bg-dark mt-6 ms-hero-img-room ms-bg-fixed">
    <div class="container">
      <h2 class="text-center mb-4 color-white text-uppercase">Page de Publication</h2>
      {{--  --}}
      <div class="row" id="Container">
        <div class="col-lg-4 col-md-6 col-sm-6 mix category-1 category-3" style="display: inline-block;" data-bound="">
          <div class="card">
            <figure class="ms-thumbnail">
              <img src="Images/Accueil/port1.jpg" alt="" class="img-fluid">
              <figcaption class="ms-thumbnail-caption text-center">
                <div class="ms-thumbnail-caption-content">
                  <h4 class="ms-thumbnail-caption-title mb-2">Offres</h4>
                <a href="{{ url('liste-offre')}}" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-success color-white"><i class="fa fa-eye"></i></a>
                  <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-warning color-white"><i class="fa fa-pencil"></i></a>
                  <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-danger color-white"><i class="fa fa-trash"></i></a>
                </div>
              </figcaption>
            </figure>
          </div>
        </div> <!-- item -->
        <div class="col-lg-4 col-md-6 col-sm-6 mix category-2" data-bound="" style="display: inline-block;">
          <div class="card">
            <figure class="ms-thumbnail">
              <img src="Images/Accueil/port3.jpg" alt="" class="img-fluid">
              <figcaption class="ms-thumbnail-caption text-center">
                <div class="ms-thumbnail-caption-content">
                  <h4 class="ms-thumbnail-caption-title mb-2">Postes</h4>
                <a href="{{ url('liste-poste')}}" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-success color-white"><i class="fa fa-eye"></i></a>
                  <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-warning color-white"><i class="fa fa-pencil"></i></a>
                  <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-danger color-white"><i class="fa fa-trash"></i></a>
                </div>
              </figcaption>
            </figure>
          </div>
        </div> <!-- item -->
        <div class="col-lg-4 col-md-6 col-sm-6 mix category-3" data-bound="" style="display: inline-block;">
          <div class="card">
            <figure class="ms-thumbnail">
              <img src="Images/Accueil/port11.jpg" alt="" class="img-fluid">
              <figcaption class="ms-thumbnail-caption text-center">
                <div class="ms-thumbnail-caption-content">
                  <h4 class="ms-thumbnail-caption-title mb-2">Evènements</h4>
                <a href="{{ url('liste-evenement')}}" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-success color-white"><i class="fa fa-eye"></i></a>
                  <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-warning color-white"><i class="fa fa-pencil"></i></a>
                  <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-danger color-white"><i class="fa fa-trash"></i></a>
                </div>
              </figcaption>
            </figure>
          </div>
        </div> <!-- item -->

        </div> <!-- item -->
        <div class="col-lg-4 col-md-6 col-sm-6 mix category-3" data-bound="" style="display: inline-block;">
          <div class="card">
            <figure class="ms-thumbnail">
              <img src="Images/Accueil/port12.jpg" alt="" class="img-fluid">
              <figcaption class="ms-thumbnail-caption text-center">
                <div class="ms-thumbnail-caption-content">
                  <h4 class="ms-thumbnail-caption-title mb-2">Actualités</h4>
                  <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-success color-white"><i class="fa fa-eye"></i></a>
                  <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-warning color-white"><i class="fa fa-pencil"></i></a>
                  <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-danger color-white"><i class="fa fa-trash"></i></a>
                </div>
              </figcaption>
            </figure>
          </div>
        </div> <!-- item -->
        <div class="col-lg-4 col-md-6 col-sm-6 mix category-2" data-bound="" style="display: inline-block;">
          <div class="card">
            <figure class="ms-thumbnail">
              <img src="Images/Accueil/port5.jpg" alt="" class="img-fluid">
              <figcaption class="ms-thumbnail-caption text-center">
                <div class="ms-thumbnail-caption-content">
                  <h4 class="ms-thumbnail-caption-title mb-2">Photos</h4>
                <a href="{{ url('liste-photo')}}" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-success color-white"><i class="fa fa-eye"></i></a>
                  <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-warning color-white"><i class="fa fa-pencil"></i></a>
                  <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-danger color-white"><i class="fa fa-trash"></i></a>
                </div>
              </figcaption>
            </figure>
          </div>
        </div> <!-- item -->
        <div class="col-lg-4 col-md-6 col-sm-6 mix category-1" style="display: inline-block;" data-bound="">
          <div class="card">
            <figure class="ms-thumbnail">
              <img src="Images/Accueil/port8.jpg" alt="" class="img-fluid">
              <figcaption class="ms-thumbnail-caption text-center">
                <div class="ms-thumbnail-caption-content">
                  <h4 class="ms-thumbnail-caption-title mb-2">Autres</h4>
                  <a href="javascript:void(1)" class="btn-circle btn-circle-raised btn-circle-xs mr-1 btn-circle-success color-white"><i class="fa fa-eye"></i></a>
                  <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 mr-1 btn-circle-warning color-white"><i class="fa fa-pencil"></i></a>
                  <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs ml-1 btn-circle-danger color-white"><i class="fa fa-trash"></i></a>
                </div>
              </figcaption>
            </figure>
          </div>
        </div> <!-- item -->
      </div>
    </div>
  </div>

@endsection
