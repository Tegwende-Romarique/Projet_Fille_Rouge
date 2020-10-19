
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
                <h1 class="text-center no-m pt-4 pb-4 color-white index-1">Ajouter un nouveau Etablissement
                    <a href="{{ url('liste-etablissement')}}" class=""> <button class=" btn btn-success btn-raised"><i class="fa fa-eye"></i></button></a>
                </h1>
                {{-- <div class="btn-group btn-group-raised"> --}}
                    {{-- <a href="{{ url('liste-etablissement')}}" class="btn btn-danger"><i class="fa fa-eye"></i></a> --}}
                  {{-- </div> --}}
              </div>
              <div class="card-body">
              <form class="form-horizontal" action="{{ url('creer-Etablissement')}}" method="POST">
                @csrf
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

                      <div class="form-group row is-empty">
                        <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label"></label>
                        <div class="col-lg-9">
                          <select name="user_id" class="form-control" id="type" placeholder="type">
                            <optgroup class="optgroup">
                                <option value="" class="select-option">Choisir le propriétaire</option>
                                @foreach ($utilisateurs as $utilisateur)
                                     <option value="{{$utilisateur->id}}" class="select-option">{{$utilisateur->name}}</option>
                                @endforeach
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



