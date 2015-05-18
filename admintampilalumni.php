<?php 
    $page="adminlihat"; 
    include("session.php");
    include("db.php");
    $id = $_POST['id'];
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
                                    <h3>DATA ALUMNI</h3>
                                </div>
                                <div class="module-body">
                                    
                                    <div class="profile-head media">
                                        <a href="#" class="media-avatar2 pull-left">
                                            <img src="images/user.png">
                                        </a>
                                        <div class="media-body" style="padding-top:35px;">
                                            <h4>
                                                <?php echo $u[6]; ?> <small>(<?php echo $u[1]; ?>)</small>
                                            </h4>
                                            <p class="profile-brief">
                                                <table style="border:none;">
                                                    <tr height="30px">
                                                        <td width="170px">Username</td><td widht="300px">: <?php echo $u[1]; ?></td>
                                                    </tr>
                                                    <tr height="30px">
                                                        <td>Nama Lengkap</td><td>: <?php echo $u[6]; ?></td>
                                                    </tr>
                                                    <tr height="30px">
                                                        <td>Jenis Kelamin</td><td>: <?php if ($u[7]==0) echo "Laki-laki"; else echo "Perempuan"; ?></td>
                                                    </tr>
                                                    <tr height="30px">
                                                        <td>Daerah Asal</td><td>: <?php echo $u[9]; ?>, <?php echo $u[8]; ?></td>
                                                    </tr>
                                                    <tr height="30px">
                                                        <td>Tanggal Lahir</td><td>: <?php echo $u[10]; ?></td>
                                                    </tr>
                                                    <tr height="30px">
                                                        <td>Tahun Lulus</td><td>: <?php echo $u[11]; ?></td>
                                                    </tr>
                                                </table>
                                                <hr></hr>
                                                <table style="border:none;">
                                                    <tr height="30px">
                                                        <td width="170px">No. Telepon</td><td widht="300px">: <?php echo ($u[12] == NULL) ? "-" : $u[12]; ?></td>
                                                    </tr>
                                                    <tr height="30px">
                                                        <td>E-mail</td><td>: <?php echo ($u[13] == NULL) ? "-" : $u[13]; ?></td>
                                                    </tr>
                                                    <tr height="30px">
                                                        <td>Line</td><td>: <?php echo ($u[14] == NULL) ? "-" : $u[14]; ?></td>
                                                    </tr>
                                                    <tr height="30px">
                                                        <td>Facebook</td><td>: <?php echo ($u[15] == NULL) ? "-" : $u[15]; ?></td>
                                                    </tr>
                                                    <tr height="30px">
                                                        <td>Twitter</td><td>: <?php echo ($u[16] == NULL) ? "-" : $u[16]; ?></td>
                                                    </tr>
                                                    <tr height="30px">
                                                        <td>Website</td><td>: <?php echo ($u[17] == NULL) ? "-" : $u[17]; ?></td>
                                                    </tr>
                                                </table>
                                                <hr></hr>
                                                <table style="border:none;">
                                                    <tr height="30px">
                                                        <td width="170px">Alamat Tinggal</td><td widht="300px">: <?php echo ($u[18] == NULL) ? "-" : $u[18]; ?></td>
                                                    </tr>
                                                    <tr height="30px">
                                                        <td>Alamat Kantor</td><td>: <?php echo ($u[19] == NULL) ? "-" : $u[19]; ?></td>
                                                    </tr>
                                                </table>
                                            </p>
                                        </div>
                                    </div>
                                    <center>
                                    <div style="margin-top:20px;">
                                        <a class="btn btn-danger btn-large" href="adminlihat.html">Kembali</a>
                                        <a class="btn btn-warning btn-large" href="adminsuntingalumni.html">Ubah Data Alumni</a>
                                    </div>
                                    </center>
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
