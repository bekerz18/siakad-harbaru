
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title><?=$title?></title>

        <meta name="robots" content="noindex, nofollow">


        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="<?=base_url('assets/media/favicons/favicon.png')?>">
        <link rel="icon" type="image/png" sizes="192x192" href="<?=base_url('assets/media/favicons/favicon-192x192.png')?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('assets/media/favicons/apple-touch-icon-180x180.png')?>">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/js/plugins/datatables/dataTables.bootstrap4.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/js/plugins/select2/css/select2.min.css')?>">
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="<?=base_url('assets/css/oneui.min.css')?>">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="<?=base_url('assets/css/themes/amethyst.min.css')?>"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-dark'                              Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Light themed Header
            'page-header-dark'                          Dark themed Header

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
            <!-- Side Overlay-->
            <aside id="side-overlay" class="font-size-sm">
                <!-- Side Header -->
                <div class="content-header border-bottom">
                    <!-- User Avatar -->
                    <a class="img-link mr-1" href="javascript:void(0)">
                        <img class="img-avatar img-avatar32" src="<?= base_url ('upload/images/'.$this->session->userdata('foto'));?>" alt="">
                    </a>
                    <!-- END User Avatar -->

                    <!-- User Info -->
                    <div class="ml-2">
                        <a class="link-fx text-dark font-w600" href="javascript:void(0)"><?= $this->session->userdata('nama');?></a>
                    </div>
                    <!-- END User Info -->

                  
                </div>
                <!-- END Side Header -->

                
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <!--
                Sidebar Mini Mode - Display Helper classes

                Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

                Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
                Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
                Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
            -->
            <nav id="sidebar" aria-label="Main Navigation">
                <!-- Side Header -->
                <div class="content-header bg-white-5">
                    <!-- Logo -->
                    <a class="font-w600 text-dual" href="index.html">
                        <i class="fa fa-circle-notch text-primary"></i>
                        <span class="smini-hide">
                            <span class="font-w700 font-size-h5">iak</span> <span class="font-w400">Harba</span>
                        </span>
                    </a>
                    <!-- END Logo -->

                    <!-- Options -->
                    <div>
                        <!-- Color Variations -->
                        <div class="dropdown d-inline-block ml-3">
                            <a class="text-dual font-size-sm" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="si si-drop"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                                <!-- Color Themes -->
                                <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="default" href="#">
                                    <span>Default</span>
                                    <i class="fa fa-circle text-default"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#">
                                    <span>Amethyst</span>
                                    <i class="fa fa-circle text-amethyst"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
                                    <span>City</span>
                                    <i class="fa fa-circle text-city"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
                                    <span>Flat</span>
                                    <i class="fa fa-circle text-flat"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
                                    <span>Modern</span>
                                    <i class="fa fa-circle text-modern"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#">
                                    <span>Smooth</span>
                                    <i class="fa fa-circle text-smooth"></i>
                                </a>
                                <!-- END Color Themes -->

                                <div class="dropdown-divider"></div>

                                <!-- Sidebar Styles -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_light" href="#">
                                    <span>Sidebar Light</span>
                                </a>
                                <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                                    <span>Sidebar Dark</span>
                                </a>
                                <!-- Sidebar Styles -->

                                <div class="dropdown-divider"></div>

                                <!-- Header Styles -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item" data-toggle="layout" data-action="header_style_light" href="#">
                                    <span>Header Light</span>
                                </a>
                                <a class="dropdown-item" data-toggle="layout" data-action="header_style_dark" href="#">
                                    <span>Header Dark</span>
                                </a>
                                <!-- Header Styles -->
                            </div>
                        </div>
                        <!-- END Themes -->

                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                            <i class="fa fa-times"></i>
                        </a>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Options -->
                </div>
                <!-- END Side Header -->

                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="<?=base_url('dasbor')?>">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Dasbor</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="<?=base_url('jadwalmengajar')?>">
                            <i class="nav-main-link-icon far fa-calendar-times"></i>
                                <span class="nav-main-link-name">Jadwal</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="<?=base_url('presensi')?>">
                            <i class="nav-main-link-icon si si-note"></i>
                                <span class="nav-main-link-name">Presensi</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link active" href="<?=base_url('nilai')?>">
                            <i class="nav-main-link-icon si si-layers"></i>
                                <span class="nav-main-link-name">Nilai</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="<?=base_url('pengaturan')?>">
                            <i class="nav-main-link-icon si si-settings"></i>
                                <span class="nav-main-link-name">Pengaturan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="<?=base_url('profil')?>">
                            <i class="nav-main-link-icon si si-user ml-1"></i>
                                <span class="nav-main-link-name">Profil</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="<?=base_url('auth/logout')?>">
                            <i class="nav-main-link-icon si si-logout ml-1"></i>
                                <span class="nav-main-link-name">Keluar</span>
                            </a>
                        </li>
                        
                   
                       
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </nav>
            <!-- END Sidebar -->

             <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="d-flex align-items-center">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Toggle Mini Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                            <i class="fa fa-fw fa-ellipsis-v"></i>
                        </button>
                        <!-- Tahun Ajaran  -->
                        <select id="tahunajaran" class="js-select2 form-control form-control-lg form-control-alt" id="tahunajaran_id" name="tahunajaran_id" style="width: 100%;" data-placeholder="Silahkan pilih tahun ajaran" required>
                            <option value=""></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                            <?php foreach($tahunajarans as $tahunajaran):?>
                                <option value="<?php echo $tahunajaran["tahunajaran_id"]?>" <?php if($this->session->userdata('tahunajaran_id')==$tahunajaran["tahunajaran_id"]) echo "selected";?>>Tahun Ajaran <?=$tahunajaran["tahunajaran_nama"]?></option>
                            <?php endforeach;?>
                        </select>
                        <!-- END Toggle Mini Sidebar -->

                        <!-- END Apps Modal -->

                        
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="d-flex align-items-center">
                        <!-- User Dropdown -->
                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded" src="<?= base_url ('upload/images/'.$this->session->userdata('foto'));?>" alt="Header Avatar" style="width: 18px;">
                                <span class="d-none d-sm-inline-block ml-1"><?= $this->session->userdata('nama');?></span>
                                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                                <div class="p-3 text-center bg-primary">
                                    <img class="img-avatar img-avatar48 img-avatar-thumb" src="<?= base_url ('upload/images/'.$this->session->userdata('foto'));?>" alt="">
                                </div>
                                <div class="p-2">
                                    <h5 class="dropdown-header text-uppercase">User Options</h5>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?=base_url('profil')?>">
                                        <span>Profil</span>
                                            <i class="si si-user ml-1"></i>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?=base_url('pengaturan')?>">
                                        <span>Pengaturan</span>
                                        <i class="si si-settings"></i>
                                    </a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <h5 class="dropdown-header text-uppercase">Aksi</h5>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="<?=base_url('auth/logout')?>">
                                        <span>Log Out</span>
                                        <i class="si si-logout ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END User Dropdown -->


                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Hero -->
                <div class="bg-image overflow-hidden" style="background-image: url('<?=base_url('assets/media/photos/photo3@2x.jpg');?>');">
                    <div class="bg-primary-dark-op">
                        <div class="content content-narrow content-full">
                            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left">
                                <div class="flex-sm-fill">
                                    <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear"><?=$title?></h1>
                                    <h2 class="h4 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250">Selamat Datang <?= $this->session->userdata('nama');?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->
                <!-- Page Content -->
                <div class="content">
                    <!-- Jadwal -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title"><?=$title;?></h3>
                            <div class="block-options">
                                <a href="<?=base_url('jadwalmengajar/cetak');?>">
                                    <button type="button" class="btn btn-sm btn-secondary">
                                        Cetak
                                    </button>
                                </a>

                                <a href="<?=base_url('nilai/rekap/').$this->uri->segment(3).'/'.$this->uri->segment(4);?>">
                                    <button type="button" class="btn btn-sm btn-info">
                                        Reload
                                    </button>
                                </a>

                                <a href="<?=base_url();?>">
                                    <button type="button" class="btn btn-sm btn-light">
                                        Kembali
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-vcenter">
                                    <thead>
                                        <tr>
                                            <th colspan="2" class="text-center">Rekap Nilai</th>
                                        </tr>
                                        <tbody>
                                            <tr>
                                                <td>Kelas</td>
                                                <td>: <?=$jadwal["kelas_nama"];?></td>
                                            </tr>
                                            <tr>
                                                <td>Mata Pelajaran</td>
                                                <td>: <?=$jadwal["matpel_nama"];?></td>
                                            </tr>
                                            <tr>
                                                <td>Semester</td>
                                                <td>: <?=ucfirst($this->uri->segment(4))?></td>
                                            </tr>
                                                <td>Tutor</td>
                                                <td>: <?=$this->session->userdata('nama');?></td>
                                            </tr>
                                        </tbody>
                                    </thead>
                                    <!-- <tbody>
                                    </tbody> -->
                                </table>
                            </div>
                            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <div class="table-responsive">
                                  <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                    <thead class="text-center">
                                        <tr>
                                            <th rowspan="2" style="vertical-align:middle;">NO</th>
                                            <th rowspan="2" style="vertical-align:middle;">Nama</th>
                                            <th colspan="4">Total</th>
                                            <th colspan="4">Nilai</th>
                                            <th rowspan="2" style="vertical-align:middle;">Total</th>
                                            <th rowspan="2" style="vertical-align:middle;">Rata-Rata</th>
                                            <th rowspan="2" style="vertical-align:middle;">Keterangan</th>
                                        </tr>
                                        <th width="5%">Harian</th>
                                        <th width="5%">Tugas</th>
                                        <th width="5%">UTS</th>
                                        <th width="5%">UAS</th>
                                        <th width="5%">Harian</th>
                                        <th width="5%">Tugas</th>
                                        <th width="5%">UTS</th>
                                        <th width="5%">UAS</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sumTotal=0;
                                            $sumAverage=0;

                                            $avgOfTotal=0;
                                            $avgOfavg=0;

                                            $no=0;

                                            foreach($wargabelajars as $wargabelajar){

                                                $no++;

                                                $id = $wargabelajar["wargabelajar_id"];
                                                $idnilai = $model->getIDNIilai($this->uri->segment(3),$id,$this->uri->segment(4));

                                                

                                                $nilai = $idnilai["nilai_id"];

                                                $CountUTS = $model->countUts($nilai);
                                                $CountUAS = $model->countUas($nilai);
                                                $CountTugas = $model->countTugas($nilai);
                                                $CountHarian = $model->countHarian($nilai);

                                                $sumUTS = $model->sumUts($nilai);
                                                $sumUAS = $model->sumUas($nilai);
                                                $sumTugas = $model->sumTugas($nilai);
                                                $sumHarian = $model->sumHarian($nilai);

                                                $total = $sumUTS['uts']+$sumUAS['uas']+$sumTugas['tugas']+$sumHarian['harian'];
                                                $average = ($total / 4);
                                                $status;

                                                if($average>=90 && $average<=100){
                                                    $status ="A";
                                                }elseif($average>=80 && $average<90){
                                                    $status = "B";
                                                }elseif($average>=70 && $average<80){
                                                    $status = "C";
                                                }elseif($average>=60 && $average<70){
                                                    $status = "D";
                                                }else{
                                                    $status = "E";
                                                }

                                                $sumTotal +=$total;
                                                $sumAverage += $average;




                                        ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no;?></td>
                                                <td>
                                                    <a href="<?php echo base_url('nilai/matpel/').$this->uri->segment(4).'/'.$this->uri->segment(3).'/'.$wargabelajar["wargabelajar_id"];?>" target="_blank" title="Masukan Nilai">
                                                        <?php echo $wargabelajar["wargabelajar_nama"]."<br>".$wargabelajar["wargabelajar_nomor_induk"];?>
                                                    </a>
                                                </td>
                                                <td class="text-center" style="vertical-align:middle;"><?php echo $CountHarian['harian'];?></td>
                                                <td class="text-center" style="vertical-align:middle;"><?php echo $CountTugas['tugas'];?></td>
                                                <td class="text-center" style="vertical-align:middle;"><?php echo $CountUTS['uts'];?></td>
                                                <td class="text-center" style="vertical-align:middle;"><?php echo $CountUAS['uas'];?></td>
                                                <td class="text-center" style="vertical-align:middle;"><?php echo number_format($sumHarian['harian'],2);?></td>
                                                <td class="text-center" style="vertical-align:middle;"><?php echo number_format($sumTugas['tugas'],2);?></td>
                                                <td class="text-center" style="vertical-align:middle;"><?php echo number_format($sumUTS['uts'],2);?></td>
                                                <td class="text-center" style="vertical-align:middle;"><?php echo number_format($sumUAS['uas'],2);?></td>
                                                <td class="text-center" style="vertical-align:middle;"><?php echo number_format($total,2);?></td>
                                                <td class="text-center" style="vertical-align:middle;"><?php echo number_format($average,2);?></td>
                                                <td class="text-center" style="vertical-align:middle;"><?php echo $status;?></td>
                                            </tr>
                                        <?php } 
                                            $avgOfTotal=$sumTotal/$no;
                                            $avgOfavg=$sumAverage/$no;
                                        ?>
                                        <tr>
                                            <th colspan="10">Total</th>
                                            <td class="text-center"><?php echo number_format($sumTotal,2);?></td>
                                            <td class="text-center"><?php echo number_format($sumAverage,2);?></td>
                                            <td class="text-center"></td>
                                        </tr>
                                        <tr>
                                            <th colspan="10">Rata-Rata</th>
                                            <td class="text-center"><?php echo number_format($avgOfTotal,2);?></td>
                                            <td class="text-center"><?php echo number_format($avgOfavg,2);?></td>
                                            <td class="text-center"></td>
                                        </tr>
                                        <tr>
                                            <th colspan="10">Tertinggi</th>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">Zam Zam</td>
                                        </tr>
                                        <tr>
                                            <th colspan="10">Terendah</th>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">Zam Zam</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <a href="<?=base_url('dasbor');?>">
                                <button type="button" class="btn btn-light js-click-ripple-enabled" data-toggle="click-ripple" style="overflow: hidden; position: relative; z-index: 1;"><span class="click-ripple animate" style="height: 87.2656px; width: 87.2656px; top: -21.625px; left: 31.375px;"></span>Kembali Ke Halaman Dasbor</button>
                            </a>
                        </div>
                    </div>
                    <!-- End List Matpel -->

                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-body-light">
                <div class="content py-3">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                        </div>
                        <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                            <a class="font-w600" href="https://1.envato.market/xWy" target="_blank">OneUI 4.3</a> &copy; <span data-toggle="year-copy"></span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->

        </div>
        <!-- END Page Container -->

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
        <script src="<?=base_url('assets/js/oneui.core.min.js')?>"></script>

        <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="<?=base_url('assets/js/oneui.app.min.js')?>"></script>

        <!-- Page JS Plugins -->
        <script src="<?=base_url('assets/js/plugins/datatables/jquery.dataTables.min.js')?>"></script>
        <script src="<?=base_url('assets/js/plugins/datatables/dataTables.bootstrap4.min.js')?>"></script>
        <script src="<?=base_url('assets/js/plugins/select2/js/select2.full.min.js');?>"></script>

        <!-- Page JS Code -->
        <script src="<?=base_url('assets/js/pages/be_tables_datatables.min.js')?>"></script>
        <!-- Custom -->
        <script>
            jQuery(function(){
               
                $("#tahunajaran").change(function(){
                    var id=this.value;
                    $.ajax({
                        type:'POST',
                        url:'<?php echo base_url('dasbor/setTahunajaran');?>',
                        data:{tahunajaran_id:id},
                        success:function(data){
                            location.reload();
                        }

                    });
                });
                One.helpers(['select2']);
            });
        </script>
    </body>
</html>