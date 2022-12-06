<?php
      $now = date('Y-m-d H:i:s');
echo $now;
      ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data barang</li>
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
                <h3 class="card-title">Data Barang</h3>
                
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl" style="margin-bottom:10px">
                  + Tambah Barang
                </button>
                <table id="table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Ukuran</th>
                    <th>Bahan</th>
                    <th>Harga</th>
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
              <h4 class="modal-title">Tambah Data Barang</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" id="submit">
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                      <div class="col-sm-10">
                        <select class="form-control select2 " id="kategori" name="kategori" style="width: 100%;">
                        <option value='0'>----Pilih Kategori----</option>
                        <?php 
                            foreach ($kategori as $data) {
                              # code...
                              echo '<option value='.$data->id_kategori.'>'.$data->nama_kategori.'</option>';
                            }
                        ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Kode barang</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Kode Barang di Sistem">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Barang</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Barang">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi">
                      </div>
                    </div>


                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Gambar</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Gambar" accept="image/png, image/gif, image/jpeg, image/jpg">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Ukuran</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="ukuran" name="ukuran" placeholder="Ukuran">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Bahan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="bahan" name="bahan" placeholder="Bahan">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Harga</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga">
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="modal-footer justify-content-between">
                    <button type="submit" id="simpanBarang" class="btn btn-primary pull-right">Simpan Data</button>
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
              <h4 class="modal-title">Update Harga Barang</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <form class="form-horizontal" id="updateDataSubmit">
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                      <div class="col-sm-10">
                        <div id="kategori_id"></div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Kode barang</label>
                      <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="id_barang_update" name="id_barang_update" placeholder="" readonly>
                        <input type="text" class="form-control" id="kode_barang_update" name="kode_barang_update" placeholder="Kode Barang di Sistem">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Barang</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_barang_update" name="nama_barang_update" placeholder="Nama Barang">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="deskripsi_update" name="deskripsi_update" placeholder="Deskripsi">
                      </div>
                    </div>


                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Gambar</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" id="gambar_update" name="gambar_update" placeholder="Gambar" accept="image/png, image/gif, image/jpeg, image/jpg">
                        <input type="hidden" class="form-control" id="gambar_lama" name="gambar_lama" placeholder="" readonly>
                        <div id="gambar_tampil" style="margin-top:5px"></div>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Ukuran</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="ukuran_update" name="ukuran_update" placeholder="Ukuran">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Bahan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="bahan_update" name="bahan_update" placeholder="Bahan">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Harga</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" id="harga_update" name="harga_update" placeholder="Harga">
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="modal-footer justify-content-between">
                    <button type="submit" id="updatebarang" class="btn btn-primary pull-right">Simpan Data</button>
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
              "url": "<?php echo site_url('barang/dataBarang')?>",
              "type": "POST"
          },
          "columnDefs": [
          { 
              "targets": [ 0 ], 
              "orderable": false, 
          },
          { 
              "targets": [ 1 ], 
              "orderable": true, 
          },
          { 
              "targets": [ 2 ], 
              "orderable": true, 
          },
          { 
              "targets": [ 3 ], 
              "orderable": true, 
          },
          { 
              "targets": [ 4 ], 
              "orderable": false, 
          },
          { 
              "targets": [ 5 ], 
              "orderable": false, 
          },
          { 
              "targets": [ 6 ], 
              "orderable": true, 
          },
          { 
              "targets": [ 7 ], 
              "orderable": true, 
          },
          { 
              "targets": [ 8 ], 
              "orderable": true, 
          },
          { 
              "targets": [ 9 ], 
              "orderable": true, 
          },
          { 
              "targets": [ 10 ], 
              "orderable": true, 
          },
          { 
              "targets": [ 11 ], 
              "orderable": false, 
          },
          ],

      });
    }

    $(document).ready(function() {
 
      $('.select2').select2();
      tampilData();


      $('#submit').submit(function(e){
        e.preventDefault(); 
              $.ajax({
                  url:'<?php echo base_url();?>index.php/barang/simpanBarang',
                  type:"POST",
                  data:new FormData(this),
                  processData:false,
                  contentType:false,
                  cache:false,
                  async:false,
                  success: function(data){
                      alert("Upload Image Berhasil.");
                }
              });
        });


        $('#updateDataSubmit').submit(function(e){
        e.preventDefault(); 
              $.ajax({
                  url:'<?php echo base_url();?>index.php/barang/updateBarang',
                  type:"POST",
                  data:new FormData(this),
                  processData:false,
                  contentType:false,
                  cache:false,
                  async:false,
                  success: function(data){
                      alert("Upload Image Berhasil.");
                }
              });
        });


 
    });


    $(document).on('click', '.updateBarang', function(){
      var id = $(this).attr("id");
        $.ajax({
            type : "GET",
            url  : "<?php echo base_url()?>index.php/barang/getBarang/"+id,
            dataType : "JSON",
            success: function(data){
                var base_url = window.location.origin;

                var combo = ''
                combo += '<select class="form-control" name="kategori_update" id="kategori_update">'
                for(i=0; i<data.kategori.length; i++){
                  combo += '<option value="'+data.kategori[i].id_kategori+'" '+(data.kategori[i].id_kategori == data.barang.id_kategori ? 'selected' : '')+'>'+data.kategori[i].nama_kategori+'</option>'
                }
                combo += '</select>'
                $('#kategori_id').html(combo);

                var  gambar = ''
                gambar += '<img src="'+base_url+'/katalog/assets/images/'+data.barang.gambar+'" style="height:150px;width:150px;"/>'
                $('#gambar_tampil').html(gambar);

                $('[name="id_barang_update"]').val(data.barang.id_barang);

                $('[name="kode_barang_update"]').val(data.barang.kode_barang_sistem);
                $('[name="nama_barang_update"]').val(data.barang.nama_barang);
                $('[name="deskripsi_update"]').val(data.barang.deskripsi);

                $('[name="gambar_lama"]').val(data.barang.gambar);

                $('[name="ukuran_update"]').val(data.barang.ukuran);
                $('[name="bahan_update"]').val(data.barang.bahan);
                $('[name="harga_update"]').val(data.barang.harga);
                $('#modal-update').modal('show');
                
                
            }
        });
        return false;
    })

    $(document).on('click', '#updateSimpanBarang', function(){
      var idbarang=$('#id_barang_update').val();
      var harga=$('#harga_barang_update').val();
      $.ajax({
          type : "POST",
          url  : "<?php echo base_url()?>index.php/barang/updateBarang",
          dataType : "JSON",
          data : {idbarang:idbarang, harga:harga},
          success: function(data){
              $('[name="harga_barang_update"]').val("");
              $('#modal-update').modal('hide');
              tampilData();
          }
      });
      return false;
    })


    $(document).on('click', '.deleteBarang', function(){
      var id = $(this).attr("id");
      console.log(id)
      if (confirm('Apakah ingin menghapus data?')) {
        $.ajax({
            type : "GET",
            url  : "<?php echo base_url()?>index.php/barang/hapusBarang/"+id,
            dataType : "JSON",
            success: function(data){
              tampilData();
            }
        });
        return false;
      }
        
    })
 
</script>