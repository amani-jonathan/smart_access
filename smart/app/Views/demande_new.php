<?= $this->extend('layouts/admin_template') ?>

<?= $this->section('title') ?>
   
<?= $this->endSection() ?>


<?= $this->section('content') ?>

    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Les nouvelles demandes de rendez-vous</h4>                    
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
                                    <th class="all">Date_Rdv</th>
                                    <th class="all">Reference</th>
                                    <th class="all">Objet</th>
                                    <th class="all">Nom et prénoms</th>
                                    <th class="all">Service</th>
                                    <th class="all">Etat</th>
                                    <th class="all">Actions</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                <?php if(!empty($data)): foreach($data as $d): ?>
                                <tr>
                                    <td><?= $d->date_rdv ?></td>
                                    <td><?= $d->reference ?></td>
                                    <td><?= $d->objet ?></td>
                                    <td><?= $d->nom." ".$d->prenoms ?></td>
                                    <td><?= $d->service ?></td>
                                    <td> <span class="badge badge-warning">Non traité</span></td>
                                    <td>
                                        <button type="button" onclick="edit_demande('<?= $d->id ?>')" title="Modifier" class="btn btn-success btn-rounded waves-effect waves-light"><i class="fas fa-edit"></i></button>
                                        <button type="button" onclick="delete_demande('<?= $d->id ?>')" title="Supprimer" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <?php endforeach; else: endif; ?>
                                
                            </tbody>
                        </table>
                        
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

    </div> 

    <?= $this->include('form_service') ?>
    <?= $this->include('js_script') ?>

<?= $this->endSection() ?>