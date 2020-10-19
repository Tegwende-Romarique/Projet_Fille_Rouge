@extends('layouts.Accueil.liens')
@extends('home')
@section('dashboard')
<div class="container">
    <div class="row">
      <div class="col-xl-8 col-lg-6">
        <div class="card card-primary animated fadeInUp animation-delay-7">
          <div class="ms-hero-bg-primary ms-hero-img-mountain">
            <h2 class="text-center no-m pt-4 pb-4 color-white index-1">Ajouter un nouveau Etablissement</h2>
          </div>
          <div class="card-body">
            <form class="form-horizontal" action="" method="Post">
            @foreach ($collection as $item)
                <input type="hidden" class="form-control" id="" name="etablissement_id" required autocomplete="off" value="{{$etablissement->id}}" placeholder="Nom de l'Etablissement">
                @endforeach

              <fieldset class="container">
                <div class="form-group row is-empty">
                  <label for="nom" autocomplete="false" class="col-lg-2 control-label"></label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" id="nom" name="nom" required autocomplete="off" value="{{old('nom')}}" placeholder="Nom de l'Etablissement">
                  </div>
                </div>
                <div class="form-group row is-empty">
                  <label for="ville" autocomplete="false" class="col-lg-2 control-label"></label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" id="ville" name="ville" autocomplete="off" value="{{old('ville')}}" placeholder="Ville de l'Etablissement">
                  </div>
                </div>
                {{-- <div class="form-group row is-empty">
                  <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Subject</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" id="inputSubject" placeholder="Subject">
                  </div>
                </div> --}}

                <div class="form-group row is-empty">
                    <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label"></label>
                    <div class="col-lg-9">
                      <select name="type" class="form-control" id="type" placeholder="type">
                        <optgroup>
                        <option  class="select-option">Choisir le type</option>
                          <option value="public" class="select-option">Public</option>
                          <option value="prive" class="select-option">Privé</option>
                        </optgroup>
                      </select>
                    </div>
                  </div>

                {{-- <div class="form-group row is-empty">
                  <label for="textArea" class="col-lg-2 control-label">Message</label>
                  <div class="col-lg-9">
                    <textarea class="form-control" rows="3" id="textArea" placeholder="Your message..."></textarea>
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
