@extends('layouts.Accueil.include')
@section('content')
<!-- <div class="material-background"></div>  -->
<div class="container container-full">
    <section class="ms-component-section">
        <div class="wrap-light">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-warning-inverse">
                        <div class="card-header">
                            <h3 class="card-title text-center">Nouvelle Actualite</h3>
                        </div>
                        <div class="card-body text-center">
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit deleniti, amet quib us neque recusandae commodi.</p> -->
                            <a href="" data-target="#myModal" data-toggle="modal">
                                <i class="fa fa-plus-circle fa-4x"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-primary-inverse">
                        <div class="card-header">
                            <h3 class="card-title">Card Title</h3>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit deleniti, amet quib us neque recusandae commodi.</p>
                            <div class="btn-group btn-group-raised">
                                <a href="#" class="btn btn-success"><i class="fa fa-eye"></i></a>
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
                                    <form  method="POST" action="{{ url('ajouter-actualite') }}" autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" class="form-control" name="{{$etablissement->id}}" required autocomplete="titre" autofocus id="titre" value=""/>

                                        <div class="form-group label-floating">
                                            <label class="control-label" for="titre">Titre</label>
                                            <input type="text" class="form-control" name="titre" required autocomplete="titre" autofocus id="titre" value=""/>
                                        </div>

                                        <div class="form-group label-floating">
                                            <label class="control-label" for="contenu">Description</label>
                                            <input type="text" class="form-control" required autocomplete="t" autofocus id="contenu" name="contenu" value=""/>
                                        </div>
                                </div>
                                <div>
                                        <button class="btn btn-raised btn-block btn-primary" type="submit" >Enregistrer</button>
                                        <button class="btn btn-raised btn-block btn-danger" type="reset">Annuler</button>
                                </div>
                                    </form>
                            </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div> 


@endsection
