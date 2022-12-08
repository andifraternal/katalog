
        <!-- <header class="bg-dark py-5"> -->
            <!-- <div class="container px-4 px-lg-5 my-5"> -->
                <!-- <div class="text-center text-white"> -->
                    <!-- <h1 class="display-4 fw-bolder">style</h1> -->
                    <!-- <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p> -->
                <!-- </div> -->
            <!-- </div> -->
        <!-- </header> -->
        <!-- Section-->
        <section class="py-1">
            <div class="container px-4 px-lg-5 mt-5"  style="min-height:750px;">
                <div style="margin-bottom:10px">
                    <div class="btn-group">
                        <input type="radio" class="btn-check" name="urutan" id="option1" value="tertinggi" autocomplete="off" />
                        <label class="btn btn-secondary" for="option1"><i class="bi bi-arrow-up-short">Harga Tertinggi</i></label>

                        <input type="radio" class="btn-check" name="urutan" id="option2" value="terendah" autocomplete="off" />
                        <label class="btn btn-secondary" for="option2"><i class="bi bi-arrow-down-short">Harga terendah</i></label>
                    </div>
                    <select class="js-example-basic-multiple" name="kategori[]" multiple="multiple" style="width:25%">
                        <?php
                            foreach ($kategori as $datakategori) {
                                echo '<option value="'.$datakategori->id_kategori.'">'.$datakategori->nama_kategori.'</option>';
                            }
                        ?>
                    </select>
                    <button type="button" id="refreshButton" class="btn btn-primary">Refresh</button>
                </div>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" id="tampilData">
                    
                    
                    
                    
                </div>
            </div>
        </section>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script><!-- jQuery base library needed -->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url() ?>assets/template/js/scripts.js"></script>
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
                        var base_url = window.location.origin;
                        var tampilan = ''
                        for(i=0; i<data.length; i++){
                            tampilan += '<div class="col mb-5 detailData" data-id="'+data[i].id_barang+'">'
                            tampilan += '<div class="card h-100">'
                            tampilan += '<div style="height: 200px;  ">'
                            tampilan += '<img class="card-img-top " src="'+base_url+'/katalog/assets/images/'+data[i].gambar+'" alt="..." />'
                            tampilan += '</div>'
                            tampilan += '<div class="card-body p-4">'
                            tampilan += '<div class="text-center">'
                            tampilan += '<h5 class="fw-bolder">'+data[i].nama_barang+'</h5>'
                            tampilan += data[i].harga
                            tampilan += '</div>'
                            tampilan += '</div>'
                            tampilan += '</div>'
                            tampilan += '</div>'
                        }

                        $('#tampilData').html(tampilan);
                        
                    }
                });
            }

            // load dat awal
            tampilData();


            function tampilDataFilter(){
                var haha = $('input[name="urutan"]:checked').val();
                var urutan = (haha==undefined?'':haha)
                var kategori = $(".js-example-basic-multiple").select2("val");

                // console.log(oke)
                
                if(urutan == ''){
                    var haha = $('input[name="urutan"]:checked').val();
                    $.ajax({
                        type : "POST",
                        url  : "<?php echo base_url('index.php/barang/tampilBarangTanpaHarga')?>",
                        dataType : "JSON",
                        data : {kategori:kategori},
                        success: function(data){
                            console.log(data)
                            // var base_url = window.location.origin;
                            // var tampilan = ''
                            // for(i=0; i<data.length; i++){
                            //     tampilan += '<div class="col mb-5 detailData" data-id="'+data[i].id_barang+'">'
                            //     tampilan += '<div class="card h-100">'
                            //     tampilan += '<div style="height: 200px;  ">'
                            //     tampilan += '<img class="card-img-top " src="'+base_url+'/katalog/assets/images/'+data[i].gambar+'" alt="..." />'
                            //     tampilan += '</div>'
                            //     tampilan += '<div class="card-body p-4">'
                            //     tampilan += '<div class="text-center">'
                            //     tampilan += '<h5 class="fw-bolder">'+data[i].nama_barang+'</h5>'
                            //     tampilan += data[i].harga
                            //     tampilan += '</div>'
                            //     tampilan += '</div>'
                            //     tampilan += '</div>'
                            //     tampilan += '</div>'
                            // }

                            // $('#tampilData').html(tampilan);
                            
                        }
                    });
                }else{

                }
            }


            $('#refreshButton').click(function(){
                tampilDataFilter()
            })

            // tampilDataFilter()

        });
    </script>


