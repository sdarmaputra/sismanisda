                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li <?php if ($page=="alumniindex") echo 'class="active"'; ?>><a href="alumniindex.php"><i class="menu-icon icon-dashboard"></i>Tentang Aplikasi</a></li>
                                <li <?php if ($page=="alumnitampilalumni") echo 'class="active"'; ?>><a href="alumnitampilalumni.php"><i class="menu-icon icon-eye-open"></i>Lihat Profil Saya</a></li>
                                <li>
                                    <a class="collapsed" data-toggle="collapse" href="#togglePages">
                                        <i class="menu-icon icon-wrench"></i>
                                        <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
                                        Ubah Profil Saya
                                    </a>
                                    <ul id="togglePages" class="<?php if ($page!='alumnisuntingalumni' && $page!='alumnisuntingkontak' && $page!='alumnisuntingfoto') echo 'collapse ';?>unstyled">
                                        <li <?php if ($page=="alumnisuntingalumni") echo 'class="active"'; ?>>
                                            <a href="alumnisuntingalumni.php">
                                                <i class="icon-user"></i>
                                                Profil Dasar
                                            </a>
                                        </li>
                                        <li <?php if ($page=="alumnisuntingkontak") echo 'class="active"'; ?>>
                                            <a href="alumnisuntingkontak.php">
                                                <i class="icon-mobile-phone"></i>
                                                Kontak
                                            </a>
                                        </li>
                                        <li <?php if ($page=="alumnisuntingfoto") echo 'class="active"'; ?>>
                                            <a href="alumnisuntingfoto.php">
                                                <i class="icon-picture"></i>
                                                Foto
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li <?php if ($page=="alumnilihat") echo 'class="active"'; ?>><a href="alumnilihat.php"><i class="menu-icon icon-group"></i>Daftar Alumni</a></li>
                                <!--li><a href="task.php"><i class="menu-icon icon-tasks"></i>Statistik</a></li-->
                            </ul>
                            <!--/.widget-nav-->
                        </div>
                        <!--/.sidebar-->
                    </div>