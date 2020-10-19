
@extends('layouts.Accueil.liens')

<div class="bg-full-page bg-primary back-fixed">
    <div class="mw-500 absolute-center">
      <div class="card color-dark animated zoomInDown animation-delay-5">
        <div class="card-body">
        <h3 class="text-center text-uppercase">Modifier l'évènement: {{$evenement->titre}}</h3>
          <form class="form-horizontal" action="{{ url('update-evenement?id=', $evenement->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <fieldset>
              <div class="form-group label-floating is-empty">
                <div class="input-group">
                  <span class="input-group-addon"> <!--- <i class="fa fa-account"></i>---></span>
                  <label class="control-label" for="titre"></label>
                <input type="text" id="titre" name="titre" class="form-control" placeholder="Titre de l'évènement" value="{{$evenement->titre}}">
                </div>
              </div>

              <div class="form-group label-floating is-empty">
                <div class="input-group">
                  <span class="input-group-addon"> <!---<i class="fa fa-lock"></i>---></span>
                  <label class="control-label" for="ms-form-pass"></label>
                  <textarea cols="2" rows="2"  id="ms-form-pass" name="description" class="form-control" placeholder="Description de l'évènement" value="">{{$evenement->description}}</textarea>
                </div>
              </div>

              <div class="form-group label-floating is-empty">
                <div class="input-group">
                  <span class="input-group-addon"> <!---<i class="fa fa-lock"></i>---></span>
                  <label class="form-control align-left" for="photo">{{$evenement->photo}}</label>
                  <input type="file" id="photo" name="photo" class="form-control" value="" placeholder="Photos">
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
      <a href="{{ url('liste-evenement')}}" class="btn btn-white"><i class="fa fa-home"></i> Retourner à liste des Evènements</a>
      </div>
    </div>
  </div>


