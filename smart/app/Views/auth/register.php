<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SMART ACCESS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>public/assets/images/favicon.ico">

    <!-- App css -->
    <link href="<?= base_url() ?>public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>public/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body style="background-image: url('public/assets/images/fond.png'); background-position: center;background-repeat: no-repeat;background-size: cover;">

    <div>
        <div class="container" >
            <div class="row" style="background-image: url('../../public/assets/images/fond.png')">
                <div class="col-12">
                    <div class="d-flex align-items-center min-vh-100">
                        <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                            <div class="row">
                                <div class="col-lg-5 d-none d-lg-block bg-register rounded-left" style="background-image: url('<?= base_url() ?>public/assets/images/badge.jpg');">
                                    

                                </div>
                                <div class="col-lg-7">
                                    <div class="p-3">
                                        <div class="text-center mb-2">
                                            <a href="" class="text-dark font-size-22 font-family-secondary">
                                                <img src="<?= base_url().'public/assets/images/logo.png' ?>" height="100px" />
                                            </a>
                                        </div>
                                        <h1 class="h3 mb-1 text-center">Formulaire de demande</h1>
                                        <p class="text-muted mb-4 text-center">Veuillez remplir tous les champs svp</p>

                                        <?php if(session('messages') != null ){ ?>
                                        <div class="alert bg-danger text-white alert-dismissible fade show" style="margin-left:20px; margin-right:20px">
                                            <span class="fw-semibold"><?= session('messages'); ?></span>
                                        </div>
                                        <?php } ?>

                                        <?php if(session('message') != null ){ ?>
                                        <div class="alert bg-success text-white alert-dismissible fade show" style="margin-left:20px; margin-right:20px">
                                            <span class="fw-semibold"><?= session('message'); ?></span>
                                        </div>
                                        <?php } ?>

                                    <form method="post" name="smart_access" action="<?= site_url('save_rdv') ?>">

                                        <!-- <div class="form-group row">
                                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                                        <label for="matricule">Identifiant permanant </label>
                                                        <input type="text" class="form-control " id="matricule" name="matricule" required>
                                                    </div>
                                        </div> -->

                                                <div class="form-group row" >
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <label for="nom">Nom</label>
                                                        <input type="text" class="form-control " id="nom" name="nom" required>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="prenom(s)">Prénom(s)</label>
                                                        <input type="text" class="form-control " id="prenom" name="prenoms" required>
                                                    </div>
                                               
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                                        <label for="email">Adresse Email</label>
                                                        <input type="email" class="form-control " id="email" name="email" required>
                                                    </div>


                                                </div>


                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <label for="date_rdv">Date du rendez-vous</label>
                                                        <input type="Date" class="form-control " id="date_rdv" name="date_rdv" required>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <label for="objet">L'objet du rendez-vous :</label> 
                                                        <br>
                                                        <select id="objet" name="objet" class="form-control ">
                                                            <option value="">Selectionnez un objet</option>
                                                            <option value="">-------------</option>
                                                            <?php if(!empty($data)): foreach($data as $d): ?>
                                                            <option value="<?= $d->libelle ?>"><?= strtoupper($d->libelle) ?></option>
                                                            <?php endforeach; endif; ?>
                                                        </select>
                                                    </div>


                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                                        <label for="Message">Message</label> <br>
                                                        <textarea name="message" class="form-control" id="message" name="message" rows="3"></textarea>
                                                        
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-4 text-center"></div>
                                                    <div class="col-4 text-center">
                                                        <div class="form-group"><br/>
                                                            <button type="submit" class="btn btn-primary btn-block" style="background-color: #2ac14e; border-color: #2ac14e">ENREGISTRER</button>
                                                        </div>     
                                                    </div>
                                                    <div class="col-4 text-center"></div>
                                                </div>
                                                  
                                    </form>

                                        <div class="row mt-4">
                                            <div class="col-12 text-center">
                                                
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div> <!-- end .padding-5 -->
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div> <!-- end .w-100 -->
                    </div> <!-- end .d-flex -->
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->


    <!-- jQuery  -->
    <script src="<?= base_url() ?>public/assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>public/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>public/assets/js/metismenu.min.js"></script>
    <script src="<?= base_url() ?>public/assets/js/waves.js"></script>
    <script src="<?= base_url() ?>public/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="<?= base_url() ?>public/assets/js/theme.js"></script>

    
</body>

</html>