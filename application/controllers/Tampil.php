<?php

class Tampil extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model(array('barangModel', 'kategoriModel', 'merkModel'));
    }    

    function index(){
        $kategori = $this->kategoriModel->get_all_data()->result();
        $merk = $this->merkModel->get_all_data()->result();
        $this->load->view('__templatePublic/header');
        $this->load->view('tampilNew', array('kategori'=>$kategori, 'merk'=>$merk));
        $this->load->view('__templatePublic/footer');
        // print_r($kategori);
    }

    function searchBykategori($kategori , $abjad){
        if($abjad == 'awal'){
            $orderAbjad = 'asc';
        }else{
            $orderAbjad = 'desc';
        }

        $query = "select a.*, b.*, c.*
        from master_barang a 
        join master_kategori b 
        on a.id_kategori = b.id_kategori
        join master_merk c
        on a.id_merk = c.id_merk  
        where a.id_kategori = '$kategori'
        order by a.nama_barang ".$orderAbjad;

        $data = $this->barangModel->searchByKategori($query)->result();
        echo json_encode($data);
    }

    function searchByHarga($harga, $abjad){
        if($harga == 'hargaTertinggi'){
            $order = 'DESC';
        }elseif($harga == 'hargaTerendah'){
            $order = 'ASC';
        }

        if($abjad == 'awal'){
            $orderAbjad = 'asc';
        }else{
            $orderAbjad = 'desc';
        }

        $query = 'select a.*, b.*, c.*
                    from master_barang a 
                    join master_kategori b 
                    on a.id_kategori = b.id_kategori
                    join master_merk c
                    on a.id_merk = c.id_merk
        order  by
        a.harga '.$order.', a.nama_barang '.$orderAbjad;
        $data = $this->barangModel->sortByHarga($query)->result();
        echo json_encode($data);
    }

    function searchByMerk($merk, $abjad){
        if($abjad == 'awal'){
            $orderAbjad = 'asc';
        }else{
            $orderAbjad = 'desc';
        }

        $query = "select a.*, b.*, c.*
        from master_barang a 
        join master_kategori b 
        on a.id_kategori = b.id_kategori
        join master_merk c
        on a.id_merk = c.id_merk  
        where a.id_merk = '$merk'
        order by a.nama_barang ".$orderAbjad;

        $data = $this->barangModel->searchByMerk($query)->result();
        echo json_encode($data);
    }

    function searchBykategoriHarga($kategori, $harga, $abjad){
        if($harga == 'hargaTertinggi'){
            $order = 'DESC';
        }elseif($harga == 'hargaTerendah'){
            $order = 'ASC';
        }

        if($abjad == 'awal'){
            $orderAbjad = 'asc';
        }else{
            $orderAbjad = 'desc';
        }

        $query = "select a.*, b.*, c.*
        from master_barang a 
        join master_kategori b 
        on a.id_kategori = b.id_kategori
        join master_merk c
        on a.id_merk = c.id_merk  
        where
        a.id_kategori = '$kategori' order by a.harga ".$order.", a.nama_barang ".$orderAbjad;

        $data = $this->barangModel->searchBykategoriHarga($query)->result();
        echo json_encode($data);
    }

    function searchByMerkHarga($merk, $harga, $abjad){
        if($harga == 'hargaTertinggi'){
            $order = 'DESC';
        }elseif($harga == 'hargaTerendah'){
            $order = 'ASC';
        }

        if($abjad == 'awal'){
            $orderAbjad = 'asc';
        }else{
            $orderAbjad = 'desc';
        }

        $query = "select a.*, b.*, c.*
        from master_barang a 
        join master_kategori b 
        on a.id_kategori = b.id_kategori
        join master_merk c
        on a.id_merk = c.id_merk  
        where
        a.id_merk = '$merk' order by a.harga ".$order.", a.nama_barang ".$orderAbjad;

        $data = $this->barangModel->searchByMerkHarga($query)->result();
        echo json_encode($data);
    }

    function searchBykategoriMerk($kategori, $merk, $abjad){
        
        if($abjad == 'awal'){
            $orderAbjad = 'asc';
        }else{
            $orderAbjad = 'desc';
        }

        $query = "select a.*, b.*, c.*
        from master_barang a 
        join master_kategori b 
        on a.id_kategori = b.id_kategori
        join master_merk c
        on a.id_merk = c.id_merk  
        where
        a.id_merk = '$merk' and a.id_kategori = '$kategori' order by  a.nama_barang ".$orderAbjad;

        $data = $this->barangModel->searchByKategoriMerk($query)->result();
        echo json_encode($data);
    }

    function searchBykategorihargaMerk($kategori, $merk, $harga, $abjad){
        if($harga == 'hargaTertinggi'){
            $order = 'DESC';
        }elseif($harga == 'hargaTerendah'){
            $order = 'ASC';
        }

        if($abjad == 'awal'){
            $orderAbjad = 'asc';
        }else{
            $orderAbjad = 'desc';
        }

        $query = "select a.*, b.*, c.*
        from master_barang a 
        join master_kategori b 
        on a.id_kategori = b.id_kategori
        join master_merk c
        on a.id_merk = c.id_merk  
        where
        a.id_merk = '$merk' and a.id_kategori = '$kategori' order by a.harga ".$order.", a.nama_barang ".$orderAbjad;

        $data = $this->barangModel->searchBykategorihargaMerk($query)->result();
        echo json_encode($data);
    }


    function detailbarang($id){
        $query = "select a.*, b.*, c.*
        from master_barang a 
        join master_kategori b 
        on a.id_kategori = b.id_kategori
        join master_merk c
        on a.id_merk = c.id_merk  
        where id_barang = '$id'
        ";
        $barang = $this->barangModel->getBarangKategori($query)->row();
        // $barang = $this->barangModel->getBarangKategori($id)->row();
        echo json_encode($barang);
    }


    function tampilAllbarang($abjad){

        if($abjad == 'awal'){
            $order = 'asc';
        }else{
            $order = 'desc';
        }

        $query = 'select a.*, b.*, c.*
            from master_barang a 
            join master_kategori b 
            on a.id_kategori = b.id_kategori
            join master_merk c
            on a.id_merk = c.id_merk
            order by a.nama_barang '.$order;

        $data = $this->barangModel->tampilDataAll($query)->result();

        echo json_encode($data);
    }


}