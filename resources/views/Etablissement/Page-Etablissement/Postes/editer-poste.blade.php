
@extends('layouts.Accueil.liens')

<div class="bg-full-page bg-primary back-fixed">
    <div class="mw-500 absolute-center">
      <div class="card color-dark animated zoomInDown animation-delay-5">
        <div class="card-body">
          <h3 class="text-center text-uppercase">Mofication du poste:</h3>
          <form class="form-horizontal" action="{{ url('update-poste?id=', $poste->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <fieldset>
              <div class="form-group label-floating is-empty">
                <div class="input-group">
                  <span class="input-group-addon"> <!--- <i class="fa fa-account"></i>---></span>
                  <label class="control-label" for="titre"></label>
                  <input type="text" id="titre" name="titre" class="form-control" value="{{$poste->titre}}">
                </div>
              </div>

              <div class="form-group label-floating is-empty">
                <div class="input-group">
                  <span class="input-group-addon"> <!---<i class="fa fa-lock"></i>---></span>
                  <label class="control-label" for="ms-form-pass"></label>
                  <textarea cols="10" rows="5"  id="ms-form-pass" name="description" class="form-control" value="">{{$poste->description}}</textarea>
                </div>
              </div>

              <div class="form-group label-floating is-empty">
                <div class="input-group">
                  <span class="input-group-addon"> <!---<i class="fa fa-lock"></i>---></span>
                  <label class="form-control" for="ms-form-pass"></label>
                  <input type="file" id="ms-form-pass" name="photo" class="form-control" value="{{$poste->photo}}">
                </div>
              </div>

              <div class="row ">
                <div class="col-md-6">
                  <button class="btn btn-raised btn-primary btn-block"> Enregistrer<!---<i class="fa fa-long-arrow-right no-mr ml-1"></i>---></button>
                </div>
                <div class="col-md-6">
                  <button class="btn btn-raised btn-danger btn-block"> <!---<i class="fa fa-account-add mr-1"></i>---> Annuler</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
      <div class="text-center animated fadeInUp animation-delay-7">
      <a href="{{ url('liste-poste')}}" class="btn btn-white"><i class="fa fa-home"></i> Retourner à liste des postes</a>
      </div>
    </div>
  </div>


