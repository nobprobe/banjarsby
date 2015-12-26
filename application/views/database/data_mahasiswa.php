<body onload="showupload()">
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Mahasiswa</h1>
        </div>
                <!-- /.col-lg-12 -->
    </div>
            <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">  </div>
    </div>
    <div class="row">
        <form role="form" method="post" action="<?php echo base_url()?>database\datamahasiswa">
        <div class="col-lg-6">
            <select class="form-control" name="pt">
                    <?php if (!empty($ptn)) { ?>
                        <?php foreach($ptn as $val){ ?>
                            <option><?php echo $val->Nama_perguruan; ?></option>
                        <?php } ?>
                    <?php } ?>   
            </select>
            
        </div>
        <div class="col-lg-4">
            <button class="btn btn-primary" type="submit" value="submit">Ambil</button>
        </div>
        </form>
        
        <div class="col-lg-2">
            <button type="button" class="btn btn-success" onclick="" data-toggle="modal" data-target="#uploadModal">Tambah Data</button>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-condesed">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Perguruan Tinggi</th>
                        <th>Fakultas</th>
                        <th>Jurusan</th>
                        <th>Tahun Angkatan</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($data_mahasiswa)) { ?>
                    <?php foreach($data_mahasiswa as $val){ ?>
                    <tr>
                        <td><?php echo $val->id_mahasiswa ?></td>
                        <td><?php echo $val->Nama ?></td>
                        <td><?php echo $val->Email ?></td>
                        <td><?php echo $val->id_perguruan_tinggi ?></td>
                        <td><?php echo $val->Fakultas ?></td>
                        <td><?php echo $val->Jurusan ?></td>
                        <td><?php echo $val->Tahun_angkatan ?></td>
                        <td><button type="button" class="btn btn-link"  onclick="editclick()">Edit</button> <button type="button" class="btn btn-link" onclick="" data-toggle="modal" data-target="#uploadModal">Hapus</button></td>
                    </tr>
                    <?php } ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
            
    </div>       
</div>

</div>
<!-- /#page-wrapper -->

<div id="uploadModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Upload File</h4>
            </div>
            
            <div class="modal-body">
                <div id="modal_content">
                    
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab"  href="#isidata">Tambah Data</a></li>
                        <li><a data-toggle="tab" href="#uploaddata">Upload CSV</a></li>
                    </ul>
                    
                    <div class="tab-content">
                        <div id="isidata" class="tab-pane fade in active">
                            <div class="row">                                
                                <form role="dialog" method="post" action="<?php echo base_url(); ?>/database/datamahasiswa/tambahdata">
                                <div class="col-lg-6">                                                                                            
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>
                                     <div class="form-group">
                                        <label for="univ">Universitas</label>
                                        <select id="univ" class="form-control" name="univ" required>
                                            <?php if (!empty($ptn)) { ?>
                                                <?php foreach($ptn as $val){ ?>
                                                    <option><?php echo $val->Nama_perguruan; ?></option>
                                                <?php } ?>
                                            <?php } ?>   
                                         </select>
                                    </div>
                                     <div class="form-group">
                                        <label for="fakultas">Fakultas</label>
                                        <input type="text" class="form-control" id="fakultas" name="fakultas" required>
                                    </div>
                                     <div class="form-group">
                                        <label for="jurusan">Jurusan</label>
                                        <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="angkatan">Tahun angkatan</label>
                                        <input type="text" class="form-control" id="angkatan" name="angkatan" required>
                                    </div>
                                </div>
                                    
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                     <div class="form-group">
                                        <label for="facebook">Facebook</label>
                                        <input type="text" class="form-control" id="facebook" name="facebook" required>
                                    </div>
                                     <div class="form-group">
                                        <label for="fakultas">Twitter</label>
                                        <input type="text" class="form-control" id="twitter" name="twitter" required>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success" type="submit" value="submit" name="submit">Submit</button>
                                        <button class="btn btn-danger" type="reset">Reset</button>
                                    </div>
                                    
                                     <div class="alert alert-danger">
                                        
                                     </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div id="uploaddata" class="tab-pane fade">
                            <form action="<?php echo base_url() ?>database/datamahasiswa/uploadcsv" role="dialog" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="file" class="form-control" id="fileupload" name="userfile">
                                </div>
                                <button class="btn btn-success" type="submit">Submit</button>
                            </form>
                        </div>
                </div>
            </div>
            
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

    <script type="text/javascript">
        function showinsertdata()
        {
            $("#modal_content").load("<?php echo base_url() ?>database/ajaxform/formtambahdata");   
        }
    </script>