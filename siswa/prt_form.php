<?php
session_start();
if(isset($_SESSION['fi_id']) && isset($_SESSION['fi_us']) && isset($_SESSION['fi_ps']))
    {
        include ("../con_db/connection.php");
        $status=$_SESSION['fi_st'];
        if($status=="Siswa")
            {
                ?>
                <!DOCTYPE html>
                <html>

                <head>
                    <!-- Meta, title, CSS, favicons, etc. -->
                   <meta charset="utf-8">
                    <title>Cetak Formulir Data Siswa</title>
                    <meta name="keywords" content="Cetak Formulir Data Siswa" />
                    <meta name="description" content="Cetak Formulir Data Siswa">
                    <meta name="author" content="Cetak Formulir Data Siswa">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">

                    <!-- Required Plugin CSS -->
                    <link rel="stylesheet" type="text/css" href="assets/js/utility/highlight/styles/googlecode.css">

                    <!-- Required Plugin CSS -->
                    <link rel="stylesheet" type="text/css" href="vendor/plugins/datepicker/css/bootstrap-datetimepicker.css">
                    <link rel="stylesheet" type="text/css" href="vendor/plugins/daterange/daterangepicker.css">
                    <link rel="stylesheet" type="text/css" href="vendor/plugins/colorpicker/css/bootstrap-colorpicker.min.css">
                    <link rel="stylesheet" type="text/css" href="vendor/plugins/tagmanager/tagmanager.css">

                    <!-- Theme CSS -->
                    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

                    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">
                    <!-- Favicon -->
                    <link rel="shortcut icon" href="assets/img/favicon.ico">

                    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                    <!--[if lt IE 9]>
                    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
                    <![endif]-->
                </head>

                <body class="form-input-page">

                    <!-- Start: Main -->
                    <div id="main">

                        <!-- Start: Header -->
                        <header class="navbar navbar-fixed-top bg-light">
                            <div class="navbar-branding">
                                <a class="navbar-brand" href="index"> <b>Panel</b>Dashboard
                                </a>
                                <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
                                <ul class="nav navbar-nav pull-right hidden">
                                    <li>
                                        <a href="#" class="sidebar-menu-toggle">
                                            <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            
                            <?php
                                include("top_acc.php");
                            ?>
                        </header>
                        <!-- End: Header -->

                        <!-- Start: Sidebar -->
                        <aside id="sidebar_left" class="nano nano-primary">
                            <div class="nano-content">
                                <!-- sidebar menu -->
                                <ul class="nav sidebar-menu">
                                    <li>
                                        <a href="index">
                                            <span class="glyphicons glyphicons-home"></span>
                                            <span class="sidebar-title">Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="profil">
                                            <span class="glyphicons glyphicons-cup"></span>
                                            <span class="sidebar-title">Profile Sekolah</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-label pt15">Data Siswa</li>
                                    <li>
                                        <a href="lkp_form">
                                            <span class="glyphicons glyphicons-book"></span> 
                                            <span class="sidebar-title">Lengkapi Biodata</span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="prt_form">
                                            <span class="glyphicons glyphicons-print"></span> 
                                            <span class="sidebar-title">Cetak Formulir</span>
                                        </a>
                                    </li>

                                   <!--  <li class="sidebar-label pt15">Rincian Biaya</li>
                                    <li>
                                        <a href="rc_by">
                                            <span class="glyphicons glyphicons-list"></span>
                                            <span class="sidebar-title">Rincian Biaya Masuk Sekolah</span>
                                        </a>
                                    </li> -->

                                    <!-- <li class="sidebar-label pt15">Data Pembayaran</li>
                                    <li>
                                        <a href="lkp_form_byr">
                                            <span class="glyphicons glyphicons-book"></span> 
                                            <span class="sidebar-title">Formulir Pembayaran</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="prt_form_byr">
                                            <span class="glyphicons glyphicons-print"></span> 
                                            <span class="sidebar-title">Cetak Pembayaran</span>
                                        </a>
                                    </li> -->


                                    <!-- <li class="sidebar-label pt15">Informasi Status</li>
                                    <li>
                                        <a href="sts_reg">
                                            <span class="glyphicons glyphicons-warning_sign"></span> 
                                            <span class="sidebar-title">Status Pendaftaran</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="sts_byr">
                                            <span class="glyphicons glyphicons-warning_sign"></span> 
                                            <span class="sidebar-title">Status Pembayaran</span>
                                        </a>
                                    </li>

                                    <hr />
                                    <li>
                                        <a href="logout">
                                            <span class="glyphicons glyphicons-pen"></span>
                                            <span class="sidebar-title">Logout</span>
                                        </a>
                                    </li> -->
                                </ul>
                                <div class="sidebar-toggle-mini">
                                    <a href="#">
                                        <span class="fa fa-sign-out"></span>
                                    </a>
                                </div>
                            </div>
                        </aside>
                        <!-- End: Sidebar -->

                        <!-- Start: Content -->
                        <section id="content_wrapper">
                            <!-- Start: Topbar -->
                            <header id="topbar">
                                <div class="topbar-left">
                                    <ol class="breadcrumb">
                                        <li class="crumb-active">
                                            <a href="lkp_form">Cetak Formulir Data Siswa</a>
                                        </li>
                                    </ol>
                                </div>
                                
                            </header>
                            <!-- End: Topbar -->
                            
                            <?php
                           
                                     include("form_prt_sis.php");
                            ?>
                        </section>
                        <!-- End: Content -->

                        <!-- Start: Right Sidebar -->
                        
                        <!-- End: Right Sidebar -->

                    </div>
                    <!-- End: Main -->

                    <!-- Google Map API -->
                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

                    <!-- jQuery -->
                    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
                    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

                    <!-- Bootstrap -->
                    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

                    <!-- Page Plugins via CDN -->
                    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/globalize/0.1.1/globalize.min.js"></script>
                    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.js"></script>

                    <!-- via local files 
                    <script type="text/javascript" src="vendor/plugins/globalize/src/core.js"></script>
                    <script type="text/javascript" src="vendor/plugins/moment/moment.min.js"></script> -->

                    <!-- Page Plugins -->
                    <script type="text/javascript" src="vendor/plugins/daterange/daterangepicker.js"></script>
                    <script type="text/javascript" src="vendor/plugins/datepicker/js/bootstrap-datetimepicker.js"></script>
                    <script type="text/javascript" src="vendor/plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>
                    <script type="text/javascript" src="vendor/plugins/jquerymask/jquery.maskedinput.min.js"></script>
                    <script type="text/javascript" src="vendor/plugins/tagmanager/tagmanager.js"></script>

                    <!-- Theme Javascript -->
                    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
                    <script type="text/javascript" src="assets/js/main.js"></script>
                    <script type="text/javascript" src="assets/js/demo.js"></script>
                    <script type="text/javascript">
                        jQuery(document).ready(function() {

                            "use strict";

                            // Init Theme Core    
                            Core.init();

                            // Init Demo JS    
                            Demo.init();

                            // daterange plugin options
                            var rangeOptions = {
                                ranges: {
                                    'Today': [moment(), moment()],
                                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                                },
                                startDate: moment().subtract('days', 29),
                                endDate: moment()
                            }

                            // Init daterange plugin
                              $("#datepicker1").datepicker({
                                    prevText: '<i class="fa fa-chevron-left"></i>',
                                    nextText: '<i class="fa fa-chevron-right"></i>',
                                    showButtonPanel: false
                                });

                            $('#daterangepicker1').daterangepicker();

                            // Init daterange plugin
                            $('#daterangepicker2').daterangepicker(
                                rangeOptions,
                                function(start, end) {
                                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                                }
                            );

                            // Init daterange plugin
                            $('#inline-daterange').daterangepicker(
                                rangeOptions,
                                function(start, end) {
                                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                                }
                            );

                            // Init datetimepicker - fields
                            $('#datetimepicker1').datetimepicker();
                            $('#datetimepicker2').datetimepicker();


                            // Init datetimepicker - inline + range detection
                            $('#datetimepicker3').datetimepicker({
                                defaultDate: "9/4/2014",
                                inline: true,
                            });

                            // Init datetimepicker - fields + Date disabled (only time picker)
                            $('#datetimepicker5').datetimepicker({
                                defaultDate: "9/25/2014",
                                pickDate: false,
                            });
                            // Init datetimepicker - fields + Date disabled (only time picker)
                            $('#datetimepicker6').datetimepicker({
                                defaultDate: "9/25/2014",
                                pickDate: false,
                            });
                            // Init datetimepicker - inline + Date disabled (only time picker)
                            $('#datetimepicker7').datetimepicker({
                                defaultDate: "9/25/2014",
                                pickDate: false,
                                inline: true
                            });

                            // Init colorpicker plugin
                            $('#demo_apidemo').colorpicker({
                                color: bgPrimary
                            });
                            $('.demo-auto').colorpicker();

                            // Init jQuery Tags Manager 
                            $(".tm-input").tagsManager({
                                tagsContainer: '.tags',
                                prefilled: ["Miley Cyrus", "Apple", "A Long Tag", "Na uh"],
                                tagClass: 'tm-tag-info',
                            });

                            // Init Boostrap Multiselect
                            $('#multiselect1').multiselect();
                            $('#multiselect2').multiselect({
                                includeSelectAllOption: true
                            });
                            $('#multiselect3').multiselect();
                            $('#multiselect4').multiselect({
                                enableFiltering: true,
                            });
                            $('#multiselect5').multiselect({
                                buttonClass: 'multiselect dropdown-toggle btn btn-default btn-primary'
                            });
                            $('#multiselect6').multiselect({
                                buttonClass: 'multiselect dropdown-toggle btn btn-default btn-info'
                            });
                            $('#multiselect7').multiselect({
                                buttonClass: 'multiselect dropdown-toggle btn btn-default btn-success'
                            });
                            $('#multiselect8').multiselect({
                                buttonClass: 'multiselect dropdown-toggle btn btn-default btn-warning'
                            });

                            // Init jQuery spinner init - default
                            $("#spinner1").spinner();
                             $("#spinner1a").spinner();

                            // Init jQuery spinner init - currency 
                            $("#spinner2").spinner({
                                min: 5,
                                max: 2500,
                                step: 25,
                                start: 1000,
                                //numberFormat: "C"
                            });

                            // Init jQuery spinner init - decimal  
                            $("#spinner3").spinner({
                                step: 0.01,
                                numberFormat: "n"
                            });

                            // jQuery Time Spinner settings
                            $.widget("ui.timespinner", $.ui.spinner, {
                                options: {
                                    // seconds
                                    step: 60 * 1000,
                                    // hours
                                    page: 60
                                },
                                _parse: function(value) {
                                    if (typeof value === "string") {
                                        // already a timestamp
                                        if (Number(value) == value) {
                                            return Number(value);
                                        }
                                        return +Globalize.parseDate(value);
                                    }
                                    return value;
                                },

                                _format: function(value) {
                                    return Globalize.format(new Date(value), "t");
                                }
                            });
                            // Init jQuery Time Spinner
                            $("#spinner4").timespinner();


                            // Init jQuery masked inputs
                            $('.date').mask('99/99/9999');
                            $('.time').mask('99:99:99');
                            $('.date_time').mask('99/99/9999 99:99:99');
                            $('.zip').mask('99999-999');
                            $('.phone').mask('(999) 999-9999');
                            $('.phoneext').mask("(999) 999-9999 x99999");
                            $(".money").mask("999,999,999.999");
                            $(".product").mask("999.999.999.999");
                            $(".tin").mask("99-9999999");
                            $(".ssn").mask("999-99-9999");
                            $(".ip").mask("9ZZ.9ZZ.9ZZ.9ZZ");
                            $(".eyescript").mask("~9.99 ~9.99 999");
                            $(".custom").mask("9.99.999.9999");

                        });
                    </script>
                </body>

                </html>


        <?php
            }
        else
            {
                ?>
                <script type="text/javascript">
                    window.location="../index";
                </script>
                <?php
            }
    }
else
    {
        ?>
        <script type="text/javascript">
            window.location="../index";
        </script>
        <?php
    }
?>

