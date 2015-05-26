<?php
    $page="alumniindex";
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
                    <?php  include("alumnisidebar.php"); ?>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="module">
                                <div class="module-head">
                                    <h3>TENTANG APLIKASI</h3>
                                </div>
                                <div class="module-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer massa tellus, euismod vitae consequat in, varius non nunc. Donec gravida mi justo, ornare placerat massa tempor nec. In ultricies accumsan velit. Morbi id pharetra odio. Sed mollis lorem at tortor condimentum scelerisque. Praesent commodo ultrices ex in placerat. Pellentesque iaculis sem in quam imperdiet, quis tincidunt ipsum volutpat. Fusce interdum venenatis dolor, eu ultricies tortor mattis molestie. Phasellus consectetur, ex eget tempus vulputate, nisl felis lobortis elit, tincidunt aliquam quam sem id neque.
                                    </p>
                                    <p>                                        
Etiam in dui ut magna iaculis suscipit. Praesent id ex fermentum, semper dui quis, ultrices felis. Pellentesque eu pharetra nunc, id vehicula mauris. Sed eget nisl ut ante condimentum congue id ac nisi. In luctus vitae mi ac scelerisque. Sed sit amet euismod metus, non laoreet ligula. Integer in enim vel orci pulvinar rhoncus vel hendrerit dolor. Suspendisse ut ipsum tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce id pulvinar est, at congue tellus. In convallis feugiat nisl, vitae pulvinar purus. Curabitur vel tristique erat, vel vestibulum turpis. Vivamus sit amet auctor odio. Ut facilisis lorem justo, et pretium dui porta id. Mauris non nibh nisi.
                                    </p>
                                </div>
                            </div>
                            <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Adjust Budget Range</h3>
                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label>
                                        &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
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