<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SI SMANISDA</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme-alumni.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">SI - SMANISDA</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Alumni 1
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="alumnisuntingprofil.html">Pengaturan Profil</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="alumniindex.html"><i class="menu-icon icon-dashboard"></i>Tentang Aplikasi</a></li>
                                <li><a href="alumnitampilalumni.html"><i class="menu-icon icon-eye-open"></i>Lihat Profil Saya</a></li>
                                <li>
                                    <a class="collapsed" data-toggle="collapse" href="#togglePages">
                                        <i class="menu-icon icon-wrench"></i>
                                        <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
                                        Ubah Profil Saya
                                    </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li>
                                            <a href="alumnisuntingalumni.html">
                                                <i class="icon-user"></i>
                                                Profil Dasar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="alumnisuntingkontak.html">
                                                <i class="icon-mobile-phone"></i>
                                                Kontak
                                            </a>
                                        </li>
                                        <li>
                                            <a href="alumnisuntingfoto.html">
                                                <i class="icon-picture"></i>
                                                Foto
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="alumnilihat.html"><i class="menu-icon icon-group"></i>Daftar Alumni</a></li>
                                <!--li><a href="task.html"><i class="menu-icon icon-tasks"></i>Statistik</a></li-->
                            </ul>
                            <!--/.widget-nav-->
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="module">
                                <div class="module-head">
                                    <h3>TENTANG APLIKASI</h3>
                                </div>
                                <div class="module-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer massa tellus, euismod vitae consequat in, varius non nunc. Donec gravida mi justo, ornare placerat massa tempor nec. In ultricies accumsan velit. Morbi id pharetra odio. Sed mollis lorem at tortor condimentum scelerisque. Praesent commodo ultrices ex in placerat. Pellentesque iaculis sem in quam imperdiet, quis tincidunt ipsum volutpat. Fusce interdum venenatis dolor, eu ultricies tortor mattis molestie. Phasellus consectetur, ex eget tempus vulputate, nisl felis lobortis elit, tincidunt aliquam quam sem id neque.
                                    </p>
                                    <p>                                        
Etiam in dui ut magna iaculis suscipit. Praesent id ex fermentum, semper dui quis, ultrices felis. Pellentesque eu pharetra nunc, id vehicula mauris. Sed eget nisl ut ante condimentum congue id ac nisi. In luctus vitae mi ac scelerisque. Sed sit amet euismod metus, non laoreet ligula. Integer in enim vel orci pulvinar rhoncus vel hendrerit dolor. Suspendisse ut ipsum tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce id pulvinar est, at congue tellus. In convallis feugiat nisl, vitae pulvinar purus. Curabitur vel tristique erat, vel vestibulum turpis. Vivamus sit amet auctor odio. Ut facilisis lorem justo, et pretium dui porta id. Mauris non nibh nisi.
                                    </p>
                                </div>
                            </div>
                            <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Adjust Budget Range</h3>
                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                Copyright 2015 SMAN 1 Sidoarjo.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>
