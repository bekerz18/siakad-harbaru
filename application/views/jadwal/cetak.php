<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title></title>

        <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="OneUI">
        <meta property="og:description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?php echo base_url('assets/media/favicons/favicon.png');?>">
        <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url('assets/media/favicons/favicon-192x192.png');?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/media/favicons/apple-touch-icon-180x180.png');?>">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url('assets/css/oneui.min.css');?>">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
        <!-- END Stylesheets -->

    </head>
    <body style="background-color: #FFFFFF!important;">
       
                <!-- Page Content -->
                <div style="width: 100%">
                    <!-- Invoice -->
                    <div class="block">
                        <div class="block-content">
                            <div class="text-center">
                                        <p class="h3">Jadwal Pelajaran PKBM Harapan Baru</p>
                                        <p class="h4">Tahun Ajaran <?php echo $this->session->userdata('tahunajaran_nama');?></p>
                                </div>

                                <!-- Table -->
                                <div class="table-responsive push">
                                    <table class="table table-bordered">
                                        <thead class="text-center">
                                            <tr>
                                                <th class="text-center" style="width: 60px;">No</th>
                                                <th style="vertical-align: middle;">Kelas</th>
                                                <th style="vertical-align: middle;">Tipe Pembelajaran</th>
                                                <th style="vertical-align: middle;">Hari</th>
                                                <th style="vertical-align: middle;">Mata Pelajaran</th>
                                                <th style="vertical-align: middle;">Tutor</th>
                                                <th style="vertical-align: middle;">Waktu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=0; foreach($jadwals as $jadwal):$no++?>
                                            <tr id="<?=$jadwal->jadwal_id;?>">
                                                <td class="text-center"><?=$no;?></td>
                                                <td><?=$jadwal->kelas_nama;?></td>
                                                <td><?=$jadwal->jadwal_tipe_pembelajaran?></td>
                                                <td><?=$jadwal->jadwal_hari;?></td>
                                                <td><?=$jadwal->matpel_nama;?></td>
                                                <td><?=$jadwal->tutor_nama;?></td>
                                                <td><?=$jadwal->jadwal_waktu;?></td>
                                            </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                    </table>
                                </div>
                                <!-- END Table -->

                                
                            </div>
                        </div>
                    </div>
                    <!-- END Invoice -->
                </div>
                <!-- END Page Content -->

           

        <!--
            OneUI JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="<?php echo base_url('assets/js/oneui.core.min.js');?>"></script>

        <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="<?php echo base_url('assets/js/oneui.app.min.js');?>"></script>
        <script>
            window.print();
        </script>
    </body>
</html>
