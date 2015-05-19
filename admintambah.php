<?php 
    $page="admintambah"; 
    include("session.php");
    include("db.php"); 
    $doTambah = !isset($_POST['doTambah']) ? 0 : $_POST['doTambah'];
    $msgStat = 0;
    if ($doTambah == 1)
    {
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $konfirmpass = $_POST['konfirmpass'];
        $namalengkap = $_POST['namalengkap'];
        $jenkel = $_POST['jenkel'];
        $asal_prov = $_POST['asal_prov'];
        $asal_kab = $_POST['asal_kab'];
        $tgllahir = $_POST['tgllahir'];
        $thnlulus = $_POST['thnlulus'];
        if ($pass == $konfirmpass){
            $u = mysqli_query($conn, "SELECT * FROM user where namauser='".$username."'");
            if ($u->num_rows == 0)
            {
                $t = mysqli_query($conn, "INSERT INTO user (namauser, passuser, tipeuser) values ('".$username."', '".$pass."',2)");        
            }   
            else {
                $msgStat = -1;
                $msgContent = "Nama akun <strong><i>".$username."</i></strong> sudah terdaftar sebelumnya. Silakan gunakan nama lain.";
            }
        }
        else {
            $msgStat = -1;
            $msgContent = "Password yang dimasukkan tidak sama dengan konfirmasi password.";
        }
        if ($msgStat != -1){
            $u = mysqli_query($conn, "SELECT iduser FROM user where namauser='".$username."'");
            $u = mysqli_fetch_row($u);
            mysqli_query($conn, "INSERT INTO alumni (user_iduser, namalengkap, jenkel, asal_prov, asal_kab, tgllahir, thnlulus) values (".$u[0].", '".$namalengkap."',".$jenkel.", '".$asal_prov."', '".$asal_kab."', '".$tgllahir."', ".$thnlulus.")") or die(mysqli_error($conn));            
            $msgStat = 1;
            $msgContent = "Data alumni dengan nama akun <strong><i>".$username."</i></strong> berhasil disimpan.";
        }      
    }
?>
<!DOCTYPE html>
<html lang="en">

    <?php include("adminhead.php"); ?>
    <body>
        <?php include("adminnav.php"); ?>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <?php include("adminsidebar.php"); ?>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="module">
                                <div class="module-head">
                                    <h3>TAMBAH DATA ALUMNI</h3>
                                </div>
                                <div class="module-body">
                                    <?php if ($msgStat == 1) {?>
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Berhasil!</strong> <?php echo $msgContent; ?> 
                                    </div>
                                    <?php } ?>
                                    <?php if ($msgStat == -1) {?>
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Gagal menyimpan data baru!</strong> <?php echo $msgContent; ?> 
                                    </div>
                                    <?php } ?>
                                    <form class="form-horizontal row-fluid" action="admintambah.php" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Username</label>
                                            <div class="controls">
                                                <input type="text" id="username" name="username" placeholder="Username untuk login" class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Password</label>
                                            <div class="controls">
                                                <input type="password" id="pass" name="pass" placeholder="Password untuk login" class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Ulangi Password</label>
                                            <div class="controls">
                                                <input type="password" id="konfirmpass" name="konfirmpass" placeholder="Ulangi password" class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nama Lengkap</label>
                                            <div class="controls">
                                                <input type="text" id="namalengkap" name="namalengkap" placeholder="Nama lengkap" class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Jenis Kelamin</label>
                                            <div class="controls">
                                                <select id="jenkel" name="jenkel" class="span6">
                                                    <option value="-1">--Pilih Salah Satu--</option>
                                                    <option value="0">Laki-laki</option>
                                                    <option value="1">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Asal Provinsi</label>
                                            <div class="controls">
                                                <select id="asal_prov" name="asal_prov" class="span6">
                                                    <option value="-1">--Pilih Salah Satu--</option>
                                                    <option>Bali</option>
                                                    <option>Bangka Belitung</option>
                                                    <option>Banten</option>
                                                    <option>Bengkulu</option>
                                                    <option>Daerah Istimewa Yogyakarta (DIY)</option>
                                                    <option>DKI Jakarta</option>
                                                    <option>Gorontalo</option>
                                                    <option>Jambi</option>
                                                    <option>Jawa Barat</option>
                                                    <option>Jawa Tengah</option>
                                                    <option>Jawa Timur</option>
                                                    <option>Kalimantan Barat</option>
                                                    <option>Kalimantan Tengah</option>
                                                    <option>Kalimantan Selatan</option>
                                                    <option>Kalimantan Timur</option>
                                                    <option>Kalimantan Utara</option>
                                                    <option>Kepulauan Riau</option>
                                                    <option>Lampung</option>
                                                    <option>Maluku</option>
                                                    <option>Maluku utara</option>
                                                    <option>Nanggroe Aceh Darussalam</option>
                                                    <option>Nusa Tenggara Barat</option>
                                                    <option>Nusa Tenggara Timur</option>
                                                    <option>Papua</option>
                                                    <option>Papua Barat</option>
                                                    <option>Riau</option>
                                                    <option>Sulawesi Barat</option>
                                                    <option>Sulawesi Selatan</option>
                                                    <option>Sulawesi Tengah</option>
                                                    <option>Sulawesi Utara</option>
                                                    <option>Sumatra Barat</option>
                                                    <option>Sumatra Selatan</option>
                                                    <option>Sulawesi Tenggara</option>
                                                    <option>Sumatra Utara</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Asal Kabupaten</label>
                                            <div class="controls">
                                                <input type="text" id="asal_kab" name="asal_kab" class="span6">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tanggal Lahir</label>
                                            <div class="controls">
                                                <input type="date" id="tgllahir" name="tgllahir" class="span6">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tahun Lulus</label>
                                            <div class="controls">
                                                <select id="thnlulus" name="thnlulus" class="span6">
                                                    <option>2010</option>
                                                    <option>2011</option>
                                                    <option>2012</option>
                                                    <option>2013</option>
                                                    <option>2014</option>
                                                    <option>2015</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="button" id="basicinput" class="btn btn-danger btn-large" data-toggle="modal" data-target="#myModal2" data-backdrop="static">Batal</button>
                                                <button type="button" id="basicinput" class="btn btn-success btn-large" data-toggle="modal" data-target="#myModal" data-backdrop="static">Simpan</button>
                                            </div>
                                        </div>
                                    

                                        <!--modal-->
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h3 class="modal-title" id="myModalLabel">Konfirmasi Penyimpanan Data Baru</h3>
                                              </div>
                                              <div class="modal-body">
                                                <h5>
                                                Apakah anda yakin ingin menyimpan data baru?
                                                </h5>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-large" data-dismiss="modal">Tidak</button>
                                                <input type="hidden" id="doTambah" name="doTambah" value="1">
                                                <input type="submit" class="btn btn-success btn-large" value="Ya. Simpan Data Baru">
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!--modal-->

                                        <!--modal2-->
                                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h3 class="modal-title" id="myModalLabel">Konfirmasi Pembatalan</h3>
                                              </div>
                                              <div class="modal-body">
                                                <h5>
                                                Apakah anda yakin ingin membatalkan aksi saat ini dan memuat ulang halaman ini?
                                                </h5>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-large" data-dismiss="modal">Tidak. Tetap di Halaman Ini</button>
                                                <a type="button" class="btn btn-success btn-large" href="admintambah.php">Ya</a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!--modal2-->
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
</html>