
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Merk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Merk</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Merk</h3>
                
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl" style="margin-bottom:10px">
                  + Tambah Merk
                </button>
                <table id="table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Merk</th>
                    <th>Status</th>
                    <th>Dibuat</th>
                    <th>Diupdate</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  
  <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Merk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal">
                  <div class="card-body">
                    
                    <div class="form-group row">
                      <label for="nama_merk" class="col-sm-2 col-form-label">Nama Merk</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_merk" name="nama_merk" placeholder="Nama Merk">
                      </div>
                    </div>
                    
                  </div>
                  <!-- /.card-body -->
                  <div class="modal-footer justify-content-between">
                    <button type="button" id="simpanMerk" class="btn btn-primary pull-right">Simpan Data</button>
                  </div>
                  <!-- /.card-footer -->
                </form>


            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
 




  <div class="modal fade" id="modal-update">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update Data Merk</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal">
                  <div class="card-body">
                    
                    <div class="form-group row">
                      <label for="nama_merk" class="col-sm-2 col-form-label">Nama Merk</label>
                      <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="id_merk_update" name="id_merk_update" placeholder="ID Merk" readonly>
                        <input type="text" class="form-control" id="nama_merk_update" name="nama_merk_update" placeholder="Nama Merk">
                      </div>
                    </div>


                    <div class="form-group row">
                      <label for="status_update" class="col-sm-2 col-form-label">Status</label>
                      <div class="col-sm-10">
                        <div id="status_merk_update"></div>
                      </div>
                    </div>

                    
                    
                  </div>
                  <!-- /.card-body -->
                  <div class="modal-footer justify-content-between">
                    <button type="button" id="updateSimpanMerk" class="btn btn-primary pull-right">Simpan Data</button>
                  </div>
                  <!-- /.card-footer -->
                </form>


            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
 

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/adminlte/dist/js/adminlte.min.js"></script>


  <!-- DataTables  & Plugins -->
<script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/adminlte/plugins/select2/js/select2.full.min.js"></script>

<script type="text/javascript">
    

    function tampilData(){
        //datatables
        var table;
        table = $('#table').DataTable({ 
 
            "processing": true, 
            "serverSide": true, 
            "destroy": true,
            "order": [], 
            "ajax": {
                "url": "<?php echo site_url('merk/dataMerk')?>",
                "type": "POST"
            },
            "columnDefs": [
            { 
                "targets": [ 0 ], 
                "orderable": false, 
            },
            ],
 
        });
        // table.destroy();
    }

    $(document).ready(function() {
      $('.select2').select2();
      tampilData();
      

      $("#simpanMerk" ).click(function() {
        // console.log('haha');
        var namamerk=$('#nama_merk').val();

        $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/merk/simpanMerk')?>",
            dataType : "JSON",
            data : {namamerk:namamerk},
            success: function(data){
                $('[name="nama_merk"]').val("");
                $('#modal-xl').modal('hide');
                tampilData();
            }
        });
        return false;
      });

    });


    $(document).on('click', '.updateMerk', function(){
      var id = $(this).attr("id");
        $.ajax({
            type : "GET",
            url  : "<?php echo base_url()?>index.php/merk/getMerk/"+id,
            dataType : "JSON",
            success: function(data){
                $('[name="nama_merk_update"]').val(data.nama_merk);
                $('[name="id_merk_update"]').val(data.id_merk);
                var combo = ''
                combo += '<select class="form-control" name="status_update" id="status_update">'
                combo += '<option value="Y" '+(data.aktif == 'Y'? 'selected' : '')+'>Aktif</option>'
                combo += '<option value="N" '+(data.aktif == 'N'? 'selected' : '')+'>Non Aktif</option>'
                combo += '</select>'
                $('#status_merk_update').html(combo);
                $('#modal-update').modal('show');
                
            }
        });
        return false;
    })


    $(document).on('click', '#updateSimpanMerk', function(){
      var idmerk=$('#id_merk_update').val();
      var namamerk=$('#nama_merk_update').val();

      var status=$('#status_update').val();
      $.ajax({
          type : "POST",
          url  : "<?php echo base_url()?>index.php/merk/updateMerk",
          dataType : "JSON",
          data : {idmerk:idmerk, namamerk:namamerk, status:status},
          success: function(data){
              $('[name="nama_merk_update"]').val("");
              $('#modal-update').modal('hide');
              tampilData();
          }
      });
      return false;
    })



    


 
</script>