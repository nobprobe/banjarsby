<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Mahasiswa</h1>
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
                        <th>Nama Kepala Keluarga</th>
                        <th>Alamat</th>
                        <th>Kabupaten</th>
                        <th>Kecamatan</th>
                        <th>No. Telpon</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td><button type="button" class="btn btn-link" data-toggle="modal" data-target="#edataModal">Edit</button> <a href="">Hapus</a></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><button type="button" class="btn btn-link" data-toggle="modal" data-target="#dataModal">Tambah Data</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
            
    </div>       
        
    <!-- Modal -->

</div>
<!-- /#page-wrapper -->


<div id="dataModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah data</h4>
      </div>
      <div class="modal-body">
        <form id="dataform" role="form">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                        <div class="form-group">
                                            <label>Nama Kepala Keluarga</label>
                                            <input class="form-control" type="text" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" type="email" name="email">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Kabupaten</label>
                                            <input class="form-control" type="text" name="tanggal_lahir">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Kecamtan</label>
                                            <input class="form-control">
                                            <p class="help-block">Nama akun Facebook.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>No. Telpon</label>
                                            <input class="form-control">
                                            <p class="help-block">Akun Twitter</p>
                                        </div>
                                    </form>
                                </div>
                                
                            </form>
                            </div>
      </div>
      <div class="modal-footer">
          <button class="btn btn-success" type="button" value="submit" onclick="submitform()">Submit</button>
        <button class="btn btn-warning" type="button" onclick="resetform()">Reset</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>    

<div id="dataModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah data</h4>
      </div>
      <div class="modal-body">
        <form id="dataform" role="form">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                        <div class="form-group">
                                            <label>Nama Kepala Keluarga</label>
                                            <input class="form-control" type="text" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" type="email" name="email">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Kabupaten</label>
                                            <input class="form-control" type="text" name="tanggal_lahir">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Kecamtan</label>
                                            <input class="form-control">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>No. Telpon</label>
                                            <input class="form-control">
                                            
                                        </div>
                                    </form>
                                </div>
                                
                            </form>
                            </div>
      </div>
      <div class="modal-footer">
          <button class="btn btn-success" type="button" value="submit" onclick="submitform()">Submit</button>
        <button class="btn btn-warning" type="button" onclick="resetform()">Reset</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>    

<div id="edataModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah data</h4>
      </div>
      <div class="modal-body">
        <form id="dataform" role="form">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                        <div class="form-group">
                                            <label>Nama Kepala Keluarga</label>
                                            <input class="form-control" type="text" name="nama" value="test">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" type="text" name="email" value="test">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Kabupaten</label>
                                            <input class="form-control" type="text" name="tanggal_lahir" value="test">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Kecamtan</label>
                                            <input class="form-control" value="test">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>No. Telpon</label>
                                            <input class="form-control" value="test">
                                            
                                        </div>
                                    </form>
                                </div>
                                
                            </form>
                            </div>
      </div>
      <div class="modal-footer">
          <button class="btn btn-success" type="button" value="submit" onclick="submitform()">Submit</button>
        <button class="btn btn-warning" type="button" onclick="resetform()">Reset</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>    