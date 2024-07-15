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
        <div class="container">
            <div class="row">
                <div class="col-12" style="text-align:center">
                    <div class="d-flex align-items-center min-vh-100" style="display: flex; justify-content: center;">
                        <div class="d-block bg-white shadow-lg rounded my-5">
                            <div class="row" style="display: flex; justify-content: center;">
                                
                                <div class="p-5" >
                                    <div class="text-center mb-3">
                                        <a href="" class="text-dark font-size-22 font-family-secondary">
                                            <!-- <i class="mdi mdi-alpha-x-circle"></i> <b>SMART ACCESS</b> -->
                                            <img src="<?= base_url().'public/assets/images/logo.png' ?>" height="120px" />
                                        </a>
                                    </div>
                                    <h1 class="h5 mb-1"><b>SMART ACCESS</b></h1>
                                    <p class="text-muted mb-4">Veuillez remplir tous les champs</p>

                                    <?php if(session('messages') != null ){ ?>
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <span class="fw-semibold"><?= session('messages'); ?></span>
                                        </div>
                                    <?php } ?>

                                    <form method="post" name="user" action="<?= site_url('connexion') ?>">
                                        <div class="form-group">
                                            <input type="email" name="username" value="<?= old('username') ?>" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email" >
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" value="<?= old('password') ?>" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mot de passe" >
                                        </div>
                                        <button class="btn btn-success btn-block waves-effect waves-light" type="submit"> Se connecter </button>                                  
                                    </form>

                                    <div class="row mt-4">
                                        <div class="col-12 text-center">
                                            <p class="text-muted mb-2"><a href="pages-recoverpw.html" class="text-muted font-weight-medium ml-1">Mot de passe oublié</a></p><br>
                                            <p class="text-muted mb-0">FabLab UVCI &copy Copyrigth tous droits reservés</p>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div> 

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