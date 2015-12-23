<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Daftar Perguruan Tinggi</h1>
        </div>
                <!-- /.col-lg-12 -->
    </div>
            <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-condesed">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Perguruan Tinggi</th>
                        <th>Mahasiswa Terdaftar</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td><button type="button" class="btn btn-link" data-toggle="modal" data-target="#edataModal">Edit</button> <button type="button" class="btn btn-link" data-toggle="modal" data-target="#dataModal">Hapus</button><button type="button" class="btn btn-link" data-toggle="modal" data-target="#dataModal">Tambah</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
            
    </div>       

</div>
<!-- /#page-wrapper -->

<div id="dataModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambahkan perguruan tinggi</h4>
            </div>
            
            <div class="modal-body">
                <div id="modal_content">
                    <form role="dialog">
                    <div class="row">
                            
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nama">Nama perguruan tinggi</label>
                                <input class="form-control" type="text" name="nama" id="nama">
                            </div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="aliasname">Alias Name</label>
                                <input class="form-control" type="text" name="aliasname" id="aliasname">
                            </div>
                        </div>    
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>
                                <button class="btn btn-danger" type="reset" name="reset" id="reset">Reset</button>
                            </div>
                        </div>    
                    </div>
                    </form>
                </div>
            </div>
            
            <div class="modal-footer"></div>
        </div>
    </div>
</div>