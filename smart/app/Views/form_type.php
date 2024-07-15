<!-- Modal -->
<div id="modal_theme_info" class="modal fade panel-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-secondary text-white border-0">
                <h6 class="modal-title"><font color="#fff">TYPE PREOCCUPATION</font></h6>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form class="modal_form"  method="post" action="<?= site_url('add_type') ?>" enctype="multipart/form-data">

                <input type="hidden" name="id">

                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Service en charge <font color="red">*</font></label>
                        <select class="form-control" name="service" required >
                            <option>Sélectionnez un service</option>
                            <option value="">----</option>
                            <?php if(!empty($service)): foreach($service as $d): ?>
                            <option value="<?= $d->libelle ?>"><?= $d->libelle ?></option>
                            <?php endforeach; endif; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Libellé <font color="red">*</font></label>
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

