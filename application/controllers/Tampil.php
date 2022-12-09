<?php

class Tampil extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model(array('barangModel', 'kategoriModel'));
    }    

    function index(){
        $kategori = $this->kategoriModel->get_all_data()->result();
        $this->load->view('__templatePublic/header');
        $this->load->view('tampilNew', array('kategori'=>$kategori));
        $this->load->view('__templatePublic/footer');
        // print_r($kategori);
    }

    function searchBykategori($id){
        $data = $this->barangModel->searchByKategori($id)->result();
        echo json_encode($data);
    }

    function searchByHarga($harga){
        if($harga == 'hargaTertinggi'){
            $order = 'DESC';
        }elseif($harga == 'hargaTerendah'){
            $order = 'ASC';
        }
        $query = 'select * from master_barang  order by harga '.$order;
        $data = $this->barangModel->sortByHarga($query)->result();
        echo json_encode($data);
    }

    function searchBykategoriHarga($kategori, $harga){
        if($harga == 'hargaTertinggi'){
            $order = 'DESC';
        }elseif($harga == 'hargaTerendah'){
            $order = 'ASC';
        }
        $query = "select * from master_barang where id_kategori = '$kategori' order by harga ".$order;

        $data = $this->barangModel->searchBykategoriHarga($query)->result();
        echo json_encode($data);
    }


}