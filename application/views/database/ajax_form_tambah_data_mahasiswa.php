   
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
                                        <label for="jeniskelamin">Jenis Kelamin</label>
                                        <select id="jeniskelamin" class="form-control" name="jeniskelamin" required>
                                            <option>L</option>   
                                            <option>P</option>   
                                         </select>
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