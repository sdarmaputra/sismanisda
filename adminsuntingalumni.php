<?php 
    $page="adminlihat"; 
    include("session.php");
    include("db.php");
    $id = $_POST['id'];
    $msgStat = 0;
    $doUpload = $_POST['doUpload'];
    if ($doUpload == 1) {
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
            $u = mysqli_query($conn, "UPDATE alumni SET namalengkap='".$namalengkap."', jenkel=".$jenkel.", asal_prov='".$asal_prov."', asal_kab='".$asal_kab."', tgllahir='".$tgllahir."', thnlulus=".$thnlulus." WHERE idalumni=".$id."");
            $v = mysqli_query($conn, "SELECT user_iduser FROM alumni WHERE idalumni=".$id);
            $v = mysqli_fetch_row($v);
            if ($pass != NULL){
                $w = mysqli_query($conn, "UPDATE user SET namauser='".$username."', passuser='".$pass."' WHERE iduser=".$v[0]);
            }
            else $w = mysqli_query($conn, "UPDATE user SET namauser='".$username."' WHERE iduser=".$v[0]);
            $msgStat = 1;
            $msgContent = "Perubahan berhasil disimpan.";
        }
        else {
            $msgStat = -1;
            $msgContent = "Password dan konfirmasi password tidak sesuai.";
        }
    }

    $u = mysqli_query($conn, "SELECT * FROM user, alumni WHERE alumni.idalumni=".$id." AND alumni.user_iduser=user.iduser");
    $u = mysqli_fetch_row($u);
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
                                    <h3>SUNTING DATA ALUMNI</h3>
                                </div>
                                <div class="module-body">
                                    <div class="alert alert-warning">
                                        <strong>Perhatian!</strong> Anda hanya bisa mengubah profil dasar alumni. Data lainnya seperti kontak dan alamat hanya bisa diubah oleh alumni yang bersangkutan.
                                    </div>
                                    <?php if ($msgStat == 1) {?>
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Berhasil!</strong> <?php echo $msgContent; ?> 
                                    </div>
                                    <?php } ?>
                                    <?php if ($msgStat == -1) {?>
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>Perubahan gagal dilakukan!</strong> <?php echo $msgContent; ?> 
                                    </div>
                                    <?php } ?>
                                    <form id="mainForm" class="form-horizontal row-fluid" action="adminsuntingalumni.php" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Username</label>
                                            <div class="controls">
                                                <input type="text" id="username" name="username" placeholder="Username untuk login" class="span8" value="<?php echo $u[1]; ?>">
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
                                                <input type="text" id="namalengkap" name="namalengkap" placeholder="Nama lengkap" class="span8" value="<?php echo $u[6]; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Jenis Kelamin</label>
                                            <div class="controls">
                                                <select id="jenkel" name="jenkel" class="span6">
                                                    <option>--Pilih Salah Satu--</option>
                                                    <option <?php if ($u[7] == 0) echo "selected"; ?> value="0">Laki-laki</option>
                                                    <option <?php if ($u[7] == 1) echo "selected"; ?> value="1">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Asal Provinsi</label>
                                            <div class="controls">
                                                <select id="asal_prov" name="asal_prov" class="span6">
                                                    <option <?php if ($u[8] == NULL) echo "selected"; ?>>--Pilih Salah Satu--</option>
                                                    <option <?php if ($u[8] == "Nanggroe Aceh Darussalam") echo "selected"; ?>>Nanggroe Aceh Darussalam</option>
                                                    <option <?php if ($u[8] == "Sumatra Utara") echo "selected"; ?>>Sumatra Utara</option>
                                                    <option <?php if ($u[8] == "Sumatra Barat") echo "selected"; ?>>Sumatra Barat</option>
                                                    <option <?php if ($u[8] == "Riau") echo "selected"; ?>>Riau</option>
                                                    <option <?php if ($u[8] == "Kepulauan Riau") echo "selected"; ?>>Kepulauan Riau</option>
                                                    <option <?php if ($u[8] == "Jambi") echo "selected"; ?>>Jambi</option>
                                                    <option <?php if ($u[8] == "Sumatra Selatan") echo "selected"; ?>>Sumatra Selatan</option>
                                                    <option <?php if ($u[8] == "Bengkulu") echo "selected"; ?>>Bengkulu</option>
                                                    <option <?php if ($u[8] == "Lampung") echo "selected"; ?>>Lampung</option>
                                                    <option <?php if ($u[8] == "Bangka Belitung") echo "selected"; ?>>Bangka Belitung</option>
                                                    <option <?php if ($u[8] == "DKI Jakarta") echo "selected"; ?>>DKI Jakarta</option>
                                                    <option <?php if ($u[8] == "Jawa Barat") echo "selected"; ?>>Jawa Barat</option>
                                                    <option <?php if ($u[8] == "Banten") echo "selected"; ?>>Banten</option>
                                                    <option <?php if ($u[8] == "Jawa Tengah") echo "selected"; ?>>Jawa Tengah</option>
                                                    <option <?php if ($u[8] == "Daerah Istimewa Yogyakarta (DIY)") echo "selected"; ?>>Daerah Istimewa Yogyakarta (DIY)</option>
                                                    <option <?php if ($u[8] == "Jawa Timur") echo "selected"; ?>>Jawa Timur</option>
                                                    <option <?php if ($u[8] == "Bali") echo "selected"; ?>>Bali</option>
                                                    <option <?php if ($u[8] == "Nusa Tenggara Barat") echo "selected"; ?>>Nusa Tenggara Barat</option>
                                                    <option <?php if ($u[8] == "Nusa Tenggara Timur") echo "selected"; ?>>Nusa Tenggara Timur</option>
                                                    <option <?php if ($u[8] == "Kalimantan Barat") echo "selected"; ?>>Kalimantan Barat</option>
                                                    <option <?php if ($u[8] == "Kalimantan Tengah") echo "selected"; ?>>Kalimantan Tengah</option>
                                                    <option <?php if ($u[8] == "Kalimantan Selatan") echo "selected"; ?>>Kalimantan Selatan</option>
                                                    <option <?php if ($u[8] == "Kalimantan Timur") echo "selected"; ?>>Kalimantan Timur</option>
                                                    <option <?php if ($u[8] == "Kalimantan Utara") echo "selected"; ?>>Kalimantan Utara</option>
                                                    <option <?php if ($u[8] == "Sulawesi Utara") echo "selected"; ?>>Sulawesi Utara</option>
                                                    <option <?php if ($u[8] == "Gorontalo") echo "selected"; ?>>Gorontalo</option>
                                                    <option <?php if ($u[8] == "Sulawesi Tengah") echo "selected"; ?>>Sulawesi Tengah</option>
                                                    <option <?php if ($u[8] == "Sulawesi Selatan") echo "selected"; ?>>Sulawesi Selatan</option>
                                                    <option <?php if ($u[8] == "Sulawesi Barat") echo "selected"; ?>>Sulawesi Barat</option>
                                                    <option <?php if ($u[8] == "Sulawesi Tenggara") echo "selected"; ?>>Sulawesi Tenggara</option>
                                                    <option <?php if ($u[8] == "Maluku") echo "selected"; ?>>Maluku</option>
                                                    <option <?php if ($u[8] == "Maluku utara") echo "selected"; ?>>Maluku utara</option>
                                                    <option <?php if ($u[8] == "Papua") echo "selected"; ?>>Papua</option>
                                                    <option <?php if ($u[8] == "Papua Barat") echo "selected"; ?>>Papua Barat</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Asal Kabupaten</label>
                                            <div class="controls">
                                                <input type="text" id="asal_kab" name="asal_kab" placeholder="Asal Kabupaten" class="span6" value="<?php echo $u[9]; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tanggal Lahir</label>
                                            <div class="controls">
                                                <input type="date" id="tgllahir" name="tgllahir" class="span6" value="<?php echo $u[10]; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tahun Lulus</label>
                                            <div class="controls">
                                                <select id="thnlulus" name="thnlulus" class="span6">
                                                    <option <?php if ($u[11] == 2010) echo "selected"; ?>>2010</option>
                                                    <option <?php if ($u[11] == 2011) echo "selected"; ?>>2011</option>
                                                    <option <?php if ($u[11] == 2012) echo "selected"; ?>>2012</option>
                                                    <option <?php if ($u[11] == 2013) echo "selected"; ?>>2013</option>
                                                    <option <?php if ($u[11] == 2014) echo "selected"; ?>>2014</option>
                                                    <option <?php if ($u[11] == 2015) echo "selected"; ?>>2015</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                
                                                <button type="button" id="basicinput" class="btn btn-danger btn-large" data-toggle="modal" data-target="#myModal2" data-backdrop="static">Batal</button>
                                                <button type="button" id="basicinput" class="btn btn-success btn-large" data-toggle="modal" data-target="#myModal" data-backdrop="static">Simpan</button>
                                            </div>
                                            <div class="controls" style="margin-top:15px;">
                                                <a class="btn btn-danger" href="adminlihat.php">Kembali ke Halaman Kelola Daftar Alumni</a>
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
                                                <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                                                <input type="hidden" id="doUpload" name="doUpload" value="1">
                                                <button type="button" class="btn btn-danger btn-large" data-dismiss="modal">Tidak</button>
                                                <a class="btn btn-success btn-large" onclick="document.getElementById('mainForm').submit();">Ya. Simpan Perubahan</a>
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
                                                Apakah anda yakin ingin membatalkan perubahan dan memuat ulang halaman ini?
                                                </h5>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-large" data-dismiss="modal">Tidak. Tetap di Halaman Ini</button>
                                                <a class="btn btn-success btn-large" onclick="document.getElementById('returnForm').submit();">Ya</a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!--modal2-->
                                    </form>
                                    <form id="returnForm" action="adminsuntingalumni.php" method="POST" style="float:left; margin-top:5px;">
                                        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                                        <input type="hidden" id="doUpload" name="doUpload" value="0">
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