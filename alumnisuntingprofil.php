<?php
    $page="alumnisuntingprofil";
    include("session.php");
    include("db.php");
    $id = $_SESSION['userid'];
    $msgStat = 0;
    if (!isset($_POST['doUpload'])) $doUpload = 0; else $doUpload = $_POST['doUpload'];
    if ($doUpload == 1) {
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $konfirmpass = $_POST['konfirmpass'];
        if ($pass == $konfirmpass){
            if ($pass != NULL){
                $w = mysqli_query($conn, "UPDATE user SET namauser='".$username."', passuser='".$pass."' WHERE iduser=".$id);
            }
            else $w = mysqli_query($conn, "UPDATE user SET namauser='".$username."' WHERE iduser=".$id);
            $msgStat = 1;
            $msgContent = "Perubahan berhasil disimpan.";
        }
        else {
            $msgStat = -1;
            $msgContent = "Password dan ulangi password tidak sesuai.";
        }
    }

    $u = mysqli_query($conn, "SELECT * FROM user WHERE user.iduser=".$id);
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
                                    <h3>PENGATURAN PROFIL</h3>
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
                                    <form id="mainForm" class="form-horizontal row-fluid" action="alumnisuntingprofil.php" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Username</label>
                                            <div class="controls">
                                                <input type="text" id="username" name="username" placeholder="Username untuk login" class="span8" value="<?php echo $u[1]; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Password</label>
                                            <div class="controls">
                                                <input type="password" id="pass" name="pass" placeholder="Password untuk login" class="span8" onkeyup="checkPass(); return false;">
                                                <br/><span id="confirmMessage1"></span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Ulangi Password</label>
                                            <div class="controls">
                                                <input type="password" id="konfirmpass" name="konfirmpass" placeholder="Ulangi password" class="span8"  onkeyup="checkPass(); return false;">
                                                <br/><span id="confirmMessage2"></span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <input type="hidden" id="id" name="id" value="<?php echo $u[0]; ?>">
                                                <input type="hidden" id="doUpload" name="doUpload" value="1">
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
                                                <a type="button" class="btn btn-success btn-large" onclick="document.getElementById('mainForm').submit();">Ya. Simpan Perubahan</a>
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
                                                <a type="button" class="btn btn-success btn-large" href="#" onclick="document.getElementById('ubahForm').submit();">Ya</a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!--modal2-->
                                    </form>
                                    <form id="ubahForm" action="alumnisuntingprofil.php" method="POST">
                                        <input type="hidden" name="doUpload" id="doUpload" value="0">
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
        <script>
            function checkPass()
            {
                var pass1 = document.getElementById('pass');
                var pass2 = document.getElementById('konfirmpass');
                var message = document.getElementById('confirmMessage2');
                var message1 = document.getElementById('confirmMessage1');
                var goodColor = "#66cc66";
                var badColor = "#ff6666";
                if ((pass1.value == "" && pass2.value == "") || pass2.value == ""){
                    message.innerHTML = "";
                    pass2.style.backgroundColor = "transparent";
                }
                else{    
                    if(pass1.value == pass2.value){
                        pass2.style.backgroundColor = goodColor;
                        message.style.color = goodColor;
                        message1.innerHTML = "";
                        message.innerHTML = "Password yang dimasukkan sama!"
                    }else{
                        pass2.style.backgroundColor = badColor;
                        message.style.color = badColor;
                        message1.innerHTML = "";
                        message.innerHTML = "Password yang dimasukkan tidak sama!"
                    }
                }
            }
        </script>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>
</html>