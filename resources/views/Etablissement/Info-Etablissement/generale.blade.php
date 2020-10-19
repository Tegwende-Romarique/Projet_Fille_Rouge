@extends('layouts.Accueil.include')
@section('content')

  

            <!-- <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title"><i class="zmdi zmdi-graduation-cap"></i> Card Title</h3>
                    </div>
                    <table class="table table-no-border table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                  </div> -->

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
                          <!-- <a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a> -->
                          <!-- <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a> -->
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
                          <!-- <a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a> -->
                          <!-- <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a> -->
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
                          <!-- <a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a> -->
                          <!-- <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a> -->
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
                          <!-- <a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a> -->
                          <!-- <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a> -->
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
                          <!-- <a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a> -->
                          <!-- <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>  -->
                      </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="card card-royal-inverse">
                      <div class="card-body overflow-hidden text-center">
                         <span class="ms-icon ms-icon-circle ms-icon-xxlg mb-4 color-warning"><i class="fa fa-cloud-outline"></i></span>
                        <h3 class="color-light">Photos</h3>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id quam odio voluptates porro harum ducimus non provident, dolor, modi accusantium rem quis neque labore facilis</p> -->
                        <div class="btn-group btn-group-raised">
                        <a href="#" class="btn btn-success"><i class="fa fa-eye"></i></a>
                          <!-- <a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a> -->
                          <!-- <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>  -->
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


                    
                   