<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                
                <a class="navbar-brand" href="index.html">Administator</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            
            <ul class="nav navbar-top-links">
                <li><a href="<?php echo base_url()?>database/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                
                <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                     <i class="fa fa-edit fa-fw"></i>   Data  <i class="fa fa-caret-down"></i>
                    </a>
                    
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url()?>database/datamahasiswa">Data Mahasiswa</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>database/datawarga">Data Warga</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>database/dataperguruantinggi">Perguruan Tinggi</a>
                        </li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-sitemap fa-fw"></i> Manajemen Admin <i class="fa fa-caret-down"></i>
                    </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo base_url()?>database/manageadmin">Tambah Admin</a>
                                </li>
                                <li>
                                    <a href="login.html">Admin List</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li> 
                
            </ul>
    </nav>
            <!-- /.navbar-top-links -->