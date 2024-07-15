<?= $this->extend('layouts/admin_template') ?>

<?= $this->section('title') ?>
   
<?= $this->endSection() ?>


<?= $this->section('content') ?>

    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Types de préoccupation</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <button type="button" onclick="add_form()" class="btn btn-secondary btn-sm waves-effect waves-light"><i class="fas fa-plus"></i>&nbsp;&nbsp; AJOUTER</button>
                        </ol>
                    </div>
                    
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
                                    <th class="all">Service</th>
                                    <th class="all">Actions</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>
                                <?php if(!empty($data)): foreach($data as $d): ?>
                                <tr>
                                    <td><?= $d->id ?></td>
                                    <td><?= $d->libelle ?></td>
                                    <td><?= $d->service ?></td>
                                    <td>
                                        <button type="button" onclick="edit_type('<?= $d->id ?>')" title="Modifier" class="btn btn-success btn-rounded waves-effect waves-light"><i class="fas fa-edit"></i></button>
                                        <button type="button" onclick="delete_type('<?= $d->id ?>')" title="Supprimer" class="btn btn-danger btn-rounded waves-effect waves-light"><i class="fas fa-trash"></i></button>
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

    <?= $this->include('form_type') ?>
    <?= $this->include('js_script') ?>

<?= $this->endSection() ?>