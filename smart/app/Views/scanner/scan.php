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

    <style>
        main {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        #reader {
            width: 600px;
            border: 2px solid red;
            /* Ajoute une bordure rouge autour du rectangle de détection */
            box-sizing: content-box;
            /* Empêche la bordure de modifier les dimensions du rectangle de détection */
        }
        
        #result {
            text-align: center;
            font-size: 1.5rem;
        }
    </style>

</head>

<body style="background-image: url('public/assets/images/fond.jpg'); background-position: center;background-repeat: no-repeat;background-size: cover;">

    <div>
        <div class="container">
            <div class="row">
                <div class="col-12" style="text-align:center">
                    <div class="d-flex align-items-center min-vh-100" style="display: flex; justify-content: center;">
                        <div class="d-block bg-white shadow-lg rounded my-5">
                            <div class="row" style="display: flex; justify-content: center;">
                                
                                

                                <div class="col-lg-9">
                                    <div class="p-2" >
                                        <main>
                                            <div id="reader"></div>
                                        </main>
                                    </div> 
                                </div>

                                <div class="col-lg-3">
                                    <div class="p-2">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <h2><b>SMART ACCESS</b></h2>
                                                <p>Système de lecture de QrCode</p>

                                                    <div id="contenu" style="padding-top:50px; vertical-align: middle;">
                                                        
                                                    </div>
                                                    <br>
                                                    <div id="result"></div>

                                            </div> 
                                        </div>
                                    </div> 
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.4/html5-qrcode.min.js" integrity="sha512-k/KAe4Yff9EUdYI5/IAHlwUswqeipP+Cp5qnrsUjTPCgl51La2/JhyyjNciztD7mWNKLSXci48m7cctATKfLlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('#result').hide();
        $('#contenu').hide();

        const scanner = new Html5QrcodeScanner('reader', {
            fps: 20,
            autostart: true,
            qrbox: {
                width: 400, // Largeur du rectangle de détection en pixels
                height: 400 // Hauteur du rectangle de détection en pixels
            },
        });


        //SCANNING CODEQR  ENTREE
        scanner.render(checking_code, error);

        function checking_code(ref)
        {
            document.getElementById('result').innerHTML = `${ref}`;
            
            var data1 = $('#result').html();
            var wordlines = data1.split(/\r?\n|\r|\n/g);

            //alert(wordlines[0]);
            var dataString = "reference="+ wordlines[0];
           
            $.ajax({
                type: "POST",
                url: "<?= site_url('scanner_check')?>",
                data: dataString,
                cache: false,
                success: function(result)
                {
                    $('#contenu').show();

                    if(result == "0")
                    {
                        $('#contenu').html('<h3 style="background-color:red; color:white; vertical-align: middle; padding: 5px 5px 5px 5px;" id="message">Le QrCode n\'est pas complet.</h3>');
                    }
                    else if(result == "1")
                    {
                        $('#contenu').html('<h3 style="background-color:red; color:white; vertical-align: middle; padding: 5px 5px 5px 5px;" id="message">Votre QrCode n\'est pas reconnu par le système..</h3>');
                    }
                    else if(result == "2")
                    {
                        $('#contenu').html('<h3 style="background-color:red; color:white; vertical-align: middle; padding: 5px 5px 5px 5px;" id="message">Vous n\'êtes plus autorisé(e) à entrer <br>dans l\'établissement, car vous avez exceder le nombre de tentatives requis.</h3>');
                    }
                    else if(result == "3")
                    {
                        $('#contenu').html('<h3 style="background-color:red; color:white; vertical-align: middle; padding: 5px 5px 5px 5px;" id="message">Le système de lecture est desactivé.</h3>');
                    }
                    else
                    {
                        $('#contenu').html('<h5 style="background-color:green; color:white; vertical-align: middle; padding: 5px 5px 5px 5px;" id="message">'+result+'</h5>');
                    }

                    $('#contenu').delay(10000).fadeOut('slow'); //apres 10 secondes

                }
            });
        }

        function success(result) {
            document.getElementById('result').innerHTML = `
        <h2>Code QR Scanné</h2>
        <p><a href="${result}">${result}</a></p>
        <form id="resultForm" method="post" action="#">
            <input type="hidden" name="resultValue" value="${result}">
        </form>`;

            scanner.clear();
            document.getElementById('reader').remove();
            // document.getElementById('resultForm').submit();
            // document.getElementById('logoImage').setAttribute('src', 'logo.png'); // Utilisez le chemin relatif ici
        }

        function error(err) {
            console.error(err);
        }
    </script>
    
</body>

</html>