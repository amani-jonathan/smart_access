<?= $this->extend('layouts/admin_template') ?>

<?= $this->section('title') ?>
   
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?php $db = db_connect(); ?>

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18"> Tableau de bord  </h4>

                <!-- <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Xacton</a></li>
                        <li class="breadcrumb-item active">Tableau de bord </li>
                    </ol>
                </div> -->

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card bg-primary border-primary">
                <div class="card-body">
                    <div class="mb-4">
                        <!-- <span class="badge badge-soft-light float-right">Daily</span> -->
                        <h5 class="card-title mb-0 text-white">Total Demandes</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0 text-white">
                                <?= $demandes ?>
                            </h2>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card bg-success border-success">
                <div class="card-body">
                    <div class="mb-4">
                        <!-- <span class="badge badge-soft-light float-right">Per Week</span> -->
                        <h5 class="card-title mb-0 text-white">Nouvelles demandes</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center text-white mb-0">
                                <?= $new_dmd ?>
                            </h2>
                        </div>
                    </div>

                    <!-- <div class="progress badge-soft-light shadow-sm" style="height: 7px;">
                        <div class="progress-bar bg-light" role="progressbar" style="width: 38%;"></div>
                    </div> -->
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card bg-warning border-warning">
                <div class="card-body">
                    <div class="mb-4">
                        <!-- <span class="badge badge-soft-light float-right">Per Month</span> -->
                        <h5 class="card-title mb-0 text-white">Demandes en cours...</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center text-white mb-0">
                                <?= $current_dmd ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card bg-info border-info">
                <div class="card-body">
                    <div class="mb-4">
                        <!-- <span class="badge badge-soft-light float-right">All Time</span> -->
                        <h5 class="card-title mb-0 text-white">Demandes traitées</h5>
                    </div>
                    <div class="row d-flex align-items-center mb-4">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center text-white mb-0">
                                <?= $validated_dmd ?>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col-->
    </div>
    <!-- end row -->

    <?php if($param->ouverture_portail == 0) : ?>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title" style="color:red">Les dix (10) dernières demandes d'entrée dans l'établissement</h4>
                    <!-- <p class="card-subtitle mb-4 font-size-13">Transaction period from 21 July to 25 Aug </p> -->

                    <div class="table-responsive">
                        <table class="table table-centered table-hover table-xl mb-0" id="recent-orders">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Date_RDV</th>
                                    <th class="border-top-0">Reference</th>
                                    <th class="border-top-0">Objet</th>
                                    <th class="border-top-0">Nom & Prénoms</th>
                                    <th class="border-top-0">Service</th>
                                    <th class="border-top-0"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($data)): foreach($data as $ds): ?>
                                <?php 
                                $d = $db->query('SELECT * FROM demande WHERE reference="'.$ds->reference.'" ')->getFirstRow();
                                if(!empty($d)):
                                ?>
                                <tr>
                                    <td class="text-truncate"><?= $d->date_rdv ?></td>
                                    <td class="text-truncate"><?= $d->reference ?></td>
                                    <td>
                                        <span class="badge badge-soft-secondary p-2"><?= $d->objet ?></span>
                                    </td>
                                    <td><?= $d->nom." ".$d->prenoms ?></td>
                                    <td><span class="badge badge-soft-success p-2"><?= $d->service ?></span></td>
                                    <td class="text-truncate">
                                        <?php if($param->ouverture_portail == 0) : ?>
                                            <a href="<?= site_url('gate_validation/'.base64_encode($d->reference)) ?>"><button type="button" title="Ouvrir le portail" class="btn btn-success btn-rounded waves-effect waves-light"><i class="fas fa-unlock"></i></button></a>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endif; ?>
                                <?php endforeach; else: endif; ?>
                            </tbody>
                        </table>
                    </div>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->

    </div>
    <?php endif; ?>

    <!-- end row-->

</div> 



<?= $this->endSection() ?>