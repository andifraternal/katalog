
<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Katalog</h1>
                </a>
            </div>
            <div class="col-lg-3 col-3 text-left">
                <select class="form-control" id="sortByHarga">
                    <option value="tanpaSortHarga">Urutkan Berdasarkan Harga</option>
                    <option value="hargaTertinggi">Harga Tertinggi</option>
                    <option value="hargaTerendah">Harga Terendah</option>
                </select>
            </div>
            <div class="col-lg-3 col-3 text-left">
                <select class="form-control" id="sortByAbjad">
                    <option value="awal">A -> Z</option>
                    <option value="akhir">Z -> A</option>
                </select>
            </div>

            <div class="col-lg-3 col-3 text-left">
                <select class="form-control select2" id="sortByMerk">
                    <option value="allMerk">All Merk</option>
                    <?php
                        foreach ($merk as $datamerk) {
                            # code...
                            echo '
                                <option value="'.$datamerk->id_merk.'">'.$datamerk->nama_merk.'</option>    
                            ';
                        }
                    ?>
                    
                </select>
            </div>
            <!-- <div class="col-lg-3 col-3 text-right">
                
            </div> -->
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Kategori</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item nav-link hasilKategori" id="allKategori" >Semua Kategori</div>
                    <?php
                        foreach ($kategori as $datakategori) {
                            # code...
                            echo '
                                <div class="nav-item nav-link hasilKategori" id="'.$datakategori->id_kategori.'" >'.$datakategori->nama_kategori.'</div>
                            ';
                        }
                    ?>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Katalog</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                        </div>
                    </div>
                </nav>
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 410px;">
                            <img class="img-fluid" src="<?php echo base_url() ?>assets/frontend/img/carousel-1.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <!-- <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4> -->
                                    <!-- <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3> -->
                                    <!-- <a href="" class="btn btn-light py-2 px-3">Shop Now</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 410px;">
                            <img class="img-fluid" src="<?php echo base_url() ?>assets/frontend/img/carousel-2.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <!-- <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4> -->
                                    <!-- <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3> -->
                                    <!-- <a href="" class="btn btn-light py-2 px-3">Shop Now</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 410px;">
                            <img class="img-fluid" src="<?php echo base_url() ?>assets/frontend/img/carousel-3.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <!-- <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4> -->
                                    <!-- <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3> -->
                                    <!-- <a href="" class="btn btn-light py-2 px-3">Shop Now</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Products</span></h2>
        </div>
        <input type="hidden" class="form-control" id="id_kategori">
        <div class="row px-xl-5 pb-3" id="tampilData" readonly>
            
        </div>
    </div>
    <!-- Products End -->




    <div class="modal fade" id="modal-detail">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Produk Detail</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <!-- Shop Detail Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                <div  class="carousel slide" data-ride="carousel" id="detailImage">
                    <!-- <div class="carousel-inner border">
                        <div class="carousel-item active" id="detailImage"> -->
                            <!-- <img class="w-100 h-100" src="img/product-1.jpg" alt="Image"> -->
                        <!-- </div>
                    </div> -->
                    <!-- <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                        <i class="fa fa-2x fa-angle-left text-dark"></i>
                    </a>
                    <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                        <i class="fa fa-2x fa-angle-right text-dark"></i>
                    </a> -->
                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <h2 class="font-weight-semi-bold"><span id="detailMerk"></span></h2>
                <h3 class="font-weight-semi-bold"><span id="detailNama"></span></h3>
                <div class="d-flex mb-3">
                </div>
                <h3 class="font-weight-semi-bold mb-4"><span id="detailHarga"></span></h3>
                <div class="d-flex mb-3">
                    <p class="text-dark font-weight-medium mb-0 mr-3">Ukuran : <span id="detailUkuran"></span></p>
                </div>
                <div class="d-flex mb-3">
                    <p class="text-dark font-weight-medium mb-0 mr-3">Bahan : <span id="detailBahan"></span></p>
                </div>
                
               
            </div>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Description</a>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Product Description</h4>
                        <p id="detailDeskripsi"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/frontend/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url() ?>assets/frontend/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="<?php echo base_url() ?>assets/frontend/mail/jqBootstrapValidation.min.js"></script>
    <script src="<?php echo base_url() ?>assets/frontend/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url() ?>assets/frontend/js/main.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();

            function tampilData(abjad){
                $.ajax({
                    type : "GET",
                    url  : "<?php echo base_url()?>index.php/tampil/tampilAllbarang/"+abjad,
                    dataType : "JSON",
                    success: function(data){
                        console.log(data)
                        var base_url = window.location.origin;
                        var tampilan = ''
                        for(i=0; i<data.length; i++){
                            
                            tampilan += '<div class="col-lg-3 col-md-6 col-sm-12 pb-1 detailBarang" data-id="'+data[i].id_barang+'">'
                            tampilan += '<div class="card product-item border-0 mb-4">'
                            tampilan += '<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">'
                            tampilan += '<img class="img-fluid w-100" src="<?php echo base_url() ?>assets/images/'+data[i].gambar+'" alt="">'
                            tampilan += '</div>'
                            tampilan += '<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">'
                            tampilan += '<h6 class="text-truncate mb-3">'+data[i].nama_merk+'</h6>'
                            tampilan += '<h6 class="text-truncate mb-3">'+data[i].nama_barang+'</h6>'
                            tampilan += '<div class="d-flex justify-content-center">'
                            tampilan += '<h6>'+data[i].harga+'</h6><h6 class="text-muted ml-2"><del>'+data[i].harga+'</del></h6>'
                            tampilan += '</div>'
                            tampilan += '</div>'
                            tampilan += '<div class="card-footer d-flex justify-content-between bg-light border">'
                            tampilan += '<i class="fas fa-eye text-primary mr-1"></i>Detail'
                            tampilan += '</div>'
                            tampilan += '</div>'
                            tampilan += '</div>'
                        }

                        $('#tampilData').html(tampilan);
                        $('#id_kategori').val('');
                    }
                });
            }

            // load data awal
            $('.select2').select2(); 
            var harga = $('#sortByHarga').val();
            var abjad = $('#sortByAbjad').val();
            var merk = $('#sortByMerk').val();
            // $('#id_kategori').val('allKategori');
            // var 
            tampilData(abjad);


            function filterbykategori(id, abjad){
                $.ajax({
                        type : "GET",
                        url  : "<?php echo base_url()?>index.php/tampil/searchBykategori/"+id+"/"+abjad,
                        dataType : "JSON",
                        success: function(data){
                            console.log(data)
                            var base_url = window.location.origin;
                            var tampilan = ''
                            for(i=0; i<data.length; i++){
                                
                                tampilan += '<div class="col-lg-3 col-md-6 col-sm-12 pb-1 detailBarang" data-id="'+data[i].id_barang+'">'
                                tampilan += '<div class="card product-item border-0 mb-4">'
                                tampilan += '<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">'
                                tampilan += '<img class="img-fluid w-100" src="<?php echo base_url() ?>assets/images/'+data[i].gambar+'" alt="">'
                                tampilan += '</div>'
                                tampilan += '<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">'
                                tampilan += '<h6 class="text-truncate mb-3">'+data[i].nama_merk+'</h6>'
                                tampilan += '<h6 class="text-truncate mb-3">'+data[i].nama_barang+'</h6>'
                                tampilan += '<div class="d-flex justify-content-center">'
                                tampilan += '<h6>'+data[i].harga+'</h6><h6 class="text-muted ml-2"><del>'+data[i].harga+'</del></h6>'
                                tampilan += '</div>'
                                tampilan += '</div>'
                                tampilan += '<div class="card-footer d-flex justify-content-between bg-light border">'
                                tampilan += '<i class="fas fa-eye text-primary mr-1"></i>Detail'
                                tampilan += '</div>'
                                tampilan += '</div>'
                                tampilan += '</div>'
                            }

                            $('#tampilData').html(tampilan);
                            $('#id_kategori').val(id);
                            
                        }
                    });
            }


            function filterbyharga(harga, abjad){
                $.ajax({
                        type : "GET",
                        url  : "<?php echo base_url()?>index.php/tampil/searchByHarga/"+harga+"/"+abjad,
                        dataType : "JSON",
                        success: function(data){
                            console.log(data)
                            var base_url = window.location.origin;
                            var tampilan = ''
                            for(i=0; i<data.length; i++){
                                
                                tampilan += '<div class="col-lg-3 col-md-6 col-sm-12 pb-1 detailBarang" data-id="'+data[i].id_barang+'">'
                                tampilan += '<div class="card product-item border-0 mb-4">'
                                tampilan += '<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">'
                                tampilan += '<img class="img-fluid w-100" src="<?php echo base_url() ?>assets/images/'+data[i].gambar+'" alt="">'
                                tampilan += '</div>'
                                tampilan += '<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">'
                                tampilan += '<h6 class="text-truncate mb-3">'+data[i].nama_merk+'</h6>'
                                tampilan += '<h6 class="text-truncate mb-3">'+data[i].nama_barang+'</h6>'
                                tampilan += '<div class="d-flex justify-content-center">'
                                tampilan += '<h6>'+data[i].harga+'</h6><h6 class="text-muted ml-2"><del>'+data[i].harga+'</del></h6>'
                                tampilan += '</div>'
                                tampilan += '</div>'
                                tampilan += '<div class="card-footer d-flex justify-content-between bg-light border">'
                                tampilan += '<i class="fas fa-eye text-primary mr-1"></i>Detail'
                                tampilan += '</div>'
                                tampilan += '</div>'
                                tampilan += '</div>'
                            }

                            $('#tampilData').html(tampilan);
                            $('#id_kategori').val('');
                        }
                    });
            }


            function filterbyMerk(merk, abjad){
                $.ajax({
                        type : "GET",
                        url  : "<?php echo base_url()?>index.php/tampil/searchByMerk/"+merk+"/"+abjad,
                        dataType : "JSON",
                        success: function(data){
                            console.log(data)
                            var base_url = window.location.origin;
                            var tampilan = ''
                            for(i=0; i<data.length; i++){
                                
                                tampilan += '<div class="col-lg-3 col-md-6 col-sm-12 pb-1 detailBarang" data-id="'+data[i].id_barang+'">'
                                tampilan += '<div class="card product-item border-0 mb-4">'
                                tampilan += '<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">'
                                tampilan += '<img class="img-fluid w-100" src="<?php echo base_url() ?>assets/images/'+data[i].gambar+'" alt="">'
                                tampilan += '</div>'
                                tampilan += '<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">'
                                tampilan += '<h6 class="text-truncate mb-3">'+data[i].nama_merk+'</h6>'
                                tampilan += '<h6 class="text-truncate mb-3">'+data[i].nama_barang+'</h6>'
                                tampilan += '<div class="d-flex justify-content-center">'
                                tampilan += '<h6>'+data[i].harga+'</h6><h6 class="text-muted ml-2"><del>'+data[i].harga+'</del></h6>'
                                tampilan += '</div>'
                                tampilan += '</div>'
                                tampilan += '<div class="card-footer d-flex justify-content-between bg-light border">'
                                tampilan += '<i class="fas fa-eye text-primary mr-1"></i>Detail'
                                tampilan += '</div>'
                                tampilan += '</div>'
                                tampilan += '</div>'
                            }

                            $('#tampilData').html(tampilan);
                            
                        }
                    });
            }



            function filterbykategoriharga(kategori, harga, abjad){
                $.ajax({
                        type : "GET",
                        url  : "<?php echo base_url()?>index.php/tampil/searchBykategoriHarga/"+kategori+"/"+harga+"/"+abjad,
                        dataType : "JSON",
                        success: function(data){
                            console.log(data)
                            var base_url = window.location.origin;
                            var tampilan = ''
                            for(i=0; i<data.length; i++){
                                
                                tampilan += '<div class="col-lg-3 col-md-6 col-sm-12 pb-1 detailBarang" data-id="'+data[i].id_barang+'">'
                                tampilan += '<div class="card product-item border-0 mb-4">'
                                tampilan += '<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">'
                                tampilan += '<img class="img-fluid w-100" src="<?php echo base_url() ?>assets/images/'+data[i].gambar+'" alt="">'
                                tampilan += '</div>'
                                tampilan += '<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">'
                                tampilan += '<h6 class="text-truncate mb-3">'+data[i].nama_merk+'</h6>'
                                tampilan += '<h6 class="text-truncate mb-3">'+data[i].nama_barang+'</h6>'
                                tampilan += '<div class="d-flex justify-content-center">'
                                tampilan += '<h6>'+data[i].harga+'</h6><h6 class="text-muted ml-2"><del>'+data[i].harga+'</del></h6>'
                                tampilan += '</div>'
                                tampilan += '</div>'
                                tampilan += '<div class="card-footer d-flex justify-content-between bg-light border">'
                                tampilan += '<i class="fas fa-eye text-primary mr-1"></i>Detail'
                                tampilan += '</div>'
                                tampilan += '</div>'
                                tampilan += '</div>'
                            }

                            $('#tampilData').html(tampilan);
                            $('#id_kategori').val(kategori);
                            
                        }
                    });
            }

            function filterbymerkharga(merk, harga, abjad){
                $.ajax({
                        type : "GET",
                        url  : "<?php echo base_url()?>index.php/tampil/searchByMerkHarga/"+merk+"/"+harga+"/"+abjad,
                        dataType : "JSON",
                        success: function(data){
                            console.log(data)
                            var base_url = window.location.origin;
                            var tampilan = ''
                            for(i=0; i<data.length; i++){
                                
                                tampilan += '<div class="col-lg-3 col-md-6 col-sm-12 pb-1 detailBarang" data-id="'+data[i].id_barang+'">'
                                tampilan += '<div class="card product-item border-0 mb-4">'
                                tampilan += '<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">'
                                tampilan += '<img class="img-fluid w-100" src="<?php echo base_url() ?>assets/images/'+data[i].gambar+'" alt="">'
                                tampilan += '</div>'
                                tampilan += '<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">'
                                tampilan += '<h6 class="text-truncate mb-3">'+data[i].nama_merk+'</h6>'
                                tampilan += '<h6 class="text-truncate mb-3">'+data[i].nama_barang+'</h6>'
                                tampilan += '<div class="d-flex justify-content-center">'
                                tampilan += '<h6>'+data[i].harga+'</h6><h6 class="text-muted ml-2"><del>'+data[i].harga+'</del></h6>'
                                tampilan += '</div>'
                                tampilan += '</div>'
                                tampilan += '<div class="card-footer d-flex justify-content-between bg-light border">'
                                tampilan += '<i class="fas fa-eye text-primary mr-1"></i>Detail'
                                tampilan += '</div>'
                                tampilan += '</div>'
                                tampilan += '</div>'
                            }

                            $('#tampilData').html(tampilan);
                            // $('#id_kategori').val(id);
                            
                        }
                    });
            }

            function filterbykategorimerk(kategori, merk, abjad){
                $.ajax({
                        type : "GET",
                        url  : "<?php echo base_url()?>index.php/tampil/searchBykategoriMerk/"+kategori+"/"+merk+"/"+abjad,
                        dataType : "JSON",
                        success: function(data){
                            console.log(data)
                            var base_url = window.location.origin;
                            var tampilan = ''
                            for(i=0; i<data.length; i++){
                                
                                tampilan += '<div class="col-lg-3 col-md-6 col-sm-12 pb-1 detailBarang" data-id="'+data[i].id_barang+'">'
                                tampilan += '<div class="card product-item border-0 mb-4">'
                                tampilan += '<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">'
                                tampilan += '<img class="img-fluid w-100" src="<?php echo base_url() ?>assets/images/'+data[i].gambar+'" alt="">'
                                tampilan += '</div>'
                                tampilan += '<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">'
                                tampilan += '<h6 class="text-truncate mb-3">'+data[i].nama_merk+'</h6>'
                                tampilan += '<h6 class="text-truncate mb-3">'+data[i].nama_barang+'</h6>'
                                tampilan += '<div class="d-flex justify-content-center">'
                                tampilan += '<h6>'+data[i].harga+'</h6><h6 class="text-muted ml-2"><del>'+data[i].harga+'</del></h6>'
                                tampilan += '</div>'
                                tampilan += '</div>'
                                tampilan += '<div class="card-footer d-flex justify-content-between bg-light border">'
                                tampilan += '<i class="fas fa-eye text-primary mr-1"></i>Detail'
                                tampilan += '</div>'
                                tampilan += '</div>'
                                tampilan += '</div>'
                            }

                            $('#tampilData').html(tampilan);
                            $('#id_kategori').val(kategori);
                            
                        }
                    });
            }

            function filterbykategorihargamerk(kategori, merk, harga, abjad){
                $.ajax({
                        type : "GET",
                        url  : "<?php echo base_url()?>index.php/tampil/searchBykategorihargaMerk/"+kategori+"/"+merk+"/"+harga+"/"+abjad,
                        dataType : "JSON",
                        success: function(data){
                            console.log(data)
                            var base_url = window.location.origin;
                            var tampilan = ''
                            for(i=0; i<data.length; i++){
                                
                                tampilan += '<div class="col-lg-3 col-md-6 col-sm-12 pb-1 detailBarang" data-id="'+data[i].id_barang+'">'
                                tampilan += '<div class="card product-item border-0 mb-4">'
                                tampilan += '<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">'
                                tampilan += '<img class="img-fluid w-100" src="<?php echo base_url() ?>assets/images/'+data[i].gambar+'" alt="">'
                                tampilan += '</div>'
                                tampilan += '<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">'
                                tampilan += '<h6 class="text-truncate mb-3">'+data[i].nama_merk+'</h6>'
                                tampilan += '<h6 class="text-truncate mb-3">'+data[i].nama_barang+'</h6>'
                                tampilan += '<div class="d-flex justify-content-center">'
                                tampilan += '<h6>'+data[i].harga+'</h6><h6 class="text-muted ml-2"><del>'+data[i].harga+'</del></h6>'
                                tampilan += '</div>'
                                tampilan += '</div>'
                                tampilan += '<div class="card-footer d-flex justify-content-between bg-light border">'
                                tampilan += '<i class="fas fa-eye text-primary mr-1"></i>Detail'
                                tampilan += '</div>'
                                tampilan += '</div>'
                                tampilan += '</div>'
                            }

                            $('#tampilData').html(tampilan);
                            $('#id_kategori').val(kategori);
                            
                        }
                    });
            }


            $('.hasilKategori').click(function(){
                // var kategori = $(this).attr('id')
                var harga = $('#sortByHarga').val();
                var abjad = $('#sortByAbjad').val();
                var merk = $('#sortByMerk').val();
                var kategori = ($(this).attr('id') == ''?'allKategori':$(this).attr('id'))

                if(harga == 'tanpaSortHarga' && kategori == 'allKategori' && merk == 'allMerk'){
                    tampilData(abjad)
                // }else if(harga == 'tanpaSortHarga' && kategori == '' && merk == 'allMerk'){
                //     tampilData(abjad)
                }else if (harga != 'tanpaSortHarga' && kategori == 'allKategori' && merk == 'allMerk'){
                    filterbyharga(harga, abjad)
                }else if (harga == 'tanpaSortHarga' && kategori != 'allKategori' && merk == 'allMerk'){
                    filterbykategori(kategori, abjad)
                }else if (harga == 'tanpaSortHarga' && kategori == 'allKategori' && merk != 'allMerk'){
                    filterbyMerk(merk, abjad)
                }else if (harga != 'tanpaSortHarga' && kategori != 'allKategori' && merk == 'allMerk'){
                    filterbykategoriharga(kategori, harga, abjad)
                }else if (harga != 'tanpaSortHarga' && kategori == 'allKategori' && merk != 'allMerk'){
                    filterbymerkharga(merk, harga, abjad)
                }else if (harga == 'tanpaSortHarga' && kategori != 'allKategori' && merk != 'allMerk'){
                    filterbykategorimerk(kategori, merk, abjad)
                }else if (harga != 'tanpaSortHarga' && kategori != 'allKategori' && merk != 'allMerk'){
                    filterbykategorihargamerk(kategori, merk, harga, abjad)
                }
                  
            })


            $('#sortByHarga').change(function(){
                var kat = $('#id_kategori').val();
                var kategori = (kat == ''?'allKategori':kat)
                var harga = $('#sortByHarga').val();
                var abjad = $('#sortByAbjad').val();
                var merk = $('#sortByMerk').val();

                if(harga == 'tanpaSortHarga' && kategori == 'allKategori' && merk == 'allMerk'){
                    tampilData(abjad)
                }else if(harga == 'tanpaSortHarga' && kategori == '' && merk == 'allMerk'){
                    tampilData(abjad)
                }else if (harga != 'tanpaSortHarga' && kategori == 'allKategori' && merk == 'allMerk'){
                    filterbyharga(harga, abjad)
                }else if (harga == 'tanpaSortHarga' && kategori != 'allKategori' && merk == 'allMerk'){
                    filterbykategori(kategori, abjad)
                }else if (harga == 'tanpaSortHarga' && kategori == 'allKategori' && merk != 'allMerk'){
                    filterbyMerk(merk, abjad)
                }else if (harga != 'tanpaSortHarga' && kategori != 'allKategori' && merk == 'allMerk'){
                    filterbykategoriharga(kategori, harga, abjad)
                }else if (harga != 'tanpaSortHarga' && kategori == 'allKategori' && merk != 'allMerk'){
                    filterbymerkharga(merk, harga, abjad)
                }else if (harga == 'tanpaSortHarga' && kategori != 'allKategori' && merk != 'allMerk'){
                    filterbykategorimerk(kategori, merk, abjad)
                }else if (harga != 'tanpaSortHarga' && kategori != 'allKategori' && merk != 'allMerk'){
                    filterbykategorihargamerk(kategori, merk, harga, abjad)
                }
            })


            $('#sortByAbjad').change(function(){
                var kat = $('#id_kategori').val();
                var kategori = (kat == ''?'allKategori':kat)
                var harga = $('#sortByHarga').val();
                var abjad = $('#sortByAbjad').val();
                var merk = $('#sortByMerk').val();

                if(harga == 'tanpaSortHarga' && kategori == 'allKategori' && merk == 'allMerk'){
                    tampilData(abjad)
                }else if(harga == 'tanpaSortHarga' && kategori == '' && merk == 'allMerk'){
                    tampilData(abjad)
                }else if (harga != 'tanpaSortHarga' && kategori == 'allKategori' && merk == 'allMerk'){
                    filterbyharga(harga, abjad)
                }else if (harga == 'tanpaSortHarga' && kategori != 'allKategori' && merk == 'allMerk'){
                    filterbykategori(kategori, abjad)
                }else if (harga == 'tanpaSortHarga' && kategori == 'allKategori' && merk != 'allMerk'){
                    filterbyMerk(merk, abjad)
                }else if (harga != 'tanpaSortHarga' && kategori != 'allKategori' && merk == 'allMerk'){
                    filterbykategoriharga(kategori, harga, abjad)
                }else if (harga != 'tanpaSortHarga' && kategori == 'allKategori' && merk != 'allMerk'){
                    filterbymerkharga(merk, harga, abjad)
                }else if (harga == 'tanpaSortHarga' && kategori != 'allKategori' && merk != 'allMerk'){
                    filterbykategorimerk(kategori, merk, abjad)
                }else if (harga != 'tanpaSortHarga' && kategori != 'allKategori' && merk != 'allMerk'){
                    filterbykategorihargamerk(kategori, merk, harga, abjad)
                }
            })


            $('#sortByMerk').change(function(){
                var kat = $('#id_kategori').val();
                var kategori = (kat == ''?'allKategori':kat)
                var harga = $('#sortByHarga').val();
                var abjad = $('#sortByAbjad').val();
                var merk = $('#sortByMerk').val();

                if(harga == 'tanpaSortHarga' && kategori == 'allKategori' && merk == 'allMerk'){
                    tampilData(abjad)
                }else if(harga == 'tanpaSortHarga' && kategori == '' && merk == 'allMerk'){
                    tampilData(abjad)
                }else if (harga != 'tanpaSortHarga' && kategori == 'allKategori' && merk == 'allMerk'){
                    filterbyharga(harga, abjad)
                }else if (harga == 'tanpaSortHarga' && kategori != 'allKategori' && merk == 'allMerk'){
                    filterbykategori(kategori, abjad)
                }else if (harga == 'tanpaSortHarga' && kategori == 'allKategori' && merk != 'allMerk'){
                    filterbyMerk(merk, abjad)
                }else if (harga != 'tanpaSortHarga' && kategori != 'allKategori' && merk == 'allMerk'){
                    filterbykategoriharga(kategori, harga, abjad)
                }else if (harga != 'tanpaSortHarga' && kategori == 'allKategori' && merk != 'allMerk'){
                    filterbymerkharga(merk, harga, abjad)
                }else if (harga == 'tanpaSortHarga' && kategori != 'allKategori' && merk != 'allMerk'){
                    filterbykategorimerk(kategori, merk, abjad)
                }else if (harga != 'tanpaSortHarga' && kategori != 'allKategori' && merk != 'allMerk'){
                    filterbykategorihargamerk(kategori, merk, harga, abjad)
                }
            })

    });



    $(document).on('click', '.detailBarang', function(){
            var id= $(this).attr('data-id')
            $.ajax({
                    type : "GET",
                    url  : "<?php echo base_url()?>index.php/tampil/detailBarang/"+id,
                    dataType : "JSON",
                    success: function(data){
                        console.log(data)
                        $('#detailUkuran').html(data.nama_kategori)
                        $('#detailBahan').html(data.bahan)
                        $('#detailHarga').html(data.harga)
                        $('#detailDeskripsi').html(data.deskripsi)
                        $('#detailNama').html(data.nama_barang)
                        $('#detailMerk').html(data.nama_merk)
                        var tampilGambar = '<img class="w-100 h-100" src="<?php echo base_url() ?>assets/images/'+data.gambar+'" alt="Image">'
                        $('#detailImage').html(tampilGambar)
                        $('#modal-detail').modal('show');
                        
                    }
                });

        })
    </script>

