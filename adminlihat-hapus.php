<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SI SMANISDA</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
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
                                Administrator
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="adminsuntingprofil.html">Pengaturan Profil</a></li>
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
                                <li><a href="adminindex.html"><i class="menu-icon icon-dashboard"></i>Tentang Aplikasi</a></li>
                                <li class="active"><a href="adminlihat.html"><i class="menu-icon icon-table"></i>Kelola Data Alumni</a></li>
                                <li><a href="admintambah.html"><i class="menu-icon icon-plus-sign"></i>Tambah Data Alumni</a></li>
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
                                    <h3>DAFTAR ALUMNI</h3>
                                </div>
                                <div class="module-body">
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Berhasil!</strong> Data alumni berhasil dihapus 
                                    </div>
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Nama Alumni
                                                </th>
                                                <th>
                                                    Jenis Kelamin
                                                </th>
                                                <th>
                                                    Asal
                                                </th>
                                                <th>
                                                    Tanggal Lahir
                                                </th>
                                                <th>
                                                    Tahun Lulus
                                                </th>
                                                <th>
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>
                                                    Surya Darma Putra
                                                </td>
                                                <td>
                                                    Laki-laki
                                                </td>
                                                <td>
                                                    Denpasar
                                                </td>
                                                <td>
                                                    21 September 1994
                                                </td>
                                                <td>
                                                    2012
                                                </td>
                                                <td>
                                                    <a class="btn btn-info" href="admintampilalumni.html" title="Lihat Data Alumni"><b class="icon-eye-open"></b></a>
                                                    <a class="btn btn-warning" href="adminsuntingalumni.html" title="Ubah Data Alumni"><b class="icon-pencil"></b></a>
                                                    <a class="btn btn-danger" href="#" title="Hapus Data Alumni"><b class="icon-remove"></b></a>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    Surya 
                                                </td>
                                                <td>
                                                    Laki-laki
                                                </td>
                                                <td>
                                                    Bali
                                                </td>
                                                <td>
                                                    21 Oktober 1994
                                                </td>
                                                <td>
                                                    2012
                                                </td>
                                                <td>
                                                    <a class="btn btn-info" href="admintampilalumni.html" title="Lihat Data Alumni"><b class="icon-eye-open"></b></a>
                                                    <a class="btn btn-warning" href="adminsuntingalumni.html" title="Ubah Data Alumni"><b class="icon-pencil"></b></a>
                                                    <a class="btn btn-danger" href="#" title="Hapus Data Alumni"><b class="icon-remove"></b></a>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    Darma Putra
                                                </td>
                                                <td>
                                                    Laki-laki
                                                </td>
                                                <td>
                                                    Tabanan
                                                </td>
                                                <td>
                                                    25 September 1994
                                                </td>
                                                <td>
                                                    2012
                                                </td>
                                                <td>
                                                    <a class="btn btn-info" href="admintampilalumni.html" title="Lihat Data Alumni"><b class="icon-eye-open"></b></a>
                                                    <a class="btn btn-warning" href="adminsuntingalumni.html" title="Ubah Data Alumni"><b class="icon-pencil"></b></a>
                                                    <a class="btn btn-danger" href="#" title="Hapus Data Alumni" data-toggle="modal" data-target="#myModal" data-backdrop="static"><b class="icon-remove"></b></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    Nama Alumni
                                                </th>
                                                <th>
                                                    Jenis Kelamin
                                                </th>
                                                <th>
                                                    Asal
                                                </th>
                                                <th>
                                                    Tanggal Lahir
                                                </th>
                                                <th>
                                                    Tahun Lulus
                                                </th>
                                                <th>
                                                    Aksi
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <!--modal-->
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h3 class="modal-title" id="myModalLabel">Konfirmasi Penghapusan Data</h3>
                                              </div>
                                              <div class="modal-body">
                                                <h5>
                                                Apakah anda yakin ingin menghapus data?
                                                </h5>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-large" data-dismiss="modal">Tidak. Batalkan Aksi</button>
                                                <a type="button" class="btn btn-success btn-large" href="adminlihat-hapus.html">Ya</a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!--modal-->

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
