<?php
    $page="alumnisuntingfoto";
    include("session.php");
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
                                    <h3>UBAH FOTO SAYA</h3>
                                </div>
                                <div class="module-body">
                                    <form class="form-horizontal row-fluid" style=" margin-left: 60px; width:85%;">
                                        <div class="control-group">                                            
                                            <div class="controls">
                                                <a href="#" class="media-avatar">
                                                    <img style="height:250px;" src="images/user.png">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="control-group" style=" margin-left: 80px;">        
                                        <label class="control-label" for="basicinput">File foto: </label>
                                            <div class="controls">
                                                <input type="file" id="basicinput" placeholder="Username untuk login" class="span8" value="sdarmaputra">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="button" id="basicinput" class="btn btn-success btn-large" data-toggle="modal" data-target="#myModal" data-backdrop="static" style="margin-left:80px;">Simpan</button>
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
                                                <a type="button" class="btn btn-success btn-large" href="alumnisuntingfoto-sukses.html">Ya. Simpan Perubahan</a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!--modal-->
                                        
                                    </form>
                                </p>
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