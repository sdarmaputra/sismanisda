<?php
    $page="alumnilihat";
    include("session.php");
    include("db.php"); 
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
                                    <h3>DAFTAR ALUMNI</h3>
                                </div>
                                <div class="module-body">
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
                                            <?php
                                                $u = mysqli_query($conn, "SELECT idalumni, namalengkap, jenkel, asal_prov, asal_kab, tgllahir, thnlulus from alumni");
                                                while ($row = mysqli_fetch_row($u)) {
                                            ?>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <?php echo $row[1];?>
                                                </td>
                                                <td>
                                                    <?php if ($row[2]==0) echo "Laki-laki"; else echo "Perempuan"; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row[4].",".$row[3]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row[5]; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row[6]; ?>
                                                </td>
                                                <td>
                                                    <form action="alumnitampilalumnilain.php" method="POST" style="float:left; margin-right:4px;">
                                                        <input type="hidden" name="id" id="id" value="<?php echo $row[0]; ?>">
                                                        <a class="btn btn-info" onclick="parentNode.submit();" title="Lihat Data Alumni"><b class="icon-eye-open"></b></a>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php } ?>
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
