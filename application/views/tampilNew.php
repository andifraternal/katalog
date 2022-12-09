
<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Katalog</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <select class="form-control" id="sortByHarga">
                    <option value="tanpaSortHarga">Sort by</option>
                    <option value="hargaTertinggi">Targa Tertinggi</option>
                    <option value="hargaTerendah">Harga Terendah</option>
                </select>
            </div>
            <div class="col-lg-3 col-6 text-right">
                
            </div>
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

            function tampilData(){
                $.ajax({
                    type : "GET",
                    url  : "<?php echo base_url('index.php/barang/tampilAllbarang')?>",
                    dataType : "JSON",
                    success: function(data){
                        console.log(data)
                        var base_url = window.location.origin;
                        var tampilan = ''
                        for(i=0; i<data.length; i++){
                            
                            tampilan += '<div class="col-lg-3 col-md-6 col-sm-12 pb-1" data-id="'+data[i].id_barang+'">'
                            tampilan += '<div class="card product-item border-0 mb-4">'
                            tampilan += '<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">'
                            tampilan += '<img class="img-fluid w-100" src="<?php echo base_url() ?>assets/images/'+data[i].gambar+'" alt="">'
                            tampilan += '</div>'
                            tampilan += '<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">'
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

            // load dat awal
            var harga = $('#sortByHarga').val();
            // var 
            tampilData();


            function filterbykategori(id){
                $.ajax({
                        type : "GET",
                        url  : "<?php echo base_url()?>index.php/tampil/searchBykategori/"+id,
                        dataType : "JSON",
                        success: function(data){
                            console.log(data)
                            var base_url = window.location.origin;
                            var tampilan = ''
                            for(i=0; i<data.length; i++){
                                
                                tampilan += '<div class="col-lg-3 col-md-6 col-sm-12 pb-1" data-id="'+data[i].id_barang+'">'
                                tampilan += '<div class="card product-item border-0 mb-4">'
                                tampilan += '<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">'
                                tampilan += '<img class="img-fluid w-100" src="<?php echo base_url() ?>assets/images/'+data[i].gambar+'" alt="">'
                                tampilan += '</div>'
                                tampilan += '<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">'
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


            function filterbyharga(harga){
                $.ajax({
                        type : "GET",
                        url  : "<?php echo base_url()?>index.php/tampil/searchByHarga/"+harga,
                        dataType : "JSON",
                        success: function(data){
                            console.log(data)
                            var base_url = window.location.origin;
                            var tampilan = ''
                            for(i=0; i<data.length; i++){
                                
                                tampilan += '<div class="col-lg-3 col-md-6 col-sm-12 pb-1" data-id="'+data[i].id_barang+'">'
                                tampilan += '<div class="card product-item border-0 mb-4">'
                                tampilan += '<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">'
                                tampilan += '<img class="img-fluid w-100" src="<?php echo base_url() ?>assets/images/'+data[i].gambar+'" alt="">'
                                tampilan += '</div>'
                                tampilan += '<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">'
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



            function filterbykategoriharga(id, harga){
                $.ajax({
                        type : "GET",
                        url  : "<?php echo base_url()?>index.php/tampil/searchBykategoriHarga/"+id+"/"+harga,
                        dataType : "JSON",
                        success: function(data){
                            console.log(data)
                            var base_url = window.location.origin;
                            var tampilan = ''
                            for(i=0; i<data.length; i++){
                                
                                tampilan += '<div class="col-lg-3 col-md-6 col-sm-12 pb-1" data-id="'+data[i].id_barang+'">'
                                tampilan += '<div class="card product-item border-0 mb-4">'
                                tampilan += '<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">'
                                tampilan += '<img class="img-fluid w-100" src="<?php echo base_url() ?>assets/images/'+data[i].gambar+'" alt="">'
                                tampilan += '</div>'
                                tampilan += '<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">'
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


            $('.hasilKategori').click(function(){
                // tampilDataFilter()
                var kategori = $(this).attr('id')
                var harga = $('#sortByHarga').val();
                // var kategori = $('#id_kategori').val();
                // var harga = $(this).attr('id')
                if(harga == 'tanpaSortHarga' && kategori == 'allKategori'){
                    tampilData()
                }else if(harga == 'tanpaSortHarga' && kategori == ''){
                    tampilData()
                }else if(harga != 'tanpaSortHarga' && kategori == 'allKategori'){
                    filterbyharga(harga)
                }else if (harga == 'tanpaSortHarga' && kategori != 'allKategori'){
                    filterbykategori(kategori)
                }else{
                    filterbykategoriharga(kategori, harga)
                }
            })


            $('#sortByHarga').change(function(){
                var kategori = $('#id_kategori').val();
                var harga = $('#sortByHarga').val();
                console.log(harga)
                if(harga == 'tanpaSortHarga' && kategori == 'allKategori'){
                    tampilData()
                }else if(harga == 'tanpaSortHarga' && kategori == ''){
                    tampilData()
                }else if(harga != 'tanpaSortHarga' && kategori == ''){
                    filterbyharga(harga)
                }else if(harga != 'tanpaSortHarga' && kategori == 'allKategori'){
                    filterbyharga(harga)
                }else if (harga == 'tanpaSortHarga' && kategori != 'allKategori'){
                    filterbykategori(kategori)
                }else{
                    filterbykategoriharga(kategori, harga)
                }
            })


            // function tampilDataFilter(){
            //     var haha = $('input[name="urutan"]:checked').val();
            //     var urutan = (haha==undefined?'':haha)
            //     var kategori = $(".js-example-basic-multiple").select2("val");

            //     // console.log(oke)
                
            //     if(urutan == ''){
            //         var haha = $('input[name="urutan"]:checked').val();
            //         $.ajax({
            //             type : "POST",
            //             url  : "<?php echo base_url('index.php/barang/tampilBarangTanpaHarga')?>",
            //             dataType : "JSON",
            //             data : {kategori:kategori},
            //             success: function(data){
            //                 console.log(data)
            //                 // var base_url = window.location.origin;
            //                 // var tampilan = ''
            //                 // for(i=0; i<data.length; i++){
            //                 //     tampilan += '<div class="col mb-5 detailData" data-id="'+data[i].id_barang+'">'
            //                 //     tampilan += '<div class="card h-100">'
            //                 //     tampilan += '<div style="height: 200px;  ">'
            //                 //     tampilan += '<img class="card-img-top " src="'+base_url+'/katalog/assets/images/'+data[i].gambar+'" alt="..." />'
            //                 //     tampilan += '</div>'
            //                 //     tampilan += '<div class="card-body p-4">'
            //                 //     tampilan += '<div class="text-center">'
            //                 //     tampilan += '<h5 class="fw-bolder">'+data[i].nama_barang+'</h5>'
            //                 //     tampilan += data[i].harga
            //                 //     tampilan += '</div>'
            //                 //     tampilan += '</div>'
            //                 //     tampilan += '</div>'
            //                 //     tampilan += '</div>'
            //                 // }

            //                 // $('#tampilData').html(tampilan);
                            
            //             }
            //         });
            //     }else{

            //     }
            // }


            // $('#refreshButton').click(function(){
            //     tampilDataFilter()
            // })

            // tampilDataFilter()

        });
    </script>

