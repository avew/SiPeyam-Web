<?php include './cek.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SiPeyam</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <style type="text/css">

            /* Sticky footer styles
            -------------------------------------------------- */

            html,
            body {
                height: 100%;
                /* The html and body elements cannot have any padding or margin. */
            }

            /* Wrapper for page content to push down footer */
            #wrap {
                min-height: 100%;
                height: auto !important;
                height: 100%;
                /* Negative indent footer by it's height */
                margin: 0 auto -60px;
            }

            /* Set the fixed height of the footer here */
            #push,
            #footer {
                height: 60px;
            }
            #footer {
                background-color: #f5f5f5;
            }

            /* Lastly, apply responsive CSS fixes as necessary */
            @media (max-width: 767px) {
                #footer {
                    margin-left: -20px;
                    margin-right: -20px;
                    padding-left: 20px;
                    padding-right: 20px;
                }
            }



            /* Custom page CSS
            -------------------------------------------------- */
            /* Not required for template or sticky footer method. */

            #wrap > .container {
                padding-top: 60px;
            }
            .container .credit {
                margin: 20px 0;
            }

            code {
                font-size: 80%;
            }

        </style>
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="assets/ico/favicon.png">
    </head>

    <body>
        <!-- Wrap content -->
        <div id="wrap">
            <!-- Fixed navbar -->
            <?php include './menu.php'; ?>
            <!-- Begin page content -->
            <div class="container">
                <center><h3>Sistem Pakar Penyakit Ayam</h3>
                    <p><img src="assets/img/ayam.jpg" class="img-rounded"></p></center>
                Di indonesia Ayam adalah termasuk unggas 
                yang dimanfaatkan secara komersial,
                baik dalam lingkup makromaupun mikro,karena mempunyai nilai ekonomi yang tinggi terutama pemanfaatan dari daging dan telurnya.meskipun demikian banyak dari para peternak yang memelihara ayam tersebut masih sangat minim pengetahuannya tentang hal-hal yang berkaitan langsung apa yang menjadi mata pencahariannya itu terutama masalah penyakit dan penangulangannya ,dan berikut adalah beberapa jenis daftar penyakit yang sering menjangkit ayam dinegri ini.
                <p>Bisa anda unduh di sini<a href="#"> SiPeyam Android</a></p>
            </div>

            <div id="push"></div>
        </div>

        <?php include './footer.php'; ?>


        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>
