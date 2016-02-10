<body onload="showupload()">
    <div id="page-wrapper">
        
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-danger">
                    <strong>Error!</strong> <?php echo validation_errors(); ?>
                </div>
            </div>
        </div>
        
        <div class="row">                                
            <form role="dialog" method="post" action="<?php echo base_url(); ?>/database/datamahasiswa/tambahdata">
                <div class="col-lg-6">                                                                                                                               <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo set_value('nama'); ?>" required>
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
                        <input type="text" class="form-control" id="fakultas" name="fakultas" value="<?php echo set_value('fakultas'); ?>" required >
                    </div>
                    
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo set_value('jurusan'); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="angkatan">Tahun angkatan</label>
                        <input type="text" class="form-control" id="angkatan" name="angkatan" value="<?php echo set_value('angkatan'); ?>" required>
                    </div>
                </div>
                                
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>" required>
                    </div>
                                    
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo set_value('facebook'); ?>" required>
                    </div>
                                    
                    <div class="form-group">
                        <label for="fakultas">Twitter</label>
                        <input type="text" class="form-control" id="twitter" name="twitter" value="<?php echo set_value('twitter'); ?>" required>
                    </div>
                                
                    <div class="form-group">
                        <button class="btn btn-success" type="submit" value="submit" name="submit">Submit</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                    </div>
                                    
                </div>
            </form>
        </div>
    </div>