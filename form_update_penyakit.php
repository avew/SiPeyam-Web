<!DOCTYPE html>
<?php include './confg/koneksi.php'; ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Form gejala</title>
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
                <div class="page-header">
                    <h3>Update Jenis Penyakit</h3>
                </div>
                <?php
                include './confg/koneksi.php';
                $id = $_GET['id_penyakit'];
                $select = "SELECT * FROM tb_penyakit where id_penyakit='$id'";
                $query_select = mysql_query($select);
                while ($data = mysql_fetch_array($query_select)) {
                    echo "<form class=\"well span6\" action=\"update_penyakit.php\" method=\"post\">
                    <label>Nama Gejala</label>
                    <input type=\"hidden\" name=\"id_penyakit\" class=\"span3\"\ value=\"$data[id_gejala]\" \">
                    <input type=\"text\" name=\"nama_penyakit\" class=\"span3\"\ value=\"$data[nama_penyakit]\" \"><br>
                    <input type=\"text\" name=\"nama_latin\" class=\"span3\"\ value=\"$data[nama_latin]\" \"><br>
                    <textarea name=\"info_penyakit\" rows=\"10\">$data[info_penyakit]</textarea><br>
                    <button class = \"btn btn-primary\" type = \"submit\">Update</button>
                    <a href = \"penyakit.php\"><button class = \"btn btn-danger\" type = \"button\">Kembali</button></a>
                    </form>";
                }
                ?>

            </div>
            <div id="push"></div>
        </div>

        <!-- begin footer -->
        <?php include './footer.php'; ?>
        <!-- end footer-->
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>
