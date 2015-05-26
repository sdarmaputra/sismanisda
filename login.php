<?php $page="login"; include("session.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SI SMANISDA | Login</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
	<div class="wrapper" style="height: 600px;">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical" action="logincheck.php" method="POST">
						<div class="module-head">
							<h3>LOGIN PENGGUNA</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<div class="input-prepend">
										<span class="add-on"><b class="icon-user"></b></span><input class="span11" type="text" id="username" name="username" placeholder="Username">
									</div>
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<div class="input-prepend">
										<span class="add-on"><b class="icon-lock"></b></span><input class="span11" type="password" id="pass" name="pass" placeholder="Password">
									</div>
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-success btn-large pull-right">Login</button>
									<label class="checkbox">
										<a href="#">Lupa Password?</a>
									</label>
								</div>
							</div>
						</div>
					</form>
				</div>
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
	</div><!--/.wrapper-->
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>