<!DOCTYPE html>
<html>
<body>
<div class="row">
    <form role="dialog" action="<?php echo base_url()?>database\datamahasiswa" method="post">
    
    <div class="col-sm-6">
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input class="form-control" type="text" id="nama" name="nama">
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" id="email" name="email">
        </div>
        
        <div class="form-group">
            <label for="fakultas">Fakultas</label>
            <input class="form-control" type="text" id="fakultas" name="fakultas">
        </div>
        
        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input class="form-control" type="text" id="jurusan" name="jurusan">
        </div>
        
        <div class="form-group">
            <label for="angkatan">Angkatan</label>
            <input class="form-control" type="text" id="angkatan" name="angkatan">
        </div>
        
    </div>
    
    <div class="col-sm-6">
        
        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input class="form-control" type="text" id="facebook" name="facebook">
        </div>
        
        <div class="form-group">
            <label for="twitter">Twitter</label>
            <input class="form-control" type="text" id="twitter" name="twitter">
        </div>
        
        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>
            <button class="btn btn-danger" type="reset" name="reset">Reset</button>
        </div>
    </div>
    
    </form>
</div>
</body>
</html>