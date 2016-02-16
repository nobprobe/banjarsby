<body>
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
        
        <div class="col-lg-2">
            <button onclick="showinsertdata('<?php echo base_url() ?>database/ajaxform/formtambahdata')" class="btn btn-success">Tambah Data</button>
            
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
                        <td><button type="button" class="btn btn-link"  onclick="editclick()">Edit</button> 
                            <button type="button" class="btn btn-link" onclick="">Hapus</button>
                        </td>
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
                 
                    </div>
            
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
</div>
    
    <script src="<?php echo base_url() ?>assets/js/datamahasiswa.js"></script>
    
    <script>
        function showdatadetail(id)
        {
            $.post("demo_test_post.asp",
            {
                id_mahasiswa=id;
            },
                function(data, status){
                    alert("Data: " + data + "\nStatus: " + status);
                });
        }
    </script>