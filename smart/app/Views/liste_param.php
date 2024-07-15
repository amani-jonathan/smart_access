<?= $this->extend('layouts/admin_template') ?>

<?= $this->section('title') ?>
   
<?= $this->endSection() ?>


<?= $this->section('content') ?>

    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Paramètres généraux</h4>

                    <!-- <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <button type="button" onclick="add_form()" class="btn btn-secondary btn-sm waves-effect waves-light"><i class="fas fa-plus"></i>&nbsp;&nbsp; AJOUTER</button>
                        </ol>
                    </div> -->
                    
                </div>
            </div>
        </div>     
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th class="all">N°</th>
                                    <th class="all">Libellé</th>
                                    <th class="all">Actions</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td><b>OUVERTURE AUTOMATIQUE DU PORTAIL</b></td>
                                    <td>
                                        <?php if($param->ouverture_portail == 0): ?>
                                            <a href="<?= site_url('add_param/1/1') ?>" title="Activer"><span class="badge badge-success">Activer</span></a>
                                        <?php else: ?>
                                            <a href="<?= site_url('add_param/1/0') ?>" title="Désactiver"><span class="badge badge-danger">Désactiver</span></a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><b>NBRE DE TENTATIVE AVEC LE CODEQR</b></td>
                                    <td>
                                        <form method="post" action="<?= site_url('add_param2') ?>">
                                            <select class="form-control" name="param" required >
                                            <option value="0" <?= ($param->nbre_possibilite == "0") ? 'selected':'' ?>>0</option>
                                            <option value="1" <?= ($param->nbre_possibilite =="1") ? 'selected':'' ?>>1</option>
                                            <option value="2" <?= ($param->nbre_possibilite =="2") ? 'selected':'' ?>>2</option>
                                            <option value="3" <?= ($param->nbre_possibilite =="3") ? 'selected':'' ?>>3</option>
                                            </select>
                                            <button type="submit" class="badge badge-danger">Valider</button>
                                        </form>
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <td>3</td>
                                    <td>RETOUR APRES AVOIR TERMIN&Eacute; SA VISITE</td>
                                    <td>
                                        <?php if($param->retour_visite_termine == 0): ?>
                                            <a href="<?= site_url('add_param/3/1') ?>" title="Activer"><span class="badge badge-success">Activer</span></a>
                                        <?php else: ?>
                                            <a href="<?= site_url('add_param/3/0') ?>" title="Désactiver"><span class="badge badge-danger">Désactiver</span></a>
                                        <?php endif; ?>
                                    </td>
                                </tr> -->
                                <tr>
                                    <td>4</td>
                                    <td><b>SYSTEME DE LECTURE DE QRCODE</b></td>
                                    <td>
                                        <?php if($param->verrouillage_porte == 0): ?>
                                            <a href="<?= site_url('add_param/4/1') ?>" title="Activer"><span class="badge badge-success">Activer</span></a>
                                        <?php else: ?>
                                            <a href="<?= site_url('add_param/4/0') ?>" title="Désactiver"><span class="badge badge-danger">Désactiver</span></a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><b>BIP SONORE</b></td>
                                    <td>
                                        <?php if($param->bip_sonore == 0): ?>
                                            <a href="<?= site_url('add_param/5/1') ?>" title="Activer"><span class="badge badge-success">Activer</span></a>
                                        <?php else: ?>
                                            <a href="<?= site_url('add_param/5/0') ?>" title="Désactiver"><span class="badge badge-danger">Désactiver</span></a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                        
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

    </div> 

    <?= $this->include('js_script') ?>

<?= $this->endSection() ?>