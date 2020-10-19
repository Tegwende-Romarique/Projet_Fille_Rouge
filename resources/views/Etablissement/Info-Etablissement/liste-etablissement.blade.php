@extends('layouts.Accueil.include')
@section('content')


<!-- <div class=""> -->
 <!-- script pour l'affichage du flash message ou message de confirmation    -->
            <!-- @if(session()->get('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
            {{ session()->get('success') }}  
        </div>
            @endif
        </div> -->
<!--           
                    <div class="card-header">
                      <h3 class="card-title"><i class="fa fa-graduation-cap"></i> Card Title</h3>
                    </div>
                    <table class="table table-no-border table-striped">
                      <thead>
                        <tr>
                          <th>Nom </th>
                          <th>Email</th>
                          <th>Telephone</th>
                          <th>Modifier</th>
                          <th>Supprimer</th>
                        </tr>
                      </thead>

                      
                      <tbody>
                      @foreach($etablissements as $ecole)
                        <tr>
                          <td>{{$ecole->nom}}</td>
                          <td>{{$ecole->email}}</td>
                          <td>{{$ecole->telephone}}</td>
                          <td>
                          <a href="{{ url('editer-Etablissement', $ecole->id)}} " class="btn btn-raised color-white btn-warning"> <i class="fa fa-pencil"></i> Modifier</a>
                          </td> 
                          <td>
                          <a href="{{ url('supprimer-Etablissement?id=' .$ecole->id) }}" class="btn btn-raised color-white btn-danger"> <i class="fa fa-trash-o"></i>Supprimer</a>
                          </td> 
                        </tr>
                        @endforeach
                      </tbody>
                      
                    </table>
                  </div> -->








 <div class="ms-site-container">
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
        <div class=""> <!-- script pour l'affichage du flash message ou message de confirmation    -->
            @if(session()->get('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
            {{ session()->get('success') }}  
        </div>
            @endif
        </div> 


       <!-- <div class="material-background"></div>  -->
        <div class="container container-full">
          <div class="row">
            <section class="ms-component-section">
              <div class="wrap-light">
                <h1 class="section-title text-center">Information sur votre Etablissement</h1>
                <!-- <p class="lead text-center">Just a few examples, the combinations are limitless.</p> -->
              <div class="row mt-4">   

                  <div class="col-md-6">
                    <div class="card card-royal-inverse">
                      <div class="card-body overflow-hidden text-center">
                      <span class="ms-icon ms-icon-circle ms-icon-xxlg mb-4 color-success"><i class="fa fa-cloud"></i></span>
                        <h3 class="color-light">Etablissement</h3>
                        <!-- <p>Lor</p> -->
                        <div class="btn-group btn-group-raised">
                        <a href="{{ url('editer-Etablissement')}}" data-target="#myModal" data-toggle="modal" class="btn btn-success"><i class="fa fa-eye"></i></a>
                          <a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                      </div>
                      </div>
                    </div>
                  </div>


<!-- Modal -->
<div class="modal modal-warning" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog animated zoomIn animated-3x" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title color-primary" id="myModalLabel">Modal title</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
            </div>
            <div class="modal-body">
              <div class="tab-content">
                <form  method="POST" action="{{ url('update-Etablissement') }}" autocomplete="off" enctype="multipart/form-data">
                @csrf
                    <div class="form-group label-floating">
                        <label class="control-label" for="nom">Nom de l'Etablissement</label>
                        <input type="text" class="form-control" name="nom" required autocomplete="nom" autofocus id="nom" value=""/>
                    </div>

                    <div class="form-group label-floating">
                        <label class="control-label" for="ville">Ville</label>
                        <input type="number" class="form-control" required autocomplete="t" autofocus id="ville" name="ville" value=""/>
                    </div>

                    <div class="form-group label-floating">
                        <label for="select111" class="control-label"></label>  
                          <div class="">
                            <select id="select111" class="form-control selectpicker" data-dropup-auto="false" name="type"  required autocomplete="type" autofocus>
                              <option>Choisir le type</option>
                              <option>Public</option>
                              <option>Privé</option>
                            </select>
                      </div>
              </div>
            <div>
                    <button class="btn btn-raised btn-block btn-primary" type="submit" >Enregistrer</button>
                    <button class="btn btn-raised btn-block btn-danger" type="reset">Annuler</button>
            </div>   
                </form>
            </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn  btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>




                  <div class="col-md-6">
                    <div class="card card-royal-inverse">
                      <div class="card-body overflow-hidden text-center">
                         <span class="ms-icon ms-icon-circle ms-icon-xxlg mb-4 color-warning"><i class="fa fa-cloud-outline"></i></span>
                        <h3 class="color-light">Actualités</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id quam odio voluptates porro harum ducimus non provident, dolor, modi accusantium rem quis neque labore facilis</p> -->
                        <div class="btn-group btn-group-raised">
                        <a href="#" class="btn btn-success"><i class="fa fa-eye"></i></a>
                          <a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                      </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="card card-royal-inverse">
                      <div class="card-body overflow-hidden text-center">
                         <span class="ms-icon ms-icon-circle ms-icon-xxlg mb-4 color-danger"><i class="fa fa-cloud-outline"></i></span>
                        <h3 class="color-light">Evénements</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id quam odio voluptates porro harum ducimus non provident, dolor, modi accusantium rem quis neque labore facilis</p> -->
                        <div class="btn-group btn-group-raised">
                        <a href="#" class="btn btn-success"><i class="fa fa-eye"></i></a>
                          <a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                      </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="card card-royal-inverse">
                      <div class="card-body overflow-hidden text-center">
                         <span class="ms-icon ms-icon-circle ms-icon-xxlg mb-4 color-success"><i class="fa fa-cloud-outline"></i></span>
                        <h3 class="color-light">Postes</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id quam odio voluptates porro harum ducimus non provident, dolor, modi accusantium rem quis neque labore facilis</p> -->
                        <div class="btn-group btn-group-raised">
                        <a href="#" class="btn btn-success"><i class="fa fa-eye"></i></a>
                          <a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                      </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="card card-royal-inverse">
                      <div class="card-body overflow-hidden text-center">
                         <span class="ms-icon ms-icon-circle ms-icon-xxlg mb-4 color-warning"><i class="fa fa-cloud-outline"></i></span>
                        <h3 class="color-light">Offres</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id quam odio voluptates porro harum ducimus non provident, dolor, modi accusantium rem quis neque labore facilis</p> -->
                        <div class="btn-group btn-group-raised">
                        <a href="#" class="btn btn-success"><i class="fa fa-eye"></i></a>
                          <a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a> 
                      </div>
                      </div>
                    </div>
                  </div>

               </div>
               </div>
            </section>
          </div> <!-- ms-paper-content -->
        </div> <!-- col-lg-9 -->
      </div> <!-- row -->
        
@endsection


                    
                   