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



