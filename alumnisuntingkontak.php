<?php
    $page="alumnisuntingkontak";
    include("session.php");
    include("db.php");
    $id = $_SESSION['userid'];
    $msgStat = 0;
    if (!isset($_POST['doUpload'])) $doUpload = 0; else $doUpload = $_POST['doUpload'];
    if ($doUpload == 1) {
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];
        $line = $_POST['line'];
        $fb = $_POST['fb'];
        $twitter = $_POST['twitter'];
        $website = $_POST['website'];
        $alamat = $_POST['alamat'];
        $kantor = $_POST['kantor'];
        
            $u = mysqli_query($conn, "UPDATE alumni SET telepon='".$telepon."', email='".$email."', line='".$line."', fb='".$fb."', twitter='".$twitter."', website='".$website."', alamat='".$alamat."', kantor='".$kantor."' WHERE user_iduser=".$id."");
            $msgStat = 1;
            $msgContent = "Perubahan berhasil disimpan.";
    }

    $u = mysqli_query($conn, "SELECT * FROM alumni WHERE alumni.user_iduser=".$id);
    $u = mysqli_fetch_row($u);
?>

<!DOCTYPE html>
<html lang="en">
    <?php include("alumnihead.php"); ?>
    <body>
        <?php include("alumninav.php"); ?>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <?php include("alumnisidebar.php"); ?>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="module">
                                <div class="module-head">
                                    <h3>UBAH KONTAK SAYA</h3>
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
                                        <strong>Perubahan gagal dilakukan!</strong> <?php echo $msgContent; ?> 
                                    </div>
                                    <?php } ?>
                                    <form id="mainForm" class="form-horizontal row-fluid" action="alumnisuntingkontak.php" method="POST">
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend span7">
                                                    <span class="add-on"><b class="icon-phone"></b></span><input type="text" id="telepon" name="telepon" class="span12" placeholder="Nomor Telepon (contoh: +6281111222)" value="<?php echo $u[8]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend span7">
                                                    <span class="add-on"><b class="icon-envelope"></b></span><input type="text" id="email" name="email" class="span12" placeholder="Alamat E-mail (contoh: alamat@email.com)" value="<?php echo $u[9]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend span7">
                                                    <span class="add-on"><b class="icon-comment"></b></span><input type="text" id="line" name="line" class="span12" placeholder="ID Line (contoh: @idline)" value="<?php echo $u[10]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend span7">
                                                    <span class="add-on"><b class="icon-facebook"></b></span><input type="text" id="fb" name="fb" class="span12" placeholder="Link akun facebook (contoh: https://www.facebook.com/namaakun)" value="<?php echo $u[11]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend span7">
                                                    <span class="add-on"><b class="icon-twitter"></b></span><input type="text" id="twitter" name="twitter" class="span12" placeholder="ID twitter (contoh: @idtwitter)" value="<?php echo $u[12]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend span7">
                                                    <span class="add-on"><b class="icon-globe"></b></span><input type="text" id="website" name="website" class="span12" placeholder="Link website (contoh: websitenya.com)" value="<?php echo $u[13]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend span7">
                                                    <span class="add-on"><b class="icon-home"></b></span><input type="text" id="alamat" name="alamat" class="span12" placeholder="Alamat tempat tinggal" value="<?php echo $u[14]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend span7">
                                                    <span class="add-on"><b class="icon-building"></b></span><input type="text" id="kantor" name="kantor" class="span12" placeholder="Alamat kantor" value="<?php echo $u[15]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <input type="hidden" name="doUpload" id="doUpload" value="1">
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
                                                <h3 class="modal-title" id="myModalLabel">Konfirmasi Perubahan</h3>
                                              </div>
                                              <div class="modal-body">
                                                <h5>
                                                Apakah anda yakin ingin menyimpan perubahan?
                                                </h5>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-large" data-dismiss="modal">Tidak</button>
                                                <a type="button" class="btn btn-success btn-large" href="#" onclick="document.getElementById('mainForm').submit();">Ya. Simpan Perubahan</a>
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
                                    <form id="returnForm" action="alumnisuntingkontak.php" method="POST" style="float:left; margin-top:5px;">
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