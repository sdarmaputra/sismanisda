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
                                <li><a href="alumniindex.html"><i class="menu-icon icon-dashboard"></i>Tentang Aplikasi</a></li>
                                <li><a href="alumnitampilalumni.html"><i class="menu-icon icon-eye-open"></i>Lihat Profil Saya</a></li>
                                <li>
                                    <a class="collapsed" data-toggle="collapse" href="#togglePages">
                                        <i class="menu-icon icon-wrench"></i>
                                        <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
                                        Ubah Profil Saya
                                    </a>
                                    <ul id="togglePages" class="in collapse unstyled">
                                        <li>
                                            <a href="alumnisuntingalumni.html">
                                                <i class="icon-user"></i>
                                                Profil Dasar
                                            </a>
                                        </li>
                                        <li class="active">
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
                                    <h3>UBAH KONTAK SAYA</h3>
                                </div>
                                <div class="module-body">
                                    <form class="form-horizontal row-fluid">
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend span7">
                                                    <span class="add-on"><b class="icon-phone"></b></span><input type="text" id="basicinput" class="span12" placeholder="Nomor telepon">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend span7">
                                                    <span class="add-on"><b class="icon-envelope"></b></span><input type="text" id="basicinput" class="span12" placeholder="Alamat email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend span7">
                                                    <span class="add-on"><b class="icon-comment"></b></span><input type="text" id="basicinput" class="span12" placeholder="ID Line">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend span7">
                                                    <span class="add-on"><b class="icon-facebook"></b></span><input type="text" id="basicinput" class="span12" placeholder="Link akun facebook">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend span7">
                                                    <span class="add-on"><b class="icon-twitter"></b></span><input type="text" id="basicinput" class="span12" placeholder="ID twitter">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend span7">
                                                    <span class="add-on"><b class="icon-globe"></b></span><input type="text" id="basicinput" class="span12" placeholder="Link website">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend span7">
                                                    <span class="add-on"><b class="icon-home"></b></span><input type="text" id="basicinput" class="span12" placeholder="Alamat tempat tinggal">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend span7">
                                                    <span class="add-on"><b class="icon-building"></b></span><input type="text" id="basicinput" class="span12" placeholder="Alamat kantor">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="button" id="basicinput" class="btn btn-success btn-large" data-toggle="modal" data-target="#myModal" data-backdrop="static">Simpan</button>
                                            </div>
                                        </div>

                                        <!--modal-->
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h3 class="modal-title" id="myModalLabel">Konfirmasi Perubahan</h3>
                                              </div>
                                              <div class="modal-body">
                                                <h5>
                                                Apakah anda yakin ingin menyimpan perubahan?
                                                </h5>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-large" data-dismiss="modal">Tidak</button>
                                                <a type="button" class="btn btn-success btn-large" href="alumnisuntingkontak-sukses.html">Ya. Simpan Perubahan</a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!--modal-->
                                        
                                    </form>
                                </div>
                            </div>
                            <!--/.module-->
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
