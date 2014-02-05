<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Työhakemus">
        <meta name="author" content="Tommi Keskitalo">

        <title>työpaikka hakemus</title>

        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <style>
            html, body, .hero-unit {
                height: 100%;
                background-image: url("../img/bg2.jpg");
            }
            .backButton {
                position: absolute;
                top: 10px;
                left: 10px;
                opacity: 0.9;
                width: 100%;
            }
            .backButton:hover {
                opacity: 1;
            }
            .backButton i {
                font-size: 4em;
            }
        </style>

        <script src="bower_components/jquery/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="hero-unit" id="hero-unit">
        <div class="backButton">
            <a id="back-to-home" href="/" data-toggle="tooltip" data-original-title="Back to home"  data-placement="bottom">
                <i class="fa fa-arrow-circle-left"></i>
            </a>
        </div>
        <div class="hero-item">
            <div class="container">
                <div class="page-header">
                    <h1 id="contact">Kiitos mielenkiinnostasi<small> Otamme teihin yhteyttä, kun käyneet kaikki hakemukset läpi.</small></h1>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-right">
                    Copyright &copy 2014 Tommi Keskitalo
                </div>
            </div>
        </div>
    </div>
    </body>
    <script>
        $(function() {
            $('#back-to-home').tooltip();
        });
    </script>
</html>