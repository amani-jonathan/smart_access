<!-- Modal -->
<div id="modal_theme_info" class="modal fade panel-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-secondary text-white border-0">
                <h6 class="modal-title"><font color="#fff">SERVICE</font></h6>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form class="modal_form"  method="post" action="<?= site_url('add_service') ?>" enctype="multipart/form-data">

                <input type="hidden" name="id">

                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Titre <font color="red">*</font></label>
                        <input type="text" name="libelle" class="form-control"  spellcheck="false" autocomplete="off" required>
                    </div>
                    
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Fermer</button>
                    <button type="submit" name="Enregistrer" id="BtnEnregistrer" class="btn btn-success waves-effect waves-light submit" >Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>

